let frontwork = {
    init: function() {
        discard();
        // accordion.init();
    }
};

let get = {
    selector: function(selector) {
        if( document.querySelector(selector) ) {
            return document.querySelector(selector);
        }
    },
    selectors: function(selector) {
        if( document.querySelectorAll(selector) ) {
            return document.querySelectorAll(selector);
        }
    }
};

let fade = {
    out: function(element, duration = 200) {
        var start = 0;
        var effect = parseFloat(element.style.opacity) || 1;
        var startime = Date.now();
        var time = 1000 / 60;
        var fadeEffect = setInterval(() => {
            var currentime = Date.now();
            var timediff = (currentime - startime) / duration;
            var show = effect - (effect - start) * timediff;
            if(timediff >= 1) {
                clearInterval(fadeEffect);
                fadeEffect = 0;
                element.style.opacity = "0";
                element.style.display = "none";
            }
            element.style.opacity = show.toString();
        }, time);
    },
    in: {
        sect: function(element, duration = 200) {
            get.selector(element).style.opacity = "0";
            get.selector(element).style.display = "none";
            var start = 1;
            var effect = parseFloat(get.selector(element).style.opacity) || 0;
            var startime = Date.now();
            var time = 1000 / 60;
            var fadeEffect = setInterval(() => {
                var currentime = Date.now();
                var timediff = (currentime - this.startime) / duration;
                var show = effect - (effect - start) * timediff;
                var display = timediff * timediff;
                get.selector(element).style.opacity = show.toString();
                if(timediff >= 1) {
                    clearInterval(fadeEffect);
                    fadeEffect = 1;
                    get.selector(element).style.opacity = "1";
                }
                if(display) {
                    getSelector(element).style.display = "block";
                }
            }, this.time);
        },
        prop: function(element, duration = 200) {
            element.style.opacity = "0";
            element.style.display = "none";
            var start = 1;
            var effect = parseFloat(element.style.opacity) || 0;
            var startime = Date.now();
            var time = 1000 / 60;
            var fadeEffect = setInterval(() => {
                var currentime = Date.now();
                var timediff = (currentime - this.startime) / duration;
                var show = effect - (effect - start) * timediff;
                var display = timediff * timediff;
                element.style.opacity = show.toString();
                if(timediff >= 1) {
                    clearInterval(fadeEffect);
                    fadeEffect = 1;
                    element.style.opacity = "1";
                }
                if(display) {
                    element.style.display = "block";
                }
            }, this.time);
        }
    }
};

let discard = function dismiss() {
    get.selectors(".discard").forEach(element => {
        var close = document.createElement("em");
        close.className = "dismiss ico_close";
        close.setAttribute("aria-label", "Fechar");
        element.prepend(close);
    });
    get.selectors(".dismiss").forEach(element => {
        element.addEventListener('click', ev => {
            ev.preventDefault();
            fade.out(element.parentElement, 800);
        });
    });
};

let accordion = {
    // primeiro accordion aberto
    /*get.selectors(".firstopen").forEach(element => {
        element.querySelector(".acc_title:first-child").classList.add("active");
        element.querySelector(".acc_panel:first-of-type").classList.add("expanded");
    });

    let keepOpen = document.querySelectorAll(".accordion.keepopen > .acc_title");
    for(var i = 0; i < keepOpen.length; i++) {
        keepOpen[i].addEventListener('click', function() {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("expanded");
        });
    };

    get.selectors(".accordion .collapse .acc_title").forEach(element => {
        element.addEventListener('click', function() {
            if(this.classList.contains("active")) {
                this.classList.remove("active");
                this.nextElementSibling.classList.remove("expanded");
            }
            else {
                var current = document.getElementsByClassName("active");
                if(current.length > 0) { 
                    current[0].className = current[0].className.replace(" active", "");

                    var opened = document.getElementsByClassName("expanded");
                    if(opened.length > 0) {
                        opened[0].className = opened[0].className.replace(" expanded", "");
                    }
                }
                this.className += " active";
                this.nextElementSibling.className += " expanded";
            }
        });
    });*/
};



frontwork.init();