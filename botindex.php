<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css2\estilo.css">
    <title>Imhotep asistente</title>
    <link rel="icon" href="Img\XandA.png">


    <style>
.textoanimacion{
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: #ffffff;
    font-size: 40px;
}


.imgRedonda {
    border-radius: 150px;
    width:50;
    height:50;
}
.body {
    background:#3b6b75;
    height: 100%;
    width: 100%;
    overflow-y: auto;
}

.alicia {
    color: #ffffff;
    font-family: cursive;
    width: 60%;
    height: auto;
    padding: 10px;
    margin: 5px;
    background-color: #6a9e73;
    border-radius: 10px;
    float: left;
    text-align: left;
    display: block;
}

.me {
    color: #ffffff;
    font-family: cursive;
    width: 55%;
    height: auto;
    padding: 10px;
    margin: 5px;
    background-color: #878c88;
    border-radius: 10px;
    float: right;
    text-align: right;
    display: block;
}

.textodelabarranegrainferior{
    color:#ffffff;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size:15;
}
    </style>
</head>

<body>

    <div style="visibility:visile; background:#a1a1a1; position:absolute; top:200px; left:66.5%; height:40%; width:32.5%; border-radius:30px; box-shadow: 5px 5px 10px #1a1a1a;">
    </div>
    <div style="background:#30a7bf; height:55.5px; width:32.5%; visibility:visile; position:absolute; top:200px; left:66.5%; border-radius:30px;">
        <p style="color:#ffffff; font-family:impact; font-size:20px; position:absolute; top:35%; left:45%;">Historias</p>
    </div>
    <div style="visibility:visile; background:#545454; position:absolute; top:200px; left:1%; height:100%; width:15%; border-radius:30px; box-shadow: 5px 5px 10px #1a1a1a;">
    </div>
    <div style="background:#2b2b2b; height:55.5px; width:15%; visibility:visile; position:absolute; top:200px; left:1%; border-radius:30px;">
        <p style="color:#ffffff; font-family:impact; font-size:20px; position:absolute; top:35%; left:25%;">Herramientas</p>
    </div>
    <div class="container" style="visibility:visible; position:absolute; top:200px; left:17%; box-shadow: 5px 5px 10px #1a1a1a;">
        <div class="header">
            <div style="visibility:visile; position:absolute; top:4px; left:350px;">
                <img src='img/xanda.png' class='imgRedonda'/></div><h4>Julieta</h4>
        </div>
                    
        <div class="body" id="chatbody">
            <p class="alicia">"Siempre estaré para ti" ¿Quieres hablar un rato?</p>
            <div class="scroller"></div>
        </div>
    
        <form class="chat" method="post" autocomplete="off">
    
            <div style="position:absolute; top:756px;">
                <input type="text" name="chat" id="chat" placeholder="Mensaje" style="width:770px; font-family: cursive; font-size: 20px;">
            </div>
            <div style="width:100px; visibility:visile; position:absolute; top:756px; left:670px;">
                <input class="input" type="submit" value="Enviar" id="btn">
            </div>
        </form>
    </div>

    <div style="position:absolute; top:890px; left:2%; width:13%;">
    <from method="POST">
        <input style="background:#a1a1a1;" type="submit" value="Cerrar sesión" name="btncerrar" />
    </form>
    </div>

    <script src="app.js"></script>
    
            <SCRIPT LANGUAGE="JavaScript">
        function mi_alerta () {
        alert ("Tutoriales"+
               "\n"+
               "\nCaleb & Mr. Luna");
        }
        </SCRIPT>

<script src="Java/script.js"></script>
</body>

</html>
<?php
    session_start();
    if(isset($_SESSION['nombredelusuario']))
    {
        $varusu = $_SESSION['nombredelusuario'];
        echo "<p style='visibility:visile; position:fixed; top:225; left:1430; color:#ffffff; font-family:impact; font-size:20'>$usuarioingresado</p>";
    
    }
    else
    {
        header('location: botinicio.php');
    }


if (isset($_POST['btncerrar']))
{
    session_destroy();
    header('location: botinicio.php');
}

echo '<div style="position:absolute; top:0%; left:0%; background:#2b2b2b; width:100%; height:15%; border-radius:30px; box-shadow: 5px 5px 10px #1a1a1a;">
<img src="Img/xanda.png" style="position:absolute; top:2%; left:46%; background:#2b2b2b; width:8%; height:96%;"/>
</div>';
echo "<h1 style='visibility:visile; position:absolute; top:275px; left:5.5%'>$varusu</h1>";




echo '<div style="position:absolute; top:890px; left:2%; width:13%;">
<form method="POST">
    <input style="background:#a1a1a1;" type="submit" value="Cerrar sesión" name="btncerrar" />
</form>
</div>';
?>
