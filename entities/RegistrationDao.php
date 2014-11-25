
        <!-- begin of generated class -->
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        RegistrationDao
* GENERATION DATE:  2014-09-26
* CLASS FILE:        C:\xampp\htdocs\entity-gen\includes/../generated_classes/RegistrationDao.php
* FOR MYSQL TABLE:  t_registration
* FOR MYSQL DB:     mydentcart
* -------------------------------------------------------
* CODE GENERATED BY:
* PHP-PDO CLASS GENERATOR
* from: >>Kunal Khaware , Computer Enthusiast
* email: >>nandkunal@gmail.com
* skype: >>kunal.nand
* -------------------------------------------------------
*
*/

// **********************
// CLASS DECLARATION
// **********************
require_once(dirname(__FILE__).'/../common/projectConstant.php');
require_once(dirname(__FILE__).'/../exception/NoRecordFoundException.php');
class RegistrationDao
{ // class : begin

        // **********************
// CONSTRUCTOR DECLARATION
// ********************** 
   public function __construct(){
	 
 }// **********************
// ATTRIBUTE DECLARATION
// **********************
private $ID;//KEY ATTR. WITH AUTOINCREMENT
private $FIRST_NAME;
private $MIDDLE_NAME;
private $LAST_NAME;
private $PRIMARY_EMAIL;
private $SECONDARY_EMAIL;
private $MOBILE;
private $DATE_ACCOUNT_CREATED;
// **********************
// SETTERS
// **********************
public function setID($val)
{
$this->ID = $val;
}
public function setFIRST_NAME($val)
{
$this->FIRST_NAME = $val;
}
public function setMIDDLE_NAME($val)
{
$this->MIDDLE_NAME = $val;
}
public function setLAST_NAME($val)
{
$this->LAST_NAME = $val;
}
public function setPRIMARY_EMAIL($val)
{
$this->PRIMARY_EMAIL = $val;
}
public function setSECONDARY_EMAIL($val)
{
$this->SECONDARY_EMAIL = $val;
}
public function setMOBILE($val)
{
$this->MOBILE = $val;
}
public function setDATE_ACCOUNT_CREATED($val)
{
$this->DATE_ACCOUNT_CREATED = $val;
}
// **********************
// GETTERS
// **********************
public function getID()
{
return $this->ID;
}
public function getFIRST_NAME()
{
return $this->FIRST_NAME;
}
public function getMIDDLE_NAME()
{
return $this->MIDDLE_NAME;
}
public function getLAST_NAME()
{
return $this->LAST_NAME;
}
public function getPRIMARY_EMAIL()
{
return $this->PRIMARY_EMAIL;
}
public function getSECONDARY_EMAIL()
{
return $this->SECONDARY_EMAIL;
}
public function getMOBILE()
{
return $this->MOBILE;
}
public function getDATE_ACCOUNT_CREATED()
{
return $this->DATE_ACCOUNT_CREATED;
}
// **********************
// INSERT
// **********************
public function save()
{
try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " .$e->getMessage() . "<br/>";
            die();
        }
$null=NULL;
$stmt=$dbh->prepare("insert into t_registration values(?,?,?,?,?,?,?,?)"); 
$stmt->bindParam(1,$null);
$stmt->bindParam(2,$this->FIRST_NAME);
$stmt->bindParam(3,$this->MIDDLE_NAME);
$stmt->bindParam(4,$this->LAST_NAME);
$stmt->bindParam(5,$this->PRIMARY_EMAIL);
$stmt->bindParam(6,$this->SECONDARY_EMAIL);
$stmt->bindParam(7,$this->MOBILE);
$stmt->bindParam(8,$this->DATE_ACCOUNT_CREATED);
$stmt->execute();
if($stmt->rowCount()>0){
$this->ID=$dbh->lastInsertId();
$is_added=true;
}else{
$is_added=false;
}
$dbh=null;
return $is_added;
}
// **********************
// GET
// **********************
public function get()
{
try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " .$e->getMessage() . "<br/>";
            die();
        }
$stmt=$dbh->prepare("select * from  t_registration where ID = ?"); 
$stmt->bindParam(1,$this->ID);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
if(count($row) == 0){
throw new NoRecordFoundException("No Records Found",100);
}
foreach ($row as $key=>$value)
{
$this->$key=$value;
}
$dbh=null;
}
// **********************
// update
// **********************
public function update()
{
try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " .$e->getMessage() . "<br/>";
            die();
        }
$null=NULL;
$stmt=$dbh->prepare("update t_registration SET FIRST_NAME=?,
MIDDLE_NAME=?,
LAST_NAME=?,
PRIMARY_EMAIL=?,
SECONDARY_EMAIL=?,
MOBILE=?,
DATE_ACCOUNT_CREATED=?
 WHERE ID=?
");
$stmt->bindParam(1,$this->FIRST_NAME);
$stmt->bindParam(2,$this->MIDDLE_NAME);
$stmt->bindParam(3,$this->LAST_NAME);
$stmt->bindParam(4,$this->PRIMARY_EMAIL);
$stmt->bindParam(5,$this->SECONDARY_EMAIL);
$stmt->bindParam(6,$this->MOBILE);
$stmt->bindParam(7,$this->DATE_ACCOUNT_CREATED);
$stmt->bindParam(8,$this->ID);
$stmt->execute();
if($stmt->rowCount()>0){
$is_modified=true;
}else{
$is_modified=false;
}
$dbh=null;
return $is_modified;
}
// **********************
// delete
// **********************
public function delete()
{
try
        {
            $dbh = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);

        }
        catch (PDOException $e) {
            print "Error!: " .$e->getMessage() . "<br/>";
            die();
        }
$stmt=$dbh->prepare("delete from  t_registration where ID = ?"); 
$stmt->bindParam(1,$this->ID);
$stmt->execute();
if($stmt->rowCount()>0){
$is_deleted=true;
}else{
$is_deleted=false;
}
$dbh=null;
return $is_deleted;
}
 
 }
       // end of generated class