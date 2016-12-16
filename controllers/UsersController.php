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
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $full_name = $_POST['full_name'];

            if (strlen($username) <=1)
            {
                $this->setValidationError("username","Username is invalid!");
            }

            if (strlen($password) <=1)
            {
                $this->setValidationError("password","Password is invalid!");
            }

            if ($password != $password_confirm)
            {
                $this->setValidationError("password_confirm","Passwords do not match!");
                return;
            }

            if (strlen($full_name) <= 1)
            {
                $this->setValidationError("full_name","Invalid name!");
                return;
            }

            if ($this->formValid()){
                $userId = $this->model->register($username,$password,$full_name);
                if ($userId){
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $userId;
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
            if ($userId != false){
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $userId;
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
}
