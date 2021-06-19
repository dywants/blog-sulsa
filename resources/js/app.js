// Sticky Navigation
window.onscroll = function(){ stickyNavBar()};
// get the current value
let navbar = document.getElementById("header");

// get the navbar position
let sticky = navbar.offsetTop;
console.log(sticky)
// sticky function
function stickyNavBar(){
    if(window.pageYOffset >= sticky){
        navbar.classList.add("sticky");
    }else{
        navbar.classList.remove("sticky");
    }
}
// require('./bootstrap');


