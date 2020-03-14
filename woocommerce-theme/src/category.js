let currentIndex = 0;
let cat_array = [];
let width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

startLoad();

function startLoad(){
    let cat_container = document.getElementsByClassName("cat-info");
    for (let i = 0; i < cat_container.length; i++) {
        const div = cat_container[i];

        let category = {
            "term_id": div.id,
            "position": div.children[0].value,
            "name": div.children[1].value,
            "desc": div.children[2].value,
            "image": div.children[3].value,
        }
        cat_array.push(category);
    }
    //console.log(cat_array);
}

function changeInfo(element){
    let position = element.id;
    let category = cat_array[position];
    document.getElementById("category-name").textContent = category.name;
    document.getElementById("category-desc").textContent = category.desc;
    //document.getElementById("category-link").href = category.;
}

function goForward() {
    overlayHideLeft();
    setTimeout(overlayShowLeft, 1000);
}

function goBack() {
    overlayHideRight();
    setTimeout(overlayShowRight, 1000);
}

function overlayHideLeft() {
    let overlay = document.getElementById("cat-overlay");
    overlay.style.removeProperty('left');
    overlay.style.right = "0";
    overlay.style.transition = "width 1s";
    overlay.style.width = "100%";
}

function overlayShowLeft() {
    let overlay = document.getElementById("cat-overlay");
    overlay.style.removeProperty('right');
    overlay.style.left = "0";
    overlay.style.transition = "width 1s";
    overlay.style.width = "0";
}

function overlayHideRight() {
    let overlay = document.getElementById("cat-overlay");
    overlay.style.removeProperty('right');
    overlay.style.left = "0";
    overlay.style.transition = "width 1.2s";
    overlay.style.width = "100%";
}

function overlayShowRight() {
    let overlay = document.getElementById("cat-overlay");
    overlay.style.removeProperty('left');
    overlay.style.right = "0";
    overlay.style.transition = "width 1.2s";
    overlay.style.width = "0";
}


var bottomNavContents = jQuery("#bottom-navigation-contents");

let limit = -750;

jQuery("#right-arrow").click(function(){
    let move = widthToMove();
    let currentPosition = parseInt(bottomNavContents.css("left"));
    console.log(currentPosition);
    if (currentPosition >= limit) {
        bottomNavContents.stop(false, true).animate({ left: "-=" + move }, { duration: 400 })
    }
});

jQuery("#left-arrow").click(function () {
    let move = widthToMove();
    let currentPosition = parseInt(bottomNavContents.css("left"));
    console.log(currentPosition);
    if (currentPosition < 0) {
        bottomNavContents.stop(false, true).animate({ left: "+=" + move }, { duration: 400 })
    }
});

function widthToMove(){
    let element = document.getElementsByClassName("cat-nav-link")[0];
    let width = element.clientWidth;
    let marginStyle = window.getComputedStyle(element);
    let marginRight = parseInt(marginStyle.getPropertyValue('margin-right').split("px")[0]);
    let marginLeft = parseInt(marginStyle.getPropertyValue('margin-left').split("px")[0]);
    console.log(width + marginRight + marginLeft);
    return width + marginRight + marginLeft;
}


(function (){
    // let numCategories = document.getElementsByClassName("cat-nav-link").length;
    // let categoriesWidth = widthToMove();
    // let nav = document.getElementById("bottom-navigation-contents");
    // nav.style.width = (numCategories * categoriesWidth) + "px";
})();