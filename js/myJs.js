
//initiating jQuery 
$(function($) { 
'use strict';
     $(document).ready( function() { 
          //enabling stickUp on the '.navbar-wrapper' class 
          $('.nav-container').stickUp();
           //CAPTURE CLICK EVENT REDIRECT TO THE PRODUCT PAGE AND APPEND ON THE TAG TO URL
           $('.product-button').click( function(e){
                e.preventDefault();
               var productTabName = ($(this).attr('value'));
               window.location = 'products.php?tag='+productTabName;
          });
          
          $('.partner-button').click(function(e){
               e.preventDefault();
               var productPartnerName = ($(this).attr('value'));
               window.location =  'products.php?partner='+productPartnerName;    
          });
          
          $('.tool-button').click(function(e){
               e.preventDefault();
               var toolTagName = ($(this).attr('value'));
               window.location = 'toolList.php?tooltag='+toolTagName;   
          });
     }); 
}); 


//sudo code for slide in out menu
     $(document).ready(function(){
          'use strict';
          $('.hover-nav').hover(function(){
               if($('.side-navbar').css('display')==='none'){
                    $('.side-navbar').removeClass('slideOutLeft');
                    $('.side-navbar').addClass('slideInLeft');
                    $('.side-navbar').css('display', 'block');
                    $('.hover-nav').hide();
                    $('#myNavbar span').hide();
                    
                      
               }else{
                    //$('.side-navbar').removeClass('slideInLeft').addClass('slideOutLeft');
                    
                    //$('#myNavbar span').removeClass('fadeOut').addClass('fadeIn');
                    //$('.side-navbar').addClass('slideOutLeft');
                    /*setTimeout(function(){
                         $('.side-navbar').css('display', 'none');       
                    }, 1000);*/
                      
               }    
           });
           $(".side-navbar").on("mouseover", function() {
                 
               }).on("mouseleave", function() {
                    if($('.side-navbar').css('display')==='block'){
                      $('.side-navbar').addClass('slideOutLeft');
                      setTimeout(function(){
                              $('.side-navbar').css('display', 'none');       
                       }, 1000);
                       $('.hover-nav').show();
                       $('#myNavbar span').show();
                    }
                           
               });
          });
          
//HANDLE CLICK EVENT FOR THE PRODUCT SLIDE OUT


          $('.product-list').click(function(event){
               'use strict';
               event.preventDefault();
               if($('.side-navbar').css('display')==='none'){
                    $('.side-navbar').removeClass('slideOutLeft');
                    $('.side-navbar').addClass('slideInLeft');
                    $('.side-navbar').css('display', 'block');
                    $('.hover-nav').hide();
                    $('#myNavbar span').hide();
               }else{
                    $('.side-navbar').removeClass('slideInLeft');
                    $('.side-navbar').addClass('slideOutLeft');
                    setTimeout(function(){
                              $('.side-navbar').css('display', 'none');       
                       }, 1000);
                    
                    $('.hover-nav').show();
                    $('#myNavbar span').show();
               }
          });

//CAPTURE SCROLL EVENTS AND APPLY JAVASCRIPT**************************************
window.onscroll = function() {
     'use strict';
     myFunction();
};
function myFunction() {
     'use strict';

    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
         $('.side-navbar').css('top','50');
         $('#myNavbar span').removeClass('hide');
         $('#myNavbar span').addClass('fadeIn');
        
    } else {
        $('#myNavbar span').addClass('fadeOut');
        $('#myNavbar span').addClass('hide');
    }
    
    
}

