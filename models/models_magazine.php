<?php
require_once('./models/model_db.php');
    class PostModels extends db_model{
        
        public function getPost(){
            
            $conn = $this->connect();
            $result = $conn->query("Select * from mvc_post");
            $posts = array();
            if($result->num_rows > 0){
                while($post = mysqli_fetch_assoc($result)){
                    $posts[] = $post;
                }
            }
            return $posts;
        }

        public function addPost($post){
            $conn = $this->connect();
            $time = date('Y-m-d H:i:s');
            $sql = "INSERT INTO `mvc_post` (`id`, `title`, `content`, `time`, `img`, `tag`) VALUES (NULL, '" . $post['title'] . "', ' " . $post['content'] . " ', ' " . $post['time'] . " ', ' " . $post['img'] . " ', ' " . $post['tag'] . " ');";
            $rs = $conn->query($sql);
            return $rs;
        }
    }
?>