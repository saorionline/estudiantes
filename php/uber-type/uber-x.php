<?php
require_once('car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model) {
        parent::__construct($license, $driver)
        $this->brand = $brand;
        $this->brand = $model;
        }


    public function setPassenger($passenger) {
        if ($passenger == 4) {
            $this.passenger = $passenger;
            }
            else {
            echo "You need to assign 4 passengers"
            }
        }
}

?>