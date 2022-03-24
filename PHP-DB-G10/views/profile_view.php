<?php
    require_once('./models/post.php');
?>
<?php
    $users = getuser();
?>
<form action="" method="post">
<div class="container container-profile">
    <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
                <div class="card shadow-sm p-3 mb-5 bg-white rounded-30">
                    <div class="card-head-profile">
                        <div class="cover">
                        </div>
                        <div style="text-align:center;">
                            <img src="../images/cher rady.jpg" alt="image" class="rounded-circle image-profile "  id="New-profile" width="50%" style="margin-top:-130px">
                            <div>
                                <h3>
                                    <strong class="p-2 profile_name"><?= $users['first_name']; ?></strong>
                                    <strong class=" profile_name"><?= $users['last_name']; ?></strong>
                                </h3>
                            </div>
                            <div class="custom-file">
                                <label class="btn btn-primary m-1" for="files" >New profile</label>
                                <input type="file" onChange=loadFile(event) name="file_name" id="files" style="display:none">
                            </div>
                        </div>
                    <div class="card-body mb-10">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-10" style="margin-top:30px;">
                    <div class="card-head-info" >
                        <h3 style="text-align:center;">Your information</h3>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="p-2">
                                <i class="fas fa-briefcase "></i>
                                <span><?= $users['job']; ?></span>
                            </div>
                            <div class="p-2">
                                <i class="fas fa-graduation-cap "></i>
                                <label><?= $users['education']; ?></label>
                            </div>
                            <div class="p-2">
                                <i class="fas fa-home "></i>
                                <label><?= $users['location']; ?></label>
                            </div>
                            <div class="p-2">
                                <i class="fas fa-heart "></i>
                                <label><?= $users['relationship']; ?></label>
                            </div>
                            <div class="p-2">
                                <i class="fas fa-map-marker-alt "></i>
                                <label><?=$users['birth_place'] ?></label>
                            </div>                         
                    </div>
                </div>
                    </div>
                    <div class="card-footer footer-post">
                    <button type="submit" class="btn btn-primary"><a href="../index1.php?pages=create_view" class = "text-secondary text-decoration-none text-light">Add post</button>
                    </div>
                </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</form>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('New-profile');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
