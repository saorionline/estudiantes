<?php
require_once('account.php');
class Car {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function _construct($license, $driver) {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo "my-license: $this->license my-driver: ".$this->driver->name;
        }
}
?>