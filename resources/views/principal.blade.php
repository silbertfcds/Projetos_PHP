@extends('template')

@section('conteudo')



<center>
	<h1>Listagem de Produtos</h1>
</center>

<div id="app">
  @{{message}}
</div>

<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Descrição</th>
    </tr>
  </thead>
  <tbody>
 
    @foreach($produtos as $produto)
      <tr>
          <th scope="row">{{$produto->id}}</th>
          <td>{{$produto->nome}}</td>
          <td>{{$produto->descricao}}</td>
      </tr>
    @endforeach 
  
  </tbody>
</table>

<script type="text/javascript" src="https://br.vuejs.org/js/vue.js">

  new Vue({
    el: '#app',

  data: {
    message: 'Olá Vue.js!'
  },

  ready : function() {
      this.init();
  },

  methods:{
     init : function() {
      windows.console.log("teste");
     }
  }
})

</script>

@endsection