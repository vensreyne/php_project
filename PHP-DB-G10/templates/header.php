<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook 2.0</title>
    <!-- Your style here -->
    <link rel="stylesheet" href="../style/main.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<?php
    if(isset($_GET['pages'])){
        $active = $_GET['pages'];
    }
?>
<body class="bg-primary">
    <nav class="shadow-sm p-3 mb-5 bg-white rounded">
        <ul>
            <img src="../images/facebook.png"/>
        </ul>
         <ul>
            <li class="active"><a href="../index1.php?pages=post_view"><i class="fas fa-home fa-2x <?php if ($active == "post_view") echo "active" ?>"></i></a></li>
            <li class="active"><a href="../index1.php?pages=profile_view"><i class="fas fa-user-circle fa-2x <?php if ($active == "profile_view") echo "active" ?> "></i></a></li>
            <li class="active"><a href="../index.php"><i class="fas fa-sign-out-alt fa-2x"></i></a></li>
        </ul>
    </nav>
    
