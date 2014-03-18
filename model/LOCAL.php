<?php

include_once 'util_Database.php';
include_once 'util_String.php';


define("show_locals","SELECT * FROM LOCAL");
define("add_local","INSERT INTO LOCAL VALUES (L_CODE.NEXTVAL,'%','%','%','%','%','%',%)");
define("update_local","UPDATE  LOCAL SET L_NAME='%', L_ADDRESS='%', L_ZIP_CODE='%', L_PHONE_NUMBER='%', L_EMAIL='%', L_DESCRIPTION='%', L_FK_COUNTRY=% WHERE L_CODE=% ");
define("delete_local","DELETE FROM LOCAL WHERE L_CODE=%");
define("show_local","SELECT * FROM LOCAL WHERE L_CODE=%");


abstract class LOCAL extends util_Database{

 	private $L_Code;
 	private $L_Name;
 	private $L_Address;
 	private $L_Zip_Code;
 	private $L_Phone_Number;
 	private $L_Email;
 	private $L_Description;
 	private $L_FK_COUNTRY;



 	public static function show_locals(){

 		$locals=LOCAL::execute_select(show_locals);
 		//print_r($locals);
 		return $locals;
 	}



 	public static function add_local($name,$address,$zipcode,$phonenumber,$email,$description,$fk_country){

 		$values= array();
 		$values[0]=$name;
 		$values[1]=$address;
 		$values[2]=$zipcode;
 		$values[3]=$phonenumber;
 		$values[4]=$email;
 		$values[5]=$description;
 		$values[6]=$fk_country;

 		$query=util_String::concatenate(add_local,$values);
 		LOCAL::execute_query($query);
 		//print $query;
 	}



 	public static function update_local($name,$address,$zipcode,$phonenumber,$email,$description,$fk_country,$code){

 	$values=array();
 	$values[0]=$name;
 	$values[1]=$address;
 	$values[2]=$zipcode;
 	$values[3]=$phonenumber;
 	$values[4]=$email;
 	$values[5]=$description;
 	$values[6]=$fk_country;
 	$values[7]=$code;


 	$query=util_String::concatenate(update_local,$values);
 	LOCAL::execute_query($query);
 	//print $query;
 	}


 	public static function delete_local($code){

 	$values=array();
 	$values[0]=$code;

 	$query=util_String::concatenate(delete_local,$values);
 	LOCAL::execute_query($query);
 	//print $query;
 	}



 	public static function show_local($code){

 		$values=array();
 		$values[0]=$code;

 		$query=util_String::concatenate(show_local,$values);
 		$local=LOCAL::execute_select($query);
 		//print_r($local);
 		return $local;
 	}




}


//LOCAL::add_local('diana','merida','1061','5802758845532','anaidramirez@outlook.com','la jefecita de alejandro',2);	
//LOCAL::update_local('emily','barquisimeto','5472','5804144794008','evrm1990@sahshals.com','abogada',2,1);
//LOCAL::show_locals();
//LOCAL::show_local(1);
//LOCAL::delete_local(1);

?>