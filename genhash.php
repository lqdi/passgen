<?php
echo json_encode([
	'password' => $_GET['password'],
	'bcrypt' => password_hash($_GET['password'], PASSWORD_BCRYPT),
	'default' => password_hash($_GET['password'], PASSWORD_DEFAULT),
]);