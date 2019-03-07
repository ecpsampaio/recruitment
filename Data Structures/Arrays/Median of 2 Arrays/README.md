# Median of two sorted arrays of same size

There are 2 sorted arrays A and B of size n each. Write an algorithm to find the median of the array obtained after merging the above 2 arrays(i.e. array of length 2n). The complexity should be O(log(n)).

## Example:

`ar1[] = {1, 12, 15, 26, 38}`
`ar2[] = {2, 13, 17, 30, 45}`
For above two arrays m1 = 15 and m2 = 17

For the above ar1[] and ar2[], m1 is smaller than m2. So median is present in one of the following two subarrays.

`[15, 26, 38] and [2, 13, 17]`
Let us repeat the process for above two subarrays:

`m1 = 26 m2 = 13`.
m1 is greater than m2. So the subarrays become

`[15, 26] and [13, 17]`
Now size is 2, so median = (max(ar1[0], ar2[0]) + min(ar1[1], ar2[1]))/2
                       = (max(15, 13) + min(26, 17))/2
                       = (15 + 17)/2
                       = 16
