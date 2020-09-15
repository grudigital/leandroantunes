<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
$sql = "update blog_publicacao set status='2' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../publicacoes.php'>";
mysqli_close($conn);
?>
