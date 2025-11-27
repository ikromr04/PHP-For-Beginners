<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if (! Validator::email($email)) {
  $errors['email'] = 'Enter a valid email address.';
} else {
  $user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
  ])->find();
  
  if ($user) {
    $errors['email'] = 'User exists.';
  }
}

if (! Validator::string($_POST['password'], 7, 255)) {
  $errors['password'] = 'Password can be at least 7 characters.';
}

if (count($errors)) {
  return view('registration/create.view.php', compact('errors'));
}

$db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
  'email' => $email,
  'password' => $password
]);

$_SESSION['user'] = compact('email');

header('location: /');
exit();
