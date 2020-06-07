<?php
include("is_authenticated.php");
?>

<?php 

require "connection.php";

$id = $_GET['id'];

if(isset($id)){
  $query = "DELETE FROM clientes where id = ".$id." ";
  $db->query($query);
  header('Location: home.php?success=Cliente '.$id.' foi deletado com sucesso');
}


$db->close();
header('Location: home.php');

