<?php
$submenu_aberto = isset($_GET['submenu']) && $_GET['submenu'] === 'true' ? 'show' : '';
?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">  
<style>
        /* Estilos básicos */
        ul {
            list-style-type: none;
        }
        ul ul {
            display: <?php echo $submenu_aberto; ?>;
            padding-left: 20px;
        }
        button {
            cursor: pointer;
        }
    </style>
</head>
<body>
    

<div class="row bg-success bg-gradient">
    <div class="col-3">
        <a href="index.php">
            <img src="ceep2.png" alt="" class="d-block w-50">
        </a>
    </div>
    <div class="col-6 text-center align-items-center d-flex flex-column justify-content-center">
        <h1 id="titulo">Colégio especializado em </h1>
        <h1 id>formação técnica e média</h1>
    </div>
    <div class="col-3">
        <img src="paranabrasao.png" alt="" class="w-50 rounded float-right">

    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">NAIARA BABARESCO DE SOUZA</a>
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
                <li class="nav-item">
                    <button onclick="toggleSubmenu()">Cursos Disponíveis</button>
                    <ul id="submenu" >
                        <li class="nav-item">
                            <a class="nav-link" href="cursosintegrado.php">Cursos Integrados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cursossubsequente.php">Cursos Subsequente</a>
                        </li>
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
<hr>
<script>
        // Função JavaScript para alternar a visibilidade do submenu
        function toggleSubmenu() {
            var submenu = document.getElementById("submenu");
            if (submenu.style.display === "none") {
                submenu.style.display = "block";
                // Redireciona para atualizar a URL e manter o submenu aberto
                window.location.href = "?submenu=true";
            } else {
                submenu.style.display = "none";
                // Redireciona para atualizar a URL e fechar o submenu
                window.location.href = "?submenu=false";
            }
        }

        // Verificando se o PHP deve carregar o submenu como visível
        document.getElementById("submenu").style.display = "<?php echo $submenu_aberto; ?>";
    </script>
</body>
</html>