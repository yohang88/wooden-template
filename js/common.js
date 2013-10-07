( function( $ ) {
    $(window).load(function() {
        $('#content').each(function() {

            var highestBox = 0;
            $('.column', this).each(function(){

                if($(this).height() > highestBox)
                   highestBox = $(this).height();
            });

            $('.column',this).height(highestBox);

        });

    });

    $(window).resize(function() {

    });
} )( jQuery );