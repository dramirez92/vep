<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("show_customers","SELECT * FROM CUSTOMER");
define("add_customer","INSERT INTO CUSTOMER  values (Cus_Code.nextval,'%','%',to_date('%','mm/dd/yyyy'),'%','%','%','%','%','%','%')");
define('update_customer',"UPDATE CUSTOMER SET CUS_FIRST_NAME='%', CUS_LAST_NAME='%', CUS_BIRTHDAY=to_date('%','mm/dd/yyyy'), CUS_SEX='%',CUS_HOMER_PHONE='%', CUS_MOBIL_PHONE='%', CUS_ADDRESS='%', CUS_ZIP_CODE='%',CUS_EMAIL='%', CUS_PASSWORD='%'  WHERE CUS_CODE=%");
define("delete_customer","DELETE FROM CUSTOMER WHERE CUS_CODE=%");
define("show_customer","SELECT * FROM CUSTOMER WHERE CUS_CODE=%");





abstract class CUSTOMER extends Util_Database {
    
    private $Cus_Code;
    private $Cus_First_Name;
    private $Cus_Last_Name;
    private $Cus_birthday;
    private $Cus_Sex;
    private $Cus_Homer_Phone;
    private $Cus_Mobil_Phone;
    private $Cus_Address;
    private $Cus_Zip_Code;
    private $Cus_Email;
    private $Cus_Password;




    public static function show_customers() {

     $customers =CUSTOMER::execute_select(show_customers);
      //print_r($customers);
     return $customers;
    }
  




    public static function add_customer($first_name, $last_name, $birthday, $sex, $home_phone, $mobil_phone,$address,$zip_code ,$email, $password){

        $values = array();
        $values[0]= $first_name;
        $values[1]= $last_name;
        $values[2]= $birthday;
        $values[3]= $sex;
        $values[4]= $home_phone;
        $values[5]= $mobil_phone;
        $values[6]= $address;
        $values[7]= $zip_code;
        $values[8]= $email;
        $values[9]= $password;

        $query= Util_String::concatenate(add_customer, $values);
        
        CUSTOMER::execute_query($query);
        //print $query;
    }





    public static function update_customer($code ,$first_name, $last_name, $birthday, $sex, $home_phone, $mobil_phone, $address, $zip_code ,$email, $password){

        $values = array();
        $values[0]= $code;
        $values[1]= $first_name;
        $values[2]= $last_name;
        $values[3]= $birthday;
        $values[4]= $sex;
        $values[5]= $home_phone;
        $values[6]= $mobil_phone;
        $values[7]= $address;
        $values[8]= $zip_code;
        $values[9]= $email;
        $values[10]= $password;
        


        $query= Util_String::concatenate(update_customer, $values);
        CUSTOMER::execute_query($query);
        //print $query;
    }





    public static function delete_customer($code){

        $values = array();
        $values[0]= $code;
        $query= Util_String::concatenate(delete_customer, $values);
        //print $query;
        CUSTOMER::execute_query($query);
    }





    public static function show_customer($code){ 
        $valores = array();
        $valores[0]=$code; 


        $query=UTIL_STRING::concatenate(show_customer,$valores);
        $customer= CUSTOMER::execute_select($query);
        //print_r ($customer);
          return $customer;   
    }



}

//CUSTOMER::add_customer('diana','suarez','01/28/1991','M','582129866225','584144794008','el cafetal','1061','ingjaso@jkjkas.com','1234');
//CUSTOMER::update_customer('emily','pellegrino','01/27/1991','F','582129864225','584144794008','elcafetal','1461','ingjaso@jjkjkas.com','12345',1);
//CUSTOMER::show_customers();
//CUSTOMER::show_customer(2);
//OWNER_OR_AGENT::delete_owner_or_agent(2);


?>