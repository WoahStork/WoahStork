// this will check if prices exist and hide the select options if they don't

(function($){ // special wrapper for jQuery in Drupal. idk but it works.
// all action should happen within div.view-dispensary-menu 
	$(document).ready(function() { //each views row within .view-dispensary-menu
		if ($('.view-dispensary-menu').length) { //check the menu exists
			$('.views-row').each(function(i){ //loop through each row
				if ($(this).children('.views-field-field-product-type').children('.field-content').text() != "Flower"){
					$(this).find('.field-widget-options-select').hide();//addClass("hidden");
				}
				else {
					var $eighthPrice 	= $(this).children('.views-field-field-1-8-price'); //option 2
			    var $quarterPrice = $(this).children('.views-field-field-1-4-price'); //option 3
			    var $halfPrice 		= $(this).children('.views-field-field-1-2-price'); //option 4
			    var $ozPrice 			= $(this).children('.views-field-field-oz-price'); //option 5

			    var $eighthOption 	= $(this).find('option[value="2"]');
			    var $quarterOption 	= $(this).find('option[value="3"]');
			    var $halfOption			= $(this).find('option[value="4"]');
			    var $ozOption 			= $(this).find('option[value="5"]');

			    //hide irrelevant options if prices do not exist
			    if (!$eighthPrice.length){
			    	$eighthOption.hide();
					}
					if (!$quarterPrice.length){
			    	$quarterOption.hide();
					}
			    if (!$halfPrice.length){
			    	$halfOption.hide();
					}
			    if (!$ozPrice.length){
			    	$ozOption.hide();
					}
				}
			});
    }
  });
/**** don't pass this line ****/
})(jQuery);