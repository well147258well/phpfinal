<?php
$sender=$_POST['sender'];
$sname=$_POST['sname'];
$receiver=$_POST['receiver'];
$title=$_POST['title'];
$messenger=$_POST['messenger'];

require 'PHPMailer-master/class.phpmailer.php';
require("PHPMailer-master/PHPMailerAutoload.php");
$mail= new PHPMailer();   
$mail->IsSMTP();                          
        
$mail->SMTPAuth = true;                         
$mail->SMTPSecure = "ssl";                         
$mail->Host="smtp.gmail.com";                   
$mail->Port = 465;                             
$mail->CharSet = "utf-8";                    
$mail->Encoding = "base64";
$mail->WordWrap = 50;                          
      
$mail->Username = "well147258well@gmail.com";         
$mail->Password = "well963852well";              
$mail->From = "$sender";
$mail->FromName = "$sname";

$mail->IsHTML(true); 
$mail->Subject = "$title";  
$mail->Body = "$messenger"; 
$mail->AddAddress("$receiver","test"); 
if($mail->Send()){
	echo "寄信成功";
}else{
	echo "寄信失敗";
}
?>