<?php
class DBcon
{
function getConnection(){
  $con=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($con,"a3j");
  return $con;
}

function registerCheck($username,$lastname,$email,$password)
{
  $con=$this->getConnection();
  $sql="insert into login( `UserEmail`, `Password`) VALUES ('$email','$password')";
  $sql2="insert into user(`userEmail`, `firstName`, `lastName`) VALUES ('$email','$username','$lastname')";
  $res=mysqli_query($con,$sql);
  if($res)
  {
    $res2=mysqli_query($con,$sql2);
    return $res2;
  }
  return $res;
  }

function loginCheck($username,$password)
{
  $con=$this->getConnection();
  $sql="SELECT * FROM `login` WHERE `UserEmail`='$username' and `Password`='$password'";
  $res=mysqli_query($con,$sql);
  return $res;
  }
}
?>

