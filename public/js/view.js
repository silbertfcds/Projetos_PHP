

new Vue({
   el: '#app',

  props:['produtos'],
  

  data: {
	message: 'Olá Vue.js!',

	produto : {
		nome : '',
		numero : '',
		descricao : ''
		
	}
  },

  ready : function() {
  		//this.resultados = JSON.parse(this.produtos);
  		//console.log(this.resultados);
  		this.$http.get('/api/produtos/listar').then((req)=>this.produtos = req.data)
  		//console.log(this.produtos);
        this.init();
  },

	methods : {
	    init : function() {
	       //console.log("teste");
	    },
	    clicar : function() {
	    	 alert("clicou");
	    },
	    adicionarProduto : function() {
	    	this.$http.post('/api/produtos/create', this.produto).then(response=>{
	    		this.produtos.push(response.data.produto);
	    		console.log(response.data);
	    	});
	    	
	    }
    }

});
