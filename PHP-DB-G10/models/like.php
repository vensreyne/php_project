<?php
require_once("database.php");
//  Get like
    function getLike(){
        global $db;
        $statement = $db -> query("SELECT * FROM likes");
        $like = $statement -> fetchAll();

        return $like;
    }

    function likeOnpost($post_id,$user_id){
        global $db;
        $statement = $db->prepare("INSERT INTO likes(Post_id,user_id) VALUES (:post_id,:user_id)");
        $statement->execute([
            ':post_id' => $post_id,
            ':user_id' => $user_id
        ]);

        return ($statement->rowCount()==1);
    }
?>






