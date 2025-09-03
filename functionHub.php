<?php

/*
validation function
*/

function validationName(){
    if ( strlrn($_POST['email']) < 1 ){
        return "All fields are required.";
    } elseif ( strpos($_POST['email'], '@') ){
        return "Please fill in a correct Email address.";
    }

    return true;
}

function validatePeriod($max_num){
    for( $i = 1; $i < $max_num; $i++ ){
        if( ! isset( $_POST['start'.$i] ) ) continue;
        if( ! isset( $_POST['end'.$i] ) ) continue;
        
        $start_time = $_POST['start'.$i];
        $end_time = $_POST['end'.$i];
        
        if( strlen($_POST['start'.$i]) ){
            return "";
        }

        if( ! preg_match('/^[A-Za-z]{3}\.\s\d{4}$/', $start_time) || !preg_match('/^[A-Za-z]{3}\.\s\d{4}$/', $end_time) ){
            return "Please fill in the date with format (MON. YEAR).";
        }

        return true;
    }
}

function validateYear($max_num){
    for( $i = 1; $i < $max_num; $i++ ){
        if( ! isset( $_POST['year'.$i] ) ) continue;
        
        $year = $_POST['year'.$i];

        if( ! is_numeric($_POST['year'.$i]) )
    }

    return true;
}