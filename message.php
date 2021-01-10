<!DOCTYPE html>


<HTML lang=FR>

<HEAD>

<link href="./style/style.css" rel="stylesheet" type="text/css">

</HEAD>

<BODY>

<P id="message">
    <?php
    
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        require './PHPMailer/src/Exception.php';
        require './PHPMailer/src/PHPMailer.php';
        require './PHPMailer/src/SMTP.php';

        $age=0;
        $age=(int)$_POST['age'];
        $name=htmlspecialchars($_POST['name']);

        if ((strcasecmp($name,"Marc")==0) and ($age==45)) {
        echo nl2br(" M agnifique regard aspirant dans les abysses tel le maelstro M  \r\n
        A dorable sourire plein de tendresse qui m'illumin A\r\n
        R avissant visage qui a pu me touche R \r\n
        C harmant homme dont on tombe accro C\n \n 
        
        I miss you... Rappelle-moi je t'en pries... \n");
    
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.ionos.fr';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'sylvain@sylvainmillet.com';                     // SMTP username
            $mail->Password   = 'Jo@chim73200';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('happy@love.fr', 'Marc Morel poet');
            $mail->addAddress('kira69007@gmail.com', 'Marc Morel poet');     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Marc a lu';
            $mail->Body    = 'Lu';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


        }
        else {
            echo ("Joyeux ". ($age+1) . "ème anniversaire en 2021 cher " . $name);

        }


    ?>
</P>
</BODY>

</HTML>