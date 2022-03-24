
<?php 

require_once("../models/post.php");
$users = getuser();
 
if ($_GET['first_name'] == $users['first_name'] && $_GET['last_name'] = $users['last_name'] &&  $_GET['password'] == $users['password']){
    
    header('location: /index1.php');
}

else {
    header('location: /index.php');
    
}
    
    
?>
