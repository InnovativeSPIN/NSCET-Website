<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['DOB']) 
	&& isset($_POST['register_number']) && isset($_POST['number']) && isset($_POST['whatsapp']) && isset($_POST['linkedin']) 
	&& isset($_POST['organization']) && isset($_POST['designation']) && isset($_POST['address']) && isset($_POST['program']) 
	&& isset($_POST['department']) && isset($_POST['batch']) && isset($_POST['gender']) && isset($_POST['current_status']) 
	&& isset($_POST['marital_status']) && isset($_POST['checkbox'])) {


	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$firstname = validate($_POST['firstname']);
	$lastname = validate($_POST['lastname']);
    $email = validate($_POST['email']);
    $DOB = date('y-m-d',strtotime($_POST['DOB']));
	$register_number = validate($_POST['register_number']);
	$number = validate($_POST['number']);
	$whatsapp = validate($_POST['whatsapp']);
	$linkedin = validate($_POST['linkedin']);
	$organization = validate($_POST['organization']);
	$designation = validate($_POST['designation']);
	$address = validate($_POST['address']);
	$program = validate($_POST['program']);
	$department = validate($_POST['department']);
	$batch = validate($_POST['batch']);
	$gender = validate($_POST['gender']);
	$current_status = validate($_POST['current_status']);
	$marital_status = validate($_POST['marital_status']);
	$checkbox = validate($_POST['checkbox']);
	

	$user_data = '&firstname='. $firstname. '&lastname='. $lastname. '&email='. $email. '&DOB='. $DOB. '&register_number='. $register_number. '&number='. $number. '&whatsapp='. $whatsapp. '&linkedin='. $linkedin. '&organization='. $organization.'&designation='. $designation. 
	     '&address='. $address. '&program='. $program. '&department='. $department. '&batch='. $batch. '&gender='. $gender. 
	     '&current_status='. $current_status. '&marital_status='. $marital_status. '&checkbox='. $checkbox;




		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM example WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);
		
        if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=Enter correct e-mail id&$$user_data");
	        exit();
		}else {

          $sql2 = "INSERT INTO example(firstname, lastname, email,DOB,register_number,number,whatsapp,linkedin,organization,designation,address,program,department,batch,gender,current_status,marital_status,checkbox) VALUES('$firstname', '$lastname', '$email','$DOB','$register_number','$number','$whatsapp','$linkedin','$organization','$designation','$address','$program','$department','$batch','$gender','$current_status','$marital_status','$checkbox')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=registered successfully");
	         exit();
           }else {
	           	header("Location: index.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	
	
}