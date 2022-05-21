function reverse(){
    var frase = "Eu vivo no Brasil";
    //o split verifica as palavras após cada espaço e separa, depois inverte a ordem e junta novamente.
    var nomeInverso = frase.split(' ').reverse().join(' ');

    console.log(nomeInverso);

}
