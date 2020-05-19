<?php

  
         use PHPMailer\PHPMailer\PHPMailer;
         use PHPMailer\PHPMailer\SMTP;
         use PHPMailer\PHPMailer\Exception;

         if(isset($_POST['submit']))
         {
            $error   = '' ;
            $email   = $_POST['email']   ;
            $subject = $_POST['subject'] ;
            $content = $_POST['content'] ;
       
 
            if(empty($email) || empty($subject) || empty($content))
            {
                echo  $error .= 'Place enter infomation full ' ;
            }
           else
            {
                require 'vendor/autoload.php';

                // Instantiation and passing `true` enables exceptions
                $mail = new PHPMailer(true);
                
                try {
                    //Server settings
                    // $mail->SMTPDebug  = true;   
                    // $mail->SMTPDebug  = 2;                 // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'bimmm3008@gmail.com';                     // SMTP username
                    $mail->Password   = 'xtdwchhdstvkyzzj';                               // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                
                    //Recipients
                     $mail->setFrom('bimmm3008@gmail.com', 'Truong Dinh');
                    $mail->addAddress("$email");     // Add a recipient
                
                
                    // $mail->addAddress('ellen@example.com');               // Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');
                
                    // Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                
                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "$subject";
                    $mail->Body    = "$content";
                    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                
                    $mail->send();
                    echo 'Message has been sent';
                    } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }

             }
         }
 
 








// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// Load Composer's autoloader
