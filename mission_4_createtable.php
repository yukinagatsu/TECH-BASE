<?php
	$dsn = 'データベース名';
	$user = 'ユーザー名';
	$password = 'パスワード';
	$pdo = new PDO($dsn,$user,$password);

	$sql = "CREATE TABLE mission4"		//CREATE TABLE= MySQLに対する命令文 = SQL	 //tbtest = テーブルのタイトル
	." ("
	."id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,"	//AUTO_INCREMENT:一ずつ増加する連番　 NOT NULL PRIMARY KEY:以前の番号と被らないようにする＝削除されても続けて番号ふり										
	."name char(32),"								//INT = 整数　char = 固定長文字列  TEXT = 可変長文字列
	."comment TEXT,"								//id, name, comment =テーブルの列の項目
	."date TEXT,"
	."password char(40)"								
	.");" ;
	$stmt = $pdo -> query($sql) ;
?>