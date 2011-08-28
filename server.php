<?php

/*

THIS SCRIPED IS PART OF THE J-D:SIP PROJECT {PRIVATE} AND SALL NOT BE COPED
THIS IS OWNED and BUILT BY JAY-DESIGNS

MADE BY Jason ******* (OWNER)



BUILT ON MAC OS X Leopard
EDITOR:TextMate

*/
######################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################

/* 
//////////////
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
	public static function boost_mobile($to, $message, $subject){
	$headers = "From: "."\r\n"."Jay-Designs-SMS \r\n";
	$formatted_number = $to."@myboostmobile.com";
	mail("$formatted_number", "$subject", "$message", "$headers");
		$echo = "Sent To an Boost Mobile Phone";
		return $echo;
	}
	public static function cricket($to, $message, $subject){
	$headers = "From: "."\r\n"."Jay-Designs-SMS \r\n";
	$formatted_number = $to."@mms.mycricket.com";
	mail("$formatted_number", "$subject", "$message", "$headers");
		$echo = "Sent To an Cricket Mobile Phone";
		return $echo;
	}
	public static function metropcs($to, $message, $subject){
	$headers = "From: "."\r\n"."Jay-Designs-SMS \r\n";
	$formatted_number = $to."@mymetropcs.com";
	mail("$formatted_number", "$subject", "$message", "$headers");
		$echo = "Sent To an MetroPCS Phone";
		return $echo;
	}
	public static function tracfone($to, $message, $subject){
	$headers = "From: "."\r\n"."Jay-Designs-SMS \r\n";
	$formatted_number = $to."@mmst5.tracfone.com";
	mail("$formatted_number", "$subject", "$message", "$headers");
		$echo = "Sent To an TracFone Phone";
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
