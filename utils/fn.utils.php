<?php

// set the message in the session to be accessed later
function checkIsValidName($name, $type){
    if(empty($name) || !preg_match('/^[a-z0-9A-Z ]*$/',$name)){
        setSessionErrorMessage($type. ' should not be empty and should contains only alphabet and number');
        return false;
    }
    return true;
}
 
function checkIsValidEmail($email, $type){
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        setSessionErrorMessage($type. ' should not be empty and should valid email id');
        return false;
    }
    return true;
}

function checkIsValidNumber($number, $type){
    setSessionErrorMessage($type. ' should not be empty and should contains 10 digit numbers');
    if(empty($number) || strlen($number) != 10 || !is_numeric($number)){
        return false;
    }
    return true;
}

function checkIsValidFile($file, $type){
    setSessionErrorMessage($type. ' should not be empty and should be valid file upload');
    if(empty($file['type'])){
        return false;
    }
    return true;
}

function setSessionErrorMessage($msg){
    // set error message in the session
    $_SESSION['error']['msg'] = $msg;
}

function checkForTNC($tnc, $type){
    setSessionErrorMessage($type. ' should be checked before submitting blogs');
    if(empty($tnc) ){
        return false;
    }
    return true;
}




?>