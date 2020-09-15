<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$endereco = $_REQUEST['endereco'];
$numero = $_REQUEST['numero'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$responsavel = $_REQUEST['responsavel'];
$telefone = $_REQUEST['telefone'];
$telefone2 = $_REQUEST['telefone2'];
$email = $_REQUEST['email'];

require("../connections/conn.php");
$sql = "update imoveis set titulo='$titulo',endereco='$endereco',numero='$numero',bairro='$bairro',cidade='$cidade',estado='$estado',responsavel='$responsavel',telefone='$telefone',telefone2='$telefone2',email='$email' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../imoveis_atualizado.php'>";
mysqli_close($conn);
?>
