# 9. Palindrome Number

Determine whether an integer is a palindrome. Do this without extra space.

function palindromeNumber(number){
var reverseNumber = number+"";
reverseNumber = reverseNumber.split("");
reverseNumber = reverseNumber.reverse();
reverseNumber = reverseNumber.join("");
reverseNumber = parseInt(reverseNumber);
if(number == reverseNumber) return("É um palíndromo");
else return("Não é um palíndromo");
}

palindromeNumber(44);
