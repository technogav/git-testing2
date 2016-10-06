
//initiating jQuery 
$(function($) { 
'use strict';
     $(document).ready( function() { 
          //enabling stickUp on the '.navbar-wrapper' class 
          $('.nav-container').stickUp();
          
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
                    
                      
               }
           });
           
           //Capture click on products tab for mobile
           $('#tab').click(function(){
               
               if($('.side-navbar').css('display')==='none'){
                    $('.side-navbar').removeClass('slideOutLeft');
                    $('.side-navbar').addClass('slideInLeft');
                    $('.side-navbar').css('display', 'block');
                    $('.hover-nav').hide();
                    $('#myNavbar span').hide();
                    
                      
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
         $('.side-navbar').css('padding-top' , '30');
        
    } else {
        $('#myNavbar span').addClass('fadeOut');
        $('#myNavbar span').addClass('hide');
        $('.side-navbar').css('padding-top' , '130');
    }
    
    
}

