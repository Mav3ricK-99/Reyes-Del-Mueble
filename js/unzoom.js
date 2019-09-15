var original=window.screen.width;
window.onload = function(e){
if($(window).width() > original)
	{$("body").css("width", original);}


window.onresize = function() {maxB(original)};
function maxB(original) {
	
	var xd= Math.round(window.devicePixelRatio * 100);
	if(xd<100){
		
		$("body").css("width", original);
		
	}
	else{$("body").css("width", "100%");}
	
}
}