<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/open-iconic/font/css/open-iconic.css" rel="stylesheet">
    <title>Home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container"> <a class="btn btn-primary" href="/customers/insertCustomer">
        <i class="fa d-inline fa-lg fa-circle-o"></i>
        <b>Cadastrar clientes</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar11">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="/users/insertUser">Cadastrar usuário</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/users/sair">Sair</a> </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="">Olá <?php echo $_SESSION['userNome']; ?></a></li>
        </ul>
      </div>
    </div>
    </nav>


    <div class="alert alert-dark alert-dismissible fade show" role="alert">
    <?php
        if(!empty($data['mensagem'])){
          foreach($data['mensagem'] as $m){
            echo $m."<br>";
          };
        }
      ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="py-5" >
      <h2 class="py-5 d-flex text-center justify-content-center">Clientes cadastrados</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
                <tr>
                  <th>Excluir</th>
                  <th>Editar</th>
                  <th>Nome</th>
                  <th>Data Nasc.</th>
                  <th>CPF</th>
                  <th>RG</th>
                  <th>Telefone</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['registros'] as $cliente) {?>
                <tr>
                  <th><a href="/customers/deleteCustomer/<?php echo $cliente['id']; ?>">Excluir</a></th>
                  <th><a href="/customers/updateCustomer/<?php echo $cliente['id']; ?>">Editar</a></th>
                  <td><?php echo $cliente['nome']; ?></td>
                  <td><?php echo $cliente['nasc']; ?></td>
                  <td><?php echo $cliente['cpf']; ?></td>
                  <td><?php echo $cliente['rg']; ?></td>
                  <td><?php echo $cliente['telefone']; ?></td>
                </tr>
                <?php }; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>