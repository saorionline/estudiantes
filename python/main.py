from car import Car
from account import Account

if _name_ == "_main_":
    print("Rising thinkings List")

    car = Car ("LOL323", Account ("Elliot", "5467643FRGT"))
    print(var(car))
    print(var(car.driver))

    car2 = Car ()
    car2.license = "LOL323"
    car2.driver = "Elliot"
    print(var(car2))