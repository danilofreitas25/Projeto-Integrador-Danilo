<?php
include_once 'topo.php';

$id = $_GET["id"];

$sql = "delete from cervejas where idproduto =".$id;

include_once 'conexao.php';

if(mysqli_query($con,$sql)){

    $msg = "Produto Excluido com sucesso!";
}else{

    $msg = "Erro ao Excluir!";
}
mysqli_close($con);
echo"<script>alert('".$msg."');
location.href='tabela_adm.php';


</script>";

include_once 'rodape.php';
?>