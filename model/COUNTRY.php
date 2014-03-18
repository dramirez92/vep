<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("show_countries","SELECT * FROM COUNTRY");
define("add_country","INSERT INTO COUNTRY  values (c_Code.nextval,'%')");
define('update_country',"UPDATE COUNTRY SET C_NAME='%'  WHERE C_Code=%");
define("delete_country","DELETE FROM COUNTRY WHERE C_Code=%");
define("show_country","SELECT * FROM COUNTRY WHERE C_Code=%");





abstract class COUNTRY extends Util_Database {
    
    private $C_Code;
    private $C_Name;




    public static function show_countries() {

     $countries =COUNTRY::execute_select(show_countries);
      //print_r($countries);
     return $countries;
    }
  




    public static function add_country($name){

        $values = array();
        $values[0]= $name;
        $query= Util_String::concatenate(add_country, $values);
        //print $query;
        COUNTRY::execute_query($query);
    }





    public static function update_country($name,$code){

      $values = array();
        $values[0]= $name;
        $values[1]= $code;
        $query= Util_String::concatenate(update_country, $values);
        //print $query;
        COUNTRY::execute_query($query);
    }





    public static function delete_country($code){

        $values = array();
        $values[0]= $code;
        $query= Util_String::concatenate(delete_country, $values);
        //print $query;
        COUNTRY::execute_query($query);
    }





    public static function show_country($code){ 
        $valores = array();
        $valores[0]=$code; 
        $query=UTIL_STRING::concatenate(show_country,$valores);
        $country= COUNTRY::execute_select($query);
        //print_r ($country);
          return $country;   
    }



  
   


}

//COUNTRY::add_country('ultima_prueba');
//COUNTRY::update_country('se cambio el nombre',1);
//COUNTRY::delete_country(1);
//COUNTRY::show_country(1);
//COUNTRY::show_countries();



?> 