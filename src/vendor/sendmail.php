<?php

include './database.php';

$db->connect($host, $user, $pwd, $db_name);

$result = $db->query("SELECT * FROM `config`");

$mailReciever;
$mailSender;
$appPwd;

while($row = $result->fetch_array()) {
    $mailReciever = $row['mailReciever'];
    $mailSender = $row['mailSender'];
    $appPwd = $row['mailPassword'];
}

// MAIL SENDER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../plugins/phpmailer/src/Exception.php';
require '../plugins/phpmailer/src/PHPMailer.php';
require '../plugins/phpmailer/src/SMTP.php';


if(isset($_POST['send'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    $mail = new PHPMailer(true);

    $mail->isSMTP();// Set mailer to use SMTP
    $mail->CharSet = "utf-8";// set charset to utf8
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted
    
    $mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
    $mail->Port = 587;// TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->isHTML(true);// Set email format to HTML
    
    $mail->Username = $mailSender;// SMTP username
    $mail->Password = $appPwd;// SMTP password
    
    $mail->setFrom($mailSender, 'Тестовый аккаунт');//Your application NAME and EMAIL
    $mail->Subject = 'Тестовое сообщение';//Message subject
    $mail->MsgHTML(
    "
    <h1>Это сообщение может форматироваться</h1>
    <table style='background: #1E1E1E; color: white;'>
        <tr class='r' style='margin: 0; background: #1E1E1E;'>
            <td style='padding: 2px; margin: 0;  background: #676767'>Имя</td>
            <td style=' padding: 2px; margin: 0; background: #505050;'>Номер</td>
            <td style=' padding: 2px; margin: 0; background: #676767'>Почта</td>
            <td style=' padding: 2px; margin: 0; background: #505050;'>Текст</td>
        </tr>
        <tr class='t' style='margin: 0;'>
            <td style=' padding: 2px; margin: 0; background: #505050;'>$name</td>
            <td style=' padding: 2px; margin: 0; background: #676767'>$phone</td>
            <td style=' padding: 2px; margin: 0; background: #505050;'>$email</td>
            <td style=' padding: 2px; margin: 0; background: #676767'>$text</td>
        </tr>
    </table>
    "
    );// Message body
    $mail->addAddress($mailReciever);// Target email
    
    $mail->send();
    print("Отправлено!");
}