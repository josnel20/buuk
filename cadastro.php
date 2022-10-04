<?php

include_once('conexao.php');
error_reporting (0);
if(isset($_POST["cadastrar"])){

  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $data_inscricao	= date("y-m-d h:i:s");
  $sql = "INSERT INTO usuarios(nome,sobrenome,email,senha,data_inscricao) VALUES ('$nome','$sobrenome','$email','$senha','$data_inscricao')";
  mysqli_query($db, $sql);
}
?>


<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Navbar</title>

    <link rel="stylesheet" href="css/header_cadastro.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>

  <body>

    <header>

      <nav class="header">

        <a class="logo" href="/"><img src="img/logo.png" width="15px"><h5>BUUK</h5></a>

        <div class="mobile-menu">

          <div class="line1"></div>

          <div class="line2"></div>

          <div class="line3"></div>

        </div>

        <ul class="nav-list">

                <li><a href="#" classe="cont">CONTATO</a></li>

                <div class="contato">

                    <label>E-mail:<br> faleconosco@olamundo.com</label><br><br>

                    <hr><br>

                    <label>whatsap: <br> +55119566565656 </label>

                </div><br>              

            <div class="sair">

                <a href="">VOLTAR</a>

            </div>

        </ul>

      </nav>

    </header>

    <main>
    <div id="container">
        <div class="center">
                <form action="" method="post">
                    <input type="text" name="nome" placeholder="Seu Nome"><br><br>
                    <input type="text" name="sobrenome" placeholder="Seu Sobrenome"><br><br>
                    <input type="text" name="email" placeholder="Seu E-mail"><br><br>
                    <input type="password" name="senha" placeholder="senha"><br><br>
                    <input type="submit" name="cadastrar" value="Enviar"><br><br>
                    <?php
                      if($sql){
                      ?> 
                      <script>
                          swal({
                          title: "Sucesso",
                          text: "Cadastro efetuado com sucesso",
                          icon: "success",
                          button: "Fechar",
                          });
                      </script>
                      <?php
                      }
                      ?>
                    <div class="esqueci_senha">
                      <a href="index.php" classe="cont">Logar aqui</a><br><br>
                    </div>
                </form>
        </div>
    </div>

    </main>

    <script src="mobile-navbar.js"></script>

  </body>

</html>
