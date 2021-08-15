<?php
  
$servername = "localhost";
$username = "globalmechtex";
$password = "globalmechtex";

// Create connection mocwad6x_maildb
$conn = new mysqli($servername, $username, $password,'globalmechtex');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
  
  $from_name = $_POST['name'];
  $to_email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = "Form Name:-".$from_name." || <br>To Email:- ".$to_email." ||  <br> Message:- ".$_POST['message'];
  
    
$query=mysqli_query($conn,"INSERT INTO contact_enq (email,phone, Fname, emailmessage) VALUES ('".$_POST['email']."','".$phone."','".$from_name."','".$_POST['message']."')");

 $to_email = "dm@com";
  $FromEmail='noreply@globalcom';
                $ReplyTo='noreply@globalcom';
                $FromName='MECHTEX Private Ltd.';
				$Subject='A query from MechTex';
                $Headers  = "MIME-Version: 1.0\n";
                $Headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $Headers .= "From: ".$FromName." <".$FromEmail.">\n";
                $Headers .= "Reply-To: ".$ReplyTo."\n";
                $Headers .= "X-Sender: <".$FromEmail.">\n";
                $Headers .= "X-Mailer: PHP\n";
                $Headers .= "X-Priority: 1\n";
                $Headers .= "Return-Path: <".$FromEmail.">\n";

			   if(mail($to_email, $Subject, $message, $Headers) == true) {
				echo "Mail sent successfully";
				header("location:../thank-you.html");
			   }
			   else {
				   echo "Mail Not Sent Try Again";
		}


  
?>
