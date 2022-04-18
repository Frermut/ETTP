<?php
print_r ($_POST);
$data = [
        'email' => $_POST['email'],
        'nameCompany' => $_POST['nameCompany'],
        'login' => $_POST['login'],
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'tin' => $_POST['tin'],
        'password' => $_POST['password']
    ];


$connection = new PDO('mysql:host=localhost;dbname=Test', 'root', '');
$sql = 'INSERT INTO `users` (`email`, `nameCompany`, `login`, `name`, `surname`, `tin`, `password`) VALUES (:email, :nameCompany, :login, :name, :surname, :tin, :password)';
$statement = $connection->prepare($sql, $data);
$result = $statement->execute($data);
var_dump($result);