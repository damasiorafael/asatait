<?php

    $tit[1] = "JORNAL FAMÍLIA. SISTEMA MAXI DE ENSINO.";
    $tit[2] = "JORNAL DA A.YOSHII ENGENHARIA E YTICON.";
    $tit[3] = "REVISTA COLÉGIO MAXI LONDRINA E CUIABÁ.";
    $tit[4] = "REVISTA DO SISTEMA MAXI DE ENSINO E ABRIL EDUCAÇÃO.";
    $tit[5] = "JORNAL DA TAMARANA TECNOLOGIA.";
    $tit[6] = "JORNAL FRANGO GRANJEIRO.";
    $tit[7] = "JORNAL PRESENÇA VIVA.";
    $tit[8] = "JORNAL DA HYDRONORTH.";
    $tit[9] = "JORNAL BELAGRÍCOLA.";
    $tit[10] = "JORNAL DJ MÓVEIS ARAPONGAS.";
    $tit[11] = "JORNAL BELASAFRA BELAGRÍCOLA.";
    $tit[12] = "JORNAL SICOOB METROPOLITANO MARINGÁ";

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ASA Tait Editoração - PRODUTOS</title>

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
        
       		<h1>ALGUNS DE NOSSOS PRODUTOS</h1>
            <p class="tx-destaque-pg-quem-somos">A AsaTait Editoração produz inúmeros materiais impressos que necessitam de texto e arte-final.</p>
        </div>
                
    </div>
    
</section>
<!-- Page header Section -->

<!-- Page Section Section -->
<section class="page-section padbottom50 dark-background">

    <div class="container">
        
        <h1>Nossas publicações</h1>

        <ul id="ublportfolio" class="grid cs-style-3">
        
        <?php for($i = 1; $i <= 12; $i++){ ?>
        <!-- Portfolio Item -->
        <li class="thisportfolioitem fourcol flat-design" data-category="flat-design">
            
            <figure>
            
                <img src="uploads/revistas/capa/<?php echo $i; ?>.jpg" alt="<?php echo $tit[$i]; ?>">
                                    
                <figcaption>
                    <h3 class="tit-publicacao"><?php echo $tit[$i]; ?></h3>
                    <a href="uploads/revistas/arquivos/<?php echo $i; ?>.pdf" target="_blank" title="<?php echo $tit[$i]; ?>">Visualizar</a>
                </figcaption>
                
            </figure>
            
        </li>
        <!-- Portfolio Item -->
        <?php } ?>
        
       </ul>
       
    </div>
    
</section>
<!-- Page Section Section -->

<!-- Page Section Section -->
<section class="page-section dark-background">
    
    <!-- Container -->
    <div class="container padbottom60">
       <!-- Row -->
        <div class="row">
            
           <!-- Large Title -->
            <div class="text-center padbottom30">
            
            <h1>Nossos produtos</h1>
           </div>
           <!-- Large Title -->
            
           <!-- Full Width -->
            <div class="span12">
                
              <!-- Progressive Bars -->
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Jornais para funcionários: mensais, bimestrais ou trimestraisWeb Design</span><div class="bar" style="width: 100%"></div></div>
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Jornais para clientes: mensais, bimestrais ou trimestraisWeb Development</span><div class="bar" style="width: 100%"></div></div>
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Revistas mensais, bimestrais, trimestrais, semestrais ou anuais</span><div class="bar" style="width: 100%"></div></div>
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Revistas comemorativas de 5, 10, 15, 25 anos, etc.</span><div class="bar" style="width: 100%"></div></div>
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Manual do Funcionário</span><div class="bar" style="width: 100%"></div></div>
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Manual de Integração</span><div class="bar" style="width: 100%"></div></div>
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Manual de Ética</span><div class="bar" style="width: 100%"></div></div>
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Manual de Segurança</span><div class="bar" style="width: 100%"></div></div>
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Textos para site (renovação periódica dos conteúdos)</span><div class="bar" style="width: 100%"></div></div>
                <div class="progress progress-inverse" style="margin-bottom: 5px; margin-top:4px;"><span class="progressinner">Redação de Avisos e Comunicação Internas.</span><div class="bar" style="width: 100%"></div></div>
              <!-- Progressive Bars -->
    
            </div>
           <!-- Full Width -->
    
        </div>
        <!-- Row -->
    
    </div>
    <!-- Container -->
    
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
