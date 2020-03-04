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

// listen to events...

document.addEventListener('swiped-up', function(e) {

    let slide     = $("#webslides");
	let max       = slide[0].scrollHeight;
    let offset    = slide[0].offsetHeight;
    let position  = slide.scrollTop();

    if((max - offset == position)){
        console.warn("next");
        window.ws.goNext();
    }
});

document.addEventListener('swiped-down', function(e) {
    let slide     = $("#webslides");
    let position  = slide.scrollTop();

    if(position == 0){
        console.warn("back");
        window.ws.goPrev();
    }
});