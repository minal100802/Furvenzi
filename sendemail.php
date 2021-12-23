<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPmailer/Exception.php';
require_once 'PHPmailer/PHPmailer.php';
require_once 'PHPmailer/SMTP.php';

$mail = new PHPmailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'furvenzi@gmail.com';
        $mail->Password = 'jeetnahaibhai';
        $mail->SMTPSecure = PHPmailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('furvenzi@gmail.com');
        $mail->addAddress('furvenzi@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message Received(Contact Page)';
        $mail->Body = "<h3>Name: $name <br>Email: $email <br>Message: $message</h3>";

        $mail->send();
        $alert = '<div class="alert-success">
                    <span>Message Sent! Thank You for contacting Us.</span>
                    </div>';
    }catch(Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                    </div>';
    }
}
?>