<?php
$host = 'mysql';
$db = 'testdb';
$user = 'testuser';
$pass = 'testpassword';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
	PDO::ATTR_ERRMODE 		=> PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
	$pdo = new PDO($dsn, $user, $pass, $options);
	echo "MySQL 연결 성공했습니다.";
} catch(\PDOException $e) {
	echo "MySQL 연결에 실패했습니다. : " . $e->getMessage();
}
