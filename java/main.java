class Main {
    public static void main(String[] args) {
        System.out.println("Digital Era");
        Car car = new Car();
        car.license = 'BTW101';
        car.driver = 'JP';
        car.passenger = 3;
        car.printDataCar();

        Car car2 = new Car();
        car2.license = 'FRI433';
        car2.driver = 'Edward';
        car2.passenger = 2;
        car.printDataCar();
    }
}