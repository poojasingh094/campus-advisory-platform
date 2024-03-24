<?php
include('config/dbcon.php');
error_reporting(0);

$query ="SELECT * FROM apply_form";
$data= mysqli_query($con, $query);

 $total = mysqli_num_rows($data);
 
//  echo $total;

 if($total != 0)
 {
    ?>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
         padding:5px;      
            }
   .small {
  zoom: 75%;
}
tr {
  border-bottom: 10px ;
  /* border-right:30px solid #7F96FF; */
  
}
tr:hover {background-color: #D6EEEE;}
button {
  background-color: #7F96FF;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
}
button:hover {
  background-color: red;
}
a {
  color: #fff;
}
input #cat {
  background-color: #fff;
}
input #cat.selected {
  background-color: red;
}

input #cat.rejected {
  background-color: #fdd;
}
</style>

<h2 style="text-align: center;">Displaying All Records</h2>
<table style="small" border="1" align="center" cellspacing="7">
    <tr style="background-color:#7F96FF;color:#ffffff;">
    <th style="height:65px">College Code</th>
    <th>Student Name</th>
    <th>Father's Name</th>
    <th>Mother's Name</th>
    <th>Nationality</th>
    <th>Category</th>
    <th>Email </th>
    <th>Phone</th>
    <th>Category</th>
    <th>Course</th>
    <th>Specialization</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Address</th>
    <th>10th Board</th>
    <th>Year(10th)</th>
    <th>Percentage</th>
    <th>Stream</th>
    <th>12th Board</th>
    <th>Year</th>
    <th>Percentage</th>
    <th>Stream</th>
    <th>10th Marksheet</th>
    <th>12th Marksheet</th>
    <th>JEE/Gate Marksheet</th>
    <tr>
</tr>
<?php

while($result= mysqli_fetch_assoc($data)){
echo "<tr>

        <td >".$result['name']."</td>
        <td>".$result['fname']."</td>
        <td>".$result['mname']."</td>
        <td>".$result['nation']."</td>
        <td>".$result['scholarship']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['category']."</td>
        <td>".$result['course']."</td>
        <td>".$result['program']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['dob']."</td>
        <td>".$result['addres']."</td>
        <td>".$result['degree']."</td>
        <td>".$result['years']."</td>
        <td>".$result['percent']."</td>
        <td>".$result['stream']."</td>
        <td>".$result['deg']."</td>
        <td>".$result['yea']."</td>
        <td>".$result['perc']."</td>
        <td>".$result['str']."</td>
        <td>".$result['pdf_url']."</td>
        <td>".$result['pd_url']."</td>
        <td>".$result['p_url']."</td>
        </tr>" ;
}
}
else{
echo "No records found";
}


?>
</table>