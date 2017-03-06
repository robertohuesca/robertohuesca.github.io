
(function(){
	

	let sticky = false;
	var map;
	$(document).ready(()=>{
		
		$(window).scroll((ev)=>{
			const inBottom = isInBottom();
			if(!sticky && inBottom){
				sticky = true;
				stickNavigation();
			}
			if(!inBottom && sticky){
				sticky = false;
				unStickNavigation();
			}
		})

	

		$("#menu-open").on("click",()=> {
			$("#responsive-nav ul").toggleClass("active")
			$("#menu-open").toggleClass("glyphicon-menu-hamburger")

		})
		$(".menu-link").on("click",()=> {
			$("#responsive-nav ul").toggleClass("active")
			$("#menu-open").toggleClass("glyphicon-menu-hamburger")
		})

		 $('.services-hidden').hide();
		  $('.accordion i').on('click',function(){
		    if($(this).next().is(':visible')){
		      $(this).next().slideUp(950);
		      $(this).removeClass("fa fa-minus")
		       $(this).addClass("fa fa-plus")
		    }
		    if($(this).next().is(':hidden')){
		      $('.accordion i').next().slideUp();
		      $(this).next().slideDown(950);
		      $(this).removeClass("fa fa-plus")
		      $(this).addClass("fa fa-minus")
		    }
		  })
		
	});

	function isOpen(){
		const current_hour = (new Date()).getHours();
		if(current_hour < 17 || current_hour > 23){
			$("#is_open .text").html("Cerrado ahora <br> Abierto de 5:00pm a 11:00pm")
		}
	}

	function isInBottom(){
		const $description = $("#description");
		const descriptionHeight = $description.height()
		return $(window).scrollTop() > $(window).height() - descriptionHeight *2;
	}

	function stickNavigation(){
			
		 $("#description").addClass("fixed").addClass("nav-white").removeClass("absolute").removeClass("nav-black");
		 $("#navigation").addClass("hidden");
		 $("#sticky-navigation").removeClass("hidden");
		 $("#logotipo").removeClass("hidden");
		 //$("#menu-stick").removeClass("white-text").addClass("black-text");
		// $("#sticky-navigation").fadeOut();
		// //let $newDiv = $("#description .navigation");
		// //$newDiv.addClass("in")
		// $("#sticky-navigation").removeClass("hidden");
	}
	function unStickNavigation(){
		$("#description").removeClass("fixed").removeClass("nav-white").addClass("absolute").addClass("nav-black");
		 $("#navigation").removeClass("hidden");
		 $("#sticky-navigation").addClass("hidden");
		 $("#logotipo").addClass("hidden");
		 //$("#menu-stick").addClass("white-text").removeClass("black-text");
		// $("#navigation").fadeIn();/*
		// let $newDiv = $("#description .navigation");
		// $newDiv.removeClass("in")*/
	}

	
		
})();


