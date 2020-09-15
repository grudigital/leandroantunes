<?php
require ("../connections/conn.php");

$sql="INSERT INTO itens (item,comodo) VALUES ('$_POST[item]','$_POST[comodo]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../itens_adicionado.php'>";
mysqli_close($conn);
?>


