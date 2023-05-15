jQuery('.control').on("click", function(){
	jQuery('body').addClass('search-active');
	jQuery('.input-search').focus();
});

jQuery('.icon-close').on("click", function(){
	jQuery('body').removeClass('search-active');
});