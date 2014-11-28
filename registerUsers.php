<?php
session_start();
require_once("autoload.php");
$rdao=new RegistrationDao();
$data=$_POST;
if($data==null)
{
	header('location:sign_up.php');
}else
{
	
$fname=$data['fname'];
$mname=$data['mname'];
$lname=$data['lname'];
$email=$data['email'];
$email1=$data['email1'];
$mobile=$data['mobile'];
$rdao->setFIRST_NAME($fname);
$rdao->setMIDDLE_NAME($fname);
$rdao->setLAST_NAME($fname);
$rdao->setPRIMARY_EMAIL($fname);
$rdao->setSECONDARY_EMAIL($fname);
$rdao->setMOBILE($fname);
$rdao->setDATE_ACCOUNT_CREATED(date("Y-m-d H:i:s"));
$is_added=$rdao->save();
if($is_added)
{
$_SESSION['id']=$rdao->getID();
header('location:home.php');
}else
{
	header('location:sign_up.php');
}

	
}