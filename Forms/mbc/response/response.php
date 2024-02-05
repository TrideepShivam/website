<?php
require('./get_id.php');
$r=json_decode($_REQUEST['v']);
$text ="NAME: ".$r->name."\nDOB: ".$r->dob."\nWhatsapp: ".$r->whatsapp."\nPartner: ".$r->partner."\nP_DOB: ".$r->pdob."\nP_Whatsapp: ".$r->pwhatsapp."\nPayment_Mode: ".$r->paymentMode."\nPayment_status: 'unpaid'";
$id="MBC".getId()."22";
$myfile = fopen("../data/".$id.".txt","w") or die("unable to open");
fwrite($myfile,$text);
$online="<li>Send Your <b class='focus'>Entry Id</b> with <b class='focus'>Payment Screenshot</b> to the <b>Managers</b> on Whatsapp no. <b class='focus'>7992467543</b>.</li>";
$offline="<li>Contact any of the <b class='focus'>Manager</b> and hand over the <b class='focus'>FEES</b>.</li>
<li>Other wise visit <b class='focus'>Tarun India Institute</b> and hand over the <b class='focus'>FEES</b> there. Address is mentioned <a style='color:tomato;text-decoration:none;' href='#contact'>Below</a>.</li>";
$r->paymentMode=='online'?$step=$online:$step=$offline;
$response = "<div id='responseDiv'>
				<p>Thank You For <b>Registering<b></p>
				<h1>".$r->name."</h1>
				<p>and</p>
				<h1>".$r->partner."</h1>				
				<p class='focus'>Your Entry ID is<p>
				<button id='uid'>".$id."</button>
				<fieldset id='nextStep'>
					<legend>Next Steps:</legend>
					<ol>
						".$step."
						<li>After <b class='focus'>Payment</b> Get your <b class='focus'>Entry Ticket</b> on your Registered <b>Whatsapp number</b> on <b class='focus'>11/02/2022</b></li><li>If still gets trouble, Go for <a id='helpFromResponse' onclick='openHelp()'>Help</a></li><li>For more Details please <b class='focus'>Contact us</b> on any <b>given number</b>.</li>
					</ol>
				</fieldset>
			</div>";
echo $response;
?>