function getStarted() {
    $("#get-started").fadeOut(1000);
    $(".logo").fadeOut(1000);
    $(".login-container").delay(1000).css("display", "flex").hide().slideUp(300).fadeIn(1000);
    // var logo = document.getElementsByClassName('logo');
    // for (var i = 0; i < logo.length; i += 1) {
    //     //logo[i].style.display="none";
    // }
    // var button = document.getElementsByTagName('button');
    // for (var i = 0; i < button.length; i += 1) {
    //     //button[i].style.display="none";
    // }
}