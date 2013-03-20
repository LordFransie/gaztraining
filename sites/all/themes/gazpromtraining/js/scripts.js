(function ($){
 $(document).ready(function(){
 	var Menu = function(x){
 	this.name = x;
 	 $("#block-menu-block-3 .menu-block-3 >ul.menu>li").addClass("primary-links");
 	 $(".primary-links>ul").addClass("sub-menu");
 	 $(".primary-links").each(function(){
 	
	 	$(this).find(".sub-menu").slideUp(0, "linear");
	 	$(">a", this).bind("click", function(event){
	 		 event.preventDefault();
	 	if($(this).parent().hasClass("clicked")){
		 	$(this).parent().find(".sub-menu").slideUp();
		 	$(this).parent().removeClass("clicked");
	 	}
	 	else{
	 		if($(this).parent().siblings().hasClass("clicked")){
	 			$(this).parent().siblings(".clicked").find(".sub-menu").slideUp();
		 		$(this).parent().siblings().find(".clicked").removeClass("clicked");
		 		$(this).parent().find(".sub-menu").slideDown();
		 		$(this).parent().addClass("clicked");
	 		}
	 		
		 	$(this).parent().find(".sub-menu").slideDown();
		 	$(this).parent().addClass("clicked");
	 	}
 	}); 

	 	

	
	});
 	
 	};
 	
 	
 	
 	
 	
 	
 	var mainMenu = new Menu("#block-menu-block-3");
 	
 	});
 		 
 })(jQuery);
 