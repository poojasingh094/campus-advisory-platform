<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='college_db';

$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$conn){
   die(mysqli_error($conn));
}