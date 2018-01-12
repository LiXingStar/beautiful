$( function(){   
   $('.leftnav h3').click(function(){
   	  $(this).toggleClass('on');
      $(this).next('ul').slideToggle();
   });
} )
