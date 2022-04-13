<?php 
session_start();

$nome = $_POST["nome"];
$password = md5($_POST["password"]);

include_once 'conexao.php';

$sql = "select * from usuario where nome = '".$nome."' and senha = '".$password."' "; 

$result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_array($result);
        
        $_SESSION["nome"] = $row["nome"];
        $_SESSION["perfil"] = $row["perfil"];
        $_SESSION["tempo"] = time();
        $_SESSION["auth"] = true;

        header("location:painel.php");
    }else {
        $msg = "Login/Senha Invalidos!";
        header("location:entrada.php?msg=".$msg);
    }


?>
