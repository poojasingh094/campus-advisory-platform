<?php
session_start();
include('config/dbcon.php');
include('includes/sidebar.php');
include('includes/header.php');

if(isset($_POST['addUser'])){
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $nationality=$_POST['nation'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $category=$_POST['cat'];
    $course=$_POST['course']; 
    $program=$_POST['pro'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $degree=$_POST['degree'];
    $year=$_POST['year'];
    $percentage=$_POST['percentage'];
    $stream=$_POST['stream'];
    $degre=$_POST['degre'];
    $yea=$_POST['yea'];
    $percentag=$_POST['percentag'];
    $strea=$_POST['strea'];
   

    // Define the folder where uploaded files will be stored
$upload_folder = 'uploads/';

// Get the PDF file data
$pdf_file = $_FILES['file']['tmp_name'];
$pdf_name = $_FILES['file']['name'];

// Move the uploaded file to the upload folder
move_uploaded_file($pdf_file, $upload_folder . $pdf_name);

// Get the PDF file URL
$pdf_url = 'http://localhost/project1/CAP/user/uploads/' . $pdf_name;


    // Define the folder where uploaded files will be store
  
$upload_folder = 'uploads/';

// Get the PDF file data
$pd_file = $_FILES['doc']['tmp_name'];
$pd_name = $_FILES['doc']['name'];

// Move the uploaded file to the upload folder
move_uploaded_file($pd_file, $upload_folder . $pd_name);

// Get the PDF file URL
$pd_url = 'http://localhost/project1/CAP/user/uploads/' . $pd_name;
    // Define the folder where uploaded files will be store
$upload_folder = 'uploads/';

// Get the PDF file data
$p_file = $_FILES['docu']['tmp_name'];
$p_name = $_FILES['docu']['name'];

// Move the uploaded file to the upload folder
move_uploaded_file($p_file, $upload_folder . $p_name);

// Get the PDF file URL
$p_url = 'http://localhost/project1/CAP/user/uploads/' . $p_name;
    // Define the folder where uploaded files will be store


    $user_query= "INSERT INTO apply_form (name,fname,mname,nation,email,phone,category,course,program,gender,dob,addres,degree,years,percent,stream,deg,yea,perc,str,gname, pdf_url,hname,pd_url,iname,p_url) VALUES ('$name',' $fname','$mname','$nationality','$email','$phone','$category','$course','$program','$gender','$dob','$address','$degree','$year','$percentage','$stream','$degre','$yea','$percentag','$strea','$name', '$pdf_url','$name', '$pd_url','$name', '$p_url')";
    $user_query_run=mysqli_query($con,$user_query);
    if( $user_query_run){
        $_SESSION['status']="Applied Successfully";
        // header("location:code.php");
    }
    else{
        $_SESSION['status']="registeration failed";
        header("location:admission.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.cont{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.popup{
  width:400px;
  background: #d3d3d3;
  /* opacity: 0.7; */
  border-radius: 6px;
  position: absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%) ;
 
  text-align: center;
  padding: 0px 30px 30px ;
  color:#333;
  /* visibility:visible; */
  transition: transform 0.4s, top 0.4s;
}

.open-popup{
  visibility: visible;
  top:50%;
  transform: translate(-50%, -50%) scale(1);
}
.popup img{
  width: 60px;
  margin-top: -1 0%;
  border-radius: 50%;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
.popup h2{
  font-size: 38px;
  font-weight: 500;
  margin: 30px 0 10px;
}
.popup button{
  width: 100%;
  margin-top: 50px;
  padding: 10px 0;
  background: #6fd649;
  color:#fff;
  border:0;
  outline: none;
  font-size: 18px;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
</style>
</head>
<body>
    
<div class="cont" >
    <div class="popup" id="popup">
      <img src="correct.png" id="popup">
      <h2> Thank You!</h2>
      <p> Your details has been successfully submitted. Thanks!</p>
      <button type="button" onclick="closePopup()">OK</button>
      </div>
  </div>
  <script>
  let popup = document.getElementById("popup");
  function openPopup(){
    popup.classList.add("open-popup");
  }
  function closePopup(){
    popup.classList.remove("open-popup");
  }
  </script>
  </body>
</html>

 
  
