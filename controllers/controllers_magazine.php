<?php
    class PostController{
        public function getPost(){
            require_once('./models/models_magazine.php');
            $postModel = new PostModels();
            $posts = $postModel->getPost();
            
            require_once('./views/views_magazine.php');
            $postView = new PostView();
            $postView->showAllPost($posts);
        }
        public function addPost(){
            require_once('./views/views_magazine.php');
            $postView = new PostView();
            $postView->formAddPost();
        }
        public function doAdd(){
            $title = $_POST['title'];
            $content = $_POST['content'];
            $time = $_POST['time'];
            $img = $_POST['img'];
            $tag = $_POST['tag'];
            
            $post = array(
                'title' => $title,
                'content' => $content,
                'time' => $time,
                'img' => $img,
                'tag' => $tag
            );

            require_once('./models/models_magazine.php');
            $postModel = new PostModels();
            $status = $postModel->addPost($post);

            require_once('./views/views_magazine.php');
            $postView = new PostView();
            $postView->notifyAddPost($status);
        }
    }
?>