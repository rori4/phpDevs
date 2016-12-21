<?php

class UsersController extends BaseController
{
    public function index()
    {
        $this->authorize();
        $this->users = $this->model->getAll();
    }

    public function register()
    {
		if ($this->isPost)
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $full_name = $_POST['full_name'];
            $user_role = $_POST['user_role'];

            $errors = false;

            if (strlen($username) <=1)
            {
                $this->addErrorMessage("Username is invalid!");
                $errors = true;
            }

            if (strlen($password) <=1)
            {
                $this->addErrorMessage("Password is invalid!");
                $errors = true;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->addErrorMessage("Invalid email format");
                $errors = true;
            }

            if ($password != $password_confirm)
            {
                $this->addErrorMessage("Passwords do not match!");
                $errors = true;
                return;
            }

            if (strlen($full_name) <= 1)
            {
                $this->addErrorMessage("Invalid name!");
                $errors = true;
                return;
            }

            if (! $errors){
                $userId = $this->model->register($username,$email,$password,$full_name, $user_role);
                $userRole = $this->model->checkUserRole($username,$password);
                if ($userId){
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $userId;
                    $_SESSION['user_role'] = $userRole;
                    $this->addInfoMessage("Registration successful.");
                    $this->redirect("");
                } else {
                    $this->addErrorMessage("Error: registration failed");
                }
            }

        }
    }

    public function login()
    {
        if ($this->isPost)
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userId = $this->model->login($username,$password);
            $userRole = $this->model->checkUserRole($username,$password);
            if ($userId != false){
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $userId;
                $_SESSION['user_role'] = $userRole;
                $this->addInfoMessage("Login successful.");
                $this->redirect("");
            } else {
                $this->addErrorMessage("Error: login failed.");
            }
        }
    }

    public function logout()
    {
		session_destroy();
		$this->redirect("");
    }

    function delete(int $id){
        $this->isAdmin();
        if ($this->isPost){
            //HTTP POST
            //Delete the requested post by id and show info
            if ($this->model->delete($id)){
                $this->addInfoMessage("User deleted.");
            } else {
                $this->addErrorMessage("Error: cannot delete user.");
            }
            $this->redirect('users');
        } else {
            //HTTP GET
            //Show "confirm delete form"
            $user = $this->model->getUserById($id);
            if (!$user){
                $this->addErrorMessage("Error: user does not exist,");
                $this->redirect('user');
            }
            $this->user = $user;
        }
    }

    function edit(int $id){
        $this->isAdmin();
        if ($this->isPost){
            //HTTP POST
            //Edit the requested user by id and show info
            $username = $_POST['username'];
            if (strlen($username) < 1){
                $this->setValidationError("username","Username cannot be empty!");
            }
            $full_name = $_POST['full_name'];
            if (strlen($full_name) < 1){
                $this->setValidationError("full_name","Username cannot be empty!");
            }
            $user_role = $_POST['user_role'];
            $user_id = $_POST['user_id'];
            if ($this->formValid()){
                if ($this->model->edit($username,$full_name,$user_role, $user_id)){
                    $this->addInfoMessage("User edited.");
                } else {
                    $this->addErrorMessage("Error: cannot edit user.");
                }
                $this->redirect('users');
            }
        }
        //HTTP GET
        //Show "confirm delete form"
        $user = $this->model->getUserById($id);
        if (!$user){
            $this->addErrorMessage("Error: user does not exist,");
            $this->redirect('user');
        }
        $this->user = $user;

    }

    public function forgotten()
    {
        if ($this->isPost)
        {
            $email = $_POST['email'];

            $count = count($this->model->checkEmail($email));

            if ($count != 0){
                // generate new password
                $random = rand(72891, 92729);
                $new_password = $random;

                //copy of new password
                $email_password = $new_password;

                $new_password = password_hash($new_password,PASSWORD_DEFAULT);

                $this->model->forgottenPassChange($new_password,$email);

                //Email details
                $subject = "Changed Password";
                $message = "Your account password has been changed to " . $email_password;
                $from = "From: admin@phpDevs.tk";

                if (mail($email,$subject,$message,$from)){
                    $this->addInfoMessage("Your new password has been sent to " .$email);
                    $this->redirect('');
                } else {
                    $this->addErrorMessage("This email does not exist");
                    $this->redirect('');
                }

            }

        }
    }

}
