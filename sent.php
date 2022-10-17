<?php
session_start();
ob_start();
require_once('db_controler.php');
if(isset($_POST['sent'])){
   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $desc=$_POST['message'];

    $status=false;
    if(empty($name)){
        $_SESSION['name_error']="name is requeried";
        $status=true;
    }
    if(empty($email)){
        $_SESSION['email_error']="name is requeried";
        $status=true;
    }
    if(empty($desc)){
        $_SESSION['desc_error']="name is requeried";
        $status=true;
    }

    if($status){
        header('location: index.php');
    }

    $insert="INSERT INTO sent_message(name,email,message)
    values('$name','$email','$desc')";
    $query=mysqli_query($con,$insert);
   
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mahababurrahaman2014@gmail.com
    ';                                                   //SMTP username
    $mail->Password   = 'fmczqtajrhshepzy';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;             

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('mahababurrahaman3@gmail.com', 'Mahababub');     //Add a recipient
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Message';
    $mail->Body    = "
    <h1>Name: $name</h1>
    <H2>Email: $email </H2>
    <h3>Message: $desc</h3>
    ";
    $mail->AltBody ='This is body';

    $mail->send();
    echo 'Message has been sent';
    $_SESSION['suce']="Succeefully Send";
    header('location: index.php#contact');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}