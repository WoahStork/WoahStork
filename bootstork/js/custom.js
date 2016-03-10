// custom jquery



(function($){ // special wrapper for jQuery. idk but it works.
	$(document).ready(function () {
		//gets url parameters for later use
		$.urlParam = function(name){
		    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		    if (results==null){
		       return null;
		    }
		    else{
		       return results[1] || 0;
		    }
		}
		//these vars are for getambassador url parameters
		var campaignid = $.urlParam('campaignid');
		var mbsy_source = $.urlParam('mbsy_source');
		var mbsy = $.urlParam('mbsy');

		//set session cookies for getambassador params via cookie.js using above vars
		if (campaignid) { //check if var has been initialized by url params
			$.cookie('campaignid', campaignid);
			$.cookie('mbsy_source', mbsy_source);
			$.cookie('mbsy', mbsy);
		};

		//this is where we start filling fields on reg page
		//check if cookie is available and if you're on a register page
		if (($.cookie('mbsy') != null ) && (window.location.href.indexOf("register") >= 0)) { 
	    $('#field-mbsy-add-more-wrapper input').val($.cookie('mbsy'));
	    $('#field-mbsy-source-add-more-wrapper input').val($.cookie('mbsy_source'));
	    $('#field-campaignid-add-more-wrapper input').val($.cookie('campaignid'));
		};
		
		//if register page, start the show.
		if ($('body').hasClass("page-user-register")){
			progressBar();
		}else if($('body').hasClass("page-user-signup")){
		}
		else if ($('body').hasClass("node-type-strain")){
			straindetail();
		}else if ($('body').hasClass("page-strains"))
			strainspage();
			
	});
	
	function progressBar(){
		
			//1. create progress bar
			var target= $("div.multipage-panes.multipage-processed").first();
			var progbar = "<div class='progress'><div id='signupprog' class='progress-bar progress-bar-success active' role='progressbar' aria-valuenow='2'></div></div>";
			var progval = 10; //value at start.
			var startval=1;
			
			//2. add progress bar to the page
			target.prepend(progbar);
			
			//3. set initial width of progress bar
			$("#signupprog").css("width",progval+"%");
			
			//4. add event listeners to call progress bar change. Next advances progbar, prev pulls it back.
			$(".multipage-link-next").click(function(){progchange(40,1)});
			$(".multipage-link-previous").click(function(){progchange(-40,-1)});
			function progchange(x,y){
				progval = progval+x;
				if (progval<0){progval=10}
				var progvalpc = progval+"%";
				console.log(progvalpc);
				var submitbtn = $("button#edit-submit");
				var nextbtn = $("input[value='Next page']");
				nextbtn.val("Continue");
				$("#signupprog").animate({width:progvalpc},1000);
				
				//add glow effect to NEXT PAGE button for final pane
				if (progval<80){
					nextbtn.addClass("glowr");
					submitbtn.html("Save and Quit");
					}
				
				//add glow effect to submit button for final pane
				if (progval>80){
					submitbtn.addClass("glowr");
					submitbtn.html("Create My Woahstork Account");
					nextbtn.removeClass("glowr")
					
				}
				
				//basic UX fixes
				$("div.panel-title.fieldset-legend").html("<p>Location Information</p>");
				$("label[for='edit-field-shipping-register-und-profiles-0-field-mobile-und-0-value']").html("<p>mobile number</p>");
				$(".fieldset-description").html("<p>Why are we asking for this information? Well, we need this so we and the dispensaries we partner with can verify who you are when you order delivery cannabis. Your information is safe with us, read our terms and conditions page if you have any questions.</p>");
			}
			
		}
	
	function straindetail(){
		//what kinda weed is it broooooh?
		var h1bg=$("h1.page-header");
		var hybrid=$("a[href$='hybrid']").length;
		var sativa=$("a[href$='sativa']").length;
		var indica=$("a[href$='indica']").length;
		if (hybrid > 0){
			h1bg.addClass("feature-hybrid");
			h1bg.append("<small><i> (hybrid)</i></small>");
		}else if(sativa > 0){
			h1bg.addClass("feature-sativa");
			h1bg.append("<small><i> (sativa)</i></small>");
		}else if(indica > 0){
			h1bg.addClass("feature-indica");
			h1bg.append("<small><i> (indica)</i></small>");
		}
	}
	
	function strainspage(){
		$("#views-exposed-form-strains-page").addClass("well");
	}
/**** don't pass this line ****/
})(jQuery);