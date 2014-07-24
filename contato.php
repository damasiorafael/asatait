<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ASA Tait Editoração - CONTATO</title>

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

<?php /*<!-- Google Map Section -->
<section class="contactgooglewrap">
	<div id="map">
		<iframe src="https://maps.google.co.uk/maps?q=Envato,+Australia&amp;t=p&amp;hl=en&amp;sll=-23.3077035,-51.1722695&amp;sspn=0.006861,0.018797&amp;oq=blackpool&amp;geocode=FRkqNQMdUmHR_w&amp;hnear=Blackpool+Tower&amp;z=15&amp;output=embed"></iframe>
	</div>
</section>
<!-- Google Map Section -->*/ ?>

<!-- Page Section -->
<section class="page-section">

	<!-- Container -->
	<div class="container">
		
       <!-- Row -->
		<div class="row">
        	<h1 class="marginleft25">Contato</h1>
            <!-- 2/3 Width -->
            <div class="span8 padbottom50">
                <div id="note"></div>
                <div id="fields">
                    <form id="ajax-contact-form" method="post" action="contato.php">
                        <p class="form_info">Nome <span class="required">*</span></p>
                        <input type="text" name="nome" id="nome" value="" class="fullwidth" />
                        <p class="form_info">E-mail <span class="required">*</span></p>
                        <input type="text" name="email" id="email" value="" class="fullwidth"  />
                        <p class="form_info">Mensagem</p>
                        <textarea name="mensagem" id="mensagem" class="fullwidtharea"></textarea>
                        <input type="submit" class="btn-form" value="Enviar" />
                    </form>
                </div>
            </div>
            <!-- 2/3 Width -->
            
            <!-- 1/3 Width -->
            <div class="span4 pad20 padbottom50">
                <h4 class="title">
                    <span>Endereço</span>
                </h4>
                <address>
                    Rua Fernando de Noronha, 970, 1º andar, Centro<br />
                    Londrina, Paraná
                    CEP: 806061-410
                </address>
                
                <h4 class="title">
                    <span>Email</span>
                </h4>
                <address>
                    <span>Direção: Angela Tait</span><br />
                    <a class="inverse-link" title="email" href="mailto:angela@asatait.com.br">angela@asatait.com.br</a><br />
                </address>

                <address>
                    <span>Atendimento e prospecção de clientes: Victor Lopes</span><br />
                    <a class="inverse-link" title="email" href="mailto:atendimento@asatait.com.br">atendimento@asatait.com.br</a><br />
                </address>
                
                <h4 class="title">
                    <span>Telefone</span>
                </h4>
                <address>
                    (43) 3301-7691<br />
                </address>

                <h4 class="title">
                    <span>Horário de Atendimento</span>
                </h4>
                <address>
                    <span>De segunda a sexta-feira, das 8h30 às 12h e das 14h às 18h</span>
                </address>
                
            </div>
            <!-- 1/3 Width -->
        
        </div>
        <!-- Row -->
        
    </div>
    <!-- Container -->
    
</section>
<!-- Page Section -->

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
