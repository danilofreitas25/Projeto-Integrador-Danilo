<?php 

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password1 = $_POST["confirm_password"];
            $perfil = $_POST["perfil"];
            $cep = $_POST["cep"];   
            $rua = $_POST["rua"];   
            $bairro = $_POST["bairro"];   
            $cidade = $_POST["cidade"];   
            $uf = $_POST["uf"];   
            $ibge = $_POST["ibge"];   
               
            
            
            if($nome!="" && $password == $password1){ 
               
                include_once 'conexao.php';
            
            $sql ="insert into usuario values
            (null,'".$nome."','".$email."','".md5($password)."','".$perfil."','".$cep."','".$rua."','".$bairro."','".$cidade."','".$uf."','".$ibge."')";
            
    $result = mysqli_query($con,$sql);

    if($result){

        $msg = "Gravado com sucesso!";
        ?>
        <script>

        <?php
    }else{

        $msg = "Erro ao Gravar!";
    }

    mysqli_close($con);
    echo"<script>alert('".$msg."');
    location.href='cadastro_user.php';
    
    
    </script>";
    date_default_timezone_set("America/Sao_Paulo");
            $arquivo = fopen("dados.txt","a+");
            //atríbuto "a+", cria o arquivo, se já existe ele inclui
            
            //gravar
            fwrite($arquivo, "Dados do cadastro - Cadastro realizando em : ".date("d/m/Y")." as ".date("H:i:s"));
            fwrite($arquivo, "\nNome: ".$nome);
            fwrite($arquivo, "\nE-mail: ".$email);
            fwrite($arquivo, "\nSenha: ".$password);
            fwrite($arquivo, "\nPerfil: ".$perfil);
            fwrite($arquivo, "\nCEP: ".$cep);
            fwrite($arquivo, "\nRua: ".$rua);
            fwrite($arquivo, "\nBairro: ".$bairro);
            fwrite($arquivo, "\nCidade: ".$cidade);
            fwrite($arquivo, "\nUF: ".$uf);
            fwrite($arquivo, "\nIBGE: ".$ibge);
            fwrite($arquivo, "\n-------------------------------\n\n");
            //fechar o arquivo texto
            fclose($arquivo);
        
        }else{
            echo "<script>alert('ERRO AO GRAVAR! Preencha os campos corretamente!');
            location.href='cadastro_user.php';
            </script>";
        }
    include_once 'rodape.php';

    ?>