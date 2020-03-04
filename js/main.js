window.ws = new WebSlides({
    changeOnClick: false,
    loop: false,
    minWheelDelta: 40,
    navigateOnScroll: true,
    scrollWait: 450,
    slideOffset: 50,
    showIndex: true
});


function getScrollTop() {
	const slide     = $("#webslides");
	const max       = slide[0].scrollHeight;
    const offset    = slide[0].offsetHeight;
    const position  = slide.scrollTop();

    if(max - offset == position){
        return true;
    }else{
        return false;
    }
	
}

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

mc.on("panup pandown", function(ev) {
    console.log(ev.type);

    if (getScrollTop()) {

        console.warn(ev.type);


    }
});