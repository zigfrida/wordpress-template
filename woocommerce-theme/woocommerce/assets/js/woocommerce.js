let product = document.getElementsByClassName('single-product')[0];

var image = document.getElementsByClassName('wp-post-image')[0];
let image_src = image.src;

product.style.backgroundImage = 'url(' + image_src + ')';

setTimeout(function() {
    jQuery('.woocommerce-message').fadeOut('fast');
}, 4000);

setTimeout(function() {
    jQuery('.woocommerce-error').fadeOut('fast');
}, 4000);
