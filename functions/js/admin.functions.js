$(function() {
    //on document ready, run this code:
    $(".show_user_info,.account_logo").click(function(e) {
        e.preventDefault();

        $(this).parent().find(".user_info_more").fadeToggle(150);
    });
})
