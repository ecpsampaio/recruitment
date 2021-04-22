nums = [1, 4, 3, 1]

function peakElement(nums) {
  let sequence = [];
  let bigger = 0;

  for(let i = 0; i < nums.length; i++) {
    if(nums[i] < nums[i+1]) {
      sequence[i] = i+1;
    }
  }
  for(let i = 0; i < sequence.length; i++) {
    if(sequence[i] > bigger) {
      bigger = sequence[i];
    }
  }
  return bigger;
}

peakElement(nums);

