<?php

$email= $_POST['email'];

$to = "fabiannetto666@gmail.com";
$subject = "Mail From Client";
$txt ="Email = " . $email ;
if($email!=NULL){
    mail($to,$subject,$txt);
}
header("Location:index10.php");
?>