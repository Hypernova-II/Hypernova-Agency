<?php 
$name = $phone = $email = $message = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $name = $_POST['name'];
    $phone = $_POST['phone']; 
    $email = $_POST['email'];
    $message = $_POST['message'];
    $email_from = 'info@hypernova.com';

    $email_subject = "New form submission";

    $email_body = "User Name: $name.\n".
                        "User Number: $phone.\n".
                            "User Email: $email.\n".
                                "User Message: $message.\n";


    $to = "marouane.moumni20@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
 
}
 
?>