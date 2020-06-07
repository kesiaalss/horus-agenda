<?php
include("is_authenticated.php");
?>

<?php

require "connection.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$select = "SELECT * FROM clientes c where (c.email='".$email."' OR c.telefone='".$telefone."') AND c.id <> ".$id." ";

if($db->query($select)->num_rows >= 1){
  header("Location: editarCliente.php?id=".$id."&error=Usuario Ja Existe");
}

$query = "UPDATE clientes c set c.email='".$email."', c.nome='".$nome."', c.telefone='".$telefone."' WHERE c.id = ".$id." ";

$db->query($query);

header('Location: home.php?success=Cliente '.$id.' foi editado com sucesso');
