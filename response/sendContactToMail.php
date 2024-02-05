<?php
	require 'mail.php';

	if(isset($_REQUEST['v'])){
		$r=json_decode($_REQUEST['v']);
		$sender= 'owner@trideepshivam.com';
		$pass= 'Vijay@1999';
		$visiterEmail = $r->Email;		
		$visiterName = $r->Name;
		$visiterSubject = $r->Subject;
		$visiterContact = $r->Contact;
		$visiterComment = $r->Comment;
		$html='<fieldset style="background:dodgerblue;color:white;text-align:center;float:left;border:none;border-top:2px solid rgb(18,250,62);">
			<legend><img src="https://trideepshivam.com/logo.png" width="100px"></legend>
			<h2 style="color:white;">www.trideepshivam.com</h2>
			<p>Thank you for connecting us</p>
			<p>You will be contacted soon.</p><hr>
			<p>team: <b><a style="text-decoration:none;color:rgb(18,250,62);" href="https://www.trideepshivam.com">trideepshivam.com</a></b></p>
		</fieldset>';
		if(sendMail($sender,$pass,$visiterEmail,'Request Recieved Successfully',$html)){
			$html='<fieldset style="background:dodgerblue;color:white;text-align:center;float:left;border:none;border-top:2px solid rgb(18,250,62);">
				<legend><img src="https://trideepshivam.com/logo.png" width="100px"></legend>
				<table style="color:white;">
				<tr>
					<td><b>Name:</b></td>
					<td>'.$visiterName.'</td>
				</tr>
				<tr>
					<td><b>Subject:</b></td>
					<td>'.$visiterSubject.'</td>
				</tr>
				<tr>
					<td><b>Contact:</b></td>
					<td>'.$visiterContact.'</td>
				</tr>
				<tr>
					<td><b>Email:</b></td>
					<td style="color:white;">'.$visiterEmail.'</td>
				</tr>
				<tr>
					<td><b>Comment:</b></td>
					<td>'.$visiterComment.'</td>
				</tr>
				</table><hr>
				<p>team: <b><a style="text-decoration:none;color:rgb(18,250,62);" href="https://www.trideepshivam.com">trideepshivam.com</a></b></p>
			</fieldset>';
			sendMail($sender,$pass,'trideepshivam@gmail.com','Request Recieved Successfully',$html);
			echo "<h1 style='text-align:center;color:rgb(18,250,62);'>Thank for your request We will contact you soon.</h1>";
		}else{echo "Please Provide a valid email ID.";}
		
	}else{echo "no data recieved";}
?>