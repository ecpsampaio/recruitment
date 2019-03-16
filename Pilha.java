package com.implement.stack;

public class Pilha {
	
	int elementos[];
	int topo;
	
	public Pilha() {
		elementos = new int[5];
		topo = -1; //posicao invalida do vetor
		
	}
	
	public void push(int e) {
		if(isFull()) {
			throw new RuntimeException("Stack Overflow!");
		}
		topo++;
		elementos[topo] = e;
	}
	
	public int pop() {
		if(isEmpty()) {
			throw new RuntimeException("Empty Stack!");
		}
		int e;
		e = elementos[topo];
		topo--;
		return e;
	}
	
	public boolean isEmpty() {
		
		return (topo == -1); 
	}
	
	
	public boolean isFull() {
		return (topo == elementos.length - 1);
	}

	public int top() {
		if(isEmpty()) {
			throw new RuntimeException("Empty Stack!");
		}
		return elementos[topo];
	}

}
