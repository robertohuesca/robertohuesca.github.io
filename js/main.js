// try{
// 	navigator.serviceWorker.getRegistration().then((r)=>{r.unregister()
// 	});
			  
// }catch(err){

// }
/*if(navigator.serviceWorker){
	navigator.serviceWorker.register("/sw");	
}*/
(function(){
	

	let sticky = false;
	var map;
	$(document).ready(()=>{
		const image_counter = parseInt($("[data-name='image_counter']").attr("content") - 1);
		let current_position = 0;
		isOpen();
		setInterval(()=>{
			if(current_position < image_counter){
				current_position++;
			}else{
				current_position = 0;
			}
			$("#gallery .inner").css({
				left: "-"+(current_position * 100)+"%"
			});
		},3000)
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

		// google map
		
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

	
		function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
		    center: {lat: -34.397, lng: 150.644},
		    zoom: 8
		  });
		}
})();
