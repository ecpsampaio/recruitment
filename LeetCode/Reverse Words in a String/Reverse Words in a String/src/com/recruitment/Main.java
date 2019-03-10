package com.recruitment;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		String words = "";
		String inverted = "";		
		Scanner sc = new Scanner(System.in);
		System.out.println("Type the words you want to invert:");
		words = sc.nextLine();
		String[] parts = words.split(" ");
		for (int i = parts.length; i > 0 ; i--) {
			inverted += parts[i-1]+" ";
		}
		System.out.println(inverted);
		sc.close();
	}
}
