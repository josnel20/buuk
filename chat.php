<?php

include('protect.php');
include('conexao.php');


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

        <a class="logo" href="/"><img src="img/logo.png" width="15px"><h5><?php echo $_SESSION['nome']; ?></h5></a>

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

                <p>
                  <a href="logout.php">Sair</a>
                </p>

            </div>

        </ul>

      </nav>

    </header>

    <main>
    
    </main>

    <script src="mobile-navbar.js"></script>

  </body>

</html>
