<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Players</h1>



        <p class="lead"></p>
    </div>
</div>

<div class="container">
    <button type="button" class="btn btn-primary mb-4" >Adicionar Jogador</button>

<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Jogador</th>
        <th scope="col">Deck</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($jogador as $j)
        <tr>
            <th scope="row">1</th>
            <td>{{$j->nome}}</td>
            <td>Gruul</td>
            <td><a href="#">Editar </a>| <a href="#"> Excluir </a> | <a href="#" > Acessar </a></td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>


</body>
</html>
