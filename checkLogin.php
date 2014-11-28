<?php
session_start();
require_once("autoload.php");
$dao = new LoginDao();
$email=$_POST['email'];
$pass=$_POST['password'];
//check empty and null validation
$id= $dao->checkLogin($email,$pass);
if($id>0)
{
	$_SESSION['id']=$id;
header('location:home.php');

}
else
{
header('location:sign_up.php?err=1');
}
?>