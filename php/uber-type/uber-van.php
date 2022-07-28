<?php
require_once('car.php');
class UberBlack extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;
    protected $passenger;

    public function _construct($license, $driver, $typeCarAccepted, $seatsMaterial) {
        parent::_construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
        }

     public function setPassenger($passenger) {
                if ($passenger == 6) {
                    $this->passenger = $passenger;
                    }
                    else {
                    echo "You need to assign 6 passengers";
                    }
  }
?>