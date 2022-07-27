from car import Car

class UberBlack(Car):
    typeCarAccepted = []
    seatsMaterial = []

    public __init__(self, license, driver, typeCarAccepted, seatsMaterial)
        super__init__(license, driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial

