<?php

require_once '../vendor/autoload.php';

use App\data\BD;
session_start();

$username = $_POST['username'] ?? null;
$pass = $_POST['password'] ?? null;
$hashedPass = md5($pass."HAYTHERE");

$roleVK = $_POST['VK'] ?? null;
$int = 1;
$date = date("Y-m-d H:i:s");

$db = BD::connect();

if(!empty($_POST['reg'])){
	if(!empty($_POST['username'])){
	if($roleVK){
		$stmt = $db->prepare("INSERT INTO users (user, pass, vk) VALUES (:user, :pass, :vk)");
		$stmt->bindParam(':user', $username);
		$stmt->bindParam(':pass', $hashedPass);
		$stmt->bindParam(':vk', $int);
		$stmt->execute();
	}else{
		$stmt = $db->prepare("INSERT INTO users (user, pass) VALUES (:user, :pass)");
		$stmt->bindParam(':user', $username);
		$stmt->bindParam(':pass', $hashedPass);
		$stmt->execute();
	}
}	
		
		header ('Location:/index.php');
}
if(!empty($_POST['aut'])){
	$sql = "SELECT * FROM `users` WHERE  `user`='$username' AND `pass`='$hashedPass'";
                $stmt = $db->query($sql);
                $result = $stmt->FETCH(PDO::FETCH_ASSOC);
			
				if(!empty($result)){
					$_SESSION['username'] = $result['user'];
					
					if(!empty($result['vk'])){
						$_SESSION['VK'] = 1;
					}
					header ('Location:/models/serverOut.php');
					
				} else {
					$changedPage = fopen('log.txt','a+');
					fwrite($changedPage, "\r\n".$date.' '.$username.' '.$pass);
					fclose($changedPage);
					header ('Location:/index.php');
				}
				
}
