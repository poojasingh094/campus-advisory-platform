<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['addcourse'])) {
    $cname = $_POST['collegename'];
    $courseoffered = $_POST['courseoffered'];
    $specoffered = $_POST['specoffered'];
    $feestr = $_POST['feestr'];
    
    
    $user_query = "INSERT INTO course (collegename,courseoffered,specoffered,feestr) VALUES ('$cname',' $courseoffered','$specoffered','$feestr')";
    $user_query_run = mysqli_query($con, $user_query);
    
    if ($user_query_run) {
        $_SESSION['status'] = " New Course added successfully";
        header("location: managecourse.php");
    } else {
        $_SESSION['status'] = "Course modification failed";
        header("location: managecourse.php");
    }
}

if (isset($_POST['updateCourse'])) {
    $user_id = $_POST['user_id'];
    $cname = $_POST['collegename'];
    $courseoffered = $_POST['courseoffered'];
    $specoffered = $_POST['specoffered'];
    $feestr = $_POST['feestr'];
    
    $query = "UPDATE course SET collegename='$cname', courseoffered='$courseoffered', specoffered='$specoffered',feestr='$feestr'  WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        $_SESSION['status'] = "Course updated successfully";
        header("location: managecourse.php");
    } else {
        $_SESSION['status'] = "Course updation failed";
        header("location: managecourse.php");
    }
}

if (isset($_POST['DeleteCourse'])) {
    $userid = $_POST['delete_id'];
    $query = "DELETE FROM course WHERE id= '$userid'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        $_SESSION['status'] = "College deleted successfully";
        header("location: managecourse.php");
    } else {
        $_SESSION['status'] = "College deletion failed";
        header("location: managecourse.php");
    }
}
?>
