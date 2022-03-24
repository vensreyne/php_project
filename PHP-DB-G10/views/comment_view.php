<?php
   require_once('./models/post.php');
   require_once('./models/comment.php');
   $post_id = $_GET['post_id'];
   $post = getDataId($post_id);
?>
<form action="../controllers/comment_controller.php" method="GET">
    <div class="container container-create">
        <div class="row">
                <div class="col-3">
                </div>
                <div class="col-6">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-30">
                        <div class="card-header-create">
                            <div class="profile p-2">
                                    <img src="../images/cher rady.jpg" alt="profile" class="image-profile" width="8%">
                                    <strong class="p-2 profile_name">Rady Y</strong>
                            </div>
                        </div>
                        <?php 
                            require_once('./models/comment.php');
                            $comments = getComments($post_id);
                            foreach($comments as $comment):
                        ?>
                        <div class="card-body">
                            <!-- Display comment -->
                            <div class="card shadow p-3 mb-5 bg-white ">
                                <div class="card-comment card-header rounded-pill">
                                    <div class="profile p-2">
                                        <img src="../images/cher rady.jpg" alt="profile" class="image-profile" width="6%">
                                        <span class="p-10 profile_name">Rady Y</span>
                                    </div>
                                    <div class="dropdown">
                                            <i class="fa fa-ellipsis-h" data-bs-toggle="dropdown">
                                            </i>
                                            <ul class="dropdown-menu">
                                            <li><a  href="?pages=edit_comment&comment_id=<?php echo $comment['comment_id']; ?> " class="dropdown-item">Edit comment</a></li>
                                            <li><a href="../controllers/delete_comment.php?id=<?php echo $comment['comment_id'];?>" class="dropdown-item" >Delete comment</a></li>
                                    </div>
                                </div>
                                <div class="p-2"> 
                                    <p> Comment : <?php  echo $comment['comment'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                            endforeach;
                        ?>
                            <!-- Add comment -->
                            <form action="../controllers/comment_controller.php" class="form-comment p-3" method="GET">
                                <input type="text" class="form-control p-3 comment" name="comment_desc" placeholder="Add comment ...">
                                <input type="hidden" value="<?php echo $post['post_id'];?>" name="post_id">
                                <button type="submit" name="submit-comment" class="btn btn-primary mt-3">Add comment</button>
                            </form>                      
                    </div>
                <div class="col-3">
                </div>
            </div>
        </div>
    </form>