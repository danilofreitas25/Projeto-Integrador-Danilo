<?php include_once 'topo.php'; ?> 
<div class="container">
<br>
<h3>Entre no <img src="img/barril.png" width="28" > e veja as melhores para degustar</h3>
<form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuário</label>
    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<br>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
  <a href="cadastro_user.php"><button type="button" class="btn btn-success">Cadastrar</button></a>
</form>
        <?php
        if(isset($_GET["msg"])){
            echo $_GET["msg"];
        }
?>
<?php include_once 'rodape.php'; ?>
</div>