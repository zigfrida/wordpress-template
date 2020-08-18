let product = document.getElementsByClassName('single-product')[0];

var image = document.getElementsByClassName('wp-post-image')[0];
let image_src = image.src;
console.log(image_src);

product.style.backgroundImage = 'url(' + image_src + ')';
