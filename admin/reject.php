<?php
include('config/dbcon.php');
// include('includes/sidebar.php');
error_reporting(0);


$column_value = "Rejected";
$query ="SELECT * FROM apply_form WHERE selection = '$column_value'";
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

    <h2 align= "center">Displaying All Records</h2>
<table class="small" border="1" align= "center" cellspacing="7">
    <tr style="background-color:#7F96FF;color:#ffffff;">
    <th style="height:65px">Name</th>
    <th >Category</th>
    <th>Father's Name</th>
    <th>Mother's Name</th>
    <th>Nation</th>
    <th>Email</th>
    <th>Phone </th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Address</th>
    <th>10th Marks</th>
    <th>12th Marks</th>
    <tr>
</tr>
<?php

while($result= mysqli_fetch_assoc($data)){
echo "<tr>

        <td >".$result['name']."</td>
        <td>".$result['category']."</td>
        <td>".$result['fname']."</td>
        <td>".$result['mname']."</td>
        <td>".$result['nation']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['dob']."</td>
        <td>".$result['addres']."</td>
        <td>".$result['percent']."</td>
        <td>".$result['perc']."</td>  
        </tr>" ;
}
}
else{
echo "No records found";
}
?>
</table>