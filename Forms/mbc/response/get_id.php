<?php
function getId(){
	$text = file_get_contents("../current_displayable_id.txt");
	$num = (int)$text;
	$myfile = fopen("../current_displayable_id.txt","w") or die("unable to open");
	fwrite($myfile,$num+1);
	return $num;
}
?>