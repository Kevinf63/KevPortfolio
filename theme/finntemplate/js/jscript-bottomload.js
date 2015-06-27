/* jQuery Ellipsis interactive minified */
(function($){$.fn.ellipsis=function(t,n){n=n||"…";this.each(function(){if(!$(this).attr("dataellipsis")){$(this).attr("dataellipsis",$(this).text())}var r=$(this);var i=$(this).attr("dataellipsis");r.text(i);var s=r.height();var o=r.text();r.text("a");var u=r.height();var a=u*(t||1);if(s<=a){r.text(i);return}var f=1;var l=i.length;while(f<l){var c=Math.ceil((f+l)/2);r.text(o.slice(0,c)+n);r.height()<=a?f=c:l=c-1}r.text(o.slice(0,f)+n)});return this}})(jQuery)

var sidebarCheck = false;

$(function() {	
	// IE8 JS Cache Fix
	$.ajaxSetup({
    cache: false
	});
	
	$( window ).resize(function() {
		sizeContent();
	});
});

/************************************/
/* WINDOW SIZE UI RE-ADJUST         */
/************************************/
function sizeContent() {
	// IE8 sidebar support...
	if (isIE () == 8) {
		$("#body-container").velocity({left:0}, {duration:100});
		$( "#side-button img" ).removeClass("spin-animation");
		sidebarCheck = false;
	} 
	// Modern browser Support...
	else {
		$( "#body-container" ).removeClass("slide-right");
		$( "#side-button img" ).removeClass("spin-animation");
	}	
	$('.options-description p').ellipsis(3, '...(click icon to read more)');
	//$('.options-description p, .options-description').removeClass('expand');
}

/*********************************************/
/* HW-ACCEL SIDEBAR SLIDE OUT W/ IE8 SUPPORT */
/*********************************************/
function showSidebar() {
	// IE8 sidebar support...
	if (isIE () == 8) {
		if (sidebarCheck == false) {
			$("#body-container").velocity({left:250}, {duration:100});
			$( "#side-button img" ).toggleClass("spin-animation");
			sidebarCheck = true;
		}
		else {
			$("#body-container").velocity({left:0}, {duration:100});
			$( "#side-button img" ).toggleClass("spin-animation");
			sidebarCheck = false;
		}
	}
	// Modern browser Support...
	else {
		$( "#body-container").toggleClass("slide-right");
		$( "#side-button img" ).toggleClass("spin-animation");
	}
}

//Initial ellipsis call runs when all structure and CSS has loaded...
$(window).load(function(){
	$('.options-description p').ellipsis(3, '...(click icon to read more)');
});
