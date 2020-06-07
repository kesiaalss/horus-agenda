<?php
include("is_authenticated.php");
?>

<!doctype html>
<html lang="en">

<head>
  <title>

  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <div class="container">


    <h1 style="text-align: center; margin:50px">Horus Agenda</h1>
    <table class="table table-striped custab">
      <thead>
        <a href="/logout.php" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 20px; float: right">Finalizar sessão</a>
        
        
        <?php
            if($_SESSION['perfil'] === 'ADMIN'){
              echo '<a href="/cadastrarCliente.php" class="btn btn-primary" style="margin-bottom: 20px; float: right"><b>+</b> Adicionar novo cliente</a>';
            } 
          ?>
        <tr>
          <th>ID</th>
          <th>Nome:</th>
          <th>Email:</th>
          <th>Telefone:</th>
          <?php
            if($_SESSION['perfil'] === 'ADMIN'){
              echo '<th class="text-center">Acões</th>';
            } 
          ?>
          
        </tr>
      </thead>


      <?php

      include("connection.php");
      $query = "SELECT * FROM clientes c";
      $db_clientes = $db->query($query);
      while ($cliente = $db_clientes->fetch_assoc()) {
        $table = '
          <tr>
            <td>' . $cliente['id'] . '</td>
            <td>' . $cliente['nome'] . '</td>
            <td>' . $cliente['email'] . '</td>
            <td>' . $cliente['telefone'] . '</td>';
        if($_SESSION['perfil'] === 'ADMIN'){
          $table.='<td class="text-center"><a class="btn btn-info btn-xs" href="/editarCliente.php?id=' . $cliente["id"] . '"><span class="glyphicon glyphicon-edit"></span> Editar</a> <a href="/deletarCliente.php?id=' . $cliente["id"] . '" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Deletar</a></td>';
        }
        $table.='</tr>';
        echo $table;
      }
      $db->close();
      ?>
    </table>
    <br><br>  
    <?php
    if (isset($_GET['success'])) {
        echo '
        <div class="alert alert-success" role="alert">
          ' . $_GET['success'] . '
        </div>
    ';
    }

    ?>
  </div>
</body>

</html>