import java.io.File;
import java.util.Scanner;
public class SumDiff{
    public static void main(String[] args) throws Exception {
        Scanner input= new Scanner(new File("./input.txt"));
        while(input.hasNextInt())
        {
            int a=input.nextInt();
            int b=input.nextInt();            
            System.out.println((a+b) + " "+ (a-b));
        }
        input.close();
        
    }
}