<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['content'];
$phone = $_POST['phone'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
//$today = getdate();
//$mydate=getdate(date("U"));
$date = new DateTime();
$dateString = $date->format('d/m/Y');
print_r($dateString);
//$dateString =  "$mydate[mday]/$mydate[mon]/$mydate[year]";
//echo $dateString;
//print_r($today[mday] + $today[month] + $today[year]);
$email_from = $visitor_email;//<== update the email address
$email_subject = "Khách hàng liên hệ_".$dateString."_ Họ tên: ".$name;
$email_body = "Họ tên: $name.<br/>". "Điện thoại: $phone.<br/>"."Email: $visitor_email.<br/>".
    "Nội dung: $message";
    
//$to = "binhhv@live.com";//<== update the email address
//$headers = "From: $email_from \r\n";
//$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!

//$to      = 'binhhv@live.com';
//$subject = 'the subject';
//$message = 'hello';
//$headers = 'From: hvbinh1990@gmail.com' . "\r\n" .
//    'Reply-To: hvbinh1990@mail.com' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//mail($to, $subject, $message, $headers);


//mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
//header('Location: index.php');

function send_mail($email_from,$name,$email_subject,$email_body)
{
    require("phpmailer/PHPMailerAutoload.php");
    require("phpmailer/class.phpmailer.php");

    $mail = new PHPMailer();

    $mail->CharSet="utf-8";
    $mail->IsSMTP();                                      // set mailer to use SMTP
    $mail->Host = "host4.inet.vn"; //"smtp.live.com";//
    //$mail->Port=465;// specify main and backup server
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    $mail->Username = "contact@anhsanghoanmy.com";  // SMTP username
    $mail->Password = "Hoanmy@123"; // SMTP password

    $mail->From = $email_from;
    $mail->FromName = $name;
    $mail->AddAddress("contact@anhsanghoanmy.com", $name);
    //$mail->AddCC('hvbinh1990@gmail.com', 'Ánh sáng hoàn mỹ');
    $mail->WordWrap = 50;                                 // set word wrap to 50 characters
    $mail->IsHTML(true);                                  // set email format to HTML (true) or plain text (false)

    $mail->Subject = $email_subject;
    $mail->Body    = $email_body;
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";    
    //$mail->AddEmbeddedImage('images/logo.png', 'logo', 'logo.png');
   // $mail->addAttachment('files/file.xlsx');

    if(!$mail->Send())
    {
       echo "Message could not be sent. <p>";
       echo "Mailer Error: " . $mail->ErrorInfo;
       exit;
    }

   // echo "Message has been sent";
}

send_mail($email_from,$name,$email_subject,$email_body);
header('Location: index.php');
// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 