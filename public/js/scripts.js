function getStarted() {
    $("#get-started").fadeOut(1000);
    $(".logo").fadeOut(1000);
    $(".login-container").delay(1000).css("display", "flex").hide().slideUp(300).fadeIn(1000);
}
function getHidden() {
    $("#get-started").hide();
    $(".logo").hide();
    $(".login-container").show();
}