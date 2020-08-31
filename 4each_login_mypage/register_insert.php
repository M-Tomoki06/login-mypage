<?php
mb_internal_encoding("utf8");

//DB接続
$pdo = new PDO("mysql:dbname=morinaga; host=localhost;","root","");

//prepared statementでSQL文の型を作る
$stmt = $pdo -> prepare("insert into login_mypage(name, mail, password, picture, comments) 
    values(?,?,?,?,?)");

//bindvalueメソッドでパラメータをセット
$stmt -> bindValue(1,$_POST['name']);
$stmt -> bindValue(2,$_POST['mail']);
$stmt -> bindValue(3,$_POST['password']);
$stmt -> bindValue(4,$_POST['path_filename']);
$stmt -> bindValue(5,$_POST['comments']);

//executeでクエリを実行
$stmt -> execute();
//安全のため、処理が終わったらDBから切断
$pdo = NULL;

header("Location:after_register.html");
?>
