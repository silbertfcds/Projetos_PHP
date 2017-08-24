<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

   
  </head>
  <body>
   

   
   
  <div id="app">
      <center>
        <h1>Formulário</h1>
      </center>

     <form method="post" v-on:submit.prevent="adicionarProduto">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" class="col-form-label">Nome</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" v-model="produto.nome">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" class="col-form-label">Número</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Número" v-model="produto.numero">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress" class="col-form-label">Descrição</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Descrição" v-model="produto.descricao">
        </div>

        <button type="button" class="btn btn-primary" v-on:click="adicionarProduto()">Adicionar</button>
      </form>

      <center>
        <h1>Listagem de Produtos</h1>
      </center>

      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descrição</th>
          </tr>
        </thead>

        <tbody>
          
            <tr v-for="produto in produtos">
                <th scope="row">@{{ produto.numero }}</th>
                <td>@{{ produto.nome }}</td>
                <td>@{{ produto.descricao }}</td>
                <td><button type="button" class="btn btn-secondary">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
         
        </tbody>
      </table>
     
  </div>

    <script src="/js/vue.min.js" ></script>
    <script src="/js/vue-resource.min.js" ></script>
    <script src="/js/view.js" ></script>

        
  </body>
</html>