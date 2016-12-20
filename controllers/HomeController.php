<?php

class HomeController extends BaseController
{
    function index()
    {
        $latestPosts = $this->model->getLatestPosts(5);
        $this->postsSidebar = $latestPosts;

        $allPosts = $this->model->getAll();

        $this->pageNumbers = $this->Paginate($allPosts,5); // 5 posts per page
        $this->resultPosts = $this->fetchPaginationResults();

//        $data = array("Hey","Hello", "awesome");
//        $numbers = $pag->Paginate($data,1);
//
//        $results = $pag->fetchResults();
//
//        foreach ($results as $r)
//        {
//            echo '<div>'.$r.'</div>';
//        }
//
//        foreach ($numbers as $num)
//        {
//            echo  '<a href="Pagination.php?page='.$num.'">'.$num.'</a>';
//        }
    }
	
	function view($id)
    {
        $user_id = $_SESSION['user_id'];
        $post = $this->model->getPostById($id, $user_id);
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
                $this->setValidationError("post_comment","Comment cannot be empty!");
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
