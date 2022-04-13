
<?php include_once 'topo.php'; ?>

<div class="container">
<?php    

$id = base64_decode($_GET["id"]);

$sql = "select * from cervejas where idproduto= ".$id;

include_once 'conexao.php';

$rs = mysqli_query($con,$sql);

if(mysqli_num_rows($rs)==1){
    $reg = mysqli_fetch_array($rs);
}

?>
<h3>Atualizar Cerveja</h3>
<form action="atualizar.php" class="form-control" method="post">
Nome: <br>
<input type="text" name="nome" class="form-control" id="nome" value="<?php echo $reg["nome"];?>">
<br>
nota: <br>
<select name="nota" id="nota" class="form-control">
    <option value="<?php echo $reg["nota"];?>"><?php echo $reg["nota"];?></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<br>
Tipo: <br>
<select name="tipo" id="tipo" class="form-control">
    <option value="<?php echo $reg["tipo"];?>"><?php echo $reg["tipo"];?></option>
    <option value="Pilsen">Pilsen</option>
    <option value="Lager">Lager</option>
    <option value="Pale Ale">Pale Ale</option>
    <option value="Bock">Bock</option>
    <option value="Weissbier">Weissbier</option>
</select>
<br>
Comentário: <br>
<textarea name="comentario" id="comentario" class="form-control" value="<?php echo $reg["comentario"];?>"><?php echo $reg["comentario"];?></textarea>
<br>
<hr>
<br>
<h3>Endereço da Fábrica:</h3>
<br>
<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
  

   
    <!-- Inicio do formulario -->
      
        Cep:
        <input name="cep" type="text" id="cep" value="<?php echo $reg["cep"];?>" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" class="form-control"/><br/>
        Rua:
        <input name="rua" type="text" value="<?php echo $reg["rua"];?>" id="rua" class="form-control"/><br/>
        Bairro:
        <input name="bairro" type="text" value="<?php echo $reg["bairro"];?>" id="bairro" class="form-control"/><br/>
        Cidade:
        <input name="cidade" type="text" value="<?php echo $reg["cidade"];?>" id="cidade" class="form-control"/><br/>
        Estado:
        <input name="uf" type="text" id="uf" value="<?php echo $reg["uf"];?>" class="form-control"/><br/>
        IBGE:
        <input name="ibge" type="text" value="<?php echo $reg["ibge"];?>" id="ibge" class="form-control"/><br/>
<input type="hidden" class="form-control" name="id" value="<?php echo $reg["idproduto"];?>"> 
<input class="btn btn-success" type="submit" value="Atualizar Cerveja">
<a href="tabela_adm.php" class="btn btn-warning" >Voltar</a>

</form>


<?php include_once 'rodape.php'; ?>
</div>