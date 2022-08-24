<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/Lgicarus.png">

    <title>Login</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="../../css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="../funcoes/login.php" method="post">
      <a href="home.php"> <img class="mb-4" src="../../images/Lgicarus.png" alt="" width="150" height="77">  </a>
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <button class="btn btn-lg btn-icarus btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
  </body>
</html>
