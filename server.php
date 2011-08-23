<?php


//////////////
/* 
include('server.php');

$JD = new JDSIP();

$JD->att('number-to', 'message', 'subject');
/////////
*/

class JDSIP
{	
	var $to;
	var $message;
	var $subject;
	var $headers;
	var $formatted_number;
	var $echo;
	
	public static function att($to, $message, $subject){
	$headers = "From: "."\r\n"."Jay-Designs-SMS \r\n";
	$formatted_number = $to."@txt.att.net";
	mail("$formatted_number", "$subject", "$message", "$headers");
		$echo = "Sent To an AT&T Mobile Phone";
		return $echo;
	}

	public static function virgin($to, $message, $subject){
	$headers = "From: "."\r\n"."Jay-Designs-SMS \r\n";
	$formatted_number = $to."@vmobl.com";
	mail("$formatted_number", "$subject", "$message", "$headers");
		$echo = "Sent To an Virgin Mobile Phone";
		return $echo;
	}
	public static function sprint($to, $message, $subject){
	$headers = "From: "."\r\n"."Jay-Designs-SMS \r\n";
	$formatted_number = $to."@messaging.sprintpcs.com";
	mail("$formatted_number", "$subject", "$message", "$headers");
		$echo = "Sent To an Sprint Mobile Phone";
		return $echo;
	}

	public static function tmobile($to, $message, $subject){
	$headers = "From: "."\r\n"."Jay-Designs-SMS \r\n";
	$formatted_number = $to."@tomomail.net";
	mail("$formatted_number", "$subject", "$message", "$headers");
		$echo = "Sent To an T-Mobile Mobile Phone";
		return $echo;
	}

	public static function verizon($to, $message, $subject){
	$headers = "From: "."\r\n"."Jay-Designs-SMS \r\n";
	$formatted_number = $to."@vtext.com";
	mail("$formatted_number", "$subject", "$message", "$headers");
		$echo = "Sent To an Verizon Mobile Phone";
		return $echo;
	}  


}

?>
