<html>
<head>
<title>mission4</title>
<meta charset="UTF-8">
</head>
<form method="post" action=mission_4_post.php>
【新規投稿】<br>
 名前:
  <input type="name" name="s" value=""><br /><br />
 コメント:
  <input type="text" name="comment" value="comment"><br /><br />
 パスワード:
  <input type="password" name="password" required><br /><br />
	<input type="submit" value="送信">
</form>

<form method="post" action="mission_4_delete.php">
【投稿を削除】<br>
	削除対象番号:
	<input type="text" name="delete" required><br /><br />
	パスワード:
	<input type="password" name="password" required><br /><br />
	<input type="submit" value="削除">
</form>

<form method="post" action="mission_4_update.php">
【投稿を編集】<br>	
	編集対象番号:
	<input type="text" name="edit" required><br /><br />
	パスワード:
	<input type="password" name="password" required><br /><br />
	<input type="submit" value="送信"><br /><br />
</form>

<?php
$dsn = 'データベース名';
$user = 'ユーザー名';
$password = 'パスワード';
$pdo = new PDO($dsn,$user,$password);

//表示機構
echo"【投稿一覧】<br />";
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
//表示機構終了

?>
</html>終了

?>
</html>