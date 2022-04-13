<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amigos de BARril</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="img/cerveja.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        #h5{
            color:black;
        }
        #container{
            margin:auto;
            width:960px;
            float:left;
        }
        #topo{
            width:960px;
            float:left;
            height:20px;
            padding:10px;
        }
        #menu{
            width:960px;
            float:left;
            margin-top:10px;
            margin-bottom:10px;
        }
        #menu a{
        display:inline;
        text-decoration:none;
        padding:10px;
        color:#000;
        }
        #menu a:hover{
        background: pink;
        text-decoration:underline;
        }    
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/cerveja.png" alt="" width="75"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="tipos.php">Tipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="entrada.php">Login</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>


        <script> 
function excluir(id){
     if(confirm('Deseja realmente excluir o produto?' )){;
     location.href='excluir.php?id='+id;
}}
</script>
