list=[['M',1000],['D',500],['C',100],['L',50],['X',10],['V',5],['I',1]]
result = []

num = int(input('Digite um valor de 1 a 3999 : '))

if num > 0 and num < 4000:
    for str,value in list:
        while value <= num:
            num -= value
            result.append(str)
            print(''.join(result),end="\r")
else:
    print('Valor incorreto. Por favor, digite um valor de 1 a 3999')
