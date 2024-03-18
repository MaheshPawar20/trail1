<? 
//change this to your email. 
//$to = "Haroon<karimharoon@gmail.com>";
$to = "MECOIPL<info@mecoipl.com>";
$from = $_POST["email"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$req = $_POST["message"];
$subject = $_POST["subject"];

//begin of HTML message 
$body = "<html> 
<body bgcolor=\"#DCEEFC\" style=\"padding: 2em;\">
	<b>Message from $name:</b><br/>
	------------------------------------------------------------<br/>
	<b>Name: </b> $name <br/><br/>
	<b>Email: </b> $from <br/><br/>
	<b>Phone No: </b> $phone <br/><br/>
	<b>Company Name: </b> $company <br/><br/>
	<b>Message: </b> $req <br/><br/>
</body> 
</html>"; 
//end of message 

// To send the HTML mail we need to set the Content-type header. 
$headers .= 'MIME-Version: 1.0' . "\r\n";  
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";  
$headers .= "From: $name <$from>\r\n";
 
// now lets send the email. 
$mail_sent = mail($to, $subject, $body, $headers);

if($mail_sent){
	echo "Mail Sent Successfully.";
}else{
	echo "Mail Sending Failed.";
}

?>