<!DOCTYPE html>
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

$id=$_POST['delete'] ; 
$sql = "SELECT * FROM mission4 WHERE id = $id";
$results = $pdo ->query($sql);		//sqlを実行した結果がresultに入った
foreach ($results as $row){
	$password=$row['password'];
	$number=$row['id'];
}
if($number  == NULL){	 //左右の式は等しい→== 代入→=
	echo '投稿がありません';
}else{
			if ($password == $_POST[password]){
					
					//削除する機構
					$id = $_POST[delete];
					$sql = "delete from mission4 where id = $id" ;
					$result = $pdo -> query($sql);
					//削除する機構終了

					//表示する機構
					$sql = 'SELECT * FROM mission4 ORDER BY id ASC' ;  //fetch, foreach →select fromで取ってきた行を使える状態にするもの
					$results = $pdo -> query($sql) ;  //$sqlの中身が実行されている　実行された結果がresultに入っている
					foreach ($results as $row) { 			//一つ目の投稿からid,name,comment, date, passwordの順に行が作られ、最後の投稿まで繰り返される
    				//$rowの中にはテーブルのカラム名が入る
    				echo $row['id'].',' ;
    				echo $row['name'].',' ;
				    echo $row['comment'].',' ;
						echo $row['date'].',' ;
						echo $row['password']."<br>";
						} ;
						//表示する機構終了
}else{
	echo 'パスワードが間違っています';
		}
}
?>

</body>
</html>


</body>
</html>
