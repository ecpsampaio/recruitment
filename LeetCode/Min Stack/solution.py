#155. Min Stack

class Node():
    def __init__(self, valor, prox = None):
        self.valor = valor
        self.prox = prox

class Pilha():
    def __init__(self):
        self.topo = None
        self.cont = 0

    def getMin(self):
        min = 0
        node = self.topo
        while True:         
            if node.valor < min:
                min = node.valor
            node = node.prox
            if node == None:
                break
        print(min)

    def isEmpty(self):
        if self.topo == None:
            return True
        else:
            return False

    def push(self, v):
        if self.isEmpty():
            self.topo = Node(v)
            self.cont += 1
        else:
            novo = Node(v, self.topo)
            self.topo = novo
            self.cont += 1

    def pop(self):
        if self.isEmpty():
            raise Exception("Pilha vazia")
        v = self.topo.valor
        self.topo = self.topo.prox
        self.cont -= 1
        return v

    def top(self):
        if self.isEmpty():
            raise Exception("Pilha vazia")
        print(self.topo.valor) 

pilha = Pilha()
pilha.push(-2)
pilha.push(0)
pilha.push(-3)
pilha.getMin()
pilha.pop()
pilha.top()
pilha.getMin()
