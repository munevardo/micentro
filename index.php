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
    <link rel="stylesheet" href="css/novedades.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/formulario.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    
  
  
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
			echo "<li><a href='http://tecnostylo.com/peluqueros/vdcitas.php?ip=".$cedula."' target='_blank'>Agenda</a></li>";
			?>
            </ul>
</nav>
  </header>

<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });


    // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "transparent-btns"
      });
</script>



  <div class="wrapper">
	  <div class="main">
	    

            
      <section id="land1">
    <div class="rslides_container">
      <ul class="rslides" id="slider2">
      <?Php
	  	$gale=mysql_query("select * from img where ce_cliente='$cedula'");
		while($fotografia=mysql_fetch_array($gale))
		{
			//esta es la galeria
			echo "<li><img src='http://tecnostylo.com/httpdoc/".$fotografia['di_imempresa']."'/></img ></li>";
		}
		?>
      </ul>
    </div>
      </section>
	    
   
   <?Php
		$cedula=10860154;
		$promociones=mysql_query("select * from promociones where ce_cliente='$cedula'");
		while($datos=mysql_fetch_array($promociones))
		{
		echo "<section id='container'>";
			echo "<article class='promocion'>";
			
			echo "<img src='http://tecnostylo.com/httpdoc/".$datos['di_foptom']."' class='img2'/>";
			echo "<h3>".$datos['tpromocion']."</h3>";
			echo "<spam align='center'>".$datos['promocion']."</spam>";
			echo"<br>";
		echo "</article>";
		echo "</section>";
		
		}
		
			?>

<footer><boton onClick="ShowForm()">Expresate</boton></footer>
<div id="form">
<iframe name="form" width="80%" height="100%" scrolling="no" frameborder="0" src="../httpdoc/fcontacto.php"></iframe>
</div>
</body>
</html>