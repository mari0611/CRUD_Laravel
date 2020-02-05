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
   


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

    <main class="container mt-3">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="/update/{{ $usuarios->id }}" method="POST" >

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                
                <input type="hidden" name="id" value="{{$usuarios->id}}">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" value="{{$usuarios->nome}}" class="form-control " id="nome" aria-describedby="nome">
                    <div class="invalid-feedback">
                    O nome deve conter mais de 3 caracteres.
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{$usuarios->email}}" class="form-control" id="email" aria-describedby="email">
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="text" name="senha" value="{{$usuarios->senha}}" class="form-control" id="senha" aria-describedby="senha">
                </div>

                
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$usuarios->id}}">
                    <button class="btn btn-primary float-right mb-3" type="submit">Salvar alterações</button>
                </div>
                    
                </form>
            </div>
        </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>