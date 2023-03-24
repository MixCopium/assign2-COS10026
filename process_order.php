<?php

    // sanitise function that remove space, backslashes, and HTML
    function sanitise_input ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    

    // get the input value

    $errMsg = "";


    if(isset($_POST["uname"])) {
        $firstname = sanitise_input($_POST["uname"]);
    } 
    
    if (!preg_match('/^\pL+$/u', $firstname) && strlen($firstname)!=0) {
        $errMsg .= "<p>Your name cannot have number inside it.";
    }
    else if(strlen($firstname)==0) {
        
        $errMsg .= "<p>Your name must be entered.";
    }

    if(isset($_POST["lname"])) {
        $lastname = sanitise_input($_POST["lname"]);
    } else {
        $errMsg .= "<p>Your lastname must be entered.";
    }

    if(isset($_POST["email"])) {
        $email = sanitise_input($_POST["email"]);
    } else {
        $errMsg .= "<p>Your email must be entered.";
    }

    if(isset($_POST["phone_number"])) {
        $phoneNum = sanitise_input($_POST["phone_number"]);
    } else {
        $errMsg .= "<p>Your phone number must be entered.";
    }

    if(isset($_POST["street"])) {
        $street = sanitise_input($_POST["street"]);
    } else {
        $errMsg .= "<p>Your street address must be entered.";
    }

    if(isset($_POST["suburb"])) {
        $suburb = sanitise_input($_POST["suburb"]);
    } else {
        $errMsg .= "<p>Your suburb must be entered.";
    }

    if(isset($_POST["state"]) && !strlen($_POST["state"])==0 ) {
        $state = $_POST["state"];
    } else {
        $errMsg .= "<p>Your state must be entered.";
    }

    if(isset($_POST["postcode"])) {
        $postcode = sanitise_input($_POST["postcode"]);
    }

    if(isset($_POST["contact"])) {
        $contact = sanitise_input($_POST["contact"]);
    } else {
        $errMsg .= "<p>Your contact must be choosen.";
    }

    if(isset($_POST["book"])) {
        $book = sanitise_input($_POST["book"]);
    } else {
        $errMsg .= "<p>Your book must be choosen.";
    }

    if(isset($_POST["type"])) {
        
        $type = implode(',', $_POST['type']);
    } else {
        $errMsg .= "<p>Your order type must be entered.";
    }

    if(isset($_POST["comment"])) {
        $comment = sanitise_input($_POST["comment"]);
    } 

    // check the values

    

    

    if(strlen($firstname)>=25) {
        $errMsg .= "<p>Your name should be <25 characters.";
    }

    if (!preg_match('/^\pL+$/u', $lastname)) {
        $errMsg .= "<p>Your name cannot have number inside it.";
    }

    if(strlen($lastname)>=25) {
        $errMsg .= "<p>Your name should be <25 characters.";
    }


    if(strlen($street)>40) {
        $errMsg .= "<p>Your address should be <40 characters.";
    }

    if(strlen($suburb)>20) {
        $errMsg .= "<p>Your suburb should be <20 characters.";
    }

    

    if (strlen($postcode) != 4){
        $errMsg .= "<p>Your postcode must be exactly 4 digits.";
    }

    if(!is_numeric($phoneNum)) {
        
        $errMsg .= "<p>Your phone number must be numeric.";
    }
    

    if(strlen($phoneNum)>10) {
        $errMsg .= "<p>Your phone number should be no longer than 10 digits.";
    }

    // redirect to proper page after checking 
    if (strlen($errMsg )) {
        header ("location:fix_order.php");
    } else {


        header ("location:receipt.php");
    }


    // ensure that this page cannot be access directly
    if(!(isset($_POST["uname"])) && !(isset($_POST["lname"])) && !(isset($_POST["email"])) && !(isset($_POST["phone number"])) && !(isset($_POST["street"]))&& !(isset($_POST["suburb"])) && !(isset($_POST["state"])) && !(isset($_POST["postcode"])) && !(isset($_POST["contact"]))  && !(isset($_POST["book"])) && !(isset($_POST["type[]"]))) {
        header ("location:enquire.php");
    }


    // transfer data to other pages
    session_start();
    $_SESSION['err'] = $errMsg;
    $_SESSION['state'] = $state




    
    









?>