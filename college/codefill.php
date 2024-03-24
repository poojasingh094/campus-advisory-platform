<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['fillscholar'])) {
    $ccode = $_POST['collegecode'];
    $criteria = $_POST['criteria'];
    $amount = $_POST['amount'];
    $feeremain = $_POST['feeremain'];
    
    // Assuming all arrays are of the same length
    $count = count($criteria);
    
    // Loop through each set of criteria, amount, and fee remaining
    for ($i = 0; $i < $count; $i++) {
        $criterion = $criteria[$i];
        $scholarshipAmount = $amount[$i];
        $feeRemaining = $feeremain[$i];
        
        // Insert each set into the database
        $user_query = "INSERT INTO scholarlist (collegecode, criteria, amount, feeremain) VALUES ('$ccode', '$criterion', '$scholarshipAmount', '$feeRemaining')";
        $user_query_run = mysqli_query($con, $user_query);
        
        if (!$user_query_run) {
            $_SESSION['status'] = "Error occurred while inserting data into database";
            header("location: fill.php");
            exit; // Stop execution if an error occurs
        }
    }
    
    $_SESSION['status'] = "Scholarship details added successfully";
    header("location: fill.php");
}
?>
