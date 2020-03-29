<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{background-color:#B3E5FC ;}
		div{
			background-color:#4FC3F7 ;
			text-align: center;
			height: 100px;
			margin: 0px;
			padding: 20px;
		}
		.roda{height: 20px;padding: 5px;margin: 0px;color: white}
		h2{color: white;}
	</style>
</head>
<body>
	<div><h2>BEM VINDO</h2></div>
            
<?php
include_once('violao.php');

$violao=new Violao('bom');
$violao->setNome('violao');
$violao->setCor('preta');
$violao->marca='Tagima';
$violao->setPreco(824.64);
$violao->tipoInstrumento();
$violao->loja();
include_once('bateria.php');

$bateria=new bateria();
$bateria->setNome('bateria');
$bateria->setCor("azul");
$bateria->modelo='Scorpion';
$bateria->setPreco(2.949);
$bateria->tipoInstrumento();
$bateria->loja();
?>

<div class="roda">Todos os direitos reservados</div>
</body>
</html>





