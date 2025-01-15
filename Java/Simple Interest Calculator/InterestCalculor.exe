// Create a program to calculate simple interest using the formula :
// I = (P x R x T)/100

import javax.swing.*;

public class InterestCalculor{

    public static void main(String[] args) {
        int principle_amount = Integer.parseInt(JOptionPane.showInputDialog("Enter the principle amount: "));
        double rate_of_interest = Double.parseDouble(JOptionPane.showInputDialog("Enter the rate of interest: "));
        double time_to_repayment = Double.parseDouble(JOptionPane.showInputDialog("Enter the time: "));

        JOptionPane.showMessageDialog(null, "The Interest is: Ksh. "+interest_amount(principle_amount, rate_of_interest, time_to_repayment)+"\nThe amount due is: Ksh. "+amount_due(interest_amount(principle_amount, rate_of_interest, time_to_repayment), principle_amount));
    }

    static double interest_amount(int principle, double rate, double time){
        
        double interest_amount = (principle*rate*time)/100;

        return interest_amount;
    }

    static double amount_due(double interest, int amount){

        double amount_due = interest + amount;

        return amount_due;
    }
}