// Questão : 165. Compare Version Numbers

let versao1 = 20.22;
let versao2 = 20.22;

let v1 = parseFloat(versao1);
let v2 = parseFloat(versao2);
let resultado;

if (v1 > v2){
    resultado = 1;
} else if (v1 < v2){
    resultado = -1;
} else {
    resultado = 0;
}

console.log(`O resultado é: ${resultado}`);