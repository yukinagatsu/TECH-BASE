<!DOCTYPE html>
<head>
<meta charset='UTF-8'>
<title>sample</title>
</head>
<body>
<form method='POST' action='mission4_post.php'>
 名前;
<input type='name' name='s'><br /><br />
 コメント;
<input type='text' name='comment'><br /><br />
 パスワード:
<input type="password" name="password" required><br /><br />
<input type='submit' value='送信'>
</form>


<?php
$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';
$pdo = new PDO($dsn,$user,$password);


$sql = $pdo -> prepare("INSERT INTO mission4 (name, comment, date, password) VALUES (:name, :comment, :date, :password)") ;
$sql -> bindParam(':name', $_POST[s], PDO::PARAM_STR) ;
$sql -> bindParam(':comment', $_POST[comment], PDO::PARAM_STR) ;
$date =date("Y/m/d H:i");
$sql -> bindParam(':date', $date, PDO::PARAM_STR);
$sql -> bindParam(':password', $_POST[password], PDO::PARAM_STR);


$sql -> execute() ;	//execute=実行

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

?>

</body>
</html>>

</body>
</html>