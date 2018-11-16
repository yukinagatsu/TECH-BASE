<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>sample</title>
</head>
<body>

<?php
$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';
$pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

//編集する機構
$id = $_POST[new_edit];
$nm = $_POST[name_edit];
$kome = $_POST[comment_edit] ;
$sql = "update mission4 set name='$nm', comment='$kome' where id = '$id'" ;
$result = $pdo -> query($sql);

//編集する機構終了


//表示する機構
$sql = 'SELECT * FROM mission4 ORDER BY id ASC' ;
$results = $pdo -> query($sql) ;
foreach ($results as $row) {
    //$rowの中にはテーブルのカラム名が入る
    echo $row['id'].',' ;
    echo $row['name'].',' ;
		echo $row['comment'].',' ;
		echo $row['date'].',' ;
		echo $row['password']."<br>";
} ;
//表示する機構終了

?>
</body>
</html>
?>
</body>
</html>