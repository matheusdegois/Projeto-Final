<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJxn+2eX6K9fE2Wk4gPfUWaYk5g5c8K4P3cbkjGZ5DxkS8t5RjIN/tntq0yf" crossorigin="anonymous">
</head>
<body>
<?php
    include("menu.php");
    ?>
    
    <header class="bg-primary text-white py-3">
        <div class="container text-center">
            <p>Fique por dentro das últimas notícias</p>
        </div>
    </header>

    
    <div class="container mt-4">
        <div class="row">

            <!-- Notícia 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Imagem notícia 1">
                    <div class="card-body">
                        <h5 class="card-title">Evento de Abertura do Ano Letivo</h5>
                        <p class="card-text">Abertura do ano letivo com palestra especial para alunos e professores. Não perca!</p>
                        <a href="#" class="btn btn-primary">Leia mais</a>
                    </div>
                </div>
            </div>

            <!-- Notícia 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Imagem notícia 2">
                    <div class="card-body">
                        <h5 class="card-title">Feira de Ciências 2025</h5>
                        <p class="card-text">Alunos apresentam seus projetos na Feira de Ciências anual da escola. Veja os destaques!</p>
                        <a href="#" class="btn btn-primary">Leia mais</a>
                    </div>
                </div>
            </div>

            <!-- Notícia 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Imagem notícia 3">
                    <div class="card-body">
                        <h5 class="card-title">Jogos Interescolares 2025</h5>
                        <p class="card-text">Acompanhe os resultados e a participação dos alunos nos jogos interescolares deste ano!</p>
                        <a href="#" class="btn btn-primary">Leia mais</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

  
    <?php include("footer.php"); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0ggoC7tK3a8FfCfeW/tc2dVzZ9pz5h6ISMi0HtjlFGVh3hno" crossorigin="anonymous"></script>
</body>
</html>