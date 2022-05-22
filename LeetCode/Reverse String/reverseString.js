function inverter(){
    var nome = 'Alexsandra';

    //esse metódo separa minha string, inverte a ordem da escrita, 
    //e depois de invertido, ele é junto novamente
    var nomeInverso = nome.split('').reverse().join('');

    console.log("NOME NA ORDEM CERTA: " + nome);
    console.log("NOME NA ORDEM INVERSA: " + nomeInverso);
}