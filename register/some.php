<?php

$data = [
        'email' => $_POST['emailTitle'],
        'nameCompany' => $_POST['nameCompanyTitle'],
        'login' => $_POST['loginTitle'],
        'name' => $_POST['nameTitle'],
        'surname' => $_POST['surnameTitle'],
        'tin' => $_POST['tinTitle'],
        'password' => $_POST['passwordTitle']
    ];


$connection = new PDO('mysql:host=localhost;dbname=example01', 'root', '');
$sql = 'INSERT INTO posts (email, nameCompany, login, name, surname, tin, password) VALUES (:email, :nameCompany, :login, :name, :surname, :tin, :password)';
$statement = $connection->prepare($sql);
$result = $statement->execute($data);
var_dump($result);