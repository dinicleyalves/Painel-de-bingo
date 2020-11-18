<?php
	
	mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("bingo") or die(mysql_error());

   //recebe os parâmetros
 
    $numeros_sorteados = $_REQUEST['numeros_sorteados'];
    $id_sorteio = $_REQUEST['id_sorteio'];


    try
    {
        //insere na BD
        $sql = "INSERT INTO numeros_sorteados(numeros_sorteados, id_sorteio) VALUES('".trim($numeros_sorteados)."','".trim($id_sorteio)."')";
        $result = mysql_query($sql) or die(mysql_error());
 
        //retorna 1 para no sucesso do ajax saber que foi com inserido sucesso
        echo "1";
    } 
    catch (Exception $ex)
    {
        //retorna 0 para no sucesso do ajax saber que foi um erro
        echo "0";
    } 


?> 
