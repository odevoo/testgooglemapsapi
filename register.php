<?php 

require_once 'inc/db.php';



$req = $pdo->prepare('INSERT INTO users SET firstname = ?, lastname = ?, email = ?, streetNumber = ?, address = ?, zip = ?, city = ?, lng = ?, lat =?');
$req->execute([$_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['streetNumber'], $_POST['address'], $_POST['zip'], $_POST['city'], $_POST['lng'], $_POST['lat']]);


echo "<pre>";
print_r($_POST);
echo "</pre>";
header('location: index.php');
 ?>