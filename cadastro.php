<?php
    require_once('conection.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/cadastro.css">
    <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
    <title>Cadastre-se | Demo</title>
</head>
<body>
    <?php require_once('./navbar\footer/menu.html')?>
    <main>

        <div class="cadastroCard">
            <form method="POST" action="cadastro_verify.php" onsubmit="validate(event)">
                <h1>Cadastre-se</h1>
                <input type="text" id="name" name="nome" placeholder="Digite seu nome" required>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                <input type="password" id="password" name="password1" placeholder="Digite uma senha" required>
                <input type="password" id="password" name="password2" placeholder="Confrime sua senha" required>
                <button id="submit" type="submit">Cadastre-se</button>
                <a href="index.php">Já possui o cadastro? Realize o login</a>
            </form>
        </div>

        <div class="bannerCard">
            <img src="./imgs/bannerCadastro.svg" alt="">
        </div>

    </main>
    <?php require_once('./navbar\footer/footer.html')?>
</body>
</html>