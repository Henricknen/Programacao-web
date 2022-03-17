<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exerc1</title>
  </head>
  <body class="container">
    <h1>Exerc1</h1>

    <form action="/resultado1" method="post">           <!-- sistema de grid -->
        @csrf
        <div class="row">       <!-- linha -->
            <div class="col">       <!-- coluna -->
                <label for="valor_produto" class="label-control">Informe o valor do produto:</label>
                <input type="text" name="valor_produto" id="valor_produto" class="form-control"/>
            </div>
            <div class="col">
                <label for="valor_pago" class="label-control">Informe o valor pago pelo produto:</label>
                <input type="text" name="valor_pago" id="valor_pago" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="rol">
                <button type="submint" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    @if(isset($resultado))       
        <div class="alert alert-info">{{$resultado}}</div>
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
