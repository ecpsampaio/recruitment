function run(){
  // [7,0,1,4,4,5,6]

  // [6,7,0,1,4,4,5]

  // [5,6,7,0,1,4,4]

  const nums = [4,5,6,7,0,1,4]

  var i = 0
  var all = nums.length - 1;
  while (i < all) {
    var mid = i + (all - i) / 2;
    console.log(mid)
    if (nums[mid] < nums[all]) all = mid;
    else if (nums[mid] > nums[all]) i = mid;
    else all--;
  }
  console.log(nums[i])
  return console.log(nums[i]);
}
run()