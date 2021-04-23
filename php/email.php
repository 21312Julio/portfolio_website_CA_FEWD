<?php


if(isset($_POST['email']) && !empty($_POST['email'])){

$name = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$message = addcslashes($_POST['message']);

$to = "julio.beyeler@gmail.com";
$subject = "Contact - Website";
$body = "Name: ".$name."\r\n".
        "Email: ".$email."\r\n".
        "Message: ".$message;
$header = "From:julio.beyeler@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
                "X=Mailer:PHP/".phpversion();


}

?>