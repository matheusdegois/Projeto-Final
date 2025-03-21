</html>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="menu.css">
   
</head>

<body>


    <div class="banner"  style="background-color: #ff7512;">
        <div class="row">
            <div class="ceep col-2">
                <a href="index.php">
                    <img src="ceep2.png" alt="Logo CEEP">
                </a>
            </div>
            <div class="col-6 text-center align-items-center d-flex flex-column justify-content-center">
                <h1 id="titulo">Colégio especializado em </h1>
                <h1>formação técnica e média</h1>
            </div>
        </div>
</div>


    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="institucional.php">Institucional</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos Disponíveis
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="subsequente.php">Subsequente</a></li>
                            <li><a class="dropdown-item" href="integrado.php">Integrado</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php">Galeria</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
