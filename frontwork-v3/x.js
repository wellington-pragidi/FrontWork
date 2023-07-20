get.selectors(".accordion.openone").forEach(element => {
        var title = element.querySelector(".acc_title");
        var panel = element.querySelector(".acc_panel");
        panel.style.height = "0";
        panel.style.overflow = "hidden";
        panel.style.transition = "height 0.25s ease-out";
        title.addEventListener('click', function() {
            //this.classList.toggle("expanded");
            panel = this.nextElementSibling;
            if( this.classList.contains("expanded") ) {
                panel.style.height = panel.scrollHeight + "px";
                panel.style.overflow = "visible";
            }
            else {
                panel.style.height = "0";
                panel.style.overflow = "hidden";
            }
        });
    });

let accordion = function acc() {
    // toogle para todos accordions
    get.selectors(".accordion").forEach(element => {
        var title = element.querySelector(".acc_title");
        /*var content = element.querySelector(".acc_content");
        content.style.display = "none";
        content.style.opacity = "0";*/
        title.addEventListener('click', function() {
            //this.classList.toggle("expanded");
            var panel = this.nextElementSibling;
            panel.style.display = "none";
            panel.style.opacity = "0";
            if( this.classList.contains("expanded") ) {
                this.classList.remove("expanded");
                fade.in.prop(panel, 900);
            }
            else {
                panel.style.display = "none";
                panel.style.opacity = "0";
            }
            
            

            // panel.style.height = panel.scrollHeight + "px";
            // panel.style.display = "block"
            //console.log(element.querySelector(".acc_content"))
        });
    });
    /*$(".accordion").each(function() {
        $(this).find(" .acc_title").on("click", function() {
            $(this).toggleClass("expanded")
            $(this).next().slideToggle(400)
        })
    });*/
};















<script>

// let accordion = function acc() {
    
    // toogle para todos accordions
    /*get.selectors(".accordion").forEach(element => {
        var title = element.querySelector(".acc_title");
        var panel = element.querySelector(".acc_panel");
        panel.style.height = "0";
        panel.style.overflow = "hidden";
        panel.style.transition = "height 0.25s ease-out";
        title.addEventListener('click', function() {
            this.classList.toggle("expanded");
            panel = this.nextElementSibling;
            if( this.classList.contains("expanded") ) {
                panel.style.height = panel.scrollHeight + "px";
                panel.style.overflow = "visible";
            }
            else {
                panel.style.height = "0";
                panel.style.overflow = "hidden";
            }
        });
    });*/

    

    

    // mantem somente um accordion aberto por vez
//};

/** 
 * @link view-source:file:///D:/sites_config_server/fw.old/files/html/accordion-2.html
 * @link https://www.google.com/search?q=this.find+javascript&oq=this.find&gs_lcrp=EgZjaHJvbWUqCQgEEAAYExiABDIGCAAQRRg5MgkIARAAGBMYgAQyCQgCEAAYExiABDIJCAMQABgTGIAEMgkIBBAAGBMYgAQyCQgFEAAYExiABDIKCAYQABgHGBMYHjIKCAcQABgHGBMYHjIKCAgQABgHGBMYHjIMCAkQABgHGA8YExge0gEJMTY0OTBqMGo0qAIAsAIA&sourceid=chrome&ie=UTF-8
 * @link https://stackoverflow.com/questions/33774170/javascript-find-function-without-jquery */
/*var acc = document.getElementsByClassName("acc_title");
for(var i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("expanded");
        var panel = this.nextElementSibling;
        if(panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}*/


let accordion = {
    expanded: function() {
        /*var expanded = get.selectors(".acc_title");
        for(var i = 0; i < expanded.length; i++) {
            expanded[i].onclick = function() {
                if(this.classList.contains("expanded")) {
                    this.classList.remove("expanded");
                }
                else {
                    var current = document.getElementsByClassName('expanded');
                    if (current.length > 0) { 
                        current[0].className = current[0].className.replace(' expanded', '');
                    }
                    this.className += ' expanded';
                }
            }
        }*/
    },
    closed: function() {
        get.selectors(".closed").forEach(element => {
            var title = element.querySelector(".closed .acc_title");
            var panel = element.querySelector(".closed .acc_panel");
            panel.style.height = "0";
            panel.style.overflow = "hidden";
            panel.style.transition = "height 0.25s ease-out";
            title.addEventListener('click', function() {
                panel = this.nextElementSibling;
                if( this.classList.contains("expanded") ) {
                    panel.style.height = panel.scrollHeight + "px";
                    panel.style.overflow = "visible";
                }
                else {
                    panel.style.height = "0";
                    panel.style.overflow = "hidden";
                }
            });
        });
    },
    firstopen: function() {
        get.selectors(".firstopen").forEach(element => {
            var title = element.querySelector(".acc_title");
            var panel = element.querySelector(".acc_panel");
            panel.style.height = "0";
            panel.style.overflow = "hidden";
            panel.style.transition = "height 0.3s ease-out";
            title.addEventListener('click', function() {
                panel = this.nextElementSibling;
                if( this.classList.contains("expanded") ) {
                    panel.style.height = panel.scrollHeight + "px";
                    panel.style.overflow = "visible";
                }
                else {
                    panel.style.height = "0";
                    panel.style.overflow = "hidden";
                }
            });
        });
        // primeiro accordion aberto
        get.selector(".firstopen .acc_title:first-child").classList.add("expanded");
        var first = get.selector(".firstopen .acc_title.expanded + .acc_panel");
        first.style.height = first.scrollHeight + "px";
        first.style.overflow = "visible";
    },
    collapse: function() {
        var collapse = get.selectors(".collapse .acc_title");
        for(var i = 0; i < collapse.length; i++) {
            /*collapse[i].style.height = "0";
            collapse[i].style.overflow = "hidden";*/
            collapse[i].addEventListener('click', function() {
                if(this.classList.contains("expanded")) {
                    this.classList.remove("expanded");
                    this.nextElementSibling.style.height = "0";
                    this.nextElementSibling.style.overflow = "hidden";
                }
                else {
                    var current = document.getElementsByClassName("expanded");
                    if (current.length > 0) { 
                        current[0].className = current[0].className.replace(" expanded", "");

                        var opened = document.getElementsByClassName("acc_panel");
                        if(opened.length > 0) {
                            console.log(opened[0], opened[0].className)
                            opened[0].style.height = opened[0].scrollHeight + "px";
                            opened[0].style.overflow = "visible";
                        }
                    }
                    this.className += " expanded";
                }
            });
        }
    },
    init: function() {
        this.expanded();
        this.closed();
        this.firstopen();
        this.collapse();
    }
};