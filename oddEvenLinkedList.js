const numArray = [4,3,2,7,8,2,3,1];
numArray.sort();

for (i =0; i<numArray.length; i++){
  for (a = i+1; a < numArray.length; a++){
    if (numArray[i]== numArray[a]){
      console.log(numArray[i]);
    }
  }
}