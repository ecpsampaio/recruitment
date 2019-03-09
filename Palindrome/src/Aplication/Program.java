package Aplication;

import java.util.Scanner;
import Entities.Number;


public class Program {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);

		
		System.out.printf("Infome o numero a ser testado: ");
		int numero = sc.nextInt();

		Number number = new Number(numero);
		
		System.out.println(number.isPalindromo());
				
		sc.close();
	}

}
