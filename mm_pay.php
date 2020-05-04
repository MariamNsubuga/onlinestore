<?php  //Testing Mobile money incoming 
if(isset($_POST['submit'])){
 $client_id="09f5b388c45fdb53";
 $secrete_id="59d0afda31b2175a";
 $amount=1000;
 $phone=$_POST["contact"];
 echo $phone;
 //creating reference number randomly
   $length = 4;
    $ref = '';
    for ($i=0;$i<$length;$i++){
        $ref .= rand(1, 9);

    }
 
 $url='https://www.easypay.co.ug/api/'; 
 $payload = array( 'username' => $client_id, 
 'password' => $secrete_id, 
 'action' => 'mmdeposit', 
 'amount' => $amount, 
 'phone'=>$phone, 
 'currency'=>'UGX', 
 'reference'=>$ref, 
 'reason'=>'Testing MM DEPOSIT' 
 ); 
  
 //open connection 
 $ch = curl_init(); 
  
 //set the url, number of POST vars, POST data 
 curl_setopt($ch,CURLOPT_URL, $url); 
 curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($payload)); 
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,15); 
 curl_setopt($ch, CURLOPT_TIMEOUT, 400); //timeout in seconds 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 //execute post 
 $result = curl_exec($ch); 
  
 //close connection 
 curl_close($ch); 
 print_r(json_decode($result)); 
}
 ?> 