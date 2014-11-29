<?php
session_start();
require_once("autoload.php");
$rdao=new RegistrationDao();
$user=new ClsUsers();
$data=$_POST;
if($data==null)
{
	header('location:sign_up.php');
}else
{
	
$fname=$data['fname'];
$mname=$data['mname'];
$lname=$data['lname'];
$pemail=$data['pemail'];
$semail=$data['semail'];
$mobile=$data['mobile'];
$rdao->setFIRST_NAME($fname);
$rdao->setMIDDLE_NAME($fname);
$rdao->setLAST_NAME($fname);
$rdao->setPRIMARY_EMAIL($pemail);
$rdao->setSECONDARY_EMAIL($semail);
$rdao->setMOBILE($mobile);
$rdao->setDATE_ACCOUNT_CREATED(date("Y-m-d H:i:s"));
$is_added=$rdao->save();
if($is_added )
{
$user->setPASSWORD(md5($data['password']));
$user->setREGISTRATION_ID($rdao->getID());
$user->setUSERNAME($pemail);
$is_user_added=$user->save();
}else
{
    header('location:sign_up.php');
}
if($is_user_added)
{
$_SESSION['id']=$user->getID();
header('location:home.php');
}else
{
	header('location:sign_up.php');
}
function notifyUser()
{
    $emailUtils= new clsEmail();

}
	
}