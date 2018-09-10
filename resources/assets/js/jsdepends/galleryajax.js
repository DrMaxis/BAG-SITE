
$(document).ready(function() {
 
 

    $(window).scroll(fetchPosts);
 
    function fetchPosts() {
 
        var page = $('.infinite').data('next-page');
 
        if(page !== null) {
 
            clearTimeout( $.data( this, "scrollCheck" ) );
 
            $.data( this, "scrollCheck", setTimeout(function() {
                var scroll_position_for_posts_load = $(window).height() + $(window).scrollTop() + 100;
 
                if(scroll_position_for_posts_load >= $(document).height()) {

                    $.get(page, function(data){
                        $('#data').append(data.images);
                        $('.infinite').data('next-page', data.next_page);
                    });
                }
            }, 350))
 
        }
    }
 
 
})
 
