<?php
session_start();
 
require 'conexao.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <title>Login | Sistema de Login PHP</title>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">        
    </head>
 
    <body class="text-center">
        <form class="form-signin" action="login.php" method="post">
          <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Anonymous_emblem.svg/200px-Anonymous_emblem.svg.png" alt="" width="50%">
          <br>
          <?php if (isLoggedIn()):
          
              header("Location: agenda.php");

          else: 

              echo "Olá, visitante.";
              
          endif; 
          
          ?>          
          <h1 class="h3 mb-3 font-weight-normal">Por favor faz login aaeeee:</h1>
          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email"required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="password"required>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Conectar</button>
          <br>
          <div class="text-center" class="col-sm-6">
          <p class="text-center">
          <a href="usuario.php">
          <button type="button" class="btn btn-outline-primary">Cadastre-se</button>
          </a>
          </p>
          </div>
          <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>        
        </form>

    </body>

      
</html>