<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <div class="container">
    <div class="wrapper">
      <form method="post" action="loginAction.php" name="Login_Form" class="form-signin">
        <h3 class="form-signin-heading">Bem vindo ao Horus controle de clientes</h3>
        <hr class="colorgraph"><br>

        <input type="text" class="form-control" name="email" placeholder="E-mail" required="" autofocus="" />
        <input type="password" class="form-control" name="senha" placeholder="Senha" required="" />

        <input class="btn btn-lg btn-primary btn-block" name="Submit" value="Entrar" type="submit" >
      </form>

      <?php 
      
        if(isset($_GET['error'])){
          echo "<div style=\"margin: 20px auto; max-width: 420px;\" class=\"alert alert-danger\" role=\"alert\">".$_GET['error']."</div>";
        }
      
      ?>

    </div>
  </div>

</body>

</html>