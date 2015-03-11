<?php

    date_default_timezone_set('America/Toronto');
    require 'vendor/autoload.php';

    use Parse\ParseClient;

    ParseClient::initialize('6AfySMVdTj3rlMdlbEfMZsXDODNt3qN1hjkKgkFL', 'PbOHLiTseJGbESn9R7SJtERiojVmrMPGlIvSDfQW', 'YpPLLthhGPY6PhnayNvULNKIU3EALd1SmFL6ZRSG');

    use Parse\ParseObject;


    if (isset($_POST["action"]))
    {	
        /*
        if (!isset($_POST["name"]) || empty($_POST["name"]))
        {
        	$errorName = true;
        	$error = true;
        }
        */

        /*
        if (!isset($_POST["phone"]) || empty($_POST["phone"]))
        {
        	$errorPhone = true;
        	$error = true;
        }
        */

        if (!isset($_POST["email"]) || empty($_POST["email"]))
        {
            $errorEmail = true;
        	$error = true;
        }

        //Send data to Parse
       if(!isset($error))
        {       
            $customer = ParseObject::create("Customer");
        /*    $customer->set("name", $_POST["name"]);
            $customer->set("phoneNumber", $_POST["phone"]);
        */    $customer->set("email", $_POST["email"]);
            
            

            try {
                $customer->save();
                //echo 'New object created with objectId: ' . $customer->getObjectId();
                $submitSuccess = true;
            } catch (ParseException $ex) {  
                // Execute any logic that should take place if the save fails.
                // error is a ParseException object with an error code and message.
                $submitSuccess = false;
                //echo 'Failed to create new object, with error message: ' + $ex->getMessage();
            }
        }
        
    }

    include_once("landing.html");

?>