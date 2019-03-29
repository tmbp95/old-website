<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN”   “http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-pt" lang="pt-pt" >
<head>
<meta charset="UTF-8">
<link rel="stylesheet" a href="../estilo/estilo.css" />
<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Dosis:600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../imagens/icon.png" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<title>TP * Design</title>
</head>

<body>
	<div id="logotipo" style="margin-left:40px;position:relative;top:25px;z-index:2;"></div><div id="menu" style="margin-top:-20px;"><a href="../home"><span class="menu">Home</span></a><a href="../projects"><span class="menu">Projects</span></a><span class="menu">Contact</span></div><hr><br>
<div id="texto">
	<span style="margin-left:240px;" class="texto1">Contact me</span>
	<br>
	<span class="texto2" style="margin-left:155px;">Send me an email and I'll contact you!</span>
</div>

	<br><br>
<div id="site" style=""> <!-- editar aqui dentro -->

<div id="topo2_projects1"></div>
<div id="topo2_projects" style="height:420px;">
	<div style="width:900px;height:390px;margin:0 auto;">
		<span class="text_contact">Do you want to know more about me?</span>
			<br>
		<span class="text2_contact">Do you want me to design your website?</span>
			<br>
		<span class="text3_contact">Just fill the fields below.</span>
			<br><br><br>
		<form id="form_enviar" style="margin-left:40px;" action="enviar.php" method="POST">
			<input type="hidden">
			<span class="about">Name:</span><input type="text" class="inputs1" size="30" name="nome" value=""><br>
			<span class="about">Email:</span><input type="text" class="inputs2" size="30" name="email" value=""><br>
			<span class="about">Subject:</span><input type="text" class="inputs3" size="30" name="assunto" value=""><br>
			<span class="msg">Message:</span><textarea class="inputs4" name="mensagem" value=""></textarea> <br>
			<input class="button" name="submit" type="submit" value=" Send " onclick="window.open('#', '_self')"/>
				<br><br>
		</form>
			<br>
		<span class="text4_contact">* If you prefer you can send for designs@tmbp.net</span>
	</div>
</div>
<div id="topo2_projects3"></div>
<div style="clear:both;"></div>
</div><!-- fim -->
	<br><br>
<?php include('../includes/baixo.php');?>
</body>

</html>