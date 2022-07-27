require_once('car.php');
require_once('./uber-type/uber-van.php');
require_once('./uber-type/uber-black.php.php');
require_once('./uber-type/uber-x.php');
require_once('account.php');

$uberX = new UberX("DEF432", new Account('Leo', '3566654DSW'), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("TRE323", new Account('Miss', '2345543ASD'), 'Mazda', 'Attitude');
$uberPool->printDataCar();