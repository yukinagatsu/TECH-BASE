<?php
	$dsn = '�f�[�^�x�[�X��';
	$user = '���[�U�[��';
	$password = '�p�X���[�h';
	$pdo = new PDO($dsn,$user,$password);

	$sql = "CREATE TABLE mission4"		//CREATE TABLE= MySQL�ɑ΂��閽�ߕ� = SQL	 //tbtest = �e�[�u���̃^�C�g��
	." ("
	."id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,"	//AUTO_INCREMENT:�ꂸ��������A�ԁ@ NOT NULL PRIMARY KEY:�ȑO�̔ԍ��Ɣ��Ȃ��悤�ɂ��遁�폜����Ă������Ĕԍ��ӂ�										
	."name char(32),"								//INT = �����@char = �Œ蒷������  TEXT = �ϒ�������
	."comment TEXT,"								//id, name, comment =�e�[�u���̗�̍���
	."date TEXT,"
	."password char(40)"								
	.");" ;
	$stmt = $pdo -> query($sql) ;
?>