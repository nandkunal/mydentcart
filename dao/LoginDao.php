<?php
require_once(dirname(__FILE__).'/../common/projectConstant.php');

class LoginDao 
{ 
    public function __construct(){
	
	}
	
	
	
		public function checkLogin($email,$pass){
	
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
          $stmt=$dbh->prepare("select u.id from t_users u,t_registration r where r.primary_email=? and password=? and r.id=u.registration_id");
		  $stmt->bindParam(1,$email);
		  $stmt->bindParam(2,$pass);
		  $stmt->execute();
		  $row=$stmt->fetch();
		  if($stmt->rowCount()==1){
			$id=$row['id'];
			//$this->updateLoginTimeStamp($id);  
		  }
		  $dbh=null;
	      return $id;
	
	}
	
  
   public function updateLoginTimeStamp($id){
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
	
	
	



}


?>