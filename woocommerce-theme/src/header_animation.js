function menu_animation() {
    var x = document.getElementById("menu-bar");
    x = x.children[0];
    x.classList.toggle("change");
    if(x.classList.contains("change")){
        document.getElementById("sidenav").style.width = "190px";
        var e = document.getElementById("overlay");
        e.classList.add("active");
    } else {
        document.getElementById("sidenav").style.width = "0";
        var e = document.getElementById("overlay");
        e.className = "overlay";
    }
}

jQuery(function () {
    var text = jQuery(".text");
    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 200) {
            //text.removeClass("hidden");
            text.addClass("hidden");
        } else {
            // text.addClass("hidden");
            text.removeClass("hidden");
        }
    });
});