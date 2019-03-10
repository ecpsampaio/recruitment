package com.recruitment;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		String ip = "";
		Scanner sc = new Scanner(System.in);
		while (ip.equals("")) {
			System.out.println("Enter the IP to be checked:");
			ip = sc.nextLine();
		}
		new IP(ip);
		sc.close();
	}
}
