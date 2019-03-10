package com.recruitment;

public class IP {
	public IP(String Ip) {
		if (checkIpv4(Ip)) {
			System.out.println("Input: " + Ip);
			System.out.println("Output: Ipv4");
			System.out.println("Explanation: This is a valid IPv4 address, " + Ip);
		} else if (checkIpv6(Ip)) {
			System.out.println("Input: " + Ip);
			System.out.println("Output: Ipv6");
			System.out.println("Explanation: This is a valid IPv6 address, " + Ip);
		} else {
			System.out.println("Input: " + Ip);
			System.out.println("Output: Neither.");
			System.out.println("Explanation: This is neither a IPv4 address nor a IPv6 address.");
		}
	}

	public boolean checkIpv4(String ipv4) {
		try {
			if (ipv4 == null || ipv4.isEmpty()) {
				return false;
			}
			String[] parts = ipv4.split("\\.");
			if (parts.length != 4) {
				return false;
			}
			String a = "255";
			int cont = 0;
			for(String s:parts) {
				if (cont < 3) {
					if (s.length() > a.length()) {
						return false;
					} else {
						a = s;
					}
					cont++;
				}	
			}
			for (String s : parts) {
				int i = Integer.parseInt(s);
				if ((i < 0) || (i > 255)) {
					return false;
				}
			}
			if (ipv4.endsWith(".")) {
				return false;
			}
			if (ipv4.contains("..")) {
				return false;
			}
			return true;
		} catch (NumberFormatException nfe) {
			return false;
		}
	}

	private Boolean checkIpv6(String Ipv6) {
		try {
			if (Ipv6 == null || Ipv6.isEmpty()) {
				return false;
			}
			String[] parts = Ipv6.split("\\:");
			if (parts.length != 8) {
				return false;
			}

			if (Ipv6.endsWith(":")) {
				return false;
			}
			if (Ipv6.startsWith("0")) {
				return false;
			}
			if (Ipv6.contains("::")) {
				return false;
			}
			return true;
		} catch (NumberFormatException nfe) {
			return false;
		}

	}
}
