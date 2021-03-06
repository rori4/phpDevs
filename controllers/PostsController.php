<?php

class PostsController extends BaseController
{
    function onInit()
    {
        $this->authorize();
    }

    function index()
    {
        $userId = $_SESSION['user_id'];
        $userRole = $_SESSION['user_role'];

        if ($userRole == 'admin')
        {
            $this->posts = $this->model->getAll();
        }
        else if (empty($this->model->showUserPosts($userId)))
        {
            $this->addInfoMessage("You don't have any posts yet!");
            $this->posts = $this->model->showUserPosts($userId);
        }
        else
        {
            $this->posts = $this->model->showUserPosts($userId);
        }
    }

    function create()
    {
        if ($this->isPost){
            $title = $_POST['post_title'];

            if (strlen($title) < 1)
            {
                $this->setValidationError("post_title","Title cannot be empty!");
            }

            $content = $_POST['post_content'];

            if (strlen($content) < 1)
            {
                $this->setValidationError("post_content", "Content cannot be empty!");
            }
            //---------------------------------
            // TODO: upload an image
            //---------------------------------

            if ($this->formValid())
            {
                $userId = $_SESSION['user_id'];
                if ($this->model->create($title, $content, $userId)){
                    $this->addInfoMessage("Post created.");
                    $this->redirect("posts");
                } else {
                    $this->addErrorMessage("Error: cannot create post.");
                }
            }
        }
    }

    function delete(int $id){
        if ($this->isPost){
            //HTTP POST
            //Delete the requested post by id and show info
            if ($this->model->delete($id)){
                $this->addInfoMessage("Post deleted.");
            } else {
                $this->addErrorMessage("Error: cannot delete post.");
            }
            $this->redirect('posts');
        } else {
            //HTTP GET
            //Show "confirm delete form"
            $post = $this->model->getPostById($id);
            if (!$post){
                $this->addErrorMessage("Error: post does not exist");
                $this->redirect('posts');
            }
            $this->post = $post;
        }
    }

    function edit(int $id){
        $this->authors = $this->model->allAuthors();
        $userPosts = $this->model->showUserPosts($_SESSION['user_id']);
        $userPostsIds = array_column($userPosts, 'id');

        if (!(in_array($id,$userPostsIds) or $this->isAdmin)){
            $this->addErrorMessage("Error: Only for admins! GET OUT!");
            $this->redirect('posts');
        }

        if ($this->isPost) {
            //HTTP POST
            $title = $_POST['post_title'];
            if (strlen($title) < 1) {
                $this->setValidationError("post_title", "Title cannot be empty!");
            }
            $content = $_POST['post_content'];
            if (strlen($content) < 1) {
                $this->setValidationError("content", "Content cannot be empty!");
            }
            $date = $_POST['post_date'];
            $dateRegex = '/^\d{2,4}-\d{1,2}-\d{1,2}( \d{1,2}:\d{1,2}(:\d{1,2})?)?$/';
            if (!preg_match($dateRegex, $date)) {
                $this->setValidationError("post_date", "Invalid date!");
            }
            $user_id = $_POST['post_author'];

            if ($user_id <= 0 || $user_id > 1000000) {
                $this->setValidationError("user_id", "Invalid author user ID!");
            }
            if ($this->formValid()) {
                if ($this->model->edit($id, $title, $content, $date, $user_id)) {
                    $this->addInfoMessage("Post edited.");
                } else {
                    $this->addErrorMessage("Error: cannot edit post.");
                }
                $this->redirect('posts');
            }

        }
        //HTTP GET
        //Show "confirm delete form"
        $post = $this->model->getPostById($id);
        if (!$post) {
            $this->addErrorMessage("Error: post does not exist,");
            $this->redirect('posts');
        }
        $this->post = $post;

        $this->id = $id;
        $this->canEdit = $this->model->canEdit($_SESSION['user_id']);
    }
}
