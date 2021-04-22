arr = [2,2,3,2,2,2,3,5,4]

num = 2

 function removeElement(arr, num) {
  const tam = arr.length;
  for(let i = 0; i < tam; i++) {
    if(num === arr[i]) {
      arr.splice(i, 1)
      i--;
    }
  } return arr.length;
}

removeElement(arr, num)