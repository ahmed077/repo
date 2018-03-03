<?php
session_start();
/*
 * Edit Success Page    : Line 56
 * Edit Mail Message    : Line 66
 * Edit Sending Email   : Line 70
 * Edit Email Subject   : Line 74
 * */
require_once('../vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once '../connect.php';
$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$mobile = filter_var(intval($_POST['mobile']),FILTER_SANITIZE_NUMBER_INT);
$nationalid =filter_var(intval($_POST['nationalid']),FILTER_SANITIZE_NUMBER_INT);
$university = filter_var($_POST['university'],FILTER_SANITIZE_STRING);
$a_status = filter_var($_POST['a_status'],FILTER_SANITIZE_STRING);
$ieeemember = filter_var($_POST['ieeemember'],FILTER_SANITIZE_STRING);
$dateReg = date('Y-m-d',strtotime(filter_var($_POST['date'],FILTER_SANITIZE_STRING)));
$membershipID = filter_var($_POST['membership'], FILTER_SANITIZE_NUMBER_INT);
echo $membershipID . 1;
$code = 18;
$code *= 10000;
$date = date("dm");
$code += $date;
echo "<br>".$code . 2;
echo "<br>".$name."<br>".$email."<br>".$mobile."<br>".$nationalid."<br>".$university."<br>".$a_status."<br>".$ieeemember . 3;

if($con)
{
    echo "<br>Success" . 5;
    $tempquery = "SELECT Number FROM codetemp WHERE Id=0";
    $temp = $con->prepare($tempquery);
    $temp->execute(array());
    $row = $temp->fetchAll(PDO::FETCH_ASSOC)[0];
    $tempid = $row['Number'];
    $code *=1000;
    $code +=$tempid;
    echo "<br>".$code . 6;
    $exc = $con->prepare("INSERT INTO `registeration`(`name`, `email`, `mobile`, `national_id`, `university`, `a_status`, `ieee_member`, `code`)  VALUES (?,?,?,?,?,?,?,?)");
    $exc->execute(array($name,$email,$mobile,$nationalid,$university,$a_status,$ieeemember,$code));
    if($exc->rowCount() > 0)
    {
        echo "Success registration";
        $tempid++;
        $query = $con->prepare("UPDATE codetemp SET Number = ? WHERE Id = 0");
        $query->execute(array($tempid));
        if($query->rowCount() > 0)
        {
            echo "<br>New tempId inserted";
        }
        else {
            echo "<br>ERROR: new tempId ";
        }
        require_once 'success.html';
    }
    else {
        echo "Error Registration";
    }
}
else {
    echo "Erro in connecting to server";
}

$message = htmlspecialchars_decode('Dear '. ucfirst($name) .',<br/>We appreciate your interest to attend MBB’18, Thank you!.<br/>This email is to confirm that your registration was successful.<br/>Your serial code is:<b>' . $code . '</b><br/>Please bring it with you to our registration desk to pay the fees and receive your ticket.<br/>Wish you have a great time with us this year.<br/>Best Regards,<br/>IEEE PUA SB');
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Recipients
    $mail->setFrom('topdollar57@gmail.com');
    $mail->addAddress($email);     // Add a recipient
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mega Event Confirmation';
    $mail->Body    = $message;
    $mail->AltBody = $message;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
header("Location:MBB.php");
exit();
?>
