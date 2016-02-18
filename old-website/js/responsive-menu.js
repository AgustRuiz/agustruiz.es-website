function showResponsiveMenu(){
	var button = $("#show-collapsed-nav" );
	var responsiveMenu = $("#responsive-menu");

	if(button.hasClass("collapsed")){
		button.removeClass("collapsed");
		responsiveMenu.removeClass("responsive-menu-collapsed");
		responsiveMenu.addClass("responsive-menu-visible");
	}else{
		button.addClass("collapsed");
		responsiveMenu.removeClass("responsive-menu-visible");
		responsiveMenu.addClass("responsive-menu-collapsed");
	}
}