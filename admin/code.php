<?php
session_start();
include('config/dbcon.php');

// if (isset($_POST['addCollege'])) {
//     $cname = $_POST['collegename'];
//     $collegeid = $_POST['collegeid'];
//     $location = $_POST['location'];
    
//     $user_query = "INSERT INTO collegelist (collegename,collegeid,location) VALUES ('$cname',' $collegeid','$location')";
//     $user_query_run = mysqli_query($con, $user_query);
    
//     if ($user_query_run) {
//         $_SESSION['status'] = "College added successfully";
//         header("location: registered.php");
//     } else {
//         $_SESSION['status'] = "College registration failed";
//         header("location: registered.php");
//     }
// }

if (isset($_POST['updateCollege'])) {

    $ccode = $_POST['collegecode'];
    $cname = $_POST['collegename'];
    $location = $_POST['location'];
    $accred = $_POST['accred'];
    $placement = $_POST['placement'];
    $avpackage = $_POST['avpackage'];
    $hpackage = $_POST['hpackage'];
    $weburl = $_POST['weburl'];

    $query = "UPDATE regform SET collegecode='$ccode', collegename='$cname', location='$location',accred='$accred',placement='$placement',avpackage='$avpackage',hpackage='$hpackage',weburl='$weburl' WHERE collegecode='$ccode'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        $_SESSION['status'] = "College updated successfully";
        header("location: collegerecords.php");
    } else {
        $_SESSION['status'] = "College updation failed";
        header("location: collegerecords.php");
    }
}

// if (isset($_POST['DeleteCollege'])) {
//     $userid = $_POST['delete_id'];
//     $query = "DELETE FROM collegelist WHERE id= '$userid'";
//     $query_run = mysqli_query($con, $query);
    
//     if ($query_run) {
//         $_SESSION['status'] = "College deleted successfully";
//         header("location: registered.php");
//     } else {
//         $_SESSION['status'] = "College deletion failed";
//         header("location: registered.php");
//     }
// }
?>
