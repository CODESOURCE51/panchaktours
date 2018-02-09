<?php

error_reporting(0);

$place = $_REQUEST['place'];

$start = $_REQUEST['start'];

$end = $_REQUEST['end'];

$room = $_REQUEST['norooms'];

$guest = $_REQUEST['noguest'];
$email = 'noreply@panchaktoursandtravels.com';

$to="panchaktours_travels@yahoo.com";

$subject= $name." Posted a QUERY in Panchak Tours and Travels";

$message = '<table align="center" width="700" style="border:outset #B1F05E;">

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><strong>Query Details</strong></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;">Place Name</span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$place.'</span></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;">Check In Date</span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$start.'</span></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal; width:150px;">Check Out Date</span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$end.'</span></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal; width:150px;"> No of Rooms</span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$room.'</span></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal; width:150px;">No of Guest </span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$guest.'</span></td>

  </tr>

 

</table>';

$headers = "From: ".$email."\r\nReply-To: noreply@panchaktoursandtravels.com";

$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=iso-8859-1";

mail($to, $subject, $message, $headers);	

header('Location: http://panchaktoursandtravels.com/index.php?p=s');

?>





