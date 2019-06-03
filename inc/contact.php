<?php
use PHPMailer\PHPMailer\PHPMailer;

if(!($_POST)){
    
}else{
require 'libraries/phpmailer/src/PHPMailer.php';
require 'libraries/phpmailer/src/Exception.php';
require 'libraries/phpmailer/src/SMTP.php';
}


if($_SERVER["REQUEST_METHOD"] == 'POST'){
    
/////GET USERS IP ADDRESS / COUNTRY//////
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
    

$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
    
$message.="Name : $name \n";
$message.="Email : $email \n";
$message.="Phone : $phone \n";
$message.= "IP: ".getUserIpAddr()."\n";
$message.="Message: ".$_POST['message'];
    
    
    if(!PHPMailer::validateAddress($email)){
       echo "Invalid email address";
       exit;
    }
    
    
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "golferscoach@gmail.com";
		//Password to use for SMTP authentication
		$mail->Password = "ppspkencduybygkb";

        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a 
        $mail->setFrom('golferscoach@gmail.com', 'ONLINE CV ENQUIRY');
        $mail->addAddress('godonweb1@gmail.com', 'Adediran Ayodeji');
        $mail->addReplyTo($email, $name);
        $mail->Subject = 'Online CV Enquiry from '.$name;
        $mail->Body = $message; 
    
    if($mail->send()){
        header("location:index.php?directory=contact&status=thanks");
    }else{
        echo "Mailer Error :".$mail->ErrorInfo;
    }
}

?>






<?php  if($_GET['directory'] == 'contact' && $_GET['status'] == 'thanks'){?>
            <h3 style="margin-left:20%; color:white;">Thanks for your message. I'll reply soon.</h3>
            <div class="contact-details">
               <i class="fab fa-whatsapp"></i>&nbsp;&nbsp;<span>+27739594395</span><br>
                <i class="fas fa-envelope-square"></i>&nbsp;&nbsp;<span>godonweb1@gmail.com</span>
            </div>
<?php } else { ?>

<div class="contact-div">    
           <table class="send-message">
               <form role='form' method='POST'>

                   <tr>
                       <th>
                           <h3>Send a Message</h3>
                           <input type="text" name="name" id="name" placeholder="Name"></th>
                   </tr>
                   
                   <tr>
                       <th>
                           <input type="email" name="email" id="email" placeholder="Email"></th>
                   </tr>
                   
                   <tr>
                       <th>
                           <input type="number" name="phone" id="phone" placeholder="Phone"></th>
                   </tr>
                   
                   <tr>
                       <th>
                           <textarea  name="message" id="message" placeholder="Message"></textarea><br>
                           <button><i class="fas fa-paper-plane"></i></button>
                   </tr>
                </form>
            </table> 
            
            <div class="contact-details">
               <i class="fab fa-whatsapp"></i>&nbsp;&nbsp;<span>+27739594395</span><br>
                <i class="fas fa-envelope-square"></i>&nbsp;&nbsp;<span>godonweb1@gmail.com</span>
            </div>
            
            </div>    
                
<?php } ?>