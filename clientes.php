<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ASA Tait Editoração - CLIENTES</title>

<!-- FAVICON -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<!-- FAVICON -->

<!-- Css to make the site work -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/nerveslider.css" rel="stylesheet" type="text/css">
<link href="css/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="css/custom-responsive.css" rel="stylesheet" type="text/css">
<link href="css/themecolours.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
<!-- Css to make the site work -->

<!-- Google fonts -->
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:600" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:700" rel="stylesheet" type="text/css">
<!-- Google fonts -->

<!-- Jquery and modernizer javascripts -->
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- Jquery and modernizer javascripts -->

<!-- Rev slide javascripts -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Rev slide javascripts -->

</head>

<body>

<?php include('includes/header.php'); ?>

<!-- Page header Section -->
<section class="page-header inverse-background">

	<div class="pageheaderimage">
    
		<div class="container pad15">
        
       		<h1>ALGUNS DE NOSSOS CLIENTES</h1>
       		<p class="tx-destaque-pg-quem-somos">
                Atendemos clientes de pequeno, médio e grande porte, de diferentes segmentos, tais como escolas, construtoras, indústrias, bancos, cooperativas, sindicatos, igrejas, associações, frigoríficos, entre outros.  Com 17 anos de atuação, temos grande experiência em diversos ramos, como educacional, moveleiro, construção civil, frigoríficos, tecnologia e meio ambiente, entre outros. Confira alguns dos clientes atendidos.
            </p>
                      
        </div>
                
    </div>
    
</section>
<!-- Page header Section -->

<!-- Page Section Section -->
<section class="page-section-white dark-background">
	
    <div class="container">
         
          <!--Latest clients area -->
          <div class="row">

                <ul class="clientslist white-background clientslist-four">
                    <?php for($i = 1; $i <= 34; $i++){ ?>
                        <li class="fourcol"><img alt="lo4" src="uploads/clientes/<?php echo $i; ?>.jpg"></li>
                    <?php } ?>
                </ul>
           
           </div>

	</div>
    
</section>
<!-- Page Section Section -->

<?php include('includes/footer.php'); ?>

<!-- Javascript to make the site work -->
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nerveSlider.min.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/sharrre.js"></script>
<script src="js/custom.js"></script>
<script src="js/stickyheader.js"></script>
<!-- Javascript to make the site work -->

</body>
</html>
