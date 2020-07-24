let currentIndex = 0;
let cat_array = [];
let width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

const bottomNav = document.getElementById("bottom-navigation-contents");
const bottomNavContents = jQuery("#bottom-navigation-contents");
let categotyText = document.getElementById("category-text");

startLoad();
firstSlideIn(0);

function startLoad() {
    let cat_container = document.getElementsByClassName("cat-info");
    let categories = document.getElementsByClassName("cat-nav-link");
        
    categories[0].className += " active";
    for (let i = 0; i < cat_container.length; i++) {
        const div = cat_container[i];

        let category = {
            "term_id": div.id,
            "position": div.children[0].value,
            "name": div.children[1].value,
            "desc": div.children[2].value,
            "image": div.children[3].value,
            "link": div.children[4].value,
        }
        cat_array.push(category);
    }
}

/***BOTTOM NAVIGATION FUNCTION */

const limit = function () {
    let numCategories = document.getElementsByClassName("cat-nav-link").length;
    return ((bottomNav.scrollWidth - bottomNav.clientWidth) * -1);
};

jQuery("#right-arrow").click(function () { //Commented section show previous version
    let move = widthToMove();
    //let currentPosition = parseInt(bottomNavContents.css("left"));
    let currentPosition = parseInt(bottomNavContents.scrollLeft());
    //let currentPosition = parseFloat(bottomNavContents.getBoundingClientRect().left);
    if (currentPosition >= limit()) {
        bottomNavContents.animate({
            scrollLeft: "+=" + move
        }, 400);
        // bottomNavContents.stop(false, true).animate({ left: "-=" + move }, { duration: 400 })
    }
});

jQuery("#left-arrow").click(function () {
    let move = widthToMove();
    let currentPosition = parseInt(bottomNavContents.scrollLeft());
    if (currentPosition > 0) { // < before
        bottomNavContents.animate({
            scrollLeft: "-=" + move
        }, 400);
    }
});

function widthToMove() {
    let allCategories = document.getElementsByClassName("cat-nav-link");

    //Getting properties of a single category showing on screen
    let element = allCategories[0];
    let width = element.getBoundingClientRect().width;
    let marginStyle = window.getComputedStyle(element);
    let marginRight = parseFloat(marginStyle.getPropertyValue('margin-right').split("px")[0]);
    let marginLeft = parseFloat(marginStyle.getPropertyValue('margin-left').split("px")[0]);
    let fullElementWidth = width + marginLeft + marginRight;

    // Bottom Nav width hidden due to overflow
    let maxBottomNavWidth = (bottomNav.scrollWidth - bottomNav.clientWidth);
    //Num categories currently showing
    let numCategoriesShowing = bottomNav.clientWidth / fullElementWidth;
    //Num categories hidden due to overflow
    let numCategoriesHidden = allCategories.length - numCategoriesShowing;
    //Value for the scroll bar to move is the width hidden due to overflow divided by how many categories are hidden 
    let valueToMove = maxBottomNavWidth / numCategoriesHidden;
    return valueToMove;
}

/**MIDDLE CONTENT - TEXT ANIMATION AND CLICK EVENTS */

jQuery(".cat-nav-link").on('click', function (event) {
    let indexClicked = jQuery('.cat-nav-link').index(this);
    let currentActive = document.getElementsByClassName("active")[0];
    let currentActiveIndex = jQuery('.cat-nav-link').index(currentActive);
    if (indexClicked == currentActiveIndex) {
        return;
    } else if (indexClicked > currentActiveIndex) {
        goForward(indexClicked);
    } else {
        goBack(indexClicked);
    }
    currentActive.className = currentActive.className.replace(" active", "");
    this.className += " active";
});

function replaceInfo(id_clicked) {
    let position = id_clicked;
    let category = cat_array[position];
    document.getElementById("category-name").textContent = category.name;
    document.getElementById("category-desc").textContent = category.desc;
    document.getElementById("category-img").src = category.image;
    document.getElementById("category-img").alt = category.name;
    document.getElementById("category-link").href = category.link;
}

function rmvPreviousPrt() {
    categotyText.style.removeProperty("transition");
    categotyText.classList.remove("runSlideNextAnimation");
    categotyText.classList.remove("runSlideNextHideAnimation");
    categotyText.classList.remove("runSlideNextReverseAnimation");
    categotyText.classList.remove("runSlideNextHideReverseAnimation");
    void categotyText.offsetWidth;
}

function firstSlideIn(id) {
    if (id !== undefined) {
        replaceInfo(id);
    }
    categotyText.classList.add("runSlideNextHideReverseAnimation");
    categotyText.style.transition = "width 0.5s";
    categotyText.style.width = "50vw";
}

function hide_current_for_next() {
    rmvPreviousPrt();
    categotyText.classList.add("runSlideNextHideAnimation");
    categotyText.style.transition = "width 0.6s";
    categotyText.style.width = "0";
}

function slide_in_next() {
    rmvPreviousPrt();
    categotyText.classList.add("runSlideNextAnimation");
    categotyText.style.transition = "width 0.5s";
    categotyText.style.width = "50vw";
}

function hide_current_for_previous() {
    rmvPreviousPrt();
    categotyText.classList.add("runSlideNextReverseAnimation");
    categotyText.style.transition = "width 0.5s";
    categotyText.style.width = "0";
}

function goForward(id) {
    hide_current_for_next();
    overlayHideLeft();
    setTimeout(function () {
        overlayShowLeft(id);
    }, 1000);
    setTimeout(slide_in_next, 1300);
}

function goBack(id) {
    hide_current_for_previous();
    overlayHideRight();
    setTimeout(function () {
        overlayShowRight(id);
    }, 1000);
    setTimeout(firstSlideIn, 1300);
}

function overlayHideLeft() {
    let overlay = document.getElementById("cat-overlay");
    overlay.style.removeProperty('left');
    overlay.style.right = "0";
    overlay.style.transition = "width 1s";
    overlay.style.width = "100%";
}

function overlayShowLeft(id) {
    replaceInfo(id);
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
    overlay.style.transition = "width 1s";
    overlay.style.width = "100%";
}

function overlayShowRight(id) {
    replaceInfo(id);
    let overlay = document.getElementById("cat-overlay");
    overlay.style.removeProperty('left');
    overlay.style.right = "0";
    overlay.style.transition = "width 1s";
    overlay.style.width = "0";
}