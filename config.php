<?php 
$pdo = new PDO('mysql:host=localhost;dbname=sms','root','');
$pdo->exec('set names uft8');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
 ?>