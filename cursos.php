<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cursos.css">
   <script src="js/funcoes.js"></script>
         <title>Cursos</title>
    </head>
<body>
    <?php require_once('./navbar\footer/menuLogado.html')?>

<div class ="container">
    <div class="box_cursos">
        <img src="imgs/medicina.png" width="170px" onclick="destaque1 (this)">
        <a href="#"> Medicina</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/negocio.png" width="170px" onclick="destaque2 (this)">
        <a href="#"> Economia</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/jornalismo.png" width="170px" onclick="destaque3 (this)">
        <a href="#"> Comunicação Social - Midialogia</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/engenhariadesoftware.png" width="170px" onclick="destaque4 (this)">
        <a href="#"> Engenharia de Software</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/gastronomia.png" width="170px" onclick="destaque5 (this)">
        <a href="#"> Nutrição</a>
    </div>


    <div class="box_cursos">

        <img src="imgs/farmacia.png" width="170px" onclick="destaque6 (this)">
        <a href="#"> Farmácia</a>
    </div>

   
    <div class="box_cursos">

        <img src="imgs/ambiente.png" width="170px" onclick="destaque7 (this)">
        <a href="#"> Engenharia Ambiental</a>
    </div>


</div>

    <?php require_once('./navbar\footer/footerLogado.html')?>

</body>
</html>    