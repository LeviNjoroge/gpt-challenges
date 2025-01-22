import java.util.*;

public class PrimeNumberChecker {

    public static void main(String[] args) {
        @SuppressWarnings("resource")
        Scanner input = new Scanner(System.in);

        System.out.println("Enter the whole number to check whether prime:");
        int num = input.nextInt();

        int count = 0;
        for(int i = 2; i<=num; i++){
            if (num%i==0) {
                count+=1;
            }
        }
        if (count==1) {
            System.out.println(num+" is a prime number");
        }
        else{
            System.out.println(num+" is NOT a prime number");
        }

    }
}