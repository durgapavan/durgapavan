<?php

$emailto = 'nikilesh@wominternal.com';
$emailcc = "wom.durga.pavan@gmail.com";
$subject = "Customer Subscription information"; 
$headers = "From: $email" . "\r\n" . "CC: $emailcc";
$result =mail($emailto, $subject,$emailcc,$headers); 

   if($result){
       echo 'mail send';
   }else {
       echo 'mail not send';
   }
   
   ?>