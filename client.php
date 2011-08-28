<?php

//////////
////DEMO//
//////////
/////////
$number = $_POST['number-to'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$provider = $_POST['provider'];

include('server.php');

if ($provider == "att"){
	$JD = new JDSIP();
	$JD->att($number,$message,$subject);
	echo "AT&T";
}

else if ($provider == "virgin"){
	$JD = new JDSIP();
	$JD->virgin($number,$message,$subject);
}
else if ($provider == "sprint"){
	$JD = new JDSIP();
	$JD->sprint($number,$message,$subject);
}
else if ($provider == "tmobile"){
	$JD = new JDSIP();
	$JD->tmobile($number,$message,$subject);
}
else if ($provider == "verizon"){
	$JD = new JDSIP();
	$JD->verizon($number,$message,$subject);
}

?>