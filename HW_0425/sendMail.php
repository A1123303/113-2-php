<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $link = mysqli_connect ( //在mysqli前面加@會隱藏錯誤訊息
                'localhost', //MySQL主機名稱
                'root', //使用者名稱
                '', //密碼
                'school', //預設使用者的資料庫名稱   
            );
            $sql = "SELECT * FROM register";
            mysqli_set_charset($link,"utf8");
            $result = mysqli_query ( $link, $sql );
            $row = mysqli_fetch_assoc ( $result );

            $name=$row["name"];
            $email=$row["email"];
            $photo=$row["photo"];

            $to=$name;
            $subject="恭喜註冊成功";
            $content=$name.": <br/>恭喜註冊成功<br/>".$photo;

            echo "To: ".$to."<br/>";
            echo "Subject: ".$subject."<br/>";
            echo "Mail: ".$content."<br/>";

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'ptyhon.test@gmail.com';                //SMTP username
                $mail->Password   = 'yldq kmcx doro evor';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('ptyhon.test@gmail.com', 'Mailer');
                //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
                $mail->addAddress($email);     //Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->setLanguage('zh', 'PHPMailer/language/directory/');
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "=?UTF-8?B?".base64_encode($subject)."?=";
                $mail->Body    = $content;
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        ?>
    </body>
</html>

