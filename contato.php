<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTATO</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="contato.css">
</head>

<body>
    <?php
    include("menu.php");
    ?>


    <div class="container">
        <div class="row">
            <div>
                <h3 class="text-center">FALE CONOSCO</h3>
            </div>
        </div>
    </div>

    <div class="container">
       
        <div class="contact-info">
            <h2 class="texto_formulario">Informações de Contato</h2>
            <p><strong>Endereço:</strong> R. Cel. Guilherme de Paula, 1937-1967 - Centro, Laranjeiras do Sul - PR, 85301-404</p>
            <p><strong>Telefone:</strong> (11) 1234-5678</p>
            <p><strong>E-mail:</strong><a href="mailto:ljsceeplaranjeiras@seed.pr.gov.br"> ljsceeplaranjeiras@seed.pr.gov.br</a></p>
        </div>

        
        <div class="contact-form">
            <h2 class="texto_formulario">Envie sua Mensagem</h2>
            <form action="#" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite seu nome">

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Escreva sua mensagem"></textarea>

                <button type="submit">Enviar Mensagem</button>
            </form>
        </div>
    </div>

    <footer class="text-center">
        <p><b>&copy; 2025 Cursos Técnicos. Todos os direitos reservados.</b></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
</body>

</html>