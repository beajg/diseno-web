<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta tags de importancia ALTA -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Beatriz Jaime Gomory">
	<meta name="description" content="Página Web Personal">
	<link ref="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Nixie+One|Poiret+One|Quicksand|Raleway|Voltaire&display=swap">
	<meta name="google-site-verification" content="yyIJcpw7X9uVyhUS0IzQEZu_3eYOLOLxaJg8QxVboug" />
	<link rel="stylesheet" href="css/styles.css">
	<link id="page_favicon" href="imgs/favicon.ico" rel="icon" type="image/x-icon">

	<!-- meta tags de importancia MEDIA -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeaJG</title>
</head>
<body>

	<div class="container">
    	<header>
			<img class="logo" src="/imgs/logo.svg" alt="Logo">
		
			<!-- MENÚ DE NAVEGACIÓN -->
            	<nav class="menu">
                	<ul>
                    	<li class="me"><a href="whoami.html" >Who Am I</a></li>
                    	<li class="portfolio"> <a href="portfolio.html">Portfolio</a></li>
                    	<li class="contact"> <a href="contact.html">Contact</a></li>
					</ul>
				</nav>
    	</header>
	</div>

	<!-- JAVASCRIPT -->
						<script src="/js/three.r92.min.js"></script>
						<script src="/js/vanta.birds.min.js"></script>
						<script>
						VANTA.BIRDS({
	  					el: ".container",
						backgroundColor: 0xffedd5,
						color1: 0x1e517f,
  						color2: 0x1b8a91,
  						birdSize: 1.20,
  						cohesion: 41.00
						})
						</script>

    					<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
						<script>
						ScrollReveal().reveal('.me', { scale: 0.5, delay: 700 });
    					ScrollReveal().reveal('.portfolio', { scale: 0.9, delay: 500 });
    					ScrollReveal().reveal('.contact', { scale: 0.7, delay: 900 });
						</script>
<!-- JAVASCRIPT -->
</body>

</html>