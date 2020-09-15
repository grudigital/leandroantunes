<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
$sql = "update publicidade_anuncio set status='1' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anuncios.php'>";
mysqli_close($conn);
?>
