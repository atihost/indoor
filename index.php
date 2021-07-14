<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Masuta Lounge - Fortaleza-CE</title>
		<meta name="description" content="ATI-HOST FORTALEZA Slideshow" />
		<meta name="keywords" content="ATIHOST, apresentação de slides de imagem de fundo, apresentação de slides em tela cheia, jquery, imagem em tela cheia indoor, desenvolvimento web" />
		<meta name="author" content="atihost" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				
				<h1></h1>
				
			</header>	
			<div class="main">
<ul id="cbp-bislideshow" class="cbp-bislideshow">				
<?php
$pasta = 'images/';

$arquivos = glob("$pasta{*.jpg,*.png,*.gif,*.bmp}", GLOB_BRACE);
foreach($arquivos as $img){?>


<li><img src="<?php echo $img; ?>" alt="<?php echo $img; ?>" /></li>



<?php  }

?>
</ul>




				
			</div>




		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
		<script src="js/jquery.imagesloaded.min.js"></script>
		<script src="js/cbpBGSlideshow.min.js"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>
	</body>
</html>