<?php
$servername = "localhost";
$username = "thetfn_dash";
$password = 'MB]e8=Au8$yO';

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());

}
 $query= mysql_select_db('thetfn_claimsdashboard', $conn);
if ($query) {
echo ' connected';

}else{
    echo ' not connected';
}


$sql =mysql_query("SELECT * FROM legal WHERE agg_exp = curdate()");
while($row = mysql_fetch_array($sql))
{
$body = " \n " ."Following are the people whoes subscription will expire tomorrow"." \n "." \n "
          ."First Name : ".$row['title']." \n "
            ."Producer : ".$row['producer'] ." \n "
            ."agg_exp : ".$row['agg_exp'] ." \n " 
            ."agg_date : ".$row['agg_date'] ." \n "."\n". "\n". "==============================". "\n"; 
            $email = 'dashboards@wominternal.com';
  
            
$emailto = $row['email'];
$emailcc = "wom.durga.pavan@gmail.com";
$subject = "Customer Subscription information"; 
$headers = "From: $email" . "\r\n" . "CC: $emailcc";
   $results = mysql_num_rows($sql);
if ($results > 0)
{
    $send = mail($emailto, $subject,$body,$headers); 
    if($send){
        echo 'mail send';
    }else{
        echo 'mail not send';
    }
}
}









