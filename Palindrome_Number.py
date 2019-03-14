print(50*'*')
print ('\n Digite um inteiro para saber se é um PALINDROMO \n')
print(50*'*')
num =int(input("Digite um valor : "))

temp=num
rev=0

while(num>0):
    dig=num%10
    rev=rev*10+dig
    num=num//10
if(temp==rev):
    print( 'O numero %d é um palíndromo' %temp )
else:
    print('O numero %d não é um palíndromo' %temp)

