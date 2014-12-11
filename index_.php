<?Php
include('conectar.php');
$cedula=10860154;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mi centro</title>
	<meta name="title" content="mi centro" />
	<meta name="description" content="Tecno stylo linea haire care" />
	<meta name="jose Luis Munevar Diaz" content="wwww.moova2.com">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
  
  
<link rel="stylesheet" href="css/responsivemobilemenu.css" type="text/css"/>
<script type="text/javascript" src="js/responsivemobilemenu.js"></script>
	
	
	


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
 

  


</head>


<body>
 <img src="img/logo-small.png" id="logo-small">
  <header>
    <nav class='rmm' data-menu-style = "minimal">
            <ul>
            <?Php
            echo "<li><a href='lpeluquero.php?ip=".$cedula."' target='principal'>Profesionales</a></li>";
			echo "<li><a href='lservicios.php?ip=".$cedula."' target='principal'>Servicios</a></li>";
			echo "<li><a href='http://tecnostylo.com/peluqueros/vcita.php?ip=".$cedula."' target='principal'>Registrarse</a></li>";
			echo "<li><a href='http://tecnostylo.com/httpdoc/galeria.php?cedula=".$cedula."' target='principal'>Fotos</a></li>";
			echo "<li><a href='httpdoc/cpuntos.php?peluqueria=$cedula' target='principal'>Ver Puntos</a></li>"; 
			echo "<li><a href='http://tecnostylo.com/peluqueros/vdcitas.php?ip=".$cedula."' target='_blank'>Tomar Cita</a></li>";
			echo "<li><a href='httpdoc/formcliente.php?cedula=".$cedula."' target='principal'>Deja un Comentario</a></li>"; 
			?>
            </ul>
</nav>
  </header>

<script>
 $(window).load(function() {

// Slideshow 1
      $("#slider1").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "centered-btns"
      });
  
   });

</script>





  <div class="wrapper">
	  <div class="main">
	    
      <section id="land1">

<ul class="rslides">
  <li><img src="img/slide1.png" alt=""></li>
  <li><img src="img/slide2.png" alt=""></li>
</ul>



          <h1>Tecno stylo</h1>
          <h2>PROFESSIONAL HAIR CARECARE</h2>
          <p>Para uso diario, repara la fibra capilar, da sedosidad y <br> brillo extremo</p>
            
          
          

  	    
      </section>
	    
	    <section id="land2">
	      <img src="img/logo-tecno.png"  id="logo" alt="tecnostylo logro grande">
	      <p>Rompe barreras<br>
          Expresa tu estilo</p>
      </section>
	    <section id="land3">

        <h3>25% de Desceunto<br>
        pagando de contado</h3>
         
  	     </div>
  	    </div>
      </section>
    </div>
  </div>

<footer>expresate</footer>
</body>
</html>