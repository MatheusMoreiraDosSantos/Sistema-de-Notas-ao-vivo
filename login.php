<?php
session_start();
include ('conexao.php');



$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);



$query="select usuarionome, usuariosenha from usuario where usuarionome = '{$usuario}' and usuariosenha= md5('{$senha}') ";
$adm=mysqli_query($conexao,"select usuarionivel from usuario where usuarionome = '{$usuario}' and usuariosenha= md5('{$senha}') and usuarionivel = 1 ");
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
$rowadm = mysqli_num_rows($adm);

if ($row == 1) {
	if ($rowadm==1) {
		$_SESSION['usuario'] = $usuario;
	header('location: adm.php');
	exit();
	}
	else{
		$_SESSION['usuario'] = $usuario;
	header('location: scorecard.php');
	exit();
	}
	
	
}
else{
	$_SESSION['nao_autenticado'] = true;
	header('location: index.php');
}

?>