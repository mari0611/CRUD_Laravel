

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>



<div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-rigth">

                <a href="/insertdata" class="btn btn-success badge-pill" style="width:80px;" >Add</a>

            </div>
        </div>
</div>
    
<div class="container mt-5">
    <div class="row">
        <div class="table">
          
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Ações</td>
                       
                    </tr>
                </thead>
                <tbody>

                    @foreach ($usuarios as $usuario) 
                        
                        <tr>
                        
                        <td >{{$usuario->id}}</td>
                        <td >{{$usuario->nome}}</td>
                        <td >{{$usuario->email}}</td>
                        

                        <td>  
                        <a href="/editdata/{{ $usuario->id }}" class="btn btn-info w-10">Editar</a> 
                        <a href="/delete/{{$usuario->id}}" class="btn btn-danger w-10">Excluir</a> 
                                       
                        </td>
                        
                                                
                    </tr>

                    @endforeach
                                 
                                
               
            
                    
                </tbody>
            </table>
                  
        </div>       
    </div>    
</div>            
        

</main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
    
</body>
</html>