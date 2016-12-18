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
    }
}
