<html>
	<head>
	<meta charset="utf-8">
	<link rel="icon" href="images/logo_ip2.png">
		<title>IPD ACADEMY</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" />
                <link href="css/estilo.css" rel="stylesheet" type="text/css" />
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
                                                           <li><a href="index.php" target="blank">Inicio </a></li>
                                                                <li><a href="institucional.php" target="blank">Institucional</a></li>
                                                                <li><a href="complejos.php" target="blank">Complejos</a></li>
								<li><a href="" target="blank">Deportes</a></li>
								<li><a href="vistas/login.html" target="blank">Login</a></li>
                                                        
             
                                                     </ul>

                                                        </ul>
                                                     
                                                                
						
					
							<a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
	</div>
              
                <div class="page-header">
                    
                    <center><img src="images/institucion.jpg" width="800" height="600"/></center>
                    <div class="page-solida">
                    </div>
                    <div class="page-solida">
                    <h2>Descripción</h2>
                    </div>
                    <div class="bloque">
                    <div class="texto">
                           El Instituto Peruano del Deporte es el ente rector del Sistema Deportivo Nacional, el cual en coordinación con los organismos del Sistema Deportivo Nacional, formula e imparte la política deportiva, recreativa y de educación física. Organiza, planifica, promueve, coordina, evalúa e investiga a nivel nacional el desarrollo del deporte, la recreación y la educación física en todas sus disciplinas, modalidades, niveles y categorías.

                    </div>
                    </div>
                    
                   <div class="page-solida">
                    <h2>Objetivos Especificos</h2>
                    </div>
                    <div class="bloque">
                    <div class="texto">
                        Incrementar el desempeño del deporte peruano en eventos competitivos y promover la sostenibilidad de las actividades físicas, deportivas y recreativas en la sociedad peruana.
                        El IPD busca promover e incentivar la masificación deportiva, la formación y el alto rendimiento en todas sus disciplinas, modalidades, niveles y categorías. 
                    </div>
                    </div>
                    
                    <div class="page-solida">
                    <h2>Misión</h2>
                    </div>
                    <div class="bloque">
                        <div class="texto">
                            Somos el ente rector del Sistema Deportivo Nacional; promotor, facilitador, articulador del desarrollo del deporte en el país, que contribuye a la mejora de la calidad de vida de la sociedad peruana; comprometidos con la excelencia, la mejora continua y la obtención de resultados sostenibles en el tiempo.
                        </div>
                    </div>
                   
                    <div class="page-solida">
                    <h2>Visión</h2>
                    </div>
                    <div class="bloque">
                        <div class="texto">
                            “En 2021 el IPD es reconocido a nivel nacional e internacional, como el ente rector que contribuye a incrementar el desempeño del deporte peruano en eventos competitivos y promueve la sostenibilidad de las actividades físicas, deportivas y recreativas en la sociedad peruana, con una gestión excelente, con enfoque a resultados y mejora continua de sus procesos”.

                        </div>

                    </div>
                      <div class="page-solida">
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
