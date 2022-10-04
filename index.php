<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
  

    

      $email = $_POST["email"];
      $senha = $_POST["senha"];

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $db->query($sql_code) or die("Falha na execução do código SQL: " . $db->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: chat.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

?>


<!DOCTYPE html>

<html lang="pt-br">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="css/header_index.css" />
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
                    <input type="text" name="email" placeholder="Seu E-mail"><br><br>
                    <input type="password" name="senha" placeholder="senha"><br><br>
                    <input type="submit" name="entrar" value="Entrar"><br><br>
                    <div class="esqueci_senha">
                      <a href="cadastro.php" classe="cont">Cadastra-se aqui</a><br><br>
                      <a href="#">Esqueci minha senha</a>
                    </div>
                </form>
        </div>
    </div>

    </main>

    <script src="mobile-navbar.js"></script>

  </body>

</html>
