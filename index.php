<?php
    $action = $_GET['action'];

    require_once('./controllers/controllers_magazine.php');

    $postController = new PostController();
    $postController->getPost();
    if ($action == 'list') {
        $postController->getPost();
    }
    if($action == 'add'){
        $postController->addPost();
    }
    if ($action == 'doAdd') {
        $postController->doAdd();
    }

    
    
?>