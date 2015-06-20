$(document).ready(function(){
   $('.greenlist-intro').on('click','button',function(event){
      $('body').find('.greenlist-section').fadeToggle(); 
   });
    
    $('.reuse-btn').click(function(){
    $('.reuse-items').fadeToggle(); 
    });
});