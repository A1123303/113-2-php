<html>
    <head>
        <title>登入</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="#F5FFE8">
        <center>
            <?php
                if(isset($_COOKIE["Name"])){
                    echo "歡迎回來，".$_COOKIE["Name"];
                    echo "<br/>";
                }
            ?>
            [提示]本系統有使用 Cookie: "Name"
            <h1>請登入以使用本系統</h1>
            <form action="logincheck.php" method="POST">
                <?php
                    if(isset($_COOKIE["Name"])){
                        echo "請輸入帳號名稱：<input type='text' name='Name' value='".$_COOKIE["Name"]."' required><br/>";
                    }else{
                        echo "請輸入帳號名稱：<input type='text' name='Name' required><br/>";
                    }
                ?>
                請輸入您的密碼：<input type="password" name="Pwd" required><br/>
                <input type="submit">
            </form>

            <?php
                date_default_timezone_set("Asia/Taipei");
                // echo time();
                // echo "<br/>";
                echo "現在時間：";
                echo date("Y-m-d H:i:s");
                /*
                echo header("Refresh:15");
                echo "<br/>";
                echo "（每 15 秒刷新一次頁面）"
                */
                echo "<br/>";
                echo "<a href='迎新活動.php'>回首頁</a>";
            ?>
        </center>
    </body>
</html>
