$(document).ready(function(){


	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 10){
			if(!flag){
	
				$("header").css({"background-color": "##5f9498"});
				flag = true;
			}
		}else{
			if(flag){

				$("header").css({"background-color": "##5f9498"});
				flag = false;
			}
		}


	});

});



