<?php
session_start();

if(isset($_SESSION['nombredelusuario']))
{
    $usuarioingresado = $_SESSION['nombredelusuario'];
}
else
{
    header('location: xandadefecto.php');
}
?>
<?php

if (isset($_POST['btncerrar']))
{
    session_destroy();
    header('location: xandadefecto.php');
}


//Ancla de usuarios y todos los contenidos de usuarios
echo'<div class="campousuarias">
    <div class="potadausuarias"><img class="potadausuarias" src="Img/portada.jpg"></div>
    <div class="potadausuariasdifuminada"></div>
    <div class="menuusuaria">
        <div class="lineas" style="left:20%;"></div>
        <div class="lineas" style="left:40%;"></div>
        <div class="lineas" style="left:60%;"></div>
        <div class="lineas" style="left:80%;"></div>
        <form method="POST">
            <table>
                <tr>
                    <td><input class="menuusuariatextos" style="left:8.5%; top:35%;" value="Perfil" name="opcperfil" type="submit"></td>
                    <td><input class="menuusuariatextos" style="left:27%; top:35%;" value="Proyectos" name="opcproyectos" type="submit"></td>
                    <td><input class="menuusuariatextos" style="left:87%; top:35%;" value="Ajustes" name="opcconfiguracion" type="submit"></td>
                </tr>
            </table>
        </form>
    </div>
    <img class="usuarias" src="Img/usuario.png">
    </div>';


if(isset($_POST['opcperfil']))
{

    echo'<div class="campousuarias">
    <div class="potadausuarias"><img class="potadausuarias" src="Img/portada.jpg"></div>
    <div class="potadausuariasdifuminada"></div>
    <div class="menuusuaria">
        <div class="lineas" style="left:20%;"></div>
        <div class="lineas" style="left:40%;"></div>
        <div class="lineas" style="left:60%;"></div>
        <div class="lineas" style="left:80%;"></div>
        <form method="POST">
            <table>
                <tr>
                    <td><input class="menuusuariaaquiestoy" style="left:0.2%; top:0%;" value="Perfil" name="opcperfil" type="submit"></td>
                    <td><input class="menuusuariatextos" style="left:27%; top:35%;" value="Proyectos" name="opcproyectos" type="submit"></td>
                    <td><input class="menuusuariatextos" style="left:87%; top:35%;" value="Ajustes" name="opcconfiguracion" type="submit"></td>
                </tr>
            </table>
        </form>
    </div>
    <img class="usuarias" src="Img/usuario.png">
    <div class="datospersonales">
        <div class="campousuarioingresado"><p class="usuarioingresado">'.$usuarioingresado.'</p></div>
        <div class="campodescripcion"><p class="usuarioingresado">____________________</br></br></br></br>____________________</p></div>
        <div class="campodatosusuaria" style="top:35%;"><p class="usuariadatos">Seguidores:</p></div>
        <div class="campodatosusuaria" style="top:40%;"><p class="usuariadatos">Lenguajes:</p></div>
        <div class="campodatosusuaria" style="top:45%;"><p class="usuariadatos">Redes sociales:</p></div>
        <div class="campodatosusuaria" style="top:90%; left:8.5%;"><p class="usuariadatos" style="opacity:50%;">Actualizar información</p></div>
    </div>
    <div class="campousuariasamigas"></div>
    </div>';
}


if(isset($_POST['opcproyectos']))
{
    echo'<div class="campousuarias">
    <div class="potadausuarias"><img class="potadausuarias" src="Img/portada.jpg"></div>
    <div class="potadausuariasdifuminada"></div>
    <div class="menuusuaria">
        <form method="POST">
            <table>
                <tr>
                    <td><input class="menuusuariatextos" style="left:8.5%; top:35%;" value="Perfil" name="opcperfil" type="submit"></td>
                    <td><input class="menuusuariaaquiestoy" style="left:20.2%; top:0%;" value="Proyectos" name="opcproyectos" type="submit"></td>
                    <td><input class="menuusuariatextos" style="left:87%; top:35%;" value="Ajustes" name="opcconfiguracion" type="submit"></td>
                </tr>
            </table>
        </form>
        <div class="lineas" style="left:20%;"></div>
        <div class="lineas" style="left:40%;"></div>
        <div class="lineas" style="left:60%;"></div>
        <div class="lineas" style="left:80%;"></div>
    </div>
    <img class="usuarias" src="Img/usuario.png">
    </div>';
}

if(isset($_POST['opcconfiguracion']))
{
    echo'<div class="campousuarias">
    <div class="potadausuarias"><img class="potadausuarias" src="Img/portada.jpg"></div>
    <div class="potadausuariasdifuminada"></div>
    <div class="menuusuaria">
        <form method="POST">
            <table>
                <tr>
                    <td><input class="menuusuariatextos" style="left:8.5%; top:35%;" value="Perfil" name="opcperfil" type="submit"></td>
                    <td><input class="menuusuariatextos" style="left:27%; top:35%;" value="Proyectos" name="opcproyectos" type="submit"></td>
                    <td><input class="menuusuariaaquiestoy" style="left:80.2%; top:0%;" value="Ajustes" name="opcconfiguracion" type="submit"></td>
                </tr>
            </table>
        </form>
        <div class="lineas" style="left:20%;"></div>
        <div class="lineas" style="left:40%;"></div>
        <div class="lineas" style="left:60%;"></div>
        <div class="lineas" style="left:80%;"></div>
    </div>
    <img class="usuarias" src="Img/usuario.png">
    </div>';

    echo '<div style="visibility:visile; position:fixed; top:685; left:1397">
    <form method="POST">
        <input class="input2" type="submit" value="Cerrar sesión" name="btncerrar" />
    </form>
    </div>';
    
}


//Ancla global
echo'<div class="permanentessociales">
</div>';
echo'<div class="anclaweb">
    <div class="lineas" style="left:20%;"></div>
    <div class="lineas" style="left:40%;"></div>
    <div class="lineas" style="left:60%;"></div>
    <div class="lineas" style="left:80%;"></div>
    <form method="POST">
        <table>
            <tr>
                <td><input class="menuusuariatextos" style="left:7%; top:33%;" value="Creadores" name="opcglobalcreadores" type="submit"></td>
                <td><input class="menuusuariatextos" style="left:28%; top:33%;" value="Mundo" name="opcglobalmundo" type="submit"></td>
                <td><input class="menuusuariatextos" style="left:48.5%; top:33%;" value="Mi perfil" name="opcglobalmiperfil" type="submit"></td>
                <td><input class="menuusuariatextos" style="left:67%; top:33%;" value="Innovación" name="opcglobalinnovacion" type="submit"></td>
            </tr>
        </table>
    </form>
</div>';

if(isset($_POST['opcglobalinnovacion']))
{
    echo'<div class="campousuarias">
    
    </div>';
    echo'<div class="permanentessociales">
    </div>';
    echo'<div class="anclaweb">
    <div class="lineas" style="left:20%;"></div>
    <div class="lineas" style="left:40%;"></div>
    <div class="lineas" style="left:60%;"></div>
    <div class="lineas" style="left:80%;"></div>
    <form method="POST">
        <table>
            <tr>
                <td><input class="menuusuariatextos" style="left:7%; top:33%;" value="Creadores" name="opcglobalcreadores" type="submit"></td>
                <td><input class="menuusuariatextos" style="left:28%; top:33%;" value="Mundo" name="opcglobalmundo" type="submit"></td>
                <td><input class="menuusuariatextos" style="left:48.5%; top:33%;" value="Mi perfil" name="opcglobalmiperfil" type="submit"></td>
                <td><input class="menuusuariaaquiestoy" style="left:60.2%; top:0%;" value="Innovación" name="opcglobalinnovacion" type="submit"></td>
            </tr>
        </table>
    </form>
    </div>';
}

?>

<html>
    <head>
        <title>XandA</title>
        <link rel="stylesheet" href="Css/hipertxts.css">
        <link rel="icon" href="Img/xanda.png" type="img/png">
        <link rel="stylesheet" href="Css/Block.css">
        <link rel="stylesheet" href="Css/formularios.css">

    </head>
    <body>
    </body>
</html>