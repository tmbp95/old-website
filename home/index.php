<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN”   “http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-pt" lang="pt-pt" >
<head>
<meta charset="UTF-8">
<link rel="stylesheet" a href="../estilo/estilo.css" />
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Dosis:600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../imagens/icon.png" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<title>TP * Design</title>
</head>

<body>

<?php include('../includes/topo.php');?>
<div id="site"> <!-- editar aqui dentro -->
	<div id="topo_site"></div>
	<div id="topo2_site">
		<div id="center_topo2_site">
			<div id="webdesign_box"> <!-- WEBDESIGN -->
				<span class="webdesign_text1">Webdesign</span>
					<br><br>
				<span class="webdesign_text2">All my design projects are made with help of:</span>
					<br><br>
				<img src="../imagens/photoshopico.png" style="margin-left:30px;"/><span style="margin-left:10px;" class="webdesign_text2">Photoshop</span>
					<br>
				<img src="../imagens/dreamweaverico.png" style="margin-left:30px;"/><span style="margin-left:10px;" class="webdesign_text2">Dreamweaver</span>
			</div>
			<div id="services_box"> <!-- Services -->
				<span class="services_text1">Services</span>
					<br><br>
				<span class="services_text2">Besides making websites, TPdesigns also works with photos/images.</span>	
			</div>
			<div id="webdeveloping_box"> <!-- WEBDEVELOPING -->
				<span class="webdeveloping_text1">Webdeveloping</span>
					<br><br>
				<span class="webdeveloping_text2">TPdesigns develops HTML, with CSS files and PHP codes, with the objective of creating new and innovative desigs.</span>	
			</div>
			<div style="clear:both"></div>
				<br>
			<div id="topo2_site_box">
				<span class="box_text1">If you want TPdesigns to design your website, contact him today!</span>
					<br>
				<span class="box_text2">100% Satisfaction Guaranteed Or Your Money Back.</span>
				<a href="../contact"><div id="contact2_botao"></div></a>
			</div>
		</div>
	</div>
	<script> <!-- Script #topo2_site -->
		setTimeout(function(){
		$("#topo2_site").delay(500).animate({
		height: "337px"
		}, 2000 );
		$("#topo2_site").animate({
		height: "330px"
		}, 100 );
		$("#topo2_site").animate({
		height: "336px"
		}, 150 );
		$("#topo2_site").animate({
		height: "333px"
		}, 150 );
		$("#topo2_site").animate({
		height: "335px"
		}, 150 );
		$("#center_topo2_site").delay(500).animate({
		opacity: 1.0
		}, 4500 );
		}, 500);
	</script>
	<div id="topo3_site"></div>
	<br><br><br>
</div><!-- fim -->
<?php include('../includes/baixo.php');?>
</body>

</html>