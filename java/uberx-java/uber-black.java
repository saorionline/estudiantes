import com.sun.javafx.collections.MappingChange.Map;

class UberBlack extends Car{
    Map <String, ArrayList<String, Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;
}

    public UberBlack (String license, Account driver,
    Map<String, ArrayList< String, Integer>> typeCarAccepted,
    ArrayList<String> seatsMaterial){
        super (license, driver)
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
        }