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
    $errSpot=array();

    if(isset($_POST["uname"])) {
        $firstname = sanitise_input($_POST["uname"]);
    } 
    
    if (!preg_match('/^\pL+$/u', $firstname) && strlen($firstname)!=0) {
        $errMsg .= "<p>Your firstname cannot have number inside it.</p>";
        array_push($errSpot,"firstname");
    }
    else if(strlen($firstname)==0) {
        
        $errMsg .= "<p>Your firstname must be entered.</p>";
        array_push($errSpot,"firstname");
    }

    if(isset($_POST["lname"])) {
        $lastname = sanitise_input($_POST["lname"]);
    } 
    
    if (!preg_match('/^\pL+$/u', $lastname) && strlen($lastname)!=0) {
        $errMsg .= "<p>Your lastname cannot have number inside it.</p>";
        array_push($errSpot,"lastname");
    }
    else if(strlen($lastname)==0) {
        
        $errMsg .= "<p>Your lastname must be entered.</p>";
        array_push($errSpot,"lastname");
    }

    if(strlen($_POST["email"])!=0) {
        $email = sanitise_input($_POST["email"]);
    } else {
        $errMsg .= "<p>Your email must be entered.</p>";
        array_push($errSpot,"email");
    }

    if(strlen($_POST["phone_number"])!=0) {
        $phoneNum = sanitise_input($_POST["phone_number"]);
    } else {
        $errMsg .= "<p>Your phone number must be entered.</p>";
        array_push($errSpot,"pnum");
    }

    if(strlen($_POST["address"])!=0) {
        $address = sanitise_input($_POST["address"]);
    } else {
        $errMsg .= "<p>Your address must be entered.</p>";
        array_push($errSpot,"address");
    }

    // if(isset($_POST["street"])) {
    //     $street = sanitise_input($_POST["street"]);
    // } else {
    //     $errMsg .= "<p>Your street address must be entered.</p>";
    // }

    // if(isset($_POST["suburb"])) {
    //     $suburb = sanitise_input($_POST["suburb"]);
    // } else {
    //     $errMsg .= "<p>Your suburb must be entered.</p>";
    // }

    // if(isset($_POST["state"]) && !strlen($_POST["state"])==0 ) {
    //     $state = $_POST["state"];
    // } else {
    //     $errMsg .= "<p>Your state must be entered.</p>";
    // }

    if(strlen($_POST["postcode"])!=0) {
        $postcode = sanitise_input($_POST["postcode"]);
        
    } else {
        $errMsg .= "<p>Your postcode must be entered.</p>";
        array_push($errSpot,"postcode");
    }

    // if(isset($_POST["contact"])) {
    //     $contact = sanitise_input($_POST["contact"]);
    // } else {
    //     $errMsg .= "<p>Your contact must be choosen.</p>";
    // }

    // if(isset($_POST["book"])) {
    //     $book = sanitise_input($_POST["book"]);
    // } else {
    //     $errMsg .= "<p>Your book must be choosen.</p>";
    // }

    if(isset($_POST["type"])) {
        
        $type = implode(',', $_POST['type']);
    } else {
        $errMsg .= "<p>Your order type must be entered.</p>";
        
    }

    if(isset($_POST["comment"])) {
        $comment = sanitise_input($_POST["comment"]);
    } 


    if(isset($_POST["card"])) {
        $card = sanitise_input($_POST["card"]);
    } else {
        $errMsg .= "<p>Your book must be choosen.</p>";
        
    }

    if(strlen($_POST["Card_name"])!=0) {
        $cname = sanitise_input($_POST["Card_name"]);
    }else {
        $errMsg .= "<p>Your card name must be entered.</p>";
        array_push($errSpot,"cname");
    }

    if(isset($_POST["Card_number"])) {
        $cnum = sanitise_input($_POST["Card_number"]);
    } else {
        $errMsg .= "<p>Your card numbers must be entered.</p>";
        array_push($errSpot,"cnum");
    }

    if(isset($_POST["card_expire_date"])) {
        $cexpire = sanitise_input($_POST["card_expire_date"]);
    } else {
        $errMsg .= "<p>Your card expire date must be entered.</p>";
        array_push($errSpot,"cexpire");
    }

    if(strlen($_POST["CVV"])!=0) {
        $cvv = sanitise_input($_POST["CVV"]);
    } else {
        $errMsg .= "<p>Your card CVV must be entered.</p>";
        array_push($errSpot,"cvv");
    }
    
    if(strlen($_POST["Harry_potter_THBP"])!=0) {
        $thbp = sanitise_input($_POST["Harry_potter_THBP"]);
    } else {
        $thbp=0;
    }

    if(strlen($_POST["Harry_potter_TCOS"])!=0) {
        $tcos = sanitise_input($_POST["Harry_potter_TCOS"]);
    }else {
        $tcos=0;
    }

    if(strlen($_POST["Harry_potter_TPS"])!=0) {
        $tps = sanitise_input($_POST["Harry_potter_TPS"]);
    }else {
        $tps=0;
    }

    if(strlen($_POST["Harry_potter_TOOTP"])!=0) {
        $tootp = sanitise_input($_POST["Harry_potter_TOOTP"]);
    }else {
        $tootp=0;
    }
    // check the values

    
    switch($card){
        case("Visa"):
            if(!preg_match('/^([4-4][0-9]{15})$/', $cnum)){
                $errMsg .= "<p>Your card number must start with 4 and have 16 characters.</p>";
                array_push($errSpot,"cnum");
            }
            break;

        case("Mastercard"):
            if(!preg_match('/^([5-5][1-5][0-9]{14})$/', $cnum)){
                $errMsg .= "<p>Your card number must start with 51 to 55 and have 16 characters.</p>";
                array_push($errSpot,"cnum");
            }
            break;

        case("AE"):
            if(!preg_match('/^([3-3][4-4][0-9]{13}|[3-3][7-7][0-9]{13})$/', $cnum)){
                $errMsg .= "<p>Your card number must start with 34 or 37 and have 15 characters.</p>";
                array_push($errSpot,"cnum");
            }
            break;
    }
    

    // if(strlen($firstname)>=25) {
    //     $errMsg .= "<p>Your name should be <25 characters.</p>";
    //     array_push($errSpot,"firstname");
    // }

    // if (!preg_match('/^\pL+$/u', $lastname) && strlen($lastname)!=0) {
    //     $errMsg .= "<p>Your name cannot have number inside it.</p>";
    //     array_push($errSpot,"lastname");
    // }

    // if(strlen($lastname)>=25) {
    //     $errMsg .= "<p>Your name should be <25 characters.</p>";
    //     array_push($errSpot,"lastname");
    // }

    if(!preg_match("/^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/", $cexpire)) {
        $errMsg .= "<p>Your must provide appropriate expire date.</p>";
        array_push($errSpot,"cexpire");
    }



    // if(strlen($street)>40) {
    //     $errMsg .= "<p>Your address should be <40 characters.</p>";
    // }

    // if(strlen($suburb)>20) {
    //     $errMsg .= "<p>Your suburb should be <20 characters.</p>";
    // }

    

    if (strlen($postcode) != 4 && $postcode!=""){
        $errMsg .= "<p>Your postcode must be exactly 4 digits.</p>";
        array_push($errSpot,"postcode");
    }

    if(!is_numeric($phoneNum) && $phoneNum!="") {
        
        $errMsg .= "<p>Your phone number must be numeric.</p>";
        array_push($errSpot,"pnum");
    }
    
    if(!($tps == 0 && $tootp == 0 && $thbp ==0 && $tcos==0)){
        if(!(is_numeric($tps)&&is_numeric($tootp)&&is_numeric($thbp)&&is_numeric($tcos)) )  {
            $errMsg .= "<p>Your product quantity must be numeric.</p>";
            array_push($errSpot,"quantity");
        }
        
    }


    if(strlen($phoneNum)>10) {
        $errMsg .= "<p>Your phone number should be no longer than 10 digits.</p>";
        array_push($errSpot,"pnum");
    }

    // redirect to proper page after checking 
    if ($errMsg!="" ) {
        header ("location:fix_order.php");
    } else {

        require_once ("settings.php");
            
        $conn = @mysqli_connect($host,
                $user,
                $pwd,
                $sql_db
        );

            if (!$conn) {
                echo "<p>Database connection failure</p>";
            } else {

                $sql_table = "orders";
                
                

                $name = $firstname .' '. $lastname;

                $order_detail = "Harry Potter and the Half-Blood Prince - J.K Rowling x$thbp, Harry Potter and the Philosophers Stone - J.K Rowling x$tps, Harry Potter and the Chamber of Secrets - J.K Rowling x$tcos, Harry Potter and the Order of the Phoenix - J.K Rowling x$tootp ";

                $order_cost = 99.99 * $tcos + 99.99 * $tps +99.99 * $thbp +99.99 * $tootp;

                $query = "CREATE TABLE IF NOT EXISTS $sql_table (
                    ID int(11) AUTO_INCREMENT,
                    CUSTOMER_NAME varchar(255) NOT NULL,
                    EMAIL varchar(255) NOT NULL,
                    PHONE_NUMBER varchar(255) NOT NULL,
                    CUST_ADDRESS varchar(255) NOT NULL,
                    POSTCODE varchar(255) NOT NULL,
                    CARD_SERVICE varchar(255) NOT NULL,
                    CARD_HOLDER varchar(255) NOT NULL,
                    CARD_NUMBER varchar(255) NOT NULL,
                    EXPIRE_DATE varchar(255) NOT NULL,
                    CVV varchar(255) NOT NULL,
                    EXTRA varchar(255) NOT NULL,
                    ORDER_DETAIL varchar(255) NOT NULL,
                    ORDER_COST int,
                    ORDER_TIME datetime,
                    ORDER_STATUS varchar(255) NOT NULL,
                    PRIMARY KEY  (ID)
                    )";

                
                $result = mysqli_query($conn, $query);

                
                        
                    
  
                $add_query = "insert into $sql_table (CUSTOMER_NAME, EMAIL, PHONE_NUMBER, CUST_ADDRESS, POSTCODE, CARD_SERVICE, CARD_HOLDER,  CARD_NUMBER, EXPIRE_DATE, CVV, EXTRA, ORDER_DETAIL, ORDER_COST, ORDER_TIME,  ORDER_STATUS) values ('$name','$email','$phoneNum','$address','$postcode','$card','$cname','$cnum','$cexpire','$cvv','$type','$order_detail', '$order_cost', now(), 'PENDING')";

               
                $add_result = @mysqli_query($conn, $add_query);

                

                if(!$add_result ) {
                    echo "<p class=\"wrong\">something is wrong with ",$add_query,"</p>";
                } else {
                    echo "<p class\"ok\">Successfully added new order record</p>";
                }

                mysqli_close($conn);
            }
        header ("location:receipt.php");


    }


    // ensure that this page cannot be access directly
    if(!(isset($_POST["uname"])) && !(isset($_POST["lname"])) && !(isset($_POST["email"])) && !(isset($_POST["phone number"])) && 
    // !(isset($_POST["street"]))&& 
    // !(isset($_POST["suburb"])) && 
    // !(isset($_POST["state"])) && 
    !(isset($_POST["postcode"])) && !(isset($_POST["contact"]))  && !(isset($_POST["book"])) && !(isset($_POST["type[]"]))) {
        header ("location:payment.php");
    }


    // transfer data to other pages
    session_start();
    $_SESSION['espot'] = $errSpot;
    $_SESSION['err'] = $errMsg;
    $_SESSION['state'] = $state;
    $_SESSION['firstname'] = (isset($firstname) ? $firstname : "");
    $_SESSION['lastname'] = (isset($lastname) ? $lastname : "");

    $_SESSION['lastname'] = (isset($lastname) ? $lastname : "");
    $_SESSION['email'] = (isset($email) ? $email : "");
    $_SESSION['pnum'] = (isset($phoneNum) ? $phoneNum : "");
    $_SESSION['address'] = (isset($address)? $address: "");
    $_SESSION['postcode'] = (isset($postcode)? $postcode: "");
   
    $_SESSION['thbp'] = (isset($thbp)? $thbp: "");
    $_SESSION['tps'] = (isset($tps)? $tps: "");
    $_SESSION['tcos'] = (isset($tcos)? $tcos: "");
    $_SESSION['tootp'] = (isset($tootp)? $tootp: "");
    $_SESSION['type'] = (isset($_POST['type'])? $_POST['type']: array());
    









?>
