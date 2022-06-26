<?php
    if(isset($_POST['form-submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];

        $FromName = "Shivam Srivatava";
        $FromEmail = "shivamsri142@outlook.com";
        $ReplyTo = $email;
        $toemail = "shivamsri142@gmail.com";
        // $subject = "Shivam Srivastava contact form";
        $message = 'Name: '.$name. '<br>''E-mail: '.$email. '<br>''Subject: '.$subject. '<br>''Message: '.$msg;

        $headers ?= "MIME-Version: 1.0n";
        $headers .= "Content-type: text/html; charset=iso-8859-1n";
        $headers .= "From: ".$FromName." <".$FromEmail.">\n";
        $headers .= "Reply-To: ".$ReplyTo."\n";
        $headers .= "Subject: ".$subject."\n";
        $headers .= "X-Sender: <".$FromEmail.">\n";
        $headers .= "X-Mailer: PHPn";
        $headers .= "X-Priority: 1n";
        $headers .= "Return-Path: <".$FromEmail.">\n";

        if(mail($toemail, $message, $headers,'-f'.$FromEmail) ){
            $hide=1;
          
           echo '<div class="sent-message"><center><span style="font-size:100px;">&#9989;</span></center> <br> Thank you <strong>'.$name.',</strong> Your message has been sent. We will reply as soon as possible. </div> '; 
        }
        else {
          echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
        }
    }
?>