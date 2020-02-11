<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container"> <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-circle-o"></i>
        <b>Cadastrar cliente</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar11">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="/home/register">Home</a> </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Olá <?php echo $_SESSION['userNome']; ?></a></li>
        </ul>
      </div>
    </div>
    </nav>

    <div class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-md-6 col-10 bg-white p-5" >
                    <h3 class="mb-4" style="#343A40">Atualizar cliente</h1>
                <form action="/clientes/editar/<?php echo $cliente['id']; ?>" method="POST">
                    <div class="form-group"><input type="text" class="form-control" placeholder="Nome" name="nome" required value="<?php echo $data['registros']['nome']; ?>"></div>
                    <div class="form-group"><input type="text" class="form-control" placeholder="Data" name="data" onkeypress="$(this).mask('00/00/0000');" required value="<?php echo $data['registros']['nasc']; ?>"></div>
                    <div class="form-group"><input type="text" class="form-control" placeholder="CPF" name="cpf" onkeypress="$(this).mask('000.000.000-00');" required value="<?php echo $data['registros']['cpf']; ?>"></div>
                    <div class="form-group"><input type="text" class="form-control" placeholder="RG" name="rg" onkeypress="$(this).mask('00.000.000-0');" required value="<?php echo $data['registros']['rg']; ?>"></div>
                    <div class="form-group"><input type="text" class="form-control" placeholder="Telefone" name="telefone" onkeypress="$(this).mask('(00) 00000-0000');" required value="<?php echo $data['registros']['telefone']; ?>"></div>
                    <div class="form-group mb-3"> <small class="form-text text-muted text-right">
                    </small> </div> <button type="submit" class="btn btn-dark" name="atualziar">Atualizar</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  </body>
</html>