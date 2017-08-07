<?php


$email=$_REQUEST['email'];
 $to = $email;
   $from = "Headjack@rtgstudios.in";
   $subject = "Your Headjack Coupoun Code ";
   



$message ="



DEAR User


Your Headjack Coupoun code is $rand

Get $value% Discount on Your First Purchase On Headjack


Just Stay Tuned And Wait For The Best Sound Experience For Your Soul


We Are Eveready To Help  







  
For Queries Mail To Us On support@Headjack.in 

Made With Love<3 in India


  
            
(Headjack India)




Powered By R.T.G STUDIOS 






  ";
    
    












   



   



$header = "Headjack India \r\n";
   $retval = mail ($to,$subject,$message,"From: $from\n");
   ?>