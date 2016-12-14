<?php

class PostsController extends BaseController
{
    function index()
    {
        $posts = $this->model->getAll();
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
    }
}
