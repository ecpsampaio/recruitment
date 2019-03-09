package Aplication;

import java.util.ArrayList;
import java.util.Scanner;
import Entities.Data;

public class Program {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		ArrayList<Double> numeros = new ArrayList<Double>();
		double numero;
		
		System.out.printf("Infome o tamanho do array: ");
		int j = sc.nextInt();
		
		for(int i=0; i<j; i++) {
			System.out.printf("Infome o numero %d: ", i+1);
			numero = sc.nextDouble();
			numeros.add(numero);
		}
		
		Data data = new Data(numeros);
		
		System.out.println("Elementos do array: " + data);
		
		System.out.printf("Infome o numero a ser removido: ");
		numero = sc.nextDouble();
		
		data.Remove(numero);
		
		
		System.out.println("Tamanho do array: " + data.numeros.size());
		System.out.println("Elementos do array apos a remoção do numero " + numero +": " + data);
		
		sc.close();
	}

}
