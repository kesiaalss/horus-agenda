<?php
include("is_authenticated.php");
?>

<?php

require "connection.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


$select = "SELECT * FROM clientes c where c.email='".$email."' OR c.telefone='".$telefone."'";

if($db->query($select)->num_rows >= 1){
  header("Location: cadastrarCliente.php?error=Usuario Ja Existe");
}

$query = "INSERT INTO clientes(nome, email, telefone) VALUES('".$nome."','".$email."','".$telefone."')";

$db->query($query);

header("Location: home.php?success=O $nome cliente cadastrado com sucesso");
