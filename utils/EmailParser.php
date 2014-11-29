<?php

class EmailParser{
	
	function __construct(){
		
	}
	
	
	
public function frameForgetPasswordEmail($password){
		  $subject = "Your Password has been reset successfully";
		  $file="templates/forget_pass.tpl";
		  $logo_url="http://sandsassociates.co.in/administrator/images/vaasslogo.png";
		  $title="Your Password has been reset.";
		  $content1="Your New Password is ".$password;
		  $content2="Please login using above password and change it immediately";
		  $signature="Cheers,<br />VaaSS Information Technologies Pvt. Ltd.<br /><br />";
		  $copyright="Copyright © 2013 VaaSS Infotech";
		  $output=file_get_contents($file);
		  $output=str_replace("{logo_url}",$logo_url,$output);
		  $output=str_replace("{title}",$title,$output);
		  $output=str_replace("{content1}",$content1,$output);
		  $output=str_replace("{content2}",$content2,$output);
		  $output=str_replace("{signature}",$signature,$output);
		  $output=str_replace("{copyright}",$copyright,$output);
		  return $output;
		  //echo $output;
			
	}
	
	public function frameRegistrationEmail($fname,$lname,$default_activation_link_id){
		
		  $file="administrator/templates/sign_up.tpl";
		  $logo_url="http://oradentalinstrument.com/images/logo.png";
		  $title="Please click the activation link to confirm your email address.";
		  $content1="Thankyu for Registering with us";
		  $content2="Click <a href='http://oradentalinstrument.com/activate_account.php?link_id=".$default_activation_link_id."'> here </a> to activate your account.";
		  $signature="Cheers,<br />Oracraft Pvt. Ltd.<br /><br />";
		  $copyright="Copyright © 2013 ORA Craft";
		  $output=file_get_contents($file);
		  $output=str_replace("{first_name}",$fname,$output);
		  $output=str_replace("{last_name}",$lname,$output);
		  $output=str_replace("{logo_url}",$logo_url,$output);
		  $output=str_replace("{title}",$title,$output);
		  $output=str_replace("{content1}",$content1,$output);
		  $output=str_replace("{content2}",$content2,$output);
		  $output=str_replace("{signature}",$signature,$output);
		  $output=str_replace("{copyright}",$copyright,$output);
		  return $output;
		
	}
	
	public function frameForgetUsersPasswordEmail($pin){
		 $file="administrator/templates/forget_user_pass.tpl";
		  $logo_url="http://oradentalinstrument.com/images/logo.png";
		  $title="Your Password has been updated.";
		  $content1="Your New Password is ".$pin;
		  $content2="Please login into your account and change it immediately";
		  $signature="Cheers,<br />Oracraft Pvt. Ltd.<br /><br />";
		  $copyright="Copyright © 2013 ORA Craft";
		  $output=file_get_contents($file);
		  $output=str_replace("{logo_url}",$logo_url,$output);
		  $output=str_replace("{title}",$title,$output);
		  $output=str_replace("{content1}",$content1,$output);
		  $output=str_replace("{content2}",$content2,$output);
		  $output=str_replace("{signature}",$signature,$output);
		  $output=str_replace("{copyright}",$copyright,$output);
		  return $output;
		
		
	}
	
}


?>