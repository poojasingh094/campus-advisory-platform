<?php
session_start();
include('config/cbcon.php');
if(isset($_POST['login_btn'])){
    $name=$_POST['name'];
$email =$_POST['email'];
$password = $_POST['password'];

$user_query = "INSERT INTO students (name,email,password) VALUES ('$name',' $email','$password')";
$user_query_run = mysqli_query($con, $user_query);

if ($user_query_run) {
    $_SESSION['status'] = " Registeration Successful";
    header("location: ../user/index.php");
} else {
    $_SESSION['status'] = "Registeration failed";
    header("location: register_form.php");
}
}

if(isset($_POST['log_btn'])){
    $name=$_POST['name'];
$collegeid =$_POST['collegeid'];
$password = $_POST['password'];

$user_query = "INSERT INTO college (name,collegeid,password) VALUES ('$name',' $collegeid','$password')";
$user_query_run = mysqli_query($con, $user_query);

if ($user_query_run) {
    $_SESSION['status'] = " Registeration Successful";
    header("location: ../college/index.php");
} else {
    $_SESSION['status'] = "Registeration failed";
    header("location: register_form.php");
}
}

// if(mysqli_num_rows($log_query_run)>0){
//     foreach($log_query_run as $row){
//             $user_id = $row['id'];
//             $user_name = $row['name'];
//             $user_email  = $row['email'];
//     }
//     $_SESSION['auth']=true;
//     $_SESSION['auth_user']=[
//         'user_id' => $user_id,
//         'user_name' => $user_name,
//         'user_email' => $user_email
//     ];
//     $_SESSION['status']="Logged In Successfully";
//     header('location: index.php');
// }
// else{
//     $_SESSION['status']="Invalid Email or Password";
// header('location: login.php');
// }
// }
// else{
//     $_SESSION['status']="Access Denied";
// header('location: login.php');
// }
?>