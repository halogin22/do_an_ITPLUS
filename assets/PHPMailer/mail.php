<?php

    include_once 'class.phpmailer.php';
    include_once 'class.smtp.php';
    $mail = new PHPMailer(true); 
    
       try {
    //Server settings
    $mail->CharSet  =  'UTF-8';
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vuthanhson041995@gmail.com';                     //SMTP username
    $mail->Password   = 'awfdyqqgnxmqilrq';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('systemtest@gmail.com', 'Thông báo đơn hàng mới ');
    $mail->addAddress($email, $name);     //Add a recipient
     
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thông báo đơn hàng';
    $mail->Body    =  $note;
   
    $mail->send();
    
} catch (Exception $e) {
    echo "lỗi: {$mail->ErrorInfo}";
}
    

 ?>
