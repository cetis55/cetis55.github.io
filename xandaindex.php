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
session_start();
if(isset($_SESSION['nombredelusuario']))
{
    header('location: botindex.php');
}
    echo'<div class="registrar">
        <div class="linea"></div>
        <p class="iniciarregistrar" style="top:30%; left:20%;">Iniciar sesión</p>
        <p class="iniciarregistrar" style="top:30%; left:72%;">Registrar</p>
        <div class="bloqueenformulario" style="top:46%; left:55%;"><p style="position:absolute; top:-15%; left:35%;">Usuario</p></div>
        <div class="bloqueenformulario" style="top:46%; left:77%;"><p style="position:absolute; top:-15%; left:35%;">Contraseña</p></div>
        <form method="POST">
            <table>
                <tr>
                    <input class="campoderegistrar" type="text" name="txtusuario" style="top:54%; left:55%;" placeholder="Nuevo usuario" required>
                    <input class="campoderegistrar" type="password" name="txtcontrase" style="top:54%; left:77%;" placeholder="Nueva contraseña" required>
                </tr>
                <tr>
                    <input class="campoderegistraringresar" type="submit" name="btnregistrar" style="top:82%; left:65%;"  value="Registrar">
                </tr>
            </table>
        </form>
        <div class="bloqueenformulario" style="top:46%; left:5%;"><p style="position:absolute; top:-15%; left:35%;">Usuario</p></div>
        <div class="bloqueenformulario" style="top:46%; left:27%;"><p style="position:absolute; top:-15%; left:35%;">Contraseña</p></div>
        <form method="POST">
        <table>
            <tr>
                <input class="campoderegistrar" type="text" name="txtusuario" style="top:54%; left:5%;" placeholder="Usuario" required>
                <input class="campoderegistrar" type="password" name="txtcontrase" style="top:54%; left:27%;" placeholder="Contraseña" required>
            </tr>
            <tr>
                <input class="campoderegistraringresar" type="submit" name="btningresar" style="top:82%; left:15%;"  value="Ingresar">
            </tr>
        </table>
    </form>
    </div>';
    echo'<div class="adornoregistro">
    </div>';
    echo'<div class="circunferenciaregistro">
    </div>';
    echo '<div class="barraizquierda">
    <div class="container" style="position:absolute; left:40%; top:10%;">
    <div class="cubo">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    </div>
    </div>';

//Registrar
if(isset($_POST["btnregistrar"]))
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "xandaclientes";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$conn){
        die("No hay conexion:".mysqli_connect_error());
    }

    $varusu=$_POST['txtusuario'];
    $varcon=$_POST['txtcontrase'];


    $sqlgrabar = "INSERT INTO clientes(usuario,password) values ('$varusu','$varcon')";


    if (mysqli_query($conn, $sqlgrabar))
    {
        echo "<script> alert('Ya eres parte de la familia XandA $varusu'); window.location='xandainstalacion.php'</script>";
    }else
    {
        echo "Error: ".$sql."<br>".mysql_error($conn);
    }
}




if(isset($_POST['btningresar']))
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "xandaclientes";
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    if(!$conn){
        die("No hay conexion:".mysqli_connect_error());
    }
    
    $varusu=$_POST['txtusuario'];
    $varcon=$_POST['txtcontrase'];


    $query=mysqli_query($conn,"Select * from clientes where usuario='".$varusu."' and password='".$varcon."'");
    $nr = mysqli_num_rows($query);


    if(!isset($_SESSION['nombredelusuario']))
    {
    if($nr==1)
    {
        $_SESSION['nombredelusuario']=$varusu;

        header("location: botindex.php");
    }
    else if ($nr==0)
    {
        echo "<script> alert('No existe el usuario'); window.location='xandaindex.php'</script>";
    }
    }
}
?>