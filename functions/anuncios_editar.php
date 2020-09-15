<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$link = $_REQUEST['link'];


require("../connections/conn.php");
$sql = "update publicidade_anuncio set titulo='$titulo',link='$link' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anuncios_atualizado.php'>";
mysqli_close($conn);
?>
