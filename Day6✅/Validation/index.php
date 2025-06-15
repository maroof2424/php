<?php

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (!empty($_REQUEST['username'])){
            $username = $_REQUEST['username'];
            echo "Wellcome $username";
        } else{
            echo "Username is required!.";
        }
    }    

?>
