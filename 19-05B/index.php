<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site do Lucas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="text-center">
            <h1>Site do Lucas</h1>
            <nav>
                <a href="home"class="btn btn-danger">
                    Página Inicial
                </a>
                <a href="quem-somos" class="btn btn-danger">
                    Quem somos
                </a>
                <a href="servicos" class="btn btn-danger">
                    Nossos Serviços
                </a>
                <a href="contato" class="btn btn-danger">
                    Contato
                </a>
</nav>
        </header>
        <main>
            <?php
            //print-r($_GET);
             $param = $_GET["param"] ?? "home";
             $pagina = "paginas/{$param}.php";
             if(file_exists($pagina))
                include $pagina;
            else
             include "paginas/erro.php";
            ?>
</main>
<footer class="bg-danger">
    <p class="text-center">
        Desenvolvido por Lucas
    </p>
</footer>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>