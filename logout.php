<?php
/*esto hara que al darle al al icono de cerrar seccion se cierre la session */
session_start();
session_destroy();
header('Location: ./ecommerce.php');/*nos dirigira a la misma pagina pero con la session cerrada*/


?>