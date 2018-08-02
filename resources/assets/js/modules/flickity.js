var Flickity = require('flickity');

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
    // options
    cellAlign: 'right',
    pageDots: false,
    prevNextButtons: false,
    rightToLeft: true,
});

document.querySelector('.arrow-left').addEventListener( 'click', function() {

    flkty.next();
});

document.querySelector('.arrow-right').addEventListener( 'click', function() {

    flkty.previous();
});