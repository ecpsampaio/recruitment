package Entities;

import java.util.ArrayList;

public class Data {
	
	public ArrayList<Double> numeros = new ArrayList<Double>();
	
	public Data(ArrayList<Double> numeros) {
		
		this.numeros = numeros;
	}
	
	@Override
	public String toString() {
		
		return numeros.toString();
	}
	
	public void Remove(double numero) {
		while(numeros.contains(numero)) {
			numeros.remove(numero);
			}
	}
	
	
}
