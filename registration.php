<?php 

require_once 'Mailer/src/Exception.php';
require_once 'Mailer/src/PHPMailer.php';
require_once 'Mailer/src/SMTP.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    $mail = new PHPMailer(true);
    
    $alert = '';
    
    if(isset($_POST['send-link'])){
            $email = $_POST['email'];
            $Name = $_POST['name'];
            $message = $_POST['message'];
    
    
            
            try{

                $mail->isSMTP();
                $mail->Host ='smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'michaelarianvelasco@gmail.com';
                $mail->Password = 'gldvfxejwyofjvhq';
                $mail->SMTPSecure = 'tls';
                $mail->Port = '587';
    
                $mail->setFrom('michaelarianvelasco@gmail.com');
                $mail->addAddress('michaelarianvelasco@gmail.com');
    
                $mail->isHTML(true);
                $mail->Subject = 'New Message!';
                $mail->Body = "<div>Name: $Name </div> <br> E-mail: $email <br>Message: $message";
    
                $mail->send();
                $alert = "<div class='alert-success'><span>Message sent</span></div>";
                echo "           <script>
                alert('Message Sent !');
                window.location.href='index.php'                
                </script>";
            }catch(Exception $e){
                
            }
            
    }
    ?>
    

    