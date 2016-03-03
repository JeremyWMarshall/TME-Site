<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>

<?php
  
		// Retrieve Info From Form
		$email_to = "JeremyWMarshall@gmail.com";
		$email_subject = "From TME.org";
		
		$name = $_POST['Name'];
		$company = $_POST['Company'];
		$email_from = $_POST['mailfrom']; 
		$telephone = $_POST['Tel']; 
		$comments = $_POST['Message']; 
			
		// Create Email Body and Headers
		$headers = "MIME-Version: 1.0\n"
            ."From: \"".$name."\" <".$email_from.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  		$body = "Name: ".$name."<br>\n"
				."Company:".$company."<br>\n"
           		."Email: ".$email_from."<br>\n"
				."Tel: ".$telephone."<br>\n"
            	."Message:<br>\n".$comments;
				
			
		mail($email_to, $email_subject, $body, $headers);
		
		header("location: http://www.themarshallexperience.org/thankyou.html"); /* Redirect browser */
?>
    
</head>

<body>
</body>
</html>