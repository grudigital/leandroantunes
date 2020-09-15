<?php
$id = intval($_REQUEST['id']);
include("../connections/conn.php");
$result = mysqli_query($conn,"delete from blog_categorias where id = '$id' order by id DESC");
if ($result){
    echo "<meta http-equiv='refresh' content=0;url='../categorias_excluido.php'>";
} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>