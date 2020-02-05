
<?php

$erro_nome = false;
$erro_email = false;
$erro_senha = false;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
        <div class="col-4">
             
            <form action="/add" method="POST" >

            {{ csrf_field() }}            

            <div class="form-group mt-2">
            <h2>Crie sua conta</h2><br>
            <h3>É rápido e fácil</h3>
                <label for="nomeInput">Nome</label>
                <input id="nomeInput" name="nome" type="text" class="form-control <?= $erro_nome ? 'is-invalid' : '' ?>" />
                <div class="invalid-feedback">
                O campo nome é de preenchimento obrigatório.
                </div>
            </div>
            <div class="form-group">
                <label for="emailInput">E-mail</label>
                <input id="emailInput" name="email" type="email" class="form-control <?= $erro_email ? 'is-invalid' : '' ?>" />
                <div class="invalid-feedback">
                O campo email é de preenchimento obrigatório.
                </div>
            </div>
            <div class="form-group">
                <label for="senhaInput">Senha <br> <small class="text-muted">Mínimo 6 caracteres</small></label>
                <input id="senhaInput" name="senha" type="password" class="form-control <?= $erro_senha ? 'is-invalid' : '' ?>" />
                <div class="invalid-feedback">
                A senha deve conter mais de 6 caracteres.
                </div>
            </div>
            
            
            <button type="submit" name="submit" class="btn btn-primary ">Cadastrar</button>
            <a href="/cadastro" type="button" class="btn btn-secondary ">Voltar</a>
            

                        
            
            </form>
        </div>
        </div>
</div>
</body>
</html>