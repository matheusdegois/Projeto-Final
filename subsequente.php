<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - Meu Site</title>
    <link rel="stylesheet" href="cursos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php
    include("menu.php");
    ?>
    <div class="container">
        <h1 class="text-center mb-4">Cursos Disponíveis</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso 1">
                    <div class="card-body">
                        <h5 class="card-title">Curso de Programação</h5>
                        <p class="card-text">Aprenda a desenvolver aplicações com as principais linguagens de programação.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso 2">
                    <div class="card-body">
                        <h5 class="card-title">Curso de Design Gráfico</h5>
                        <p class="card-text">Torne-se um especialista em ferramentas de design como Photoshop e Illustrator.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso 3">
                    <div class="card-body">
                        <h5 class="card-title">Curso de Marketing Digital</h5>
                        <p class="card-text">Domine estratégias de marketing online e impulsione negócios na web.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso 4">
                    <div class="card-body">
                        <h5 class="card-title">Curso de Gestão de Projetos</h5>
                        <p class="card-text">Aprenda as melhores práticas para planejar e gerenciar projetos de sucesso.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso 5">
                    <div class="card-body">
                        <h5 class="card-title">Curso de Fotografia</h5>
                        <p class="card-text">Aprenda técnicas de fotografia para capturar imagens incríveis.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Curso 6">
                    <div class="card-body">
                        <h5 class="card-title">Curso de Redação e Produção de Conteúdo</h5>
                        <p class="card-text">Desenvolva habilidades de escrita e produção de conteúdo para web.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
