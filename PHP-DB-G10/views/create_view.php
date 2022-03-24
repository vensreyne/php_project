<?php
   require_once('./models/post.php');

?>
<form action="../controllers/create_controller.php" enctype="multipart/form-data" method="post">
    <div class="container container-create">
        <div class="row">
                <div class="col-3">
                </div>
                <div class="col-6">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-30">
                        <div class="card-head-create">
                            <div class="profile p-2">
                                    <img src="../images/cher rady.jpg" alt="profile" class="image-profile" width="8%">
                                    <strong class="p-2 profile_name">Rady Y</strong>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h3 for="exampleFormControlTextarea1" class="form-label">What's on your mind ?</h3>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                                <img src="../uploads/<?= $post['image']; ?>" alt="image" class="img-fluid"  id="choose-image" >
                            <div class="custom-file">
                                <label for="">Add your photos ...</label>
                                <label class="btn btn-outline-primary m-1" for="files" >Choose photo</label>
                                <input type="file" onChange=loadFile(event) name="file_name" id="files" style="display:none">
                            </div>
                        </div>
                        <div class="card-footer footer-post">
                            <button type="submit" name="post" class="btn btn-primary">Post</button>
                            <a href="/index1.php?pages=index1" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                    <div class="col-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('choose-image');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>