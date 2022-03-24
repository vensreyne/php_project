
<?php
require_once("database.php");
// get user from databases

function getuser() {
    global $db;
    $statement = $db -> query("SELECT * from users");
    $users = $statement -> fetch();
    return $users;
}
//get post from databases
function getPost() {
    global $db;
    $statement = $db -> query("SELECT post_id,Description,image,user_id, post_date from posts order by post_id desc");
    $posts = $statement -> fetchAll();
    return $posts;
}
// get data from create 
function createPost($post_description, $file_name){

    $target = "../uploads/".$_FILES['file_name']['name'];
    move_uploaded_file($_FILES['file_name']['tmp_name'],$target);

    global $db;

    $statement=$db->prepare("INSERT INTO posts(description, image) VALUES (:post_desc,:image)");
    $statement->execute([
        ':post_desc'=>$post_description,
        ':image'=>$file_name
    ]);
    return $statement->rowCount()==1;
}
//delete posts
function deletePost($id)
{
    global $db;
    $statement=$db->prepare("DELETE FROM posts WHERE post_id=:post_id");
    $statement->execute([
        ':post_id' => $id,
    ]);
    return ($statement->rowCount()==1);
}

// function get data by ID

function getDataId($post_id)
{
    global $db;
    $statement=$db -> prepare("SELECT post_id, description, image FROM posts WHERE post_id=:post_id;");
    $statement -> execute([
        ':post_id' => $post_id
    ]);
    $post = $statement->fetch();
    return $post;
    
}

//function to update Post

function updatePosts($post_id, $description, $file_name)
{

    $target = "../uploads/".$_FILES['file_name']['name'];
    move_uploaded_file($_FILES['file_name']['tmp_name'],$target);
    
    global $db;
    $statement = $db->prepare("update  posts set description=:description, image=:image WHERE post_id=:post_id");
    $statement->execute([
        ':description' => $description,
        ':image' => $file_name,
        ':post_id' => $post_id

    ]);
}

//function use for update post without udate img
function updatePost($post_id, $description)
{
    


    global $db;
    $statement = $db->prepare("update  posts set description=:description WHERE post_id=:post_id");
    $statement->execute([
        ':description' => $description,
        ':post_id' => $post_id

    ]);
}

?>