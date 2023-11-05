<?php
 $name = $_POST['user_name'];
 $email = $_POST['user_email'];
 $message = $_POST['user_message'];

 $mail->Host = 'smtp.mail.ru';
 $mail->SMTPAuth = true;
 $mail->Username = 'evgennene@mail.ru';
 $mail->Password = 'DEY-Ji4-XWn-tAK';
 $mail->SMTPSecure = 'ssl';
 $mail->Port = 465;


 $mail->setFrom('evgennene@mail.ru');
 $mail->addAddress ('debed65616@rdluxe.com');
 $mail->isHTML(true);

 $mail->Subject = 'Заявка с сайта';
 $mail->Body ='' .$name 'написал сооьщение:' .$message 'Почта:' .$email;
 $mail->AltBody ='';

 if(!$mail->send()){
    echo 'Error';
 } else {
    header('location:thanks.html');
 }
?>