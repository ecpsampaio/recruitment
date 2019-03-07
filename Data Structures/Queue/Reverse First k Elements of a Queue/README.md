# Reversing the first K elements of a Queue

Given an integer k and a queue of integers, we need to reverse the order of the first k elements of the queue, leaving the other elements in the same relative order.

Only following standard operations are allowed on queue.

enqueue(x) : Add an item x to rear of queue
dequeue() : Remove an item from front of queue
size(( : Returns number of elements in queue.
front() : Finds front item.

## Examples:

```
Input : Q = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100]
        k = 5
Output : Q = [50, 40, 30, 20, 10, 60, 70, 80, 90, 100]

Input : Q = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100]
        k = 4
Output : Q = [40, 30, 20, 10, 50, 60, 70, 80, 90, 100]
```
