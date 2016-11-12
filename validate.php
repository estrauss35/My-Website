<?php
		/*snagging the message format from other file*/
		include("emailForm.php");

		/*Assigning Variables*/
		$name = $_POST["userName"];
		$email = $_POST["userEmail"];
		$message = $_POST["userMessage"];
		$date = new DateTime();
		$finalDate = $date->format('Y-M-D H:i:s');
		$subject = $_POST["userSubject"];

		/* Email it is being sent to */
		$me = "ems394@nau.edu";
		$mailhead = "TO: $me \n FROM: $name \n CC: $name \n SUBJECT: $subject \n";

		/* General Layout for when I get the email */
		$formcontent = "BODY: $finalMessage";

		/* The boolean to determine whether to send an email will actually get sent out */
		$clear = true;
		
		/*Checking if any fields are empty*/
		if(empty($name)){
			echo "You did not enter your name.\r\n";
			$clear = false;
		}
		elseif (empty($message)) {
			echo "You did not leave a message.\r\n";
			$clear = false;
		}

		/*Checking if email address is valid*/
		if(strpos($email, '.com') == true || strpos($email, '.org') == true || strpos($email, '.edu') == true || strpos($email, '.gov') == true){
			echo "\r\n";
		}
		else{
			echo "Invalid email. Ex: abc123@gmail.com\r\n";
			$clear = false;
		}
		if (empty($email)) {
			echo "You did not enter your email.\r\n";
			$clear = false;
		}

		/* If it passed all the tests, then it sends the message */
		if($clear == true){
			mail($me, $subject, $formcontent, $mailhead) or die("Error!");
			echo "Message Sent!";
		}
		/**/
	?>