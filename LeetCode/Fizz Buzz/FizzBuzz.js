function fizzBuzz(num) {
  let arr = [];
  for(let i = 0; i < num; i++) {
    arr[i] = i+1;
    if(arr[i] % 5 === 0 && arr[i] % 3 === 0 )
      arr[i] = "FizzBuzz";
    else if (arr[i] % 5 === 0  )
      arr[i] = "Buzz";
    else if (arr[i] % 3 === 0)
      arr[i] = "Fizz";
    else
      arr[i] = arr[i].toString();
  }
  return arr;
}

fizzBuzz(15)