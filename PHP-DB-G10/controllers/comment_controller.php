<?php
    require_once("../models/comment.php");

    $comment_desc = $_GET['comment_desc'];
    $post_id = $_GET['post_id'];
    createComments($comment_desc,$post_id);

    header('location:/index1.php');
?>