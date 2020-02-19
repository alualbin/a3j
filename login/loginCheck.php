<?php
session_start();
include('DBCon/DBConnection.php');
ob_start();
$db=new DBCon();
$username=$_POST['username'];

$password=$_POST['pass'];

$res=$db->loginCheck($username,$password);

if($res->num_rows > 0){ 
    while($row = $res->fetch_assoc()) {
        if($row["role"]=="user"){
            $_SESSION["user"] = "user";
            header("location:/a3j/QuestionBank/");
        }
        else if($row["role"]=="admin"){
            $_SESSION["user"] = "admin";
            header("location:/a3j/Admin/");
        }
    }
}else{
    header("location:login.php");
}
?>