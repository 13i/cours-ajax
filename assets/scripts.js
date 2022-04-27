
jQuery( document ).ready(function($) {
    $('a').click(function(e){
        if(e) e.preventDefault();
        $link = $(this);
        $.ajax({
            url: $link.attr('href'),
            success: function(result){
                $(document.body).html(result);
            }
        });
    });
});