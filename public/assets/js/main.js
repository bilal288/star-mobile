jQuery(document).ready(function($){
        
    // Bootstrap Mobile Menu fix
    $(".navbar-nav li a").click(function(){
        $(".navbar-collapse").removeClass('in');
    }); 
    
    $('#contact').click(function(){
        $('html, body').animate({
            scrollTop: $('.footer-contact').offset().top
        }, 1000);
    }); 
             
});

