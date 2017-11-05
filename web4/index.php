<html>
	<head>
	<meta charset="utf-8">
	<link rel="icon" href="images/logo_ip2.png">
		<title>IPD ACADEMY</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
                <link href="css/estilo" rel="stylesheet" type="text/css"/>
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic|Oswald:400,300' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
	</head>
	<body>
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<img src="images/logo_ipd.png">
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
                                                                <li><a href="" target="blank">Inicio </a></li>
                                                                <li><a href="institucional.php" target="blank">Institucional</a></li>
                                                                <li><a href="complejos.php" target="blank">Complejos</a></li>
                                                                <li><a href="deportes.php" target="blank">Deportes</a></li>
                                                                <li><a href="vistas/login.html" target="blank">Login</a></li>
                                                        
             
                                                     </ul>

                                                        </ul>
                                                     
                                                                
						
					
							<a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		<!----- //End-header---->
		<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			           <img src="images/portada2.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>LA ACADEMIA IPD</h1>
			          		<label>Servicio de enseñanza deportiva por técnicos   <br>calificados en diversas disciplinas y en diversos complejos deportivos</label>
			          		<div class="learn-button">
			          		</div>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/bg.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>EL CIRCUITO DEPORTIVO</h1>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/bg.jpg" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<h1>Identificación y captación del talento </h1>
			          		
			          		
			          	</div>
			          </div>
			        </li>

			         <li>
			          <img src="images/bg.jpg" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<h1>Formación deportiva</h1>
			          		
			          		
			          	</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			<!----- //End-slider---->
			 <div class="Themes">
				<div class="container">
					<div class="feature-grids">
						<div class="col-md-4 feature-grid">
							<h3><span class="fea-icon1"> </span>Circuito Deportivo 
</h3>
							<p>Es la fase donde   los participantes se inician en la actividad física y el deporte,debiendo pasar por esta etapa para recibir aprestamiento motor, donde los profesores brindan una enseñanza lúdica</p>
							  
							  </div>

							<div class="col-md-4 feature-grid">
								<h3><span class="fea-icon2"> </span>Captación del Talento
</h3>
								<p>Un equipo de scouts o cazatalentos se encargará de evaluar distintos aspectos motores, físicos y psicológicos del participante, tales como: tonicidad muscular, coordinación global, coordinación específica, capacidades físicas básicas , edad, medidas antropométricas etc. y así poder promoverlo a una disciplina específica. 
</p>
								 
							</div>
						<div class="col-md-4 feature-grid">
							<h3><span class="fea-icon3"> </span>Formación deportiva
</h3>
							<p>Esta etapa consiste en la enseñanza de un deporte específico con una carga horaria mayor (1 1/2 horas) durante 5 días a la semana, con el objetivo de desarrollar de la mejor manera al participante. Asimismo, los técnicos que entrenan a los participantes son especialistas en su disciplina y son avalados por las FDN, ya que deben utilizar los programas  de enseñanza que estas proporcionan
.</p>
							 
						</div>

						<div class="clearfix"> </div>
					</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div>
			
		<div class="bottom">
					<div class="container">
								<div class="copy-right">
									<p>&copy; 2017  CHIMBOTE | EQUIPO KURAMA &nbsp;<a href="#">IPD DEPORTE</a></p>

								</div>								
								<div class="clearfix"> </div>
								<script type="text/javascript">
									$(document).ready(function() {
									 
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
						</div>
				</div>
</body>
</html>