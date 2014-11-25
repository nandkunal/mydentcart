<?php
require_once(dirname(__FILE__).'/../projectConstant.php');

class ADAO 
{ 
    var $logger;
    public function ADAO(){
	
	}
	
	
	
		public function checkLogin($username,$pass){
	
		        try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
			//$this->logger->error("Error!: " . $e->getMessage());
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		
		  $pass=md5($pass);
		  	$id=0;  
          $stmt=$dbh->prepare("select id from t_admin where username=? and password=?");
		  $stmt->bindParam(1,$username);
		  $stmt->bindParam(2,$pass);
		  $stmt->execute();
		  $row=$stmt->fetch();
		  if($stmt->rowCount()==1){
			$id=$row['id'];
			$this->updateLoginTimeStamp($id);  
		  }
		  $dbh=null;
	      return $id;
	
	}
	
  
   public   function updateLoginTimeStamp($id){
             try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
			///$this->logger->error("Error!: " . $e->getMessage());
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		  $currrent_time=date("Y-m-d H:i:s");
          $stmt=$dbh->prepare("update t_admin set last_login_time=? where id=?");
        $stmt->bindParam(1,$currrent_time);
        $stmt->bindParam(2,$id);
        $stmt->execute();
         $dbh=null;
		 return true;
         
    }
	
	
	public function loadRateData(){
					        try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
			//$this->logger->error("Error!: " . $e->getMessage());
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		  
        $stmt=$dbh->prepare("select * from t_rates");
       $stmt->execute();
		//print_r($stmt->errorInfo());
        $row=$stmt->fetchAll();
		return $row;
		
	}
	
	
	public function getRateValueBy($id){
			        try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
		//	$this->logger->error("Error!: " . $e->getMessage());
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		 $stmt=$dbh->prepare("select value from t_rates where id=?");
		 $stmt->bindParam(1,$id);
       $stmt->execute();
		//print_r($stmt->errorInfo());
        $row=$stmt->fetch();
		return $row['value'];
		
		
	}
	
	public function updateRate($data){
			        try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
			
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		if(is_null($data)){
			return false;
		}
		foreach($data as $key=>$val)
		{
		 
        $stmt=$dbh->prepare("update t_rates set value=? where id=?" );
        $stmt->bindParam(1,$val); 
		$stmt->bindParam(2,$key);
		
        $stmt->execute();
		$stmt=NULL;
		}
        
		return true;	
		
		
	}
	
	public function createBackUpHistory($file_name,$user_id){
		        try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
		//	$this->logger->error("Error!: " . $e->getMessage());
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		$null= NULL;
		$date = date("Y-m-d H:i:s");
		$is_active=1;
		 $stmt=$dbh->prepare("insert into t_backup_history values (?,?,?,?,?)");
		 $stmt->bindParam(1,$null);
		 $stmt->bindParam(2,$file_name);
		 $stmt->bindParam(3,$date);
		  $stmt->bindParam(4,$user_id);
		   $stmt->bindParam(5,$is_active);
		 
       $stmt->execute();
	  // print_r($stmt->errorInfo());
		$dbh=null;
		return true;	
		
	}
	
	
	public function getRestorePoints()
    {
        
       	        try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
		//	$this->logger->error("Error!: " . $e->getMessage());
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		 $stmt=$dbh->prepare("select * from t_backup_history  order by date_bkup desc");
		
       $stmt->execute();
		//print_r($stmt->errorInfo());
        $row=$stmt->fetchAll();
         return $row;

    }




}


?>