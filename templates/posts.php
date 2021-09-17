<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List post</title>
    
</head>
<body>
    <?php foreach ($posts as $post): ?>
        <div class='item_post'>
            <img class='img' src="<?php echo $post['img'] ?>" alt="">
            <h2 class='title'><?php echo $post['title'] ?></h2>
            <div class='content'><?php echo $post['content'] ?></div>

            <div class='time'><?php echo $post['time'] ?></div>
            <div class='tag'><?php echo $post['tag'] ?></div>
            <div class="clear"></div>
        </div>

    <?php endforeach ?>
    <style>
        .clear{
            clear: both;
        }
        .item_post{
            clear: both;
            padding: 10px;
            width: 800px;
        }
        .img{
            width: 250px;
            float: left;
            
            margin-right:  15px;
            height: auto;
        }
        .time{
            float: left;
            margin-right: 5px;
        }
        .title{
            margin: 10px;
        }
    </style>
</body>
</html>