$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});

/**funcion de la galeria del vendedor**/
$(function(){
	var	btn = $(".slider__btn");
	
	btn.on("click",function(){
		$(".slider__item").first().clone().appendTo(".slider");
		$(".slider__image").first().css({transform: "rotateX(-180deg)", opacity: 0});
		setTimeout(function(){
			$(".slider__item").first().remove();
		},200);
	});
});



