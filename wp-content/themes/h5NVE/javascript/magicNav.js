(function($){

$(function() {

    var $el, leftPos, newWidth,
        $mainNav = $("#menu-main-menu");

    $mainNav.append("<li id='magic-line'></li>");
    var $magicLine = $("#magic-line");

	if($(".current_page_item").length>0){
    $magicLine
        .width($(".current_page_item").width())
        .css("left", $(".current_page_item a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
	}
else{
	$magicLine.hide();
	
	}


    $("#menu-main-menu li a").hover(function() {
    	$magicLine.show();
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
    }, function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });
    });
});

})(jQuery);