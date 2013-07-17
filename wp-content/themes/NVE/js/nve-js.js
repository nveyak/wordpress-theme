    $(document).ready(function() {
        initHovers();
        initClicks();
        initOther();
        calculateInfoBoxLefts();
    });

    $(window).resize(function() {
        calculateInfoBoxLefts();
    });

    function initHovers() {
        // cross section table hover
        $(".div-table-td").hover(
            function () {
                var index = $(this).attr("class").split("div-table-td-")[1].split(" ")[0];
                $($("#table_nav .div-table-td")[index]).addClass("hover");
            },
            function () {
                var index = $(this).attr("class").split("div-table-td-")[1].split(" ")[0];
                $($("#table_nav .div-table-td")[index]).removeClass("hover");
            }
        );

        $(".has_event").hover(
            function () {
                var infoDiv = $(this).children(".event-info");
                infoDiv.removeClass("hide");
            },
            function () {
                $(this).children(".event-info").addClass("hide");
            }
        );
    }

    function calculateInfoBoxLefts() {
        var infoDivWidth = $(".event-info").width();
        var offset = 10;
        var tdWidth = $(".div-table-td-1").width();

        $(".event-info-right").each(function() {
            $(this).css("left", $(this).parent(".has_event").position().left - offset);
        });
        // Position info windows left that would otherwise fall off the table
        $(".event-info-left").each(function() {
            $(this).css("left", $(this).parent(".has_event").position().left
                     - infoDivWidth + (offset + tdWidth));
        });
    }

    function initClicks() {
        $(".athlete").click(function() {

            //changes arrow state
            $(".show").parent().find(".arrow-up")
            .removeClass("arrow-up").addClass("arrow-down");
            
            //add active class to athlete name
           $(this).not("#table_nav .athlete").toggleClass("active");

            //athlete info toggle  
            if ($(this).parent().next(".athlete_info").hasClass("show")) {
                $(".show").slideUp().removeClass("show");
            } else {
                $(".active").not(this).removeClass("active");
                $(".show").hide().removeClass("show");
                $(this).parent().next(".athlete_info").slideToggle()
                        .toggleClass("show");

                $(this).find(".arrow-down, .arrow-up").not(".events, .athlete_info")
                        .toggleClass("arrow-down")
                        .toggleClass("arrow-up");
            }
        }); //end click function

    }

    function initOther() {
        /* fixed header */
        var div = $("#header");
        var start = $(div).offset().top;
        var headerHeight = $("#header").height();
        $("#header_placeholder").css("height", headerHeight);

        $.event.add(window, "scroll", function() {
            var p = $(window).scrollTop();
            if (p > start) {
                $(div).css("position", "fixed").css("top", "0px");
                $("#header_placeholder").show();
            } else {
                $(div).css("position", "static").css("top", "");
                $("#header_placeholder").hide();
            }
        });
        
        /*adds today class to today*/
        var d = new Date();
        var x = d.getDate();
        var m = d.getMonth() + 1;
        var today = m + "/" + x;
        var dates = $("#table_nav .div-table-td");
        $.each(dates, function(index, date) { 
          dater = $(this).text();
	        if (dater == today) {
		       $(this).addClass("today");
	        }
	    });
        
    }


  