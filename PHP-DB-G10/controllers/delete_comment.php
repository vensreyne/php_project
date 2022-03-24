<?php
    require_once("../models/comment.php");
    require_once("../models/post.php");
// Delete comment on post
$id = $_GET['id'];
$deleteCommentSucess = deleteComment($id);
if($deleteCommentSucess){
    header('location: /index1.php');
}else{
   echo "Can't delete comment with id";

}