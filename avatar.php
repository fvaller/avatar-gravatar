<?php

if(isset($_GET['email']) && !empty($_GET['email'])){

	$email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);

	require 'libs/gravatarlib/Gravatar.php';

	$gravatar = new \emberlabs\GravatarLib\Gravatar();

	// example: setting default image and maximum size
	$gravatar->setDefaultImage('mm')->setAvatarSize(150);

	// example: setting maximum allowed avatar rating
	// "g", "pg", "r", and "x".
	$gravatar->setMaxRating('pg');

	//Caso nao tenha imagem no gravatar usa o padrao
	$gravatar->setDefaultImage('https://vorne.com.br/images/avatar3.jpg');

	//obtem a imagem no gravatar
	$avatar = $gravatar->buildGravatarURL($email);

	echo '<img src="'.$avatar.'" class="img-circle center-block">';
	echo '<code>';
	var_dump($avatar);	
	echo '</code>';
}
