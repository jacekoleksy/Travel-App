function getStarted() {
    $("#get-started").delay(500).fadeOut(1000);
    $(".logo").delay(500).fadeOut(1000);
    $(".login-container").delay(1500).css("display", "flex").hide().fadeIn(1000);
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
    return res;
}
function checkACookieExists(cName) {
    const name = cName + "=";
    if (document.cookie.split(';').some((item) => item.trim().startsWith(cName))) {
        return true;
    }
    else return false;
}
function settings() {
    document.querySelector("[id='settings-name']").value = getCookie("name");
    document.querySelector("[id='settings-surname']").value = getCookie("surname");
    document.querySelector("[id='settings-email']").value = getCookie("user");
}
function menuMobileShow() {
    $("#menu-mobile").stop().slideToggle(500);
}
function menuMobileHide() {
    if ($("#menu-mobile").display = "block") {
        $("#menu-mobile").slideUp(500);
    }
}
var num = 0;
function nextResult() {
    divsDestination = document.querySelectorAll('.your-destination');
    divsPreferences = document.querySelectorAll('.your-preferences');

    num++;

    var prev = num - 1;
    if (num == divsDestination.length) {
        num = 0;
    }
    if (prev == -1) {
        prev = divsDestination.length - 1;
    }

    $(divsDestination[prev]).fadeOut(500);
    $(divsPreferences[prev]).fadeOut(500);
    $(divsDestination[num]).css("display", "flex").hide().delay(500).fadeIn(500);
    $(divsPreferences[num]).css("display", "flex").hide().delay(500).fadeIn(500);
}
function prevResult() {
    divsDestination = document.querySelectorAll('.your-destination');
    divsPreferences = document.querySelectorAll('.your-preferences');

    var next = num - 1;
    if (num == 0) {
        next = divsDestination.length - 1;
    }
    else if (num == -1) {
        num = divsDestination.length - 1;
        next = num - 1;
    }

    $(divsDestination[num]).fadeOut(500);
    $(divsPreferences[num]).fadeOut(500);
    $(divsDestination[next]).css("display", "flex").hide().delay(500).fadeIn(500);
    $(divsPreferences[next]).css("display", "flex").hide().delay(500).fadeIn(500);

    num--;
}
