<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css.css">
        <title>Dados Recebidos</title>
    </head>
    <body>
        <?php 
            include("menu.php")
        ?>
        <div class="container">
        <h1>Dados Recebidos</h1>
        <p><b>Nome Completo recebido foi: </b><?php echo $_GET["nome"]; ?> </p>
        <p><b>Idade recebida foi: </b><?php echo $_GET["idade"]; ?> </p>
        <p><b>Data de Nascimento recebida foi: </b><?php echo $_GET["datanascimento"]; ?> </p>
        <p><b>Cidade recebida foi: </b><?php echo $_GET["cidade"]; ?> </p>
        <p><b>Endereço recebido foi: </b><?php echo $_GET["endereco"]; ?> </p>
        <p><b>Estado recebido foi: </b><?php echo $_GET["estado"]; ?> </p>
        <p><b>País recebido foi: </b><?php echo $_GET["pais"]; ?> </p>
        <p><b>CEP recebido foi: </b><?php echo $_GET["cep"]; ?> </p>
        <p><b>Email recebido foi: </b><?php echo $_GET["email"]; ?> </p>
        <p><b>Senha recebida foi: </b><?php echo $_GET["senha"]; ?> </p>
        </br>
        <a href="index.php"><button type="button" class="btn btn-warning">Voltar</button></a>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>