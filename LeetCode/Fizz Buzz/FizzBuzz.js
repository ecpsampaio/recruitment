function fizzBuzz(){
    //array para guardar nosso retorno
    var retorno = []

    /*laço de repeticao para fazer uma contagem 
    na contagem, ele verifica se o numero é multiplo de 3 ou 5 e escreve na tela o que foi pedido
    no caso de não ser, ele escreve o numeral*/
    
    for (var i = 1; i <= 20; i++){
    if ((i % 3 == 0) && (i % 5 == 0)){
        retorno.push("FizzBuzz");
    }else if(i % 3 == 0){
    retorno.push("Fizz")
    }else if (i % 5 == 0){
        retorno.push("Buzz");
    }else{
        retorno.push([i]);
    }
}
    console.log(retorno);
}