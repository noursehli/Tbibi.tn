<?php
require_once ("Model.php");
Class ModelResponsablestock extends Model{ 
private $Responsable_ID;
private $Responsable_firstname;
private $Responsable_Lastname;
private $Salary;
private $Responsable_Hire_Date;
private $Login;
private $PWD;
private $Grade;
protected static $Log='Login';
protected static $Pass='PWD';
protected static $table ='responsablestock'; 
protected static $primary ='Responsable_ID';

public function __construct($Responsable_ID,$Responsable_firstname,$Responsable_Lastname,$Salary,$Responsable_Hire_Date,$Login,$PWD,$Grade){
$this->Responsable_ID=$Responsable_ID;
$this->Responsable_firstname=$Responsable_firstname;
$this->Responsable_Lastname=$Responsable_Lastname;
$this->Salary=$Salary;
$this->Responsable_Hire_Date=$Responsable_Hire_Date;
$this->Login=$Login;
$this->PWD=$PWD;
$this->Grade=$Grade;
}

public function getResponsable_ID() {
	return $this->Responsable_ID;
}

public function getResponsable_firstname() {
	return $this->Responsable_firstname;
}

public function getResponsable_Lastname() {
	return $this->Responsable_Lastname;
}

public function getSalary() {
	return $this->Salary;
}

public function getResponsable_Hire_Date() {
	return $this->Responsable_Hire_Date;
}

public function getLogin() {
	return $this->Login;
}

public function getPWD() {
	return $this->PWD;
}

public function getGrade() {
	return $this->Grade;
}

public function setResponsable_firstname($Responsable_firstname) {
   $this->Responsable_firstname=$Responsable_firstname;
}

public function setResponsable_Lastname($Responsable_Lastname){
   $this->Responsable_Lastname=$Responsable_Lastname;
}

public function setSalary($Salary){
  $this->Salary=$Salary;
}

public function setResponsable_Hire_Date($Responsable_Hire_Date){
 $this->Responsable_Hire_Date=$Responsable_Hire_Date;
}

public function setLogin($Login){
 $this->Login=$Login;
}


public function setPWD($PWD){
 $this->PWD=$PWD;
}

public function setGrade($Grade){
 $this->Grade=$Grade;
}}
?>