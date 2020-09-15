<?php
require ("../connections/conn.php");

$sql="INSERT INTO publicidade_anuncio (titulo,local,link,datapublicacao) VALUES ('$_POST[titulo]','$_POST[local]','$_POST[link]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anuncios_adicionado.php'>";
mysqli_close($conn);
?>


