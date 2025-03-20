<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="row bg-success bg-gradient menu-fixo">
        <div class="col-3">
            <a href="index.php">
                <img src="ceep2.png" alt="" class="d-block w-50">
            </a>
        </div>
        <div class="col-6 text-center align-items-center d-flex flex-column justify-content-center">
            <h1 style="font-size: 1.5rem;">COLÉGIO TECNICO</h1>
            <h1 style="font-size: 1.75rem;">NAIANA BABARESCO DE SOUZA</h1>
        </div>
        <div class="col-3">
            <img src="paranabrasao.png" alt="" class="w-50 rounded float-right">
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark menu-fixo">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">NAIANA BABARESCO DE SOUZA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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
                            <li><a class="dropdown-item" href="cursossubsequente.php">Subsequente</a></li>
                            <li><a class="dropdown-item" href="cursosintegrado.php">Integrado</a></li>
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
</body>

</html>