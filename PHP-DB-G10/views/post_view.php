<div class="container">
    <!-- Your code here -->
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-30">
                <div class="profile">
                        <img src="../images/cher rady.jpg" alt="profile" class="image-profile" width="8%">
                        <button class="button"><a href="../index1.php?pages=create_view" class = "text-secondary text-decoration-none">What's on your mind ?</a></button>
                </div>
                <hr>
                <div class="post-photo">
                    <div>
                        <a href="../index1.php?pages=create_view" class = "text-secondary text-decoration-none">
                            <i class="fas fa-photo-video fa-2x" style="color:rgb(8, 236, 0)"></i>
                            <span>Photos/Video</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php 
                    require_once("./models/post.php");
                    require_once("./models/comment.php");
                    $users = getuser();
                    $posts = getPost();
                    foreach ($posts as $post ):     
                        $comments = countComment($post['post_id']);                    
                ?>
            <div class="card shadow-sm p-3 mb-5 bg-white rounded-30">
                <div class="card-head d-flex justify-content-between">
                    <div class="profile p-2">
                    <img src="../images/cher rady.jpg" alt="profile" class="image-profile" width="8%">
                            <strong class="p-2 profile_name"><?= $users['first_name']; ?></strong>
                            <strong class=" profile_name"><?= $users['last_name']; ?></strong>
                            <hr>
                            <?php date_default_timezone_set('Asia/Phnom_Penh'); ?>
                            <span><?= $post['post_date'] = date("F j, Y, g:i a");?></span>
                    </div>
                    <div class="dropdown">
                        <i class="fa fa-ellipsis-h" data-bs-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li><a  href="?pages=edit_view&post_id=<?php echo $post['post_id'] ?> " class="dropdown-item">Edit post</a></li>
                            <li><a href="../controllers/delete_controller.php?id=<?php echo $post['post_id'];?>" class="dropdown-item" >Delete post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="description">
                        <p><?= $post['Description']; ?></p>
                    </div>
                    <img src="../uploads/<?= $post['image']; ?>" alt="image" class="img-fluid"  >
                </div>
                <?php 
                        require_once('./models/like.php');
                        $likes = getLike();
                        $numberOflike = 0;
                        foreach($likes as $like){
                            if($like['Post_id'] == $post['post_id']){
                                $numberOflike++;
                            }
                        }
                ?>
                <div class="like-comment d-flex justify-content-between">
                    <p class="like" style="font-size: 23px;"><?php echo $numberOflike ?>  likes</p>
                    <p class="like" style="font-size: 23px;"><?php echo $comments['Number_of_comment'] ?>  comments</p>
                </div>
                <div class="card-footer d-flex justify-content-evenly text-center">
                    <div>
                        <i class="far fa-thumbs-up fa-2x focus"></i>
                            <span >
                                <a class="text-decoration-none text-black "  href="../controllers/like_controller.php?post_id=<?= $post['post_id']?>" style="font-size: 19px;">
                                     <label for="like" class=" focus">Like</label>
                                </a>
                            </span> 
                        </div> 
                    <div class="comment-group col-5" style="cursor: pointer;">  
                        <i class="far fa-comment-alt fa-2x focus"></i>
                        <span >
                            <a class="text-decoration-none text-black "  href="../index1.php?pages=comment_view&post_id=<?= $post['post_id']?>" style="font-size: 19px;">
                                <label for="comment"  class=" focus">Comment</label>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <?php
                endforeach;
            ?>
            <div class="col-3">
            </div>
        </div>
    </div>
</div>
