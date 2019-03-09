package Entities;

public class Number {
	public int numero;

	public Number(int numero) {
		super();
		this.numero = numero;
	}
	
	public boolean isPalindromo() {
		int auxiliar = numero, inverso = 0;
		
		while(auxiliar  > 0) {
			inverso = (auxiliar % 10) + (inverso * 10);
			auxiliar = auxiliar / 10;

		}
		
		return (numero == inverso) ? true : false;
		
	}
	
	
}
