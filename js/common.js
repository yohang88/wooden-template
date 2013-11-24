( function( $ ) {
    $(window).load(function() {
        $('.carousel').carousel();
    });

    $(window).resize(function() {

    });
} )( jQuery );

$(document).ready(function() {

    //Setup each produce switcher on the page
    $(".item-modal").each(function(){
        $(this).find("aside.preview .productphotos-nav").show();
        var imgTitle = $(this).find(".productphotos-nav img:first-child").attr("title");
        $(this).find("a:first").addClass("active");
        $(this).find(".caption").html(imgTitle);
    });

    //Update Image on Click
    $(".item-modal .productphotos-nav a img").click(function(){
        var navParent = $(this).parent().parent();
        var itemParent = $(this).parent().parent().parent();
        var imgTitle = $(this).attr("title");
        var previewImg = $(itemParent).find("img.main-photo");
        var link = $(this).parent();
        var linkHref = link.attr("href");
        var linkAlt = link.attr("alt");

        if( $(link).hasClass("active") == false)
        {
            $(navParent).find("a").removeClass("active");
            link.addClass("active");
            $(previewImg).animate({
                opacity: 0.8,
            }, 300, function() {
                if(imgTitle != "") $(itemParent).find(".caption").html(imgTitle);
                previewImg.attr("src", linkHref);
                previewImg.attr("alt", linkAlt);
                $(this).animate({
                    opacity: 1,
                    }, 300
                );
            });
        }
        return false;
    });

});