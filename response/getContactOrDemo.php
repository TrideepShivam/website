<?php
$data = $_REQUEST['v'];
	if($data=='contact'){
		echo "<div class='contactResponse'>
		  <div  id='form'>
			<div id='contactUsFormHead'>
				<h1>Fill The Form</h1>
				<p>We will contact you soon.</p>
			</div>
			<fieldset class='txtcontainer'>
				<legend class='topname'>Name</legend>
				<input type='text' class='contactTxt' onfocusout='txtUnfocused(this)' onfocus='txtFocused(this)'>
			</fieldset>
			<fieldset class='txtcontainer'>
				<legend class='topname'>Subject</legend>
				<select id='subjectOptions' class='contactTxt' onfocusout='txtUnfocused(this)' onfocus='txtFocused(this)'>
					<option hidden></option>
					<option>Web-designing</option>
					<option>Web-hosting</option>
					<option>Video-editing</option>
					<option>Training</option>
					<option>Other</option>
				</select>
			</fieldset>
			<fieldset class='txtcontainer'>
				<legend class='topname'>Contact</legend>
				<input type='number' class='contactTxt' onfocusout='txtUnfocused(this)' onfocus='txtFocused(this)'>
			</fieldset>
			<fieldset class='txtcontainer'>
				<legend class='topname'>Email</legend>
				<input type='email' class='contactTxt' onfocusout='txtUnfocused(this)' onfocus='txtFocused(this)'>
			</fieldset>
			<fieldset id='saySomething' class='txtcontainer'>
				<legend id='textareaLegend' class='topname'>Write a Comment</legend>
				<textarea class='contactTxt' onfocusout='txtUnfocused(this)' onfocus='txtFocused(this)'></textarea>
			</fieldset>
		  </div>
		  <div id='contactUsFormSubmit'><button onclick='getContactData(this)' class='btndemo'>Submit</button></div>
		</div>";
	}else{
		echo "<video controls src='../videos/".$data.".mp4'></video>";
	}
?>