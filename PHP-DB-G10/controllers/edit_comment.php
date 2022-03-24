


<?php
    require_once("../models/comment.php");
    
// Edit comment on post




$comment_id = $_GET['commentId'];

$comment=$_GET['comment'];

updateCmt($comment_id, $comment);

header('location: /index1.php');

 header('location: /index1.php');

?>


