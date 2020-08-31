<?php
mb_internal_encoding("utf8");

//仮保存されたファイル名で画像ファイルを所持(サーバーへ仮アップロードされたディレクトリとファイル名)
$temp_pic_name = $_FILES['picture']['tmp_name'];

//元のファイル名で画像を取得
$original_pic_name = $_FILES['picture']['name'];
$path_filename ='./image/'.$original_pic_name;

//仮保存のファイル名を、imageフォルダに、元のファイル名で移動させる
move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);
?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    
    
<!--内容部分-->   
    <body>
        
<!--ヘッダー部分-->        
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
        
    
<!--大枠部分-->        
        <main>
            <div class="confirm">
                <div class="main_form">
                    <h2>会員登録 確認</h2>
                    <p>こちらの内容で登録しても宜しいでしょうか？</p>
                                        
<!--名前の確認--> 
                    <div class="name">
                        氏名: <?php echo $_POST['name']; ?>
                    </div>
                    
<!--メールアドレスの確認-->                    
                    <div class="mail">
                        メール: <?php echo $_POST['mail']; ?>
                    </div>
  
<!--パスワードの確認-->                    
                    <div class="password">
                        パスワード: <?php echo $_POST['password']; ?>
                    </div>
                    
<!--プロフィール写真の確認-->                   
                    <div class="picture">
                        プロフィール写真: <?php echo $_FILES['picture']['name']; ?>
                    </div>
                    
<!--コメントの確認-->
                    <div class="comments">
                        コメント: <?php echo $_POST['comments']; ?>
                    </div>
                    
<!--ボタン2種-->
                    <div class="buttons">
                        <div class="back_button">
                            <a href="register.php">戻って修正する</a>
                        </div>
                        
                        <div class="submit">
                            <form action="register_insert.php" method="post"> 
                                <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                                <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                                <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                                <input type="hidden" value="<?php echo $path_filename; ?>" name="path_filename">
                                <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                                <input type="submit" class="submit_button" size="35" value="登録する">
                            </form>   
                        </div>    
                    </div>
                
                </div>
            </div>    
            
        </main>
        
<!--フッター部分-->        
        <footer>
            © 2018 InterNous.inc. All rights reserved
        </footer>
        
<!--JavaScriptの関数で記述されたパスワード確認チェック部分。詳細はまた別参照-->
        <script>
            function ConfirmPassword(confirm) {
                var input1 = password.value;
                var input2 = confirm.value;
                if (input1 != input2) {
                    confirm.setCustomValidity("パスワードが一致しません。");
                } else {
                    confirm.setCustomValidity(");
                }
            }
        </script>
        
        
    </body>
</html>

