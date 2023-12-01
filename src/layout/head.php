<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GTX100 <?php echo isset($titulo_pagina) ? '| ' . $titulo_pagina : '' ?></title>
		
		<!-- Custom Styles -->
		<link rel="stylesheet" href=<?php echo '/' . $config['host'] . '/src/css/style.css'?>>

		<!-- Icone -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
	</head>
	
	<body>
		<header>
			<nav id="menu-desktop">
				<div class="">
					<a href="/"><img id="logo-tipo" src=<?php echo '/' . $config['host'] . '/src/img/GTX100_logo.png'?> alt="" /></a>
					<ul>
						<li><a href=<?php echo '/' . $config['host'] . '/'?>>Home</a></li>
						<li><a href=<?php echo '/' . $config['host'] . '/metodologia/'?>>Metodologia</a></li>
						<li><a href=<?php echo '/' . $config['host'] . '/campanhas/'?>>Campanhas</a></li>
						<li><a href=<?php echo '/' . $config['host'] . '/referencias/'?>>Referências</a></li>
						<li><a href=<?php echo '/' . $config['host'] . '/cases/'?>>Cases</a></li>
						<li><a href=<?php echo '/' . $config['host'] . '/contato/'?>>Contato</a></li>
					</ul>
				</div>
			</nav>
			<nav id="menu-mobile">
				<ul>
					<li><a href=<?php echo '/' . $config['host'] . '/'?>>Home</a></li>
					<li><a href=<?php echo '/' . $config['host'] . '/metodologia/'?>>Metodologia</a></li>
					<li><a href=<?php echo '/' . $config['host'] . '/campanhas/'?>>Campanhas</a></li>
					<li><a href=<?php echo '/' . $config['host'] . '/referencias/'?>>Referências</a></li>
					<li><a href=<?php echo '/' . $config['host'] . '/cases/'?>>Cases</a></li>
					<li><a href=<?php echo '/' . $config['host'] . '/contato/'?>>Contato</a></li>
				</ul>
				<a onclick="abrirMenu()" href="#">&#10005;</a>
			</nav>
			<div id="top-bar">
				<a onclick="abrirMenu()" href="#">&#9776;</a>
				<img id="logo-tipo" src=<?php echo '/' . $config['host'] . '/src/img/logo-gtx100_transparente_br.png'?> alt="" />
			</div>
		</header>