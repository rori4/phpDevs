<?php

class HomeController extends BaseController
{
    function index()
    {
        $posts = $this->model->getLatestPosts(5);
        $this->posts = array_slice($posts,0,5);
        $this->postsSidebar = $posts;
    }
	
	function view($id)
    {
        $post_id = $this->model->getPostById($id);
        if (!$post_id)
        {
            $this->addErrorMessage("Error: invalid post id");
            $this->redirect("");
        }
        $this->post = $post_id;
        //$this->nav = $this->model->getAllPosts();

        $comments = $this->model->getPostComments($id);
        $this->comments = $comments;

        if ($this->isPost) {
            $comment = $_POST['post_comment'];

            if (strlen($comment) < 1) {
                $this->addErrorMessage("Comment cannot be empty!");
            }

            //---------------------------------
            // TODO: upload an image
            //---------------------------------

            if ($this->formValid()) {
                $userId = $_SESSION['user_id'];
                if ($this->model->create($title, $content, $userId)) {
                    $this->addInfoMessage("Post created.");
                    $this->redirect("posts");
                } else {
                    $this->addErrorMessage("Error: cannot create post.");
                }
            }
        }
        // TODO: add comments function
    }
}
