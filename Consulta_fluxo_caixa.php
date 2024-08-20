<?php 
include('includes/conexao.php');
$tipo =$_GET['tipo'];
echo $tipo;

if($tipo =='entrada') {
	$sql="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
	
} else if($tipo == 'saida'){
	$sql="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
}else if($tipo == 'saldo') {
	$sql="select sum(case when tipo = 'entrada' then valor else 0 end) - 
		     sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa ";
}
echo $sql;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
echo "saldo".$row['valor'];


?>