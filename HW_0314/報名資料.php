<?php
    session_start();
?>

<html>
    <head>
        <title>報名資料</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="#F5FFE8">
        <?php
            if(isset($_SESSION["admin"])){
                echo "<h2>報名資料</h2>";

                $uName = $_POST["uName"];
                $uID = $_POST["uID"];
                $uPhone = $_POST["uPhone"];
                $uEmail = $_POST["uEmail"];
                $uGender = $_POST["uGender"];
                $uBirth = $_POST["uBirth"];
                $uAge = $_POST["uAge"];
                $uLike = $_POST["uLike"];
                $uInterests = $_POST["uInterests"];
                $uCity = $_POST["uCity"];
                $uComment = $_POST["uComment"];
                
                echo "您的姓名：".$uName."<br/>";
                echo "您的學號：".$uID."<br/>";
                echo "您的手機號碼：".$uPhone."<br/>";
                echo "您的電子郵件：".$uEmail."<br/>";
                echo "您的性別：".$uGender."<br/>";
                echo "您的生日：".$uBirth."<br/>";
                echo "您的年齡：".$uAge."<br/>";
                echo "您的積極度：".$uLike."<br/>";

                $x = count($uInterests);
                if ($x == 0) {
                    
                } else {
                    echo "您的興趣有：";
                    for ($i = 0 ; $i < $x ; $i++) {
                        if ($i == $x-1) {
                            echo $uInterests[$i];
                        } else {
                            echo $uInterests[$i]."、";
                        }
                    }
                    echo "<br/>";
                }
                echo "您的家鄉：".$uCity."<br/>";
                echo "您的備註：";
                if ($uComment != null) {
                    echo 
                    "<br/>----------------------------------------".
                    "<br/>".nl2br($uComment)."<br/>".
                    "----------------------------------------"."<br/>";
                } else {
                    echo $uComment."<br/>";
                }
            
                echo "<p>";
                echo "<a href='活動行程與報名表.php'>回上一頁</a>";
                echo "<br/>";
                echo "<a href='迎新活動.html'>回首頁</a>";
                echo "<br/>";
                echo "<a href='logout.php'>登出<a>";
            }else if(isset($_SESSION["user"])){
                $uSecret = $_POST["uSecret"];
                echo "<h2>報名成功！</h2>";
                echo "【".$uSecret."】";

                echo "<p>";
                echo "<a href='活動行程與報名表.php'>回上一頁</a>";
                echo "<br/>";
                echo "<a href='迎新活動.php'>回首頁</a>";
                echo "<br/>";
                echo "<a href='logout.php'>登出<a>";
            }else{
                echo "<h2>非法侵入者！</h2>";
                echo "將在 3 秒後返回登入頁面......";
                header("Refresh:3;url='login.php'");
            }
        ?>
    </body>
</html>