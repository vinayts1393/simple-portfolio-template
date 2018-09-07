$(document).ready(function() {
   

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
