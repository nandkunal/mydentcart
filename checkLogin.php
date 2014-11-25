<?php
session_start();
require_once("autoload.php");
$dao = new LoginDao();
$username=$_POST['username'];
$pass=$_POST['password'];
//check empty and null validation
$id= $dao->checkLogin($username,$pass);
if($id>0)
{
	$_SESSION['id']=$id;
header('location:home.php');

}
else
{
header('location:index.php?err=1');
}
?>