

var cartela_1 =[];
var cartela_2 =[];
var cartela_3 =[];
var cartela_4 =[];
var cartela_5 =[];

$(function() {

	var nSorteados = new Array();

    $("#sortear").click( function()
        {

        	var number = 1 + Math.floor(Math.random() * 99);
 
        	if(nSorteados[0] === null)
        	{
        		nSorteados.push(number);
        		exibeSorteio(nSorteados);
        		checkSorteio(number);
               

        	}else
        	{
  
	        	nSorteados.push(number);
	        	exibeSorteio(nSorteados);
                checkSorteio(number);
	        	
	        	
	        }

        }
    );


    $("#apagar_btn").click( function()
        {
             
        	nSorteados = [];

  			$('#lista_sorteados').text(nSorteados);


        }
    );


});

function exibeSorteio(array) {
    $('#lista_sorteados').text(array);   
}

function checkSorteio(numeroSorte){

        for(i = 1; i <=5; i++){

            for(k = 0; k <=24; k++){

                var contentCell = $('table.cartela_inteira.cartela_0'+ i +' tbody tr .celula.celula_'+ k +' p').html();
                var number = parseInt(contentCell);

                if(contentCell == numeroSorte){
                    $('table.cartela_inteira.cartela_0'+ i +' tbody tr .celula.celula_'+ k +'').css( "background-color", "red" );

                   //console.log(contentCell + ' ' + numeroSorte +' '+ k);
                    atualizaPontos(i, k);
                }

                //console.log(contentCell + ' ' + numeroSorte +' '+ k);
                

            }

        }

}

function atualizaPontos(tabela, celula){

   //salva os pontos que foram marcados nas cartelas... temporariamente

   switch (tabela) {
    case 1:
        cartela_1.push(celula);
        verificaGanhador(tabela, cartela_1);
        break;
    case 2:
        cartela_2.push(celula);
        verificaGanhador(tabela, cartela_2);
        break;
    case 3:
        cartela_3.push(celula);
         verificaGanhador(tabela, cartela_3);
        break;
    case 4:
        cartela_4.push(celula);
         verificaGanhador(tabela, cartela_4);
        break;
    case 5:
       cartela_5.push(celula);
        verificaGanhador(tabela, cartela_5);
        break;
    } 

}

function cres(pr1, pr2) {
    return pr1 - pr2;
}

function verificaGanhador(cartela, resultado){

    //valores das linhas...
    var la = [0,1,2,3,4];
    var lb = [5,6,7,8,9];
    var lc = [10,11,12,13,14];
    var ld = [15,16,17,18,19];
    var le = [20,21,22,23,24];
    //valores das colunas...
    var ca = [0,5,10,15,20];
    var cb = [1,6,11,16,21];
    var cc = [2,7,12,17,22];
    var cd = [3,8,13,18,23];
    var ce = [4,9,14,19,24];
    //valores das diagonais...
    var da = [0,6,12,18,24];
    var db = [20,16,12,8,4];


    //Com o número da cartela... é verificado se houve o BINGO

    console.log('Resultado da cartela :'+ cartela + ' na celulas :' +  resultado);

    if(resultado.length >=5){
        
        var vetCres = resultado;
        var pontosOrdenados =  vetCres.sort(cres);
        //console.log('compação de arrays ' + pontosOrdenados);

        compararArrays(cartela, pontosOrdenados, la);
        compararArrays(cartela, pontosOrdenados, lb);
        compararArrays(cartela, pontosOrdenados, lc);
        compararArrays(cartela, pontosOrdenados, ld);
        compararArrays(cartela, pontosOrdenados, le);

        compararArrays(cartela, pontosOrdenados, ca);
        compararArrays(cartela, pontosOrdenados, cb);
        compararArrays(cartela, pontosOrdenados, cc);
        compararArrays(cartela, pontosOrdenados, cd);
        compararArrays(cartela, pontosOrdenados, ce);

        compararArrays(cartela, pontosOrdenados, da);
        compararArrays(cartela, pontosOrdenados, db);
    }


}

//faz a verificação se a cartela já está em bingo

function compararArrays(cartela, a, b) { 

    var count = 0;

   for (var i = 0; i < a.length; ++i) {
      for (var j = 0; j < b.length; ++j) {
            if (a[i] == b[j]) {
                count++;
            }

            if(count >=5){
                $('#resultado_bingo').text('BINGO!!!  Cartela ganhadora : '+ cartela +'');
            
                $("#sortear").hide();
                $("#apagar_btn").hide();

                mudaraLinha(cartela, b);
                salvar_numeros_sorteados();
                break;   
            }   
        }
        
    }
}

//Alterar a cor da linha do bingo

function mudaraLinha(cartela, b) {

    for (var i = 0; i < b.length; ++i) {
        $('table.cartela_inteira.cartela_0'+ cartela +' tbody tr .celula.celula_'+ b[i] +'').css( "background-color", "green" );
    }
}

//Grava em bd a string com os numeros sorteados...
function salvar_numeros_sorteados()
{
    var dadosajax = {
        'numeros_sorteados' : $('#lista_sorteados').text(),
        'id_sorteio' : $('#sorteio_numero').text()
    };

    console.log('salvar resultados ' + dadosajax);

    pageurl = 'dados_bd.php';

    $.ajax({
        url: pageurl,
        data: dadosajax,
        type: 'POST',
        error: function(){
            alert('Erro: gravar resultados!!');
        },
        //retorna o resultado da pagina para onde enviamos os dados
        success: function(result)
        { 
        
 
        }
    });
}