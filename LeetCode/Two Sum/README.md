// # 1. Two Sum

// Given an array of integers, return indices of the two numbers such that they add up to a specific target.
// You may assume that each input would have exactly one solution, and you may not use the same element twice.

const arraySum = (nums, target) => {
   const res = [];

   for(let i = 0; i < nums.length; i ++) {
       for (var j = i + 1; j < nums.length; j++) {
        if (nums[i] + nums[j] == target) {
            res.push(i);
            res.push(j);
        }
       }
    }
    return res;
};

//  # 27. Remove Element

// Given an array and a value, remove all instances of that value in-place and return the new length.
// Do not allocate extra space for another array, you must do this by modifying the input array in-place with O(1) extra memory.
// The order of elements can be changed. It doesn't matter what you leave beyond the new length.

const removeDupe = (nums, val) => {
    for (let i = 0; i < nums.length; i++){
        if(nums[i] === val){
            nums.splice(i, 1);
            i --;
        }
    }
    return nums.length;
}

// # 328. Odd Even Linked List

// Given an array of integers, 1 ≤ a[i] ≤ n (n = size of array), some elements appear twice and others appear once.

// Find all the elements that appear twice in this array.

// Could you do it without extra space and in O(n) runtime?

const findDupes = (nums) => {
    const res = [];
 
    for(let i = 0; i < nums.length; i ++) {
        for (var j = i + 1; j < nums.length; j++) {
         if (nums[i] == nums[j]) {
             res.push(nums[i]);
             res.push(nums[j]);
         }
        }
     }
     return res;
 };
