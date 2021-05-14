let array = [3,7,3,9,10,13,20,3,7,13];
let val = 3;

for (let i = 0; i < array.length; i++){
    if (array[i] === val){
        array.splice(i, 1);
    }
}

let comprimento = array.length;

console.log(`O comprimento final é: ${comprimento}`);
