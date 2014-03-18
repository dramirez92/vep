<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("show_owners_or_agents","SELECT * FROM OWNER_OR_AGENT");
define("add_owner_or_agent","INSERT INTO OWNER_OR_AGENT  values (OA_Code.nextval,'%','%','%','%','%','%',%,%)");
define('update_owner_or_agent',"UPDATE OWNER_OR_AGENT SET OA_FIRST_NAME='%', OA_LAST_NAME='%', OA_SEX='%', OA_MOBIL_PHONE='%', OA_EMAIL='%', OA_PASSWORD='%', OA_FK_LOCAL=%, OA_FK_COUNTRY=%  WHERE OA_Code=%");
define("delete_owner_or_agent","DELETE FROM OWNER_OR_AGENT WHERE OA_Code=%");
define("show_owner_or_agent","SELECT * FROM OWNER_OR_AGENT WHERE OA_Code=%");





abstract class OWNER_OR_AGENT extends Util_Database {
    
    private $OA_Code;
    private $OA_First_Name;
    private $OA_Last_Name;
    private $OA_Sex;
    private $OA_Mobil_Phone;
    private $OA_Email;
    private $OA_Password;
    private $OA_FK_LOCAL;
    private $OA_FK_COUNTRY;




    public static function show_owners_or_agents() {

     $owners_or_agents =OWNER_OR_AGENT::execute_select(show_owners_or_agents);
      //print_r($owners_or_agents);
     return $owners_or_agents;
    }
  




    public static function add_owner_or_agent($first_name, $last_name, $sex, $mobil_phone, $email, $password, $fk_local, $fk_country){

        $values = array();
        $values[0]= $first_name;
        $values[1]= $last_name;
        $values[2]= $sex;
        $values[3]= $mobil_phone;
        $values[4]= $email;
        $values[5]= $password;
        $values[6]= $fk_local;
        $values[7]= $fk_country;

        $query= Util_String::concatenate(add_owner_or_agent, $values);
        
        OWNER_OR_AGENT::execute_query($query);
        //print $query;
    }





    public static function update_owner_or_agent($first_name, $last_name, $sex, $mobil_phone, $email, $password, $fk_local, $fk_country,$code){

      $values = array();
        $values[0]= $first_name;
        $values[1]= $last_name;
        $values[2]= $sex;
        $values[3]= $mobil_phone;
        $values[4]= $email;
        $values[5]= $password;
        $values[6]= $fk_local;
        $values[7]= $fk_country;
        $values[8]= $code;


        $query= Util_String::concatenate(update_owner_or_agent, $values);
        //print $query;
        OWNER_OR_AGENT::execute_query($query);
    }





    public static function delete_owner_or_agent($code){

        $values = array();
        $values[0]= $code;
        $query= Util_String::concatenate(delete_owner_or_agent, $values);
        //print $query;
        OWNER_OR_AGENT::execute_query($query);
    }





    public static function show_owner_or_agent($code){ 
        $valores = array();
        $valores[0]=$code; 


        $query=UTIL_STRING::concatenate(show_owner_or_agent,$valores);
        $owner_or_agent= OWNER_OR_AGENT::execute_select($query);
        print_r ($owner_or_agent);
          return $owner_or_agent;   
    }



}

//OWNER_OR_AGENT::add_owner_or_agent('jose','suarez','M','582129866225','ingjaso@jkjkas.com','1234',2,2);
//OWNER_OR_AGENT::update_owner_or_agent('pascual','pellegrino','M','8596234577','antpelle@aol.com','1234',2,2,1);
//OWNER_OR_AGENT::show_owners_or_agents();
//OWNER_OR_AGENT::show_owner_or_agent(1);
//OWNER_OR_AGENT::delete_owner_or_agent(2);


?>