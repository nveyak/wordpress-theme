    $(document).ready(function() {
        initHovers();
        initClicks();
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


  