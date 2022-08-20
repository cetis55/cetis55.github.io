<?php
    session_start();
    if(isset($_SESSION['nombredelusuario'])){
        $varusu = $_SESSION['nombredelusuario'];
    }
    else{
        header('location: teensedefecto');
    }
?>
<html>
    <head>
        <title>Te esnseño</title>
        <link rel="icon" href="Img/xanda.png" type="img/png">
        <link rel="stylesheet" href="Css3/mainense.css">
        <link rel="stylesheet" href="Css3/bloquesense.css">
        <link rel="stylesheet" href="Css3/textosense.css">
    </head>

    <body class="cuerpo">
        <!-- particles.js container -->
        <div id="particles-js"></div>

        <!-- scripts -->
        <script src="particles.js"></script>
        <script src="javascript/app.js"></script>
    </body>

</html>

<?php
   echo'<div class="opcionesdeense" style="top:30%; left:10%;">
       <img src="Img/cubo.png" class="imagenes_opciones">
       <p class="texto_opciones">Modelos 3D</p>
   </div>';
   echo'<div class="opcionesdeense" style="top:30%; left:40%;">
       <img src="Img/programacion.png" class="imagenes_opciones">
       <a href="programacion"><p class="texto_opciones">Programación</p></a>
   </div>';
   echo'<div class="opcionesdeense" style="top:30%; left:70%;">
       <p class="texto_opciones">Gastronomía</p>
   </div>';

?>