<?php

if(strlen($_GET['password']) > 256) {
	die(json_encode(['status' => 'password_too_large']));
}

echo json_encode([
	'password' => $_GET['password'],
	'bcrypt' => password_hash($_GET['password'], PASSWORD_BCRYPT),
	'default' => password_hash($_GET['password'], PASSWORD_DEFAULT),
]);