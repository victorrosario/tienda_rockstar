<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo-login.css">
</head>
<body>
    

    <!--LOGIN-->
    <div class="login-div">
        <div class="logo"></div>
        <div class="titulo"> 
            Rockstar Technology
        </div>
        <div class="subtitulo">developing your dreams</div>
        <div class="campos">
        <form action="servicios/logica_login.php" method="POST">
        <div class="usuario">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                <input type="text" name="emausu" class="input-usuario" placeholder="Email">

            </div>
            <div class="contraseña">
                <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                <input type="password" class="input-pass" name="pasusu" placeholder="Contraseña">

            </div>
            <?php
                if(isset($_GET['e'])){ /*si existe el parametro e de error por la url ejecutate y es un get porque lo devuelve en la url*/
                    switch ($_GET['e']) {
                        case '1': /*si es el error uno por la url*/
                            echo '<p>Error de conexion</p>';
                            break;
                        case '2': /*si es el error uno por la url*/
                            echo '<p>Email invalido</p>';
                            break;
                        case '3': /*si es el error uno por la url*/
                            echo '<p>Contraseña incorrecta</p>';
                            break;
                        
                        default:
                            # code...
                            break;
                    }

                }
            
            ?>
            <button type="submit" class="boton">Entrar</button>

            <div class="link">
                <a href="#">Olvide la contraseña</a> o <a href="#">Registrate</a>
            </div>
        </form>
            
        </div>
    </div>





    <!--FIN DEL LOGIN-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>   
</body>
</html>