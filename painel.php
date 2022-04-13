<?php include_once 'topo.php'; ?>

<?php 
session_start();
include_once 'autenticacao.php';

?>
  
<div class="container">
    <br>
    <?php 
        echo "Seja Bem Vindo(a), ".$_SESSION["nome"];
        echo"<br>";
       

        if($_SESSION["perfil"] == ("adm")){
            include_once 'menu_adm.php';
        }else{
            include_once 'menu_user.php';
        }
    ?>

<?php include_once 'rodape.php' ?>;
</div>