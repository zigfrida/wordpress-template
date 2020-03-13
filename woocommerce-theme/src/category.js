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

    console.log(cat_array);

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


function determineOverflow(content, container){
    let containerMetrics = container.getBoundingClientRect();
    let containerMetricsRight = Math.floor(containerMetrics.right);
    let containerMetricsLeft = Math.floor(containerMetrics.left);

    let contentMetrics = content.getBoundingClientRect();
    let contentMetricRight = Math.floor(contentMetrics.right);
    let contentMetricLeft = Math.floor(contentMetrics.left);

    if(containerMetricsLeft > contentMetricLeft && containerMetricsRight < contentMetricRight) {
        return "both";
    } else if (contentMetricLeft < containerMetricsLeft) {
        return "left";
    } else if (contentMetricRight > containerMetricsRight){
        return "right";
    } else {
        return "none";
    }
}

let bottomNav = document.getElementById("bottom-navigation");
let bottomNavContents = document.getElementById("bottom-navigation-contents");
bottomNav.setAttribute("data-overflowing", determineOverflow(bottomNavContents, bottomNav));
