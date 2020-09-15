<?php
require ("../connections/conn.php");

$sql="INSERT INTO blog_publicacao (titulo,categoria,resumo,texto,status,datapublicacao) VALUES ('$_POST[titulo]','$_POST[categoria]','$_POST[resumo]','$_POST[texto]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../publicacoes_adicionada.php'>";
mysqli_close($conn);
?>


