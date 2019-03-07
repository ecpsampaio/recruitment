## Chapter 9: Recursion

1. You are given two sorted arrays, A and B, and A has a large enough buffer at the end to hold B. Write a method to merge B into A in sorted order.

2. Write a method to sort an array of strings so that all the anagrams are next to each other.

3. Given a sorted array of n integers that has been rotated an unknown number of times, give an O(log n) algorithm that finds an element in the array. You may assume that the array was originally sorted in increasing order. 

```
EXAMPLE: 
Input: find 5 in array (15 16 19 20 25 1 3 4 5 7 10 14) 
Output: 8 (the index of 5 in the array)
```

4. If you have a 2 GB file with one string per line, which sorting algorithm would you use to sort the file and why?

5. Given a sorted array of strings which is interspersed with empty strings, write a method to find the location of a given string.

```
Example: find “ball” in [“at”, “”, “”, “”, “ball”, “”, “”, “car”, “”, “”, “dad”, “”, “”] will return 4 
Example: find “ballcar” in [“at”, “”, “”, “”, “”, “ball”, “car”, “”, “”, “dad”, “”, “”] will return -1
```

6. Given a matrix in which each row and each column is sorted, write a method to find an element in it.

7. A circus is designing a tower routine consisting of people standing atop one another’s shoulders. For practical and aesthetic reasons, each person must be both shorter and lighter than the person below him or her. Given the heights and weights of each person in the circus, write a method to compute the largest possible number of people in such a tower.

```
EXAMPLE: 
Input (ht, wt): (65, 100) (70, 150) (56, 90) (75, 190) (60, 95) (68, 110) 
Output: The longest tower is length 6 and includes from top to bottom: (56, 90) (60,95) (65,100) (68,110) (70,150) (75,190).
```