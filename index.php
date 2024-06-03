<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b3b83db5db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/mvz.png">
    <title>MVGames</title>
</head>
<body class="body">
    <header class="header" >
        <nav class="navbar navbar-expand-lg" style="background-color: #9c3f00;" data-bs-theme="dark">
            <div class="container-fluid">
              <a href="index.php?pagina=home.php">
                <img src="img/mvz.png" alt="MVGames" title="MVGames" style="width: 80px;" alt="MV">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?pagina=home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=membros">Membros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=suporte">Suporte</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>    
    </header>

    
    <main>
        <?php
            //imprimir o conteudo do array do GET
            //print_r($_GET);

            //recuperar a variavel pagina
            $pagina = $_GET["pagina"] ?? "home";

            // paginas/home.php
            $pagina = "paginas/{$pagina}.php";

            //verificar se o arquivo existe
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include "paginas/erro.php";
            }

        ?>
    </main>
    

    <footer class="footer"> 
      <div class="pfooter">
        <p class="paragrafofooter">Desenvolvido por:<br>Marcos Vinicius<br>BS &copy;</p>
      </div>
      <img class="logofooter" src="img/mvz.png" alt="MVGames" title="MVGames">
      <div class="d-flex gap-4">
        <a class="listagemfooter" href="index.php?pagina=home">Home</a>
        <a class="listagemfooter" href="index.php?pagina=membros">Membros</a>
        <a class="listagemfooter" href="index.php?pagina=suporte">Suporte</a>
      </div>
    </footer>

    <script src="https://kit.fontawesome.com/b3b83db5db.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>