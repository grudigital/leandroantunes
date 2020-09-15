<?php
$id = intval($_REQUEST['id']);
$video = $_REQUEST['video'];



require("../connections/conn.php");
$sql = "update blog_publicacao set video='$video' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../publicacoes_atualizado.php'>";
mysqli_close($conn);
?>
