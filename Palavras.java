package com.reverse.words;

public class Palavras{
	
	public String invertePalavras(String texto) {
        if(texto == null || texto.length() == 0) {
            return "";
        }
        
        String[] palavras = texto.split(" ");
        StringBuffer sb = new StringBuffer();
        
        for(int i = palavras.length - 1; i >=0; i--) {
                sb.append(palavras[i]);
                sb.append(" ");
        }
        
        return sb.toString().trim();
        
    }
		
		
}
