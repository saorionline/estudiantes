<?php
require_once('car.php');
require_once('./uber-type/uber-van.php');
require_once('./uber-type/uber-black.php.php');
require_once('./uber-type/uber-x.php');
require_once('account.php');

$uberX = new UberX("DEF432", new Account('Leo', '3566654DSW'), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("TRE323", new Account('Miss', '2345543ASD'), 'Mazda', 'Attitude');
$uberPool->printDataCar();

$uberVan = new UberVan("FLE477", new Account('Dan', '3245434DFG'), 'Nissan', 'Versatil');
$uberVan->setPassenger(6);
$uberVan->printDataCar();

$uberVan = new UberVan("MON321", new Account('Flor', '5467766KLO'), 'Peugeot', 'Dance');
$uberVan->setPassenger(4);
$uberVan->printDataCar();



?>