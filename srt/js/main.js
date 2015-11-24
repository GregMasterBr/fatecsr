jQuery(function($){
  /**
   * Define a variável elementoMenu.
   * Atribui o elemento #menu 
   */
   var elementoMenu = $("#menu");
   /**
   * Define a variável posicaoAlvoTopo, 
   * Atribuir a posição desse elemento na página 
   */
   var posicaoMenu = elementoMenu.offset().top;
  
   /**
    * Vincula o evento scroll a window,
    * e definimos uma função anômima 
    * ao evento scroll
    * 
    */
  $(window).scroll(function(){
      /**
       * Define uma variável posicaoAtualScroll,
       * e atribui a posição atual do scroll
       */
        var posicaoAtualScroll = $(window).scrollTop();
        
        /**
         * Verifica se posição do scroll ultrapassou o Menu
         * Se for maior, ele adicionar a classe contentFullFixed
         * Senão, será removida a classe
         */
       if(posicaoAtualScroll > posicaoMenu){
          document.getElementById('teste').style.display = 'block';
		   elementoMenu.addClass('contentFullFixed');
			   
		   
         } else{
           elementoMenu.removeClass('contentFullFixed');
		   document.getElementById('teste').style.display = 'none';
       }
	   
       
   });
});

