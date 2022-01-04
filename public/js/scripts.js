function getStarted() {
    $("#get-started").delay(500).fadeOut(1000);
    $(".logo").delay(500).fadeOut(1000);
    $(".login-container").delay(1500).css("display", "flex").hide().slideUp(300).fadeIn(1000);
}
function getHidden() {
    $("#get-started").hide();
    $(".logo").hide();
    $(".login-container").show();
}
function logging() {
    $("#get-started").hide();
    $(".logo").hide();
    $(".login-container").show().css("display", "flex");
}
function getCookie(cName) {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded.split('; ');
    let res;
    cArr.forEach(val => {
      if (val.indexOf(name) === 0) res = val.substring(name.length);
    })
    return res
}
function settings() {
    document.getElementById("settings-name").value = getCookie("name");
    document.getElementById("settings-surname").value = getCookie("surname");
    document.getElementById("settings-email").value = getCookie("user");
}
function menuShow() {
    if ($("#menu > li").display = "none") {
        $("#menu > li").stop().slideToggle().css("display","block");
    } else {
        $("#menu > li").stop().slideToggle();
    }
}
function accountShow() {
    if ($("#account > li").display = "none") {
        $("#account > li").stop().slideToggle().css("display","block");
    } else {
        $("#account > li").stop().slideToggle();
    }
}
function menuMobileShow() {
    $("#menu-mobile").slideToggle(500);
}