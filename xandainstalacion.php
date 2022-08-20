<?php
session_start();

if(isset($_SESSION['nombredelusuario']))
{
    $usuarioingresado = $_SESSION['nombredelusuario'];
}
else
{
    header('location: xandaindex.php');
}
?>
<html>
    <head>
        <title>XandA</title>
        <link rel="Icon" href="Img/xanda.png" type="img/png">
        <link rel="stylesheet" href="Css/Block.css">
        <link rel="stylesheet" href="Css/cubo.css">
        <link rel="stylesheet" href="Css/hipertxts.css">
        <link rel="stylesheet" href="Css/formularios.css">
        <link rel="stylesheet" href="Css/main.css">

    </head>
    <body>
        
<!-- particles.js container -->
<div id="particles-js"></div>

<!-- scripts -->
<script src="particles.js"></script>
<script src="javascript/app.js"></script>



    </body>
</html>

<?php
    echo'<div class="bloquedeinstalacion">
        <p class="textodeinstalacion">Bienvedida '.$usuarioingresado.', estás a un último paso para tener el futuro en tus manos y formar parte de </br> los innovadores que están cambiando el mundo.</p>
    </div>';
?>