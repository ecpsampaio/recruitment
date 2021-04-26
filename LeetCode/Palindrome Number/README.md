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

# 1. Two Sum

Given an array of integers, return indices of the two numbers such that they add up to a specific target.
You may assume that each input would have exactly one solution, and you may not use the same element twice.

## Example:

```
Given nums = [2, 7, 11, 15], target = 9,

Because nums[0] + nums[1] = 2 + 7 = 9,
return [0, 1].
```
function sumNumbers(numbers,value){
  for(var i = 0; i<numbers.length;i++){
     for(var j = i+1; j<numbers.length;j++){     
        var sum = numbers[i]+numbers[j];
        if(sum == value) return [i,j];
    }  
}

}

sumNumbers([2,7,11,15],18);


# 2. Add Two Numbers

You are given two non-empty linked lists representing two non-negative integers. The digits are stored in reverse order and each of their nodes contain a single digit. Add the two numbers and return it as a linked list.

You may assume the two numbers do not contain any leading zero, except the number 0 itself.

Input: (2 -> 4 -> 3) + (5 -> 6 -> 4)
Output: 7 -> 0 -> 8

function sumNumbers(numbers1,numbers2){
    var sums = [];
    var resto = 0;
    for(var i = 0; i<numbers1.length;i++){
        var sum = numbers1[i]+numbers2[i]+resto;
        if(sum >= 10){
        sum = sum+"";
        resto = parseInt(sum[0]);
        sum = parseInt(sum[1]);
        }else resto = 0;
        sums.push(sum);
    }
return sums;

}

sumNumbers([2,4,3],[5,6,4]);
 
