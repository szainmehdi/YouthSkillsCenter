
// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 70
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });

    $('.bootbox-confirm').click(function(e){
        var $this = $(this);
        e.preventDefault();
        return bootbox.confirm("<h1 class='bootbox-heading'><i class='fa fa-exclamation-triangle'></i> Are you sure?</h1>", function(result) {
            if(result) {
                $this.unbind('click');
                $this[0].click();
            }
        });
    });
});

// Highlight the top nav as scrolling occurs
/*
$('body').scrollspy({
    target: '.navbar-fixed-top'
})
*/

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});