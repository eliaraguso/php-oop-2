<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/CreditCard.php";


$user1 = new User("Marco", "Neri", 50, "marco@chicco.it");
$user2 = new User("Antonio", "Bianchi", 22, "antonio@ciccio.it");

$c1 = new CreditCard(67238524, "Marco Neri", 564, "09-2025");
$c2 = new CreditCard(93450285, "Antonio Bianchi", 496, "02-2024");


$user1->setCreditCard($c1);
$user2->setCreditCard($c2);


$prod1 = new Product("Scheda video", "Amd", "Radeon Rx 6900 xt", 1000);
$prod2 = new Product("Dissipatore per cpu", "Noctua", "NH-D15 cromax.black", 109.90);

var_dump($user1, $user2, $prod1, $prod2);

?>