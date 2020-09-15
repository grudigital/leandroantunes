<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$categoria = $_REQUEST['categoria'];
$resumo = $_REQUEST['resumo'];
$texto = $_REQUEST['texto'];


require("../connections/conn.php");
$sql = "update blog_publicacao set titulo='$titulo',categoria='$categoria',resumo='$resumo',texto='$texto' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../publicacoes_atualizado.php'>";
mysqli_close($conn);
?>
