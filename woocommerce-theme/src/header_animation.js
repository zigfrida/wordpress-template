function menu_animation() {
    var x = document.getElementById("menu-bar");
    x = x.children[0];
    x.classList.toggle("change");
    if(x.classList.contains("change")){
        document.getElementById("sidenav").style.width = "200px";
        var e = document.getElementById("overlay");
        e.classList.add("active");
    } else {
        document.getElementById("sidenav").style.width = "0";
        var e = document.getElementById("overlay");
        e.className = "overlay";
    }
}