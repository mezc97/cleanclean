<!DOCTYPE html>
<html>
<head>
	<title>Be Cleaner</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
<!--Menu-->	
<div class="topnav menuInicio" id="myTopnav">
  <a href="#home" ><img class="logoMenu" src="iconos/lloo.png"></a>
  <a class=" op buy" href="#">BUY NOW</a>
  <a class="op lista" href="#">Contact</a>
  <a class="op lista" href="#about">Pricing</a>
  <a class="op lista" href="#about">Services</a>
  <a class="op lista" href="#about">About</a>
  <a class="op lista" href="#">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <span class="icon-menu"></span>
  </a>
</div>
<!--Seccion de Inicio-->
<div class="container-fluid">
	<div class="row inicio">
    	<div class="col-md-6 inicio">
	  		<img class="brillo" src="iconos/clean-slider-icon.png">
		  	<div class="row espacioCleaner">
		  		<div class="col-md-12  ">
		  			<img  src="iconos/clean-slider-icon2.png">
		  			<h1 class="animated tada">We'll make sure
		  			the space around you is sparkling clean!
		  			</h1>
		  			<p>
		  				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
		  			</p>
		  			<div class="row botonesDeInfo">
			  			<div class="col-md-6 botonesDeInfo">
			      			<button class="btn btn-primary infoP" type="submit">PRICING</button>
			      	  	</div>
			  			<div class="col-md-6 botonesDeInfo">
							<button class="btn btn-primary infoA" type="submit">ABOUT US</button>
			  			</div>
		  		    </div>
	  			    <div class="row ">
	  			 	    <div class="col-md-12 align-self-end">
	  			 	    	<img  class="espacioCleaner" src="iconos/clean-slider-leaf.png">
	  			 	    </div>
	  			    </div>
		  		</div>
	  	     </div>
    	</div>
    	<!--<div class="col-md-6 inicio inicioCarrusel">-->
		<!--Carousel Wrapper-->	
		<div id="demo" class="col-md-6  carousel slide " data-ride="carousel">
		  <div class="tarjetaPresentacion">
		  	<span class="icon-leaf"></span>
		  	<h1 class="animated pulse">Bio & Eco</h1>
		  	<p class="animated pulse">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		  	<a class="botonito" href="#"></a>
		  </div>
		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		  	<!--<?php $cnt=0; ?>-->
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1" ></li>
		    <li data-target="#demo" data-slide-to="2" ></li>
		    <!--<?php $cnt++; ?>-->
		  </ul>
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/3.jpg" alt="predeterminada" width="100%" height="auto">
		    </div>
		        <!--<div class="carousel-item">-->
		      <?php
		        include("conexion.php");
		        $query = "SELECT * FROM tabla_imagen";
		        $resultado = $conexion->query($query);
		        while ($row = $resultado->fetch_assoc()) {
		          ?>
		            <div class="carousel-item ">
		              <img width="100%" height="auto" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>">
		            </div>
		          <?php
		          }
		        ?>
		   	   </div>
		  		<!--</div>-->


  		 	<!-- Left and right controls -->
  		  <a class="carousel-control-next" href="#demo" data-slide="next"></a>
    	</div>
    </div>
</div>



<!--Fondo gris-->
    <div class="fondito">
		<div class="row">
			<div class="col-md-6 fonditoGris">
				<img src="img/cuadro.jpg">
			</div>
			<div class="col-md-6 fonditoGris"></div>
		</div>
	</div>
<!--El about us-->
	<div class="container">
	    <div class="row aboutUs">
	    	<div class="row ">
	    		<div class="col-md-12 aboutUsSecciones1993 ">
	    		     <h4 >About us</h4>
	    		      <h1>We know how to build trust & offer the highest quality</h1>
	    		      <div class="row">
	    		<div class="col-md-6 aboutUsSecciones">
	    			<img class="imgAbout" src="iconos/clean-home-icon1.png">
	    			<h3>We have been building our experience effectively since</h3>
	    			<h2>1993</h2>
					<button class="btn btn-primary buy now" type="submit">ABOUT US</button>
					<br>
	    		</div>
	    		<div class="col-md-6 aboutUsSecciones">
	    			<div class="row contenidoAbout">
	    				<div class="col-md-6 aboutUsSecurity">
	    					<img class="imgAboutS" src="iconos/clean-home-icon2.png">
	    					<h3>Security of order fulfillment</h3>
	    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	    				</div>
	    				<div class="col-md-6 aboutUsSecurity">
	    					<img class="imgAboutS" src="iconos/clean-home-icon3.png">
	    					<h3>Security of order fulfillment</h3>
	    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	    </div>
	    	</div>
	    </div>
	</div>
<!--Fondo Gris dos-->

	<div class="row">
		<div class="col-md-6 fonditoGrisDos">
			<img class="fondoNeeds" src="img/cuadro.jpg">
			
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
<!--Seccion necesidades-->
	<div class=" needs">
		<div class="  row ">
			<div class="  col-md-12 ">
				<div class=" row contenedorDeImagenes">
					<div class="col-md-6 needs needsneeds">	
						
						<img class="needsDerecha imgAbs" src="img/2.jpg" style="width: 50% " >
						<img class="imgAbs" src="img/2.jpg" style="width: 100%">
					</div>
					<div class="col-md-6 needs">
						<img class="izquierda" src="img/2.jpg" style="width: 100%;  height:100%  ">
					</div>

					<!--investigar cuando se reduce que aparezca el carrusel-->
				</div>		
			</div>
		</div>
	</div>
<!--Seccion Services Pricing-->
	<div class="colorServPric">
		<h4>Services & Pricing</h4>
		<h1>Dedicated services tailored to your needs</h1>
	</div>
<!--Seccion de precios-->
	<div class="container fromFor">
		<div class="row">
			<div class="col-md-6 precioHome">
				<img src="iconos/clean-home-icon2.png">
				<h3>From $149/mo</h3>
				<h1>For home</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<button class="btn btn-primary precioHom" type="submit">Pricing</button>
			</div>
			<div class="col-md-6 precioBusiness">
				<h3 >From $179/mo</h3>
				<img class="precioBusinessImg" src="iconos/clean-home-icon-5.png">
				<h1>For business</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<button class="btn btn-primary precioBus" type="submit">Pricing</button>
			</div>
		</div>
	</div>

<!--Seccion de servicios-->
	<div class="container servicesServices justify-content-center">
		<img class="imgServices " src="iconos/clean-home-icon3.png">
		<div class="row">
			<div class="col-md-6 servicesBlue">
				<h1>Services</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.</p>
			</div>
			<div class="col-md-6 servicesMorado">
				<h1>Services</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.</p>
			</div>
		</div>	
	</div>

<!--Seccion Electricidad-->
	<div class="container ourWork">
		<div class="row">
			<div class="col-md-6 ourWork">
				<h4>About us</h4>
				<h1>In our work,we also care about the environment</h1>
			</div>
			<div class="col-md-6">
				<div class="row usUs">
					<div class="col-md-6 our">
						<img src="iconos/clean-home-icon-6.png">
						<h2>Electricity</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.</p>
						<h1>-68%</h1>
					</div>
					<div class="col-md-6 ourW">
						<img src="iconos/clean-home-icon-7.png">
						<h2>Electricity</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.</p>
						<h1>-68%</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--Seccion de preguntas-->
	<div class="container question">
		<div class="row question">
			<div class="col-md-6 question">
				<img class="questionImgSuperior" src="iconos/clean-slider-leaff.png" style="width: 49%">
				<img class="questionImgInf" src="iconos/clean-slider-leaf.png" style="width: 49%">
			</div>
			<div class="col-md-6 llama ">
				<div class="row ">
					<div class="col-md-12 questionPrincipal">
						<img src="iconos/clean-home-icon-8.png">
						<h2>If you have any question, feel free to call us</h2>
					</div>
				 </div>
				<h1>+91-8010200666</h1>
				<small>Monday -Friday,9:00 AM-6:00 PM</small>
			</div>
		</div>
	</div>
<!--Seccion limpio-->
	<div class="clean">
		<div class=" row cleanInfo">
			<div class="col-md-12 ">
				<img  src="iconos/lloo.png">
				<h4>Nulla mauris dolor,gravida a varius blandit , auctor eget purus. Phasellus scelerisque sapien sit amet mauris laoreet,eget.</h4>			
			</div>		
		</div>	
	</div>
<!--footer-->
	<div class="row footer">
		<div class="col-md-12 ">
			<h6 class="copy">2019 BeCleaner 2-BeTheme. All Rights Reserved. <a class="copy" href="#">Muffin Group</a></h6>
			<div class="enlaces">
				<a href="#">Contact</a>
				<a href="#">Services</a>
				<a href="#">Pricing</a>
				<a href="#">About us</a>
			</div>
		</div>
	</div>


	<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>