<?php
session_start();
include('DBCon/DBConnection.php');
ob_start();
$db=new DBCon();
$username=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

$res=$db->registerCheck($username,$lastname,$email,$password);

if($res>0){
    header("location:login.php");
}else{
    header("location:register.php");
}
?>