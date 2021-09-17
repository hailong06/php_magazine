<?php
    class PostView{
        public function showAllPost($posts){
            require_once('./templates/posts.php');
        }

        public function formAddPost(){
            require_once('./templates/formAddPost.php');
        }
        public function notifyAddPost($status){
            if ($status) {
                echo 'THêm thành công, ấn đây để quay lại, <a href="http://localhost/magazine_mvc/?action=list">ấn đây để quay lại</a>';
            }else{
                echo ' Hỏng';
            }
        }
    }
?>