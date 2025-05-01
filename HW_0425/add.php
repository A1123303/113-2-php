<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $name=$_POST["name"];
            $email=$_POST["email"];

            $link = mysqli_connect ( //在mysqli前面加@會隱藏錯誤訊息
                'localhost', //MySQL主機名稱
                'root', //使用者名稱
                '', //密碼
                'school', //預設使用者的資料庫名稱   
            );
            mysqli_set_charset($link,"utf8");

            $file="picture\\".$name."_photo".".png";
            if(rename($_FILES["photo"]["tmp_name"], $file)){
                echo "檔案上傳成功<br/>";
            }
            $photo = "https://a1123303.github.io/113-2-php/HW_0425/picture/".$file;

            $sql = "INSERT INTO register (name, email, photo) VALUES ('$name', '$email', '$photo')";
            if(mysqli_query($link, $sql)){
                header("Location:sendMail.php");
            }else{

            }
        ?>
    </body>
</html>