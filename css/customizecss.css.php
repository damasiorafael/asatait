<?php

header('Content-Type: text/css');

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require( $parse_uri[0] . 'wp-load.php' );

$options = get_option('ublalfie');

if(isset($options)){ ?>
body{
	<?php if(isset($options['backgroundimage']) && $options['backgroundimage'] != ''){ ?>
	background-image:url(<?php echo $options['backgroundimage']; ?>);	
	background-repeat: <?php echo $options['backgroundrepeat']; ?>;
	<?php }
	
	if(isset($options['sitebackgroundcolour']) && $options['sitebackgroundcolour'] != ''){ ?>
	background-color:<?php echo $options['sitebackgroundcolour']; ?>;
	<?php } ?>
	
}

h1,h2,h3,h4,h5,h6{
	<?php if(isset($options['maintitletypographycss']) && $options['maintitletypographycss'] != ''){ ?><?php echo $options['maintitletypographycss']; ?><?php } ?>
	<?php if(isset($options['maintitlecolours']) && $options['maintitlecolours'] != ''){ ?>color:<?php echo $options['maintitlecolours']; ?>;<?php } ?>
}

<?php if(isset($options['maintitlesubcolours']) && $options['maintitlesubcolours'] != ''){ ?>h1 small, h2 small, h3 small, h4 small, h5 small, h6 small, .muted{color:<?php echo $options['maintitlesubcolours']; ?>;}<?php } ?>

<?php if(isset($options['sitecolour']) && $options['sitecolour'] != ''){ ?>
.inverse-font,
a.inverse-link,
a:visited.inverse-link,
.comment_info a,
.comment_info a:visited,
#wp-calendar a,
.logo a:hover,
.nav-pills > li > a:hover,
.btn-navbar,
.btn-navbar:hover,
.tweet_list li a,
.nav-tabs > li > a,
.detailpagepag a:hover,
.theblogpost h3 a:hover,
.blogtags a,
.pagination ul > li > a,
.pagination ul > li > a:hover,
.tagcloud a:hover,
.blogwidgetarea li a:hover,
.grid figcaption{color:<?php echo $options['sitecolour']; ?>;}

.tooltip.bottom .tooltip-arrow,
.teammember,
.portfolioitem,
.theblogpost h3 span,
.blogwidgetarea h3 > span,
.title span{border-bottom-color: <?php echo $options['sitecolour']; ?>;}

.tooltip.top .tooltip-arrow {border-top-color: <?php echo $options['sitecolour']; ?>;}

.tooltip.left .tooltip-arrow,
.accordion-heading .accordion-toggle{border-left-color: <?php echo $options['sitecolour']; ?>;}

.tooltip.right .tooltip-arrow {border-right-color: <?php echo $options['sitecolour']; ?>;}

.inverse-background,
.tooltip-inner,
a:link.comment-reply-link,
a:visited.comment-reply-link,
#wp-calendar thead th,
#wp-calendar #prev a,
#wp-calendar #next a,
ul.option-set li a.selected,
ul.option-set li a:hover,
.datebackground,
.pagination ul > li > a:focus, .pagination ul > .active > a, .pagination ul > .active > span,
.tagcloud a,
.featured  > header,
.grid figcaption a{background-color:<?php echo $options['sitecolour']; ?>;}

.detailpagepag a, .detailpagepag a:visited{background-color:<?php echo $options['sitecolour']; ?>;}

.progress-inverse .bar,
.progress .bar-inverse {
  background-color: <?php echo $options['sitecolour']; ?>;
  background-image: -moz-linear-gradient(top, <?php echo $options['sitecolour']; ?>, <?php echo $options['sitecolour']; ?>);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $options['sitecolour']; ?>), to(<?php echo $options['sitecolour']; ?>));
  background-image: -webkit-linear-gradient(top, <?php echo $options['sitecolour']; ?>, <?php echo $options['sitecolour']; ?>);
  background-image: -o-linear-gradient(top, <?php echo $options['sitecolour']; ?>, <?php echo $options['sitecolour']; ?>);
  background-image: linear-gradient(to bottom, <?php echo $options['sitecolour']; ?>, <?php echo $options['sitecolour']; ?>);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $options['sitecolour']; ?>', endColorstr='<?php echo $options['sitecolour']; ?>', GradientType=0);
}

.nav-tabs > .active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus {
	background-color: <?php echo $options['sitecolour']; ?>;
	border: 1px solid <?php echo $options['sitecolour']; ?>;
}
<?php } ?>
<?php } ?>