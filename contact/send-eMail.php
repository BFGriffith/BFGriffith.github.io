<?php
// script sends eMail📧 from the contact form to the following address:
$destination_eMail = 'my_lovely_horse@domain.co.uk';

// minimal validation of eMail address
function validateEmail($data) {
	$filterEmail = filter_var($data,FILTER_SANITIZE_EMAIL);
	if($data == $filterEmail && filter_var($data,FILTER_VALIDATE_EMAIL)) {
		return true;
	} else { return false; }
}
if(validateEmail($_POST['email'])) {
	// sanitize data
	$first_name = htmlspecialchars($_POST['first_name']);
	$last_name = htmlspecialchars($_POST['last_name']);
	$email = $_POST['email'];
	$url = htmlspecialchars($_POST['url']);
	$message = htmlspecialchars($_POST['message']);

	if($_POST['phone'] == '' || $_POST['phone'] == null) {
		$phone = '--None--';
	} else {
		$phone = htmlspecialchars($_POST['phone']);
	}

	$content = "<p>Greetings,</p>
		<p>You have received an eMail📧 from $first_name by way of the BFGriffith.github.io website’s contact form; the message is as follows:</p>
		<p>$message</p>
		<p>
			From: $first_name $last_name
			<br />
			Phone: $phone
			<br />
			Email: $email
			<br />
			Website: $url
		</p>";

	$try = mail($destination_eMail = 'my_lovely_horse@domain.co.uk';
  ,"$name has emailed via the website",$content,"Content-Type: text/html;");

	// in case of error, PHP can use 'sendmail'
	if(!$try){
		echo '<p>There was an error when trying to send your eMail.</p>';
	} else {
		// echo response text into <div id="reponse"></div>
		echo '<p>Thank you ' . $first_name . '. We will reply to you at <em>' . $email . '</em> or via your phone number on <em>' . $phone . '</em></p>';
	}
} else {
	echo '<p>The eMail address you provided could not be validated.</p>'; // IF eMail address doesn’t pass validation…
}
