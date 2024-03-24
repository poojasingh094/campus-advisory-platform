<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['addStudent'])) {
    $sname = $_POST['studentname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $status = $_POST['status'];
    $user_query = "INSERT INTO studentlist (studentname,email,contact,status) VALUES ('$sname','  $email','$contact', ' $status')";
    $user_query_run = mysqli_query($con, $user_query);
    
    if ($user_query_run) {
        $_SESSION['status'] = "College added successfully";
        header("location: students.php");
    } else {
        $_SESSION['status'] = "College registration failed";
        header("location: students.php");
    }
}

if (isset($_POST['updateStudent'])) {
    $user_id = $_POST['user_id'];
    $sname = $_POST['studentname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $status = $_POST['status'];
    $query = "UPDATE studentlist SET collegename='$sname', email='$email', contact='$contact', status='status' WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        $_SESSION['status'] = "College updated successfully";
        header("location: students.php");
    } else {
        $_SESSION['status'] = "College updation failed";
        header("location: students.php");
    }
}

if (isset($_POST['DeleteStudent'])) {
    $userid = $_POST['delete_id'];
    $query = "DELETE FROM studentlist WHERE id= '$userid'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        $_SESSION['status'] = "Student removed successfully";
        header("location: students.php");
    } else {
        $_SESSION['status'] = "student deletion failed";
        header("location: students.php");
    }
}
?>
