<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$Code = substr(number_format(time()* rand(), 0, '', ''), 0,6);


if(isset($_POST["submit"]))
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'lodgegohotel@gmail.com';
    $mail->Password = 'jgcq fnhd hrie sbss';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('lodgegohotel@gmail.com');

    $mail->addAddress($_POST["Email"]);

    $mail->isHTML(true);

    $mail->Subject = 'Booking Confirmation For '. '' .   $_POST["Last_Name"] . '' .  $_POST["First_Name"];
    $mail->Body = 'Thank you for booking LodgeGo Hotel! Your confirmation code is' . '' .  $Code;

    $mail->send();

    echo
    "
    <script>
    alert('Mail sent successfully');
    document.location.href = 'index.php';
    </script>
    ";


}

?>