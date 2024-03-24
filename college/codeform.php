<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['addCollege'])) {
    $ccode = $_POST['collegecode'];
    $cname = $_POST['collegename'];
    $location = $_POST['location'];
    $accred = $_POST['accred'];
    $placement = $_POST['placement'];
    $avpackage = $_POST['avpackage'];
    $hpackage = $_POST['hpackage'];
    $weburl = $_POST['weburl'];
    
    $user_query = "INSERT INTO regform (collegecode,collegename,location,accred,placement,avpackage,hpackage,weburl) VALUES ('$ccode',' $cname','$location','$accred','$placement','$avpackage','$hpackage','$weburl')";
    $user_query_run = mysqli_query($con, $user_query);
    
    if ($user_query_run) {
        $_SESSION['status'] = "College registered successfully";
        header("location: registered.php");
    } else {
        $_SESSION['status'] = "College registration failed";
        header("location: registered.php");
    }
}
?>
