<?php
session_start();
if(isset($_SESSION['id'])) {
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    
    <body>
    
<!--ヘッダー部分-->        
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
<!--メイン部分-->
        <main>
             <form action="mypage.php" method="post">
                <div class="form_contents">
                    
<!--メールアドレスのフォーム-->
                    <div class="mail">
                        <label>メールアドレス</label>
                        <br>
                        <input type="text" class="formbox" name="mail" size="40" value="<?php if(isset($_COOKIE['login_keep'])) {
                            echo $_COOKIE['mail'];
                        } ?>">
                    </div>
                    
                    <div class="password">
                        <label>パスワード</label>
                        <br>                
                        <input type="password" class="formbox" name="password" size="40" value="<?php if(isset($_COOKIE['login_keep'])) {
                            echo $_COOKIE['password'];
                        } ?>">
                    </div>
                    
                    <div class="login_check">
                        <label><input type="checkbox" class="formbox" size="35" value="login_keep" name="login_keep" <?php if(isset($_COOKIE['login_keep'])) {
                            echo "checked='checked'";
                        }
                        ?> >ログイン状態を保持する</label>
                    </div>
                    
                    <div class="loginbutton">
                        <input type="submit" class="submit_button" size="35" value="ログイン">
                    </div>
                
                 </div> 
             </form>    
        </main>
    
<!--footerの部分-->
        <footer>
            © 2018 InterNous.inc. All rights reserved
        </footer>
    
    </body>
</html>    