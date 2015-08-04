
	<?php
		ini_set('display_errors', 1);
		$link = mysqli_connect("localhost", "kwstudios-org", "0A17E5EC99B50FB9F4D8A173DB983B449768AB97", "kwstudios_org_mail");	
		if (!$link) {																						
			die("Connection to the SQL Server is not possible! Please don't be too upset: " . mysqli_error());
		}
		
		if(isset ($_POST['headers'])){
			//$headers = $_POST['headers'];
			$headers = "";
		}else{
			$headers = "";
		}
		
		if(isset ($_POST['text'])){
			$text = $_POST['text'];
		}else{
			$text = "";
		}
		
		if(isset ($_POST['html'])){
			// $html = $_POST['html'];
			$html = "";
		}else{
			$html = "";
		}
		
		if(isset ($_POST['from'])){
			// $from = $_POST['from'];
			$from = "";
		}else{
			$from = "";
		}
		
		if(isset ($_POST['to'])){
			// $to = $_POST['to'];
			$to = "";
		}else{
			$to = "";
		}
		
		if(isset ($_POST['cc'])){
			// $cc = $_POST['cc'];
			$cc = "";
		}else{
			$cc = "";
		}
		
		if(isset ($_POST['subject'])){
			$subject = $_POST['subject'];
		}else{
			$subject = "";
		}
		
		if(isset ($_POST['dkim'])){
			// $dkim = $_POST['dkim'];
			$dkim = "";
		}else{
			$dkim = "";
		}
		
		if(isset ($_POST['SPF'])){
			// $sPF = $_POST['SPF'];
			$sPF = "";
		}else{
			$sPF = "";
		}
		
		if(isset ($_POST['envelope'])){
			// $envelope = $_POST['envelope'];
			$envelope = "";
		}else{
			$envelope = "";
		}
		
		if(isset ($_POST['charsets'])){
			// $charsets = $_POST['charsets'];
			$charsets = "";
		}else{
			$charsets = "";
		}
		
		if(isset ($_POST['spam_score'])){
			// $spam_score = $_POST['spam_score'];
			$spam_score = "";
		}else{
			$spam_score = "";
		}
		
		if(isset ($_POST['spam_report'])){
			// $spam_report = $_POST['spam_report'];
			$spam_report = "";
		}else{
			$spam_report = "";
		}
		
		if(isset ($_POST['attachments'])){
			// $attachments = $_POST['attachments'];
			$attachments = "";
		}else{
			$attachments = "";
		}
		
		if(isset ($_POST['attachment-info'])){
			// $attachment_info = $_POST['attachment-info'];
			$attachment_info = "";
		}else{
			$attachment_info = "";
		}
		$query = "INSERT INTO kwstudios_org_mail.kwstudios_org_inbox (`headers`, `text`, `html`, `from`, `to`, `cc`, `subject`, `dkim`, `SPF`, `envelope`, `charsets`, `spam_score`, `spam_report`, `attachments`, `attachment-info`) VALUES ('" . $headers . "', '" . $text . "', '" . $html . "', '" . $from . "', '". $to ."', '". $cc ."', '". $subject ."', '". $dkim ."', '". $sPF ."', '". $envelope ."', '". $charsets ."', '". $spam_score ."', '". $spam_report ."', '". $attachments ."', '". $attachment_info ."');";
		$result = $link->query($query);
		mysqli_close($link);
		
	
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="mail.php" method="POST">
		<input type="text" name="subject">
		<input type="text" name="text">
		<button>Testbutton</button>
	</form>
</body>
</html>