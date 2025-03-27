@extends('template')

@section('conteudo')

<h1>Produtos(novo)</h1>
<form action="{{route(produtos.inserir')}} method="post">

@csrf

  <div class="form-group">
    <label for="preco" class="form-label">preço</label>
    <input type="number" step="0.01" class="form-control" id="preco" name="preco" placeholder="Preço" min="0">
  </div>
  <imput type"submit" value="Atualizar" class="btn btn-success">
</form>
                 <div class="row">
                    <a href="#"class="btn btn-primary">Novo</a>
                
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    
       
@endsection                  
               