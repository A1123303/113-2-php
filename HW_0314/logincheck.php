<?php
    session_start();
?>

<?php
    $defaultAdminName="admin";
    $defaultAdminPwd="admin123";
    $defaultUserName="user";
    $defaultUserPwd="user123";
    
    $adminName=$_POST["Name"];
    $adminPwd=$_POST["Pwd"];
    $userName=$_POST["Name"];
    $userPwd=$_POST["Pwd"];

    /*
    echo $adminName;
    echo "<br/>";
    echo $adminPwd;
    echo "<br/>";
    echo $userName;
    echo "<br/>";
    echo $userPwd;
    echo "<br/>";
    */

    if($defaultAdminName==$adminName && $defaultAdminPwd==$adminPwd){
        echo "Admin 登入成功";
        $_SESSION["admin"]="1";
        $cookiedate=strtotime("+60 seconds",time());
        setcookie("Name",$defaultAdminName,$cookiedate);
        header("Location:活動行程與報名表.php");
    }else if($defaultUserName==$userName && $defaultUserPwd==$userPwd){
        echo "User 登入成功";
        $_SESSION["user"]="1";
        $cookiedate=strtotime("+10 seconds",time());
        setcookie("Name",$defaultUserName,$cookiedate);
        header("Location:活動行程與報名表.php");
    }else{
        echo "登入失敗，將在 3 秒後返回登入頁面......";
        header("Refresh:3;url='login.php'");
    }
?>