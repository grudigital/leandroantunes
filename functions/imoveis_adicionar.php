<?php
require ("../connections/conn.php");

$sql="INSERT INTO imoveis (titulo,endereco,numero,bairro,cidade,estado,responsavel,telefone,telefone2,email,status,datacadastro) VALUES ('$_POST[titulo]','$_POST[endereco]','$_POST[numero]','$_POST[bairro]','$_POST[cidade]','$_POST[estado]','$_POST[responsavel]','$_POST[telefone]','$_POST[telefone2]','$_POST[email]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../imoveis_adicionado.php'>";
mysqli_close($conn);
?>


