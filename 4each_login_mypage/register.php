<!DOCTYPE HTML>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="register.css">
    </head>
    
    
<!--内容部分-->   
    <body>
        
<!--ヘッダー部分-->        
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
        
    
<!--フォームの大枠部分-->        
        <main>
            <form action="register_confirm.php" method="post" enctype="multipart/form-data">
                <div class="main_form">
                    <h2>会員登録</h2>
                    
                                        
<!--名前のフォーム--> 
                    <div class="name">
                        <div class="must">必須</div><label>氏名</label>
                        <br>
                        <input type="text" class="formbox" name="name" size="40" required>
                    </div>
                    
<!--メールアドレスのフォーム-->                    
                    <div class="mail">
                        <div class="must">必須</div><label>メールアドレス</label>
                        <br>
                        <input type="text" class="formbox" name="mail" size="40" pattern="^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2-3}$" required>
                    </div>
  
<!--パスワードのフォーム-->                    
                    <div class="password">
                        <div class="must">必須</div><label>パスワード(半角英数字6文字以上)</label>
                        <br>
    <!--正規表現(バリデーション)部分　(PCによって円の表示が違うため注意。-->
    <!--"id"部分はパスワード確認チェック部分。確認とセット！ -->                    
                        <input type="password" class="formbox" name="password" size="40" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
                    </div>
                    
<!--パスワード確認のフォーム-->                    
                    <div class="password">
                        <div class="must">必須</div><label>パスワード確認</label>
                        <br>
    <!--"id"と"oninput"はパスワード確認チェック部分。のちにJavaScriptも記述する。詳細は後程-->                    
                        <input type="password" class="formbox" name="confirm" id="confirm" oninput="ConfirmPassword(this)" size="40" required>
                    </div>
                    
<!--プロフィール写真のフォーム-->                   
                    <div class="picture">
                        <label>プロフィール写真</label>
                        <br>
    <!--ファイル容量のアップロード上限を指定-->                    
                        <input type="hidden" name="max_file_size" value="1000000" />
                        <input type="file" size="40" name="picture">
                    </div>
                    
<!--コメントのフォーム-->
                    <div class="comments">
                        <label>コメント</label>
                        <br>
                        <textarea rows="5" cols="45" name="comments"></textarea>
                    </div>
                    
<!--登録ボタン-->
                    <div class="toroku">
                        <input type="submit" class="submit_button" size="35" value="登録する">
                    </div>
                
                </div>
            
            </form>
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



