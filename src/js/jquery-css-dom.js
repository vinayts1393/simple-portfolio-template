/*function jumboHeightSet(rem_ht, cont_ht) {
    if (rem_ht < cont_ht) {
        $(".jumbotron").height(cont_ht);
    } else {
        $(".jumbotron").height(rem_ht);
    }
}*/

$(document).ready(function() {
    /* var pos = $(".jumbotron").offset().top;
     var docht = $(window).height();
     var calc = docht - pos - 140;
     var docht2;
     var id, className;

     var c1 = 0;
     $(".about-content > div >.jumbotron ").each(function() {
         c1 += $(this).outerHeight();
     });

     jumboHeightSet(calc, c1);

     $(window).resize(function() {
         docht2 = $(window).height();
         docwidt = $(window).width();

         if (docwidt < 990)
             $(".jumbotron").css({ "height": "100%" });
         else {
             //jumboHeightSet(calc, c1);
             $(".jumbotron").css({ "height": "100%" });
         }
     });

     // these code scrolls the content on click event 
     /*$(".nav > a").each(function() {
         var v = $.makeArray(this);

         console.log(v);
         console.log(v[0].id);


     });

     $(".container > .row").each(function() {
         var w = $.makeArray(this);

         console.log(w);
         console.log(w[0].className);


     });*/

    $("#about-link").on("click", function() {
        var pos = $(".about-content").offset().top;
        pos = pos - 50;
        $("HTML , BODY").animate({ scrollTop: pos }, 1000);
    });

    $("#project-link").on("click", function() {
        var pos = $(".project-content").offset().top;
        pos = pos - 50;
        $("HTML , BODY").animate({ scrollTop: pos }, 1000);
    });

    $("#blog-link").on("click", function() {
        var pos = $(".blog-content").offset().top;
        pos = pos - 50;
        $("HTML , BODY").animate({ scrollTop: pos }, 1000);
    });

    $("#contact-link").on("click", function() {
        var pos = $(".contact-content").offset().top;
        pos = pos - 50;
        $("HTML , BODY").animate({ scrollTop: pos }, 1000);
    });

});