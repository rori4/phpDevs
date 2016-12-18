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
        $post = $this->model->getPostById($id);
        if (!$post)
        {
            $this->addErrorMessage("Error: invalid post id");
            $this->redirect("");
        }
        $this->post = $post;
        //$this->nav = $this->model->getAllPosts();

        if ($this->isPost) {
            $comment = $_POST['post_comment'];

            if (strlen($comment) < 1) {
                $this->addErrorMessage("Comment cannot be empty!");
            }

            if ($this->formValid()) {
                $user_id = $_SESSION['user_id'];
                $post_id = $_POST['post_id'];
                if ($this->model->addComment($comment, $user_id, $post_id)) {
                    $this->addInfoMessage("Comment posted.");
                } else {
                    $this->addErrorMessage("Error: cannot post comment.");
                }
            }
        }
        $post_id = $id;
        $comment = $this->model->getPostComments($post_id);
        $this->comment = $comment;
        // TODO: add comments function
    }
}
