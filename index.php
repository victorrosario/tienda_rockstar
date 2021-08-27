<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--bootrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--estilo principal del ecommer-->
    <link rel="stylesheet" href="css/estilolandingpage.css">
</head>
<body>
<!--CABESERA BARRA DE NAVEGACION-->
   
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <!--BOTON QUE APARECERA SI SE REDUCE LA PANTALLA-->
        <button
          type="button"
          class="navbar-toggle collapsed"
          data-toggle="collapse"
          data-target="#navbar"
          aria-expanded="false"
          aria-controls="navbar"
        >
          <span class="sr-only">
            esto solo lo podra ver dispositivos para indigentes graciasal
            sronly este boton despliega la barra de navegacion</span
          >
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--FIN DEL BOTON QUE APARECE SI SE REDUCE LA PANTALLA-->
        <!--LOGO DE LA PAGINA-->
        <a class="navbar-brand" href=""></a>
        <!--fin del logo de pa pagina-->
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        
        <ul class="nav navbar-nav navbar-right">
           
          <li><a href="login.php"> <span class="" aria-hidden="true"></span>Login</a></li>
          <li><a href=""> <span class="" aria-hidden="true"></span>Registro</a></li>
          <li><a href=""> <span class="" aria-hidden="true"></span>Noticias</a></li>
          <li><a class="" href="./ecommerce.php"> <span class="" aria-hidden="true"></span>Tienda Online</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--FIN DE LA BARRA DE NAVEGACION -->

  <section id="hero-container" >
      <div id="hero-background"></div>
      <div  id="hero-content" class="container h-100"> <!--h-100 es una clase de bootrap que hace que tenga un height del 100%-->
        <div class="row no-gutters h-100 d-flex"><!--no-gutters es una  clase de boostrap que hace que no tenga padding, d-flex es una clase de boostrap que da un dispaly flex-->
            <div id="hero-text" class="col-md-6 ">
                <h1>Rockstar Technology </h1>
                <p class="">developing your dreams</p>
            </div>
           
        </div> 
      </div>
  </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      window.onload = function(){/*esta funcion es para que  cuando la pagin a carge ella se ejecute*/
        setTimeout(function(){/*esto hara que tenga un intervalo de tiempo*/
          document.getElementById('hero-background').style.width ='100%'; /*hace que cuando la pagina cambie carge el el div hero-bacground aumente la ancura al 100% y genera una transicion bastante bonita*/
        }) 
      } 
    </script>
     
</body>
</html>