<!doctype html>
<html>
    <head>
'        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">'
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"></div>
                    <h1>Produtos(novo)</h1>
                    <form action="{{route(produtos.inserir')}} method="post">
  <div class="form-group">
    <label for="preco" class="form-label">preço</label>
    <input type="number" step="0.01" class="form-control" id="preco" placeholder="Preço">
  </div>
  <imput type"submit" value="cadastrar" class="btn btn-success">
</form>
                 <div class="row">
                    <a href="#"class="btn btn-primary">Novo</a>
                 </div>
                <div class="col-sm-2"></div>
                
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    
    
    

<html>