## Chapter 5 Bit Manipulation

1. You are given two 32-bit numbers, N and M, and two bit positions, i and j. Write a method to set all bits between i and j in N equal to M (e.g., M becomes a substring of N located at i and starting at j).

``` 
EXAMPLE: 
Input: N = 10000000000, M = 10101, i = 2, j = 6 
Output: N = 10001010100
```

2. Given a (decimal - e.g. 3.72) number that is passed in as a string, print the binary representation. If the number can not be represented accurately in binary, print “ERROR”

3. Given an integer, print the next smallest and next largest number that have the same number of 1 bits in their binary representation.

4. Explain what the following code does: `((n & (n-1)) == 0)`.

5. Write a function to determine the number of bits required to convert integer A to integer B.

```
Input: 31, 14 
Output: 2
```

6. Write a program to swap odd and even bits in an integer with as few instructions as possible (e.g., bit 0 and bit 1 are swapped, bit 2 and bit 3 are swapped, etc).

7. An array `A[1…n]` contains all the integers from 0 to n except for one number which is missing. In this problem, we cannot access an entire integer in A with a single operation. The elements of A are represented in binary, and the only operation we can use to access them is `“fetch the jth bit of A[i]”`, which takes constant time. Write code to find the missing integer. Can you do it in O(n) time?