<?php

// set the message in the session to be accessed later
function checkIsValidName($name){
    $_SESSION['error']['msg'] = 'Please '; 
    if(empty($name) || !preg_match('/^[a-z0-9A-Z ]*$/',$name)){
        return false;
    }
    return true;
}
 
function checkIsValidEmail($email){
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}

function checkIsValidNumber($number){
    if(empty($number) || strlen($number) != 10 || !is_numeric($number)){
        return false;
    }
    return true;
}

function checkIsValidFile($file){
    if(empty($file['type'])){
        $_SESSION['error']['msg'] = 'Please upload the user profile';  
        return false;
    }
    return true;
}

function setErrorMessage($msg){

}





?>