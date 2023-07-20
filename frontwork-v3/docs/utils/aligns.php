
<div id="horizontal" class="sectionhash">
    <h2 class="title">Horizontal</h2>
<?php syntax('document.addEventListener("DOMContentLoaded", function(){ 
  
  // grab the sections (targets) and menu_links (triggers)
  // for menu items to apply active link styles to
  const sections = document.querySelectorAll(".template__section");
  const menu_links = document.querySelectorAll(".template__nav-item a");
  
  // functions to add and remove the active class from links as appropriate
  const makeActive = (link) => menu_links[link].classList.add("active");
  const removeActive = (link) => menu_links[link].classList.remove("active");
  const removeAllActive = () => [...Array(sections.length).keys()].forEach((link) => removeActive(link));
  
  // change the active link a bit above the actual section
  // this way it will change as youre approaching the section rather
  // than waiting until the section has passed the top of the screen
  const sectionMargin = 200;
  
  // keep track of the currently active link
  // use this so as not to change the active link over and over
  // as the user scrolls but rather only change when it becomes
  // necessary because the user is in a new section of the page
  let currentActive = 0;

  // listen for scroll events
  window.addEventListener("scroll", () => {
    
    // check in reverse order so we find the last section
    // thats present - checking in non-reverse order would
    // report true for all sections up to and including
    // the section currently in view
    //
    // Data in play:
    // window.scrollY    - is the current vertical position of the window
    // sections          - is a list of the dom nodes of the sections of the page
    //                     [...sections] turns this into an array so we can
    //                     use array options like reverse() and findIndex()
    // section.offsetTop - is the vertical offset of the section from the top of the page
    // 
    // basically this lets us compare each section (by offsetTop) against the
    // viewports current position (by window.scrollY) to figure out what section
    // the user is currently viewing
    const current = sections.length - [...sections].reverse().findIndex((section) => window.scrollY >= section.offsetTop - sectionMargin ) - 1

    // only if the section has changed
    // remove active class from all menu links
    // and then apply it to the link for the current section
    if (current !== currentActive) {
      removeAllActive();
      currentActive = current;
      makeActive(current);
    }
  });
}, false);') ?>
</div>
<hr class="doc" />
<div id="vertical" class="sectionhash">
    <h2 class="title">Vertical</h2>
<?php syntax('document.addEventListener("DOMContentLoaded", function(){ 
  
  // grab the sections (targets) and menu_links (triggers)
  // for menu items to apply active link styles to
  const sections = document.querySelectorAll(".template__section");
  const menu_links = document.querySelectorAll(".template__nav-item a");
  
  // functions to add and remove the active class from links as appropriate
  const makeActive = (link) => menu_links[link].classList.add("active");
  const removeActive = (link) => menu_links[link].classList.remove("active");
  const removeAllActive = () => [...Array(sections.length).keys()].forEach((link) => removeActive(link));
  
  // change the active link a bit above the actual section
  // this way it will change as youre approaching the section rather
  // than waiting until the section has passed the top of the screen
  const sectionMargin = 200;
  
  // keep track of the currently active link
  // use this so as not to change the active link over and over
  // as the user scrolls but rather only change when it becomes
  // necessary because the user is in a new section of the page
  let currentActive = 0;

  // listen for scroll events
  window.addEventListener("scroll", () => {
    
    // check in reverse order so we find the last section
    // thats present - checking in non-reverse order would
    // report true for all sections up to and including
    // the section currently in view
    //
    // Data in play:
    // window.scrollY    - is the current vertical position of the window
    // sections          - is a list of the dom nodes of the sections of the page
    //                     [...sections] turns this into an array so we can
    //                     use array options like reverse() and findIndex()
    // section.offsetTop - is the vertical offset of the section from the top of the page
    // 
    // basically this lets us compare each section (by offsetTop) against the
    // viewports current position (by window.scrollY) to figure out what section
    // the user is currently viewing
    const current = sections.length - [...sections].reverse().findIndex((section) => window.scrollY >= section.offsetTop - sectionMargin ) - 1

    // only if the section has changed
    // remove active class from all menu links
    // and then apply it to the link for the current section
    if (current !== currentActive) {
      removeAllActive();
      currentActive = current;
      makeActive(current);
    }
  });
}, false);') ?>
</div>
<hr class="doc" />
<div id="horizontal-vertical" class="sectionhash">
    <h2 class="title">Horizontal e Vertical</h2>
<?php syntax('document.addEventListener("DOMContentLoaded", function(){ 
  
  // grab the sections (targets) and menu_links (triggers)
  // for menu items to apply active link styles to
  const sections = document.querySelectorAll(".template__section");
  const menu_links = document.querySelectorAll(".template__nav-item a");
  
  // functions to add and remove the active class from links as appropriate
  const makeActive = (link) => menu_links[link].classList.add("active");
  const removeActive = (link) => menu_links[link].classList.remove("active");
  const removeAllActive = () => [...Array(sections.length).keys()].forEach((link) => removeActive(link));
  
  // change the active link a bit above the actual section
  // this way it will change as youre approaching the section rather
  // than waiting until the section has passed the top of the screen
  const sectionMargin = 200;
  
  // keep track of the currently active link
  // use this so as not to change the active link over and over
  // as the user scrolls but rather only change when it becomes
  // necessary because the user is in a new section of the page
  let currentActive = 0;

  // listen for scroll events
  window.addEventListener("scroll", () => {
    
    // check in reverse order so we find the last section
    // thats present - checking in non-reverse order would
    // report true for all sections up to and including
    // the section currently in view
    //
    // Data in play:
    // window.scrollY    - is the current vertical position of the window
    // sections          - is a list of the dom nodes of the sections of the page
    //                     [...sections] turns this into an array so we can
    //                     use array options like reverse() and findIndex()
    // section.offsetTop - is the vertical offset of the section from the top of the page
    // 
    // basically this lets us compare each section (by offsetTop) against the
    // viewports current position (by window.scrollY) to figure out what section
    // the user is currently viewing
    const current = sections.length - [...sections].reverse().findIndex((section) => window.scrollY >= section.offsetTop - sectionMargin ) - 1

    // only if the section has changed
    // remove active class from all menu links
    // and then apply it to the link for the current section
    if (current !== currentActive) {
      removeAllActive();
      currentActive = current;
      makeActive(current);
    }
  });
}, false);') ?>
</div>