/*-------------------------------------------------------------------
|     navigations >                                                        
|------------------------------------------------------------------*/
/* adiciona class current aos links e opened aos li.has dos links sucessores */
document.querySelectorAll("#nav a").forEach( element => {
    if(element.href == document.URL) {
        element.parentElement.classList.add("current");
        if(element.closest(".has")) {}
        //element.closest(".has").classList.add("opened");
    } 
})
/* adiciona class opened in li com sub-list */
document.querySelectorAll("#nav .has").forEach( element => {
    element.addEventListener("click", function() {
        if(element.classList.contains("opened"))
            element.classList.remove("opened")
        else 
            element.classList.add("opened")
    })
})
/* Sub-List: addiciona class current in link e class opened in tag li antecessor */
document.querySelectorAll("#nav .is a").forEach( element => {
    if(element.href == document.URL) {;
        element.parentElement.classList.add("current");
        element.closest(".has").classList.add("opened");
    } 
});

document.querySelectorAll("#nav .has.anc .upward").forEach( element => {
    if(element.href == document.URL) {
        element.parentElement.parentElement.parentElement.classList.add("opened")
    }
});

/*-------------------------------------------------------------------
|     < navigations                                                        
|------------------------------------------------------------------*/
/** scroll anchor */
getSelectors(".anchor").forEach( element => {
    element.addEventListener('click', event => {
        event.preventDefault();
        var Target = getSelector(event.target.hash).offsetTop;
        var time = 1000;
        var posY = window.pageYOffset;
        var start = null;
        time = +time;
        window.requestAnimationFrame(function step(timestep) {
            start = (start) ? start : timestep;
            var progress = timestep - start;
            if(posY < Target) {
                window.scrollTo(0, ((Target - posY) * progress / time) + posY);
            } else {
                window.scrollTo(0, posY - ((posY - Target) * progress / time));
            }
            if(progress < time) {
                window.requestAnimationFrame(step);
            } else {
                window.scrollTo(0, Target);
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() { 
    let sections = document.querySelectorAll(".sectionhash");
    let anchors = document.querySelectorAll("#navhash .anchor");
    //let addActive = (link) => anchors[link].classList.add("active");
    let addActive = (link) => {
        if(anchors[link] != undefined)
            anchors[link].classList.add("active");
    }
    let removeActive = (link) => anchors[link].classList.remove("active");
    let removeAllActive = () => [...Array(sections.length).keys()].forEach((link) => removeActive(link));
    let sectionMargin = 30;
    let currentActive = 0;

    window.addEventListener("scroll", () => {
        let current = sections.length - [...sections].reverse().findIndex((section) => window.scrollY >= section.offsetTop - sectionMargin ) - 1;
        if(current != currentActive) {
            removeAllActive();
            currentActive = current;
            addActive(current);
        }
    });
}, false);

// document.addEventListener('DOMContentLoaded', function(){ 
//   const sections = document.querySelectorAll(".template__section");
//   const menu_links = document.querySelectorAll(".template__nav-item a");
//   const makeActive = (link) => menu_links[link].classList.add("active");
//   const removeActive = (link) => menu_links[link].classList.remove("active");
//   const removeAllActive = () => [...Array(sections.length).keys()].forEach((link) => removeActive(link));
//   const sectionMargin = 200;
//   let currentActive = 0;
//   window.addEventListener("scroll", () => {
//     const current = sections.length - [...sections].reverse().findIndex((section) => window.scrollY >= section.offsetTop - sectionMargin ) - 1
//     if (current !== currentActive) {
//       removeAllActive();
//       currentActive = current;
//       makeActive(current);
//     }
//   });
// }, false);




/** popup */
getSelectors(".fw_popup").forEach(element => {
    element.style.display = "none";
    var openText = element.dataset.btntext;
    var open = document.createElement("button");
    open.classList.add("fw_btn"); //open.classList.add("fw_open_popup"); // open.className = "fw_open_popup btn";
    open.textContent = openText;
    element.before(open);
    var popupId = element.id;
    open.dataset.popup = popupId;
    open = getSelector("[data-popup="+popupId+"]");

    var overlay = document.createElement("div");
    overlay.classList.add("fw_overlay_popup");
    element.append(overlay);
    overlay.style.display = "none";

    open.addEventListener('click', ev => {
        ev.preventDefault();
        getSelector("#"+popupId).style.display = "block";
        overlay.style.display = "block";
    });
    overlay.addEventListener('click', ev => {
        getSelector("#"+popupId).style.display = "none";
        overlay.style.display = "none";
    });
});






function getSelector(selector) {
    if( document.querySelector(selector) ) {
        return document.querySelector(selector);
    }
}
function getSelectors(selectors) {
    if( document.querySelectorAll(selectors) ) {
        return document.querySelectorAll(selectors);
    }
}