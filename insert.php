<?php
require_once "./config.php";

if($_POST || isset($_POST['name']) || isset($_POST['pass'] ) || isset($_POST['mob'] )  || isset($_POST['mail'] ))
{
   
    $payLoad = json_decode(json_encode($_POST));

    $preparedQuery = $database->prepare("INSERT INTO users(username, user_password,contact,mail ) VALUES('$payLoad->name','$payLoad->pass','$payLoad->mob','$payLoad->mail')");
    if ($preparedQuery->execute()) {
      
        header("location:login.php"); 
    }

}

