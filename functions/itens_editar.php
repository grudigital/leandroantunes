<?php
$id = intval($_REQUEST['id']);
$item = $_REQUEST['item'];


require("../connections/conn.php");
$sql = "update itens set item='$item' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../itens_atualizado.php'>";
mysqli_close($conn);
?>
