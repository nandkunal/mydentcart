<?php
require_once("RegistrationDao.php");
class TestRegistrationDao
{
	public $resgistration;
	public function setUp(){
		$this->resgistration = new RegistrationDao();
		$this->resgistration->setFIRST_NAME("John");
		$this->resgistration->setLAST_NAME("Doe");
		$this->resgistration->setMIDDLE_NAME("X");
		$this->resgistration->setPRIMARY_EMAIL("test@gmail.com");
		$this->resgistration->setSECONDARY_EMAIL("test1@gmail.com");
		$this->resgistration->setMOBILE("9076895433");
		$this->resgistration->setDATE_ACCOUNT_CREATED(date("Y-m-d H:i:s"));
		
		
	}
	
	public function testSave(){
	$this->resgistration->save();
		
		
	}
	
	public function testGet(){
		$val=$this->resgistration->get();
		print_r($val);
		
	}
	
	public function testUpdate()
	{
		$this->resgistration->setMOBILE("786543217");
		$this->resgistration->update();
		
	}
	
	public function testDelete()
	{
	$this->resgistration->delete();	
		
	}
	
	
	public function tearDown(){
		$resgistration=NULL;
		
	}
}


$test = new TestRegistrationDao();
$test->setUp();
$test->testSave();
$test->testGet();
$test->testUpdate();
$test->testDelete();


?>