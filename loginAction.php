<?php

require "connection.php";
session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$query = "SELECT * FROM usuarios u where u.email='".$email."' AND u.senha='".$senha."' ";

// var_dump($query);
// die();

$result = $db->query($query);
$usuario = $result->fetch_assoc();

if($result->num_rows === 1){
  $_SESSION['email'] = $usuario['email'];
  $_SESSION['perfil'] = $usuario['perfil'];
  $db->close();
  header("Location: home.php");
}else {
  $db->close();
  header("Location: login.php?error=LoginInvalido");
}

$db->close();
