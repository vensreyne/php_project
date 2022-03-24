<?php
    require_once ('./models/post.php');
?>
<?php
        $post_id = $_GET['post_id'];
        $post=getDataId($post_id);
    
?>
<form action="../controllers/edit_controller.php" method="POST" enctype="multipart/form-data" >
    <div class="container container-create">
            <div class="row">
                <div class="col-3">
                </div>
                    <div class="col-6">
                        <div class="card shadow-sm p-3 mb-5 bg-white rounded-30">
                                <input type="hidden" value="<?php echo $post['post_id']; ?>" name="postId">
                             <div class="card-body">
                                    <div class="mb-3">
                                        <h3 for="DescriptionTextarea1" class="form-label">Change Description ?</h3>
                                        <textarea class="form-control" id="Textarea1" rows="3" name="description"><?php echo $post['description']; ?></textarea>
                                    </div>
                                    <img src="../uploads/<?= $post['image']; ?>" alt="image" class="img-fluid"  id="new-image" >
                                    <div class="custom-file">
                                        <label for="">Change your photo...</label>
                                        <label class="btn btn-outline-primary m-1" for="files" >change photo</label>
                                        <input type="file" onChange=loadFile(event) name="file_name" id="files" style="display:none">
                                    </div>
                                </div>
                                <div class="card-footer footer-post">
                                    <button type="submit" name="change" class="btn btn-primary">Change</button>                                   
                                </div>
                            </div>
                        </div>
                    <div class="col-3">
                    </div>
                </div>
            </div>
        </form>
        <script>
            var loadFile = function(event) {
                var image = document.getElementById('new-image');
                image.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>
