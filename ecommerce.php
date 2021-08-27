
<?php
session_start(); /*para iciciar seccion en index cuando hacemos login*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce Rockstar</title>
    
    <script src="js/jquery-3.4.1.min.js"></script><!--hay que dejar este de primero para que las imagenes se vean y todo funcinoe porque sino no acepta los ajax-->
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo_ecomemrce.css">
</head>
<body>

<!--cabezera-->

<header>
    <div class="logo-place"><a href="./index.php"><img src="assets/rockstar.jpg" alt=""></a></div>
    <div class="search-place">
        <input type="text" id="idbusqueda" placeholder="Busqueda...">
        <button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    <div class="options-place">
    <?php
                    /*aqui ponemos la logica para que si el usuario esta loqueado se quiten los iconos*/
                    if(isset($_SESSION['codusu'])){ /*si el codigo de usuario exixte osea si esta el id del usuario porque esta loqueado  ejecutate ahora si existe una cuenta loqueada quita lso iconos de login y registrate */
                        /*ponemos el nombre del usaurio loqueado en la barra  al lado del carrito de compras*/
                        echo '<div class="item-option" ><i class="fa fa-user-circle-o" aria-hidden="true"></i><p>'.$_SESSION['nomusu'].'</p></div>'; /*vamos a hacer que se vea el logo que tiene forma de usaurio para que se vea mejor*/
                       echo' <a href="logout.php"> <div class="item-option" title="cerrar session"><i class="fa fa-user" aria-hidden="true"></i></div></a> ';/*asi aparecera el icono de cerrar session*/


                    }else{


                    ?> <!--hasta este punto esque php agarra el if-->
                    <a href="#"><div class="item-option" title="Registrate"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div></a>
                    <a href="./login.php"><div class="item-option" title="Inicia Session"><i class="fa fa-sign-in" aria-hidden="true"></i></div></a>
                    <?php
                    } /*y hasta aqui agarra todo el else el php es decir  todo ese conrenido esta dentro del else  es un poco estraña como funciona pero asi es igual hay que investigar
        */
                    ?>


                <a href="carrito.php"> <div class="item-option" title="Mis Compras"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div></a>
    </div>

</header>
<!--FIN DE LA CABEZERA-->


<!--Contenido principal-->


<div class="main-content">
     <div class="content-page">
         <div class="title-section">Todos Nuestros Rockstar Products</div>
         <div class="products-list" id="space-list">

         </div>
     </div>           
</div>
<script text="text/javascript">
    $(document).ready(function(){
        $.ajax({
            url:'servicios/producto/get_all_products.php',
            type:'POST',
            data:{},
            success:function(data){
                console.log(data);
                let: html='';
                for(var i =0;  i< data.datos.length; i++){
                    html+=
								'<div class="product-box">'+
									'<a href="producto.php?p='+data.datos[i].codpro+'">'+ /*aqui le estamos indicando que cuando haga click valla a producto.php y seleccione la imagen rorrespondiente segun el id se se lo pasamos por url*/
										'<div class="product">'+
											'<img src="assets/'+data.datos[i].rutimapro+'" alt="">'+
											'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
											'<div class="detail-description">'+data.datos[i].despro+'</div>'+
											'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+' </div>'+
										'</div>'+
									'</a>'+
								'</div>';
                }
                document.getElementById('space-list').innerHTML= html;

            },
            error:function(err){
                console.log(err);
            }
        });
    });

    function formato_precio(valor){
        let svalor =  valor.toString();
        let array = svalor.split(".");
        return "$/. " +array[0]+".<span>"+array[1]+"</span>";
    }
</script>



<!-- fin del Contenido principal-->




   <!--jquery 3.4.1-->
    <script src="js/jquery-3.4.1.min.js"></script>  
</body>
</html>