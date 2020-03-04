window.ws = new WebSlides({
    changeOnClick: false,
    loop: false,
    minWheelDelta: 40,
    navigateOnScroll: true,
    scrollWait: 450,
    slideOffset: 50,
    showIndex: true
});


const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();


var body = $("body")[0];

// create a simple instance
// by default, it only adds horizontal recognizers
var mc = new Hammer(body);

// let the pan gesture support all directions.
// this will block the vertical scrolling on a touch-device while on the element
mc.get('pan').set({ direction: Hammer.DIRECTION_ALL });

// listen to events...
mc.on("panleft panright panup pandown tap press", function(ev) {
    alert(ev.type)
});