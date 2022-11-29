// instancia jquery e evita conflitos
// jQuery( function($){
$(document).ready(function(){

    $('.owl-carousel').owlCarousel();

    let titulos = $('h4') // tag
   
    let itens = $('.featured-item') // class
    
    let destaques = $('#featured') // id

    console.log(titulos.first());

    // Configuração de produtos

    $('.featured-item a').addClass('btn btn-dark stretch-link');

    $('.featured-item:first h4').append('<span class="badge bg-secondary"> Novo</span>')
    // $('.featured-item:first h4').start('<span class="badge bg-secondary">Novo</span>')
    // $('.featured-item:first h4').html('<span class="badge bg-secondary">Novo</span>')
    // $('.featured-item:first h4').addClass('active')
    // $('.featured-item:first h4').removeClass('active')
    // $('.featured-item:first h4').toggleClass('active')
    // $('.featured-item:first h4').hide()
    // $('.featured-item:first h4').show()
    // $('.featured-item:first h4').fadeIn(2000)
    // $('.featured-item:first h4').fadeOut()
    //  $('.featured-item:first h4').css('color', '#f00')
     
     $('.featured-item h4').dblclick( function(){

        $(this).css({
            'color': '#f00',
            'background': '#ff0',
            'font-weight': '100',
        });

     });

     /*
      * Manipulação de eventos
      */
})

$('.nav-modal-open').on('click', function(e){
   e.preventDefault();
   let elem = $(this).attr('rel')   
   $('.modal-body').html($('#'+elem).html())
   $('#modalTitleId').html($(this).text())   
/*
* Aparecer modal clicando 
*/
   let myModal = new bootstrap.Modal($('#modalId'))
   myModal.show();
});

$('#noticias').ready(function(){
   const validaemail = /^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$/;
   const validacpf = /[0-9]{3}[.][0-9]{3}[.][0-9]{3}[-][0-9]{2}/;
   let validasbm1 = false;
   let validasbm2 = false;
   let validasbm3 = false;

   $("#nome-form").blur(function(){
    if($("#nome-form").val().length <= 2) {         
         $(this).css({"border" : "3px solid #F00", "padding": "2px"});
         $('#submbutton').attr('type', 'button');  
         validasbm1 = false;
      }else{
         $(this).css({"border" : "0px solid #F00", "padding": "2px"});
         validasbm1 = true;
         if(validasbm1 == true && validasbm2 == true && validasbm3 == true){         
            $('#submbutton').attr('type', 'submit');
           }else{
      
           }  
         }
   })
   $("#email-form").blur(function(){
      if($("#email-form").val() != $("#email-form").val().match(validaemail)) {         
           $("#email-form").css({"border" : "3px solid #F00", "padding": "2px"});
           $('#submbutton').attr('type', 'button');
           validasbm2 = false;
           }else{
           $(this).css({"border" : "0px solid #F00", "padding": "2px"});
           validasbm2 = true;
           if(validasbm1 == true && validasbm2 == true && validasbm3 == true){         
            $('#submbutton').attr('type', 'submit');
           }else{
      
           }   
           }
     })

     $("#form-cpf").blur(function(){
      if($("#form-cpf").val() != $("#form-cpf").val().match(validacpf)) {         
           $("#form-cpf").css({"border" : "3px solid #F00", "padding": "2px"});
           $('#submbutton').attr('type', 'button');
           validasbm3 = false;
         }else{
           $(this).css({"border" : "0px solid #F00", "padding": "2px"});
           validasbm3 = true;
           if(validasbm1 == true && validasbm2 == true && validasbm3 == true){         
            $('#submbutton').attr('type', 'submit');
           }else{
      
           }   
           }
     })
});