<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>TRAVEL ADVISER</title>
    <link rel="stylesheet" href="mission_6.css">
    <!--- 各投稿のときは ../stylesheet.css --->
</head>
<body>

    <!-- HTMLタグについては以下のサイトを参照 -->
    <!-- http://www.htmq.com/html5/ -->

    <!--- ヘッダー部分 --->
    <div class="header">
        <div class="header-left">
<h2>TRAVEL ADVISER</h2>
        </div>
        <div class="header-right">
            <ul>
                <li><a href="mission6_upload2.php">投稿する</a></li>
                <li><a href="mission6_login.php">ログイン</a></li>
                <li><a href="signup.php">新規登録</a></li>
            </ul>
        </div>
    </div>
    <!--- ヘッダー終わり --->
<div class="main">
<h2>投稿一覧</h2>
<table>
	<thead>
		<tr>			
			<th></th>
			<th></th>
			<th></th>
			<td></td>
		</tr>
	</thead>
</table>
<?php
session_start(); //セッションの開始
setcookie("jeff", "", time() + 604800); //クッキーの有効期限を7日間に設定

	$dsn = 'データベース名';
	$user = 'ユーザー名';
	$password = 'パスワード';
	$pdo = new PDO($dsn,$user,$password);

/* HTML特殊文字をエスケープする関数を定義 */
function h($str) {

    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
} 
//表示機構
echo"【投稿一覧】<br>";
$sql = 'SELECT * FROM travel ORDER BY id ASC' ;
$results = $pdo -> query($sql) ;
foreach ($results as $row) {
$extensionCheck=explode(".",$row['filename']);
//ファイルの拡張子を調べる
	if($extensionCheck[1]==="mp4"){
				echo $row['id'].',' ;
				echo h($row['name']).',' ;
				echo h($row['title']).',' ;
				echo nl2br(h($row['text'])).',' ;
				echo'<video controls src ="files/'.$row['filename'].'"></video>';
				echo $row['date']."<br>" ;
			}elseif($extensionCheck[1]=== NULL){
						echo $row['id'].',' ;
						echo h($row['name']).',' ;
						echo h($row['title']).',' ;
						echo nl2br(h($row['text'])).',' ;
						echo $row['date']."<br>" ;
			}else{
					echo $row['id'].',' ;
					echo h($row['name']).',' ;
					echo h($row['title']).',' ;
					echo nl2br(h($row['text'])).',' ;
					echo'<image src="files/'.$row['filename'].'" width="640",height="360"></image>';
					echo $row['date']."<br>" ;
						}
}	//表示機構終了
?>
</div>
</body>
</html>