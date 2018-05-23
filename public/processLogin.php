<?php
include '../bootstrap.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = getUserByEmail($email);


if ($user == null) {
	echo "L'utilisateur $email n'existe pas";

} else {
	
	if ($password == $user['password']) {

		$_SESSION['iduser'] = $user['id'];

		header('Location: home.php');
		exit;
	} else {

		echo "Mot de passe incorrect";
	}

}

