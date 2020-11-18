<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BINGO</title>

<style type="text/css">
<!--
body { width: 920px; }
-->
</style>
</head>
<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red"  >
<div align="left">
<?php
for ($k = 0; $k <= 10; $k++){ // Loop para gerar k cartelas
	$b = array();
	$in = array();
	$n = array();
	$g = array();
	$o = array();
	
	// loops para gerar os 5 numeros para cada letra
	for ($i = 0; $i <= 5; $i++){
		do {
			$val = rand(1,15);
		} while (in_array($val,$b));
		if (strlen($val) == 1){ $val = '0'.$val; } // adiciona 0 antes do n�mero para exibir corretamente
		$b[(100+$i)] = $val;
	}
	for ($j = 0; $j <= 5; $j++){
		do {
			$val = rand(16,30);
		} while (in_array($val,$in));
		$in[(100+$j)] = $val;
	}
	for ($i = 0; $i <= 5; $i++){
		do {
			$val = rand(31,45);
		} while (in_array($val,$n));
		$n[(100+$i)] = $val;
	}
	for ($i = 0; $i <= 5; $i++){
		do {
			$val = rand(46,60);
		} while (in_array($val,$g));
		$g[(100+$i)] = $val;
	}
	for ($i = 0; $i <= 5; $i++){
		do {
			$val = rand(61,75);
		} while (in_array($val,$o));
		$o[(100+$i)] = $val;
	}
	
	$tal = sprintf("%04s",$k+1);
	// exibi��o simples dos numeros via colunas, use <pre> para visualizar corretamente...
	echo "--------------------<br /><br /><br />
	<table cellpadding=\"0\" cellspacing=\"0\" width=\"950\">
    <tr>
        <td align=\"center\" height=\"250\">
            <p align=\"center\"><b><font face=\"Arial\">CONFER�NCIA</font></b></p>
            <table cellspacing=\"0\" width=\"250\" border=\"1\" bordercolordark=\"white\" bordercolorlight=\"black\">
        <tr><td><p align=\"center\"><span style=\"font-size:15pt;\">$b[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$in[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$n[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$g[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$o[101]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:15pt;\">$b[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$in[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$n[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$g[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$o[102]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:15pt;\">$b[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$in[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$n[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$g[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$o[103]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:15pt;\">$b[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$in[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$n[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$g[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$o[104]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:15pt;\">$b[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$in[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$n[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$g[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:15pt;\">$o[105]</span></p></td></tr> </table>

        </td>
        <td colspan=\"2\" height=\"250\">
		
            <p style=\"line-height:150%; margin-top:0; margin-bottom:0; margin-top:0; margin-bottom:0;  \">
			<font face=\"Arial\" style=\"font-size:15pt;\" >IV BINGO DO BABA DOS VETERANOS</font></p> 
<p style=\"line-height:150%; margin-top:0; margin-bottom:0; margin-top:0; margin-bottom:0;\"><font face=\"Arial\" style=\"font-size:14pt;\" >R$ 
3,00 &nbsp;&nbsp;- &nbsp;&nbsp;Cartela N� </font><b><font face=\"Arial\" style=\"font-size:18pt;\" > $tal</font></b></p>
<p style=\"line-height:150%; margin-top:0; margin-bottom:0; margin-top:0; margin-bottom:0;\"><font face=\"Arial\" style=\"font-size:14pt;\" >Nome: 
____________________________________________</font></p>
<p style=\"line-height:150%; margin-top:0; margin-bottom:0; margin-top:0; margin-bottom:0;\"><font face=\"Arial\" style=\"font-size:14pt;\" >End.: 
_____________________________________________</font></p>
<p style=\"line-height:150%; margin-top:0; margin-bottom:0; margin-top:0; margin-bottom:0;\"><font face=\"Arial\" style=\"font-size:14pt;\" >Respons�vel: 
Diretoria do Baba</font></p>

        </td>
        <td></td>
    </tr></table>
	<hr>
	<table cellpadding=\"0\" cellspacing=\"0\" width=\"950\"><br />
    <tr>
        <td height=\"280\" colspan=\"3\">
            <img src=\"bingocrb.jpg\" border=\"0\" height=\"255px\" width=\"830px\" >
			<br /><br />
		<p align=\"center\" style=\"line-height:150%; margin-top:0; margin-bottom:0; margin-top:0; margin-bottom:0;\"><font face=\"Arial\" style=\"font-size:14pt;\" >
		Cartela N� </font><b><font face=\"Arial\" style=\"font-size:18pt;\" > $tal</font></b></p>	
	<br /><br />
	
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            
            <p align=\"center\"><font face=\"Myriad Pro\"><span style=\"font-size:12pt;\">&nbsp;&nbsp; 1� PREMIO - </span><b><span style=\"font-size:13pt;\">R$ 300,00 (Dinheiro)</span></b></font>
        </td>
        <td>
            
            <p align=\"center\"><font face=\"Myriad Pro\"><span style=\"font-size:12pt;\">&nbsp;&nbsp; 2� PREMIO - </span><b><span style=\"font-size:13pt;\">01 FOG�O 4 BOCAS</span></b></font>
        </td>
        <td>
            
            <p align=\"center\"><font face=\"Myriad Pro\"><span style=\"font-size:12pt;\">&nbsp;&nbsp; 3� PREMIO - </span><b><span style=\"font-size:13pt;\">01 DVD COMPLETO</span></b></font>
        </td>
    </tr>
    <tr>
        <td height=\"170\" align=\"center\">
            <table cellspacing=\"0\" width=\"250\" border=\"1\" bordercolordark=\"white\" bordercolorlight=\"black\">
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[101]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[102]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[103]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[104]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[105]</span></p></td></tr> </table>
        </td>
        <td height=\"170\" align=\"center\">
            <table cellspacing=\"0\" width=\"250\" border=\"1\" bordercolordark=\"white\" bordercolorlight=\"black\">
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[101]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[102]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[103]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[104]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[105]</span></p></td></tr> </table>
        </td>
        <td height=\"170\" align=\"center\">
            <table cellspacing=\"0\" width=\"250\" border=\"1\" bordercolordark=\"white\" bordercolorlight=\"black\">
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[101]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[102]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[103]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[104]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[105]</span></p></td></tr> </table>
        </td>
    </tr>
    <tr>
        <td>
            
            <p align=\"center\"><font face=\"Myriad Pro\"><span style=\"font-size:12pt;\">&nbsp;&nbsp; 4� PREMIO - </span><b><span style=\"font-size:13pt;\">01 LIQUIDIFICADOR</span></b></font>
        </td>
        <td>
            
            <p align=\"center\"><font face=\"Myriad Pro\"><span style=\"font-size:12pt;\">&nbsp;&nbsp; 5� PREMIO - </span><b><span style=\"font-size:13pt;\">01 VENTILADOR</span></b></font>
        </td>
        <td>
            
            <p align=\"center\"><font face=\"Myriad Pro\"><span style=\"font-size:12pt;\">&nbsp;&nbsp; </span><b><span style=\"font-size:13pt;\">= = CONFER�NCIA = =</span></b></font>
        </td>
    </tr>
    <tr>
        <td height=\"170\" align=\"center\">
            <table cellspacing=\"0\" width=\"250\" border=\"1\" bordercolordark=\"white\" bordercolorlight=\"black\">
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[101]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[102]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[103]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[104]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[105]</span></p></td></tr> </table>
        </td>
        <td height=\"170\" align=\"center\">
            <table cellspacing=\"0\" width=\"250\" border=\"1\" bordercolordark=\"white\" bordercolorlight=\"black\">
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[101]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[102]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[103]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[104]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[105]</span></p></td></tr> </table>
        </td>
        <td height=\"170\" align=\"center\">
            <table cellspacing=\"0\" width=\"250\" border=\"1\" bordercolordark=\"white\" bordercolorlight=\"black\">
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[101]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[101]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[102]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[102]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[103]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[103]</span></p></td></tr>
       <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[104]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[104]</span></p></td></tr>
        <tr><td><p align=\"center\"><span style=\"font-size:16pt;\">$b[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$in[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$n[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$g[105]</span></p></td>
            <td><p align=\"center\"><span style=\"font-size:16pt;\">$o[105]</span></p></td></tr> </table>
        </td>
    </tr>
    <tr>
        <td height=\"330\" colspan=\"3\" >
		<p align=\"center\"><font face=\"arial\"><b><span style=\"font-size:18pt;\">APOIO:</span></b></p>
<p align=\"center\" style=\"line-height:350%; margin-top:5; margin-bottom:0;\"><span style=\"font-size:28pt;\">
<b>AQUI VOC� PODE ACRESCENTAR INFORMA��ES SOBRE APOIO OU RESPONS�VEIS </b>
</span></font></p>
		</td>
    </tr>
</table>
	"."\n\n" ;
echo"<hr>";
}

 
?>


</body>
</html>