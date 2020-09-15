<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
$sql = "update blog_comentarios set status='1' where publicacao=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../publicacoes.php'>";
mysqli_close($conn);
?>
