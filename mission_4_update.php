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
$pdo = new PDO($dsn,$user,$password);
//データベースに編集番号があるのかどうかを参照する
$id=$_POST[edit] ; 
$sql = "SELECT * FROM mission4 WHERE id = $id";
$results = $pdo ->query($sql) -> fetch(PDO::FETCH_ASSOC);

$results["id"]; //一致する投稿番号、なければ NULL
$number = $results["password"];

if($number == NULL){
 echo'投稿がありません';
}else{
			if($_POST[password]  == $number) {	//パスワードが合っている場合

			//編集する機構
			$id = $_POST[edit];
			$nm = $_POST[name] ; 
			$kome = $_POST[comment] ; 
			$sql = "update mission4 set name='$nm', comment='$kome' where id = '$id'" ;
			$result = $pdo -> query($sql);
?><!PHP命令の分離 ->
				<!編集フォーム->
				<form method="post" action=mission_4_update2.php>
				<input type="hidden" name="new_edit" value="<?php echo $id; ?>"><br>
				名前:
				<input type="text" name="name_edit" value="<?php echo $nm; ?>"><br> 
				<br>
				コメント:
				  <input type="text" name="comment_edit" value="<?php echo $kome; ?>"><br>
				<br>
				<input type="submit" value="送信">
				</form>
				<!編集フォーム終了->

<?php	//PHP命令の再開
		} else {	//パスワードが間違っている場合
							echo 'パスワードが間違っています';
		}
}
//編集する機構終了
?>

</body>
</html>>

</body>
</html>