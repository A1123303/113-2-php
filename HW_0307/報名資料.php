<html>
    <head>
        <title>報名資料</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="#F5FFE8">
        <h2>報名資料</h2>

        <?php
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
            $uSecret = $_POST["uSecret"];
            
            echo "您的姓名：".$uName."<br/>";
            echo "您的學號：".$uID."<br/>";
            echo "您的手機號碼：".$uPhone."<br/>";
            echo "您的電子郵件：".$uEmail."<br/>";
            echo "您的性別：".$uGender."<br/>";
            echo "您的生日：".$uBirth."<br/>";
            echo "您的年齡：".$uAge."<br/>";
            echo "您的積極度：".$uLike."<br/>";

            $x = count($uInterests); //計算陣列長度
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
            
            echo "【".$uSecret."】";
        ?>
        <p>
        <a href="活動行程與報名表.php"target="new">回上一頁</a>
        <br/>
        <a href="迎新活動.html"target="new">回首頁</a>
    </body>
</html>