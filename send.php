<?php
session_start();
//Proměné z kontakt.php + App Password

$password = "pryyhuwvqjvapris"; //App password


$jmeno = $_POST["kontaktJmeno"];
$telefon = $_POST["kontaktTelefon"];
$email = $_POST["email"];
$subject = "Dotaz poslal E-mail: $email, Jmeno: $jmeno, Telefon: $telefon";
$message = $_POST["kontaktZprava"];

use PHPMAILER\PHPMailer\PHPMailer;
use PHPMAILER\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["odeslaniDotazu"])){
    //mail
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->Username = 'vinozapletal@gmail.com';
    $mail->Password = $password;

    $mail->setFrom('vinozapletal@gmail.com');
    
    $mail->addAddress('tibor@vinozapletal.cz');
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    echo 
    "
    <script>
    document.location.href = 'index.php';
    </script>
    ";
}



?>