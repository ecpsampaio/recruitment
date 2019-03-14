
str=str(input("Digite uma string : "))

b =[]

if str:
    length = 1
else:
    length = 0

for i in str:
    b.append(i)
    if len(b) != len(set(b)):
        index= b.index(i)
        if length < len(b) - 1:
            length = len(b) -1
            str_content = ''.join(b[0:-1])
        b = b[index+1:]
    else:
        if len(b) >= length:
            length = len(b)
            str_content = ''.join(b)

print(str_content)
print(length)