package com.reverse.string;

public class StringReversa extends Principal {

    public String inverterString(String texto){
        
    	String inverterValor = "";
        for(int i=texto.length()-1; i>=0; i--){
        	inverterValor += texto.charAt(i); 
        }
        
        System.out.println(inverterValor);
        
        return inverterValor;
    } 
	
}
