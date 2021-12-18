public class App {
    public static void main(String[] args) throws Exception {
        System.out.println(Calculator.cong(3, 5));
        System.out.println(Calculator.tru(84, 5));
        System.out.println(Calculator.nhan(21, 7));
        System.out.println(Calculator.chia(50, 5));

        double canNang = 53;
        double chieuCao = 1.69;
        double bmical = canNang/(chieuCao*chieuCao);
        System.out.println("Ket qua BMI cua ban la " +bmical);

        // introduce(canNang, chieuCao, bmical);

        // public static void intro(double bmical) {
        //     // System.out.println("Chi so BMI cua ban la " + bmical);
        // }

        System.out.println(bmi.bmi2(1.69, 53));
    }
}
