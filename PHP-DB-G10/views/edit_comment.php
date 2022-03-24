

<?php
//    require_once('./models/post.php');
   require_once('./models/comment.php');
   
//    $post_id = $_GET['post_id'];
//    $post = getDataId($post_id);
   $cmt_id = $_GET['comment_id'];
   $comment = getcmtId($cmt_id);

?>
<form action="../controllers/edit_comment.php" method="GET">
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
                        
                        <div class="card-body">
                            <!-- Display comment -->
                            <div class="card shadow p-3 mb-5 bg-white ">
                                <div class="card-comment card-header rounded-pill">
                                    <div class="profile p-2">
                                        <img src="../images/cher rady.jpg" alt="profile" class="image-profile" width="6%">
                                        <span class="p-10 profile_name">Rady Y</span>
                                    </div>
                                    
                                </div>
                                <div class="p-2"> 
                                    <p> Comment : <input type="text" class="form-control p-3 comment" name="comment" value="<?php echo $comment['comment'] ?>" placeholder="Change Comment">
                                    </p>
                                    
                                </div> 
                            </div>
                        </div>
                            <!-- Add comment -->
                            <form action="../controllers/edit_comment.php" class="form-comment p-3" method="GET">
                                
                                <input type="hidden" value="<?php echo $comment['comment_id'];?>" name="commentId">
                                <!-- //<input type="text" class="form-control p-3 comment" name="comment" value="<?php //echo $comment['comment'] ?>" placeholder="Change Comment"> -->
                                <button type="submit" name="submit-comment" class="btn btn-primary mt-3">Change</button>
                            </form>                      
                    </div>
                <div class="col-3">
                </div>
            </div>
        </div>
    </form>