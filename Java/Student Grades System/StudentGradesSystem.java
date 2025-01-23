// Build a program to input students' names and scores, 
// and then calculate the average, highest, and lowest scores.

import java.util.Scanner;
public class StudentGradesSystem {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.println("Enter the number of the student: ");
        String name = input.nextLine();
        System.out.println("Enter the first score: ");
        double score1 = input.nextDouble();
        System.out.println("Enter the second score: ");
        double score2 = input.nextDouble();
        System.out.println("Enter the third score: ");
        double score3 = input.nextDouble();
        double average = (score1 + score2 + score3) / 3;
        double highest = Math.max(score1, Math.max(score2, score3));
        double lowest = Math.min(score1, Math.min(score2, score3));
        System.out.println("The name of the student is: " + name);
        System.out.println("The average score is: " + average);
        System.out.println("The highest score is: " + highest);
        System.out.println("The lowest score is: " + lowest);
        input.close();
    }
}