<?php 
session_start(); 
include ("../php/db_conn.php");


if (isset($_POST['username']) && isset($_POST['password'])
   && isset($_POST['re_password'])&& isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$sID = validate($_POST['username']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	
	
	$email = validate($_POST['email']);

	$user_data = 'username'. $sID;


	if (empty($sID)) {
		header("Location: signup.php?error=User Name is required");
	    exit();
	}	

		
	else if(empty($pass)){
        header("Location: signup.php?error=Password is required");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required");
	    exit();
	}

	

	else if(empty($email)){
        header("Location: signup.php?error=Email is required");
	    exit();
	}

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: signup.php?error=Email format is invalid</br>Example: abc@gmail.com");
	    exit();
    }



	// else if (!preg_match('"^(\+?6?01)[0|1|2|3|4|6|7|8|9]-*[0-9]{7,8}$"' ,$sID)){
	// 	header("Location: signup.php?error=Phone number is of invalid format.</br>Example: 60 1112345678.");
	//     exit();
	
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match");
	    exit();
	}

	else{

		// hashing the password
		//cancel hashing
        // $pass = md5($pass);

	    $sql = "SELECT * FROM member WHERE user_name='$sID' ";
		$result = mysqli_query($conn, $sql);

		if ($result === false) {
			printf("Error: %s\n", mysqli_error($conn));
			exit();
		}elseif (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The user name is already registered&$user_data");
	        exit();

		}
		
		else {
           $sql2 = "INSERT INTO member(user_name, password,email) VALUES('$sID', '$pass','$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}