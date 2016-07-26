jQuery(document).ready(function($) {

    "use strict";


    $('#page-preloader').fadeOut('slow');
    $('#page-preloader .spinner').fadeOut('slow');
    

    $(window).resize(function() {
        winSize();
    });
    var windowSize543, windowSize1200;
    function winSize(){

        // Blog mobile menus
        windowSize543 =  window.matchMedia("(max-width: 543px)").matches;
        if (windowSize543) {
            $(".section_blog_catList .textBox_title2").on("click", function () {
                $(this).next().slideToggle(300);
            });
        } else {
            $(".section_blog_catList .textBox_title2").unbind("click");
            $(".section_blog_category_list").show();
        }


        // Modal filter
        windowSize1200 =  window.matchMedia("(min-width: 1200px)").matches;
        if (windowSize1200) {
            var count;
            $(".header_nav .modalLink").on("click", function () {
                $(".header_nav > ul").addClass("hide");
                setTimeout($("#modal-filter").addClass("open"),600);
                count = 0;
                return false;
            });
        } else {
            $(".header_nav .modalLink").magnificPopup({
                type:'inline',
                midClick: true
            });
            $(".header_nav .modalLink").on("click", function () {
                count = 0;
            });
        }
        $(".modal_filter_prev_link").on("click", function () {
            $(".modal_filter_send").addClass("hide");
            setTimeout($(".modal_filter_next_link").removeClass("hide"),600);
            if(count == 0){
                $("#modal-filter").removeClass("open");
                setTimeout($(".header_nav > ul").removeClass("hide"),600);
                $(".mfp-close").click();
            } else {
                $(".modal_filter_item").eq(count).removeClass("open");
                count--;
                setTimeout($(".modal_filter_item").eq(count).addClass("open"),600);
            }
            return false;
        });
        $(".modal_filter_next_link").on("click", function () {
            $(".modal_filter_item").eq(count).removeClass("open");
            count++;
            setTimeout($(".modal_filter_item").eq(count).addClass("open"),600);
            if(count==2){
                $(".modal_filter_next_link").addClass("hide");
                setTimeout($(".modal_filter_send").removeClass("hide").addClass("show"),600);
            }
            return false;
        });
        $(".modal_filter_send").on("click", function () {
            var type = [];
            for(var i=0;i<$("#modal-filter input:checked").length;i++){
                type.push($("#modal-filter input:checked").eq(i).val())
            }
            var filter = {
                "where": $("#modal-filter input[name='where']").val(),
                "when": $("#modal-filter input[name='when']").val(),
                "whom": $("#modal-filter input[name='whom']").val(),
                "type": type,
                "money": $("#modal-amount").text()
            };
            console.log(filter);
        });

    }
    winSize();
    
    // Css for drop down
    $(".dropdown").each(function () {
       $(this).css({
           "margin-left": -($(this).width()/2)
       });
    });

    // Owl carousel http://owlcarousel.owlgraphic.com/
    $("#section_reviews").owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        margin: 10,
        navText: ["<svg width='22' height='40'><use xlink:href='#slider_arrow_prew'></use> </svg>","<svg width='22' height='40'><use xlink:href='#slider_arrow_next'></use> </svg>"]
    });

    // Magnific http://dimsemenov.com/plugins/magnific-popup/
    $('#itemGallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
            enabled:true
        },
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom',
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300
        }
    });
    $('.open-popup-link').magnificPopup({
        type:'inline',
        midClick: true
    });

    // Form styler http://dimox.name/jquery-form-styler
    $("input, select").styler();

    // Jquery ui slider
    $(function() {
        $( "#slider" ).slider({
            value: 50000,
            min: 0,
            max: 50000,
            step: 10,
            slide: function( event, ui ) {
                $( "#amount" ).text( ui.value + "CZK" );
            }
        });
        $( "#amount" ).text( $( "#slider" ).slider( "value" ) + "CZK" );
    });
    // $('#slider').draggable();
    $(function() {
        $( "#modal-slider" ).slider({
            value: 500,
            min: 0,
            max: 50000,
            step: 10,
            slide: function( event, ui ) {
                $( "#modal-amount" ).text( ui.value + "$" );
            }
        });
        $( "#modal-amount" ).text( $( "#modal-slider" ).slider( "value" ) + "$" );
    });
    // $('#modal-slider').draggable();

    // Input mask
    $(".date_input").mask("99.99.9999");

    // Scroll to id
    $('.scroll').click( function(){
        var scroll = $(this).attr('href');
        if ($(scroll).length != 0) {
            $('html, body').animate({ scrollTop: ($(scroll).offset().top) }, 500);
        }
        return false;
    });

});




