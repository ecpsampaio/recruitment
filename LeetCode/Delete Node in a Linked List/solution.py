#237. Delete Node in a Linked List

class Node():
    def __init__(self, valor, prox=None):
        self.valor = valor
        self.prox = prox

    def __str__(self):
        return str(self.valor)

class Lista():
    def __init__(self,v=None):
        if v == None:
            self.inicio = None
        else:
            self.inicio = Node(v)
    
    def __str__(self):
        str1 = ''
        aux = self.inicio
        while aux != None:
            str1 = str1 + str(aux) +"; "
            aux = aux.prox
        return str1

    def inserir(self, v):
        if self.inicio == None:
            self.inicio = Node(v)
        elif self.inicio.valor > v:
            novo = Node(v,self.inicio)
            self.inicio = novo
        else:
            aux = self.inicio
            while aux.prox != None and aux.prox.valor < v:
                aux = aux.prox
            novo = Node(v,aux.prox)
            aux.prox = novo

    def remover(self, v):
        if self.inicio == None:
            raise Exception('Lista vazia')
        if self.inicio.valor == v:
            self.inicio = self.inicio.prox
            return True
        else:
            aux = self.inicio
            while aux.prox != None and aux.prox.valor != v:
                aux = aux.prox
            if aux.prox != None:
                temp = aux.prox
                aux.prox = temp.prox
                return True
        return False

lista = Lista()
lista.inserir(1)
lista.inserir(2)
lista.inserir(3)
lista.inserir(4)
print(lista)
lista.remover(3)
print(lista)

