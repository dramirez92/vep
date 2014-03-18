<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("show_meetings","SELECT * FROM CUSTOMER");
define("add_meeting","INSERT INTO MEETING  values (ME_Code.nextval, to_date('%','mm/dd/yyyy'),'%',%,%,%,%)");
define('update_meeting',"UPDATE MEETING SET ME_DATE=to_date('%','mm/dd/yyyy'), ME_TIME='%', ME_FK_CUSTOMER=%, ME_FK_OWNER_OR_AGENT=%, ME_FK_LOCAL=%, ME_FK_COUNTRY=%  WHERE ME_CODE=% ");
define("delete_meeting","DELETE FROM MEETING WHERE ME_CODE=%");
define("show_meeting","SELECT * FROM MEETING WHERE ME_CODE=%");





abstract class MEETING extends Util_Database {
    
    private $Me_Code;
    private $Me_Date;
    private $Me_Time;
    private $Me_FK_Customer;
    private $Me_FK_Owner_Or_Agent;
    private $Me_FK_Local;
    private $Me_FK_Country;





    public static function show_meetings() {

     $meetings =MEETING::execute_select(show_meetings);
     // print_r($meetings);
     return $meetings;
    }
  




    public static function add_meeting($date, $time, $fk_customer, $fk_owner_or_agent, $fk_local, $fk_country){

        $values = array();
        $values[0]= $date;
        $values[1]= $time;
        $values[2]= $fk_customer;
        $values[3]= $fk_owner_or_agent;
        $values[4]= $fk_local;
        $values[5]= $fk_country;


        $query= Util_String::concatenate(add_meeting, $values);
        
        MEETING::execute_query($query);
       //print $query;
    }





    public static function update_meeting($date, $time, $fk_customer, $fk_owner_or_agent, $fk_local, $fk_country, $code){

        $values = array();
        $values[0]= $date;
        $values[1]= $time;
        $values[2]= $fk_customer;
        $values[3]= $fk_owner_or_agent;
        $values[4]= $fk_local;
        $values[5]= $fk_country;
        $values[6]= $code;
        
        


        $query= Util_String::concatenate(update_meeting, $values);
        MEETING::execute_query($query);
        print $query;
    }





    public static function delete_meeting($code){

        $values = array();
        $values[0]= $code;
        $query= Util_String::concatenate(delete_meeting, $values);
        //print $query;
        MEETING::execute_query($query);
    }





    public static function show_meeting($code){ 
        $valores = array();
        $valores[0]=$code; 


        $query=UTIL_STRING::concatenate(show_meeting,$valores);
        $meeting= MEETING::execute_select($query);
        //print_r ($meeting);
          return $meeting;   
    }



}

//MEETING::add_meeting('03/01/1992','12:00',2,1,2,2);
//MEETING::update_meeting('10/11/2013','08:00',2,1,2,2,1);
//MEETING::show_meetings();
//MEETING::show_meeting(1);
//OWNER_OR_AGENT::delete_owner_or_agent(2);


?>