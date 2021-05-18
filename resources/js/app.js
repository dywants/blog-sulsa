// let toggle = document.querySelector("#header .toggle-button");
// let collapse = document.querySelectorAll("#header .collapse");
//
// toggle.addEventListener('click' , function(){
//     collapse.forEach(col => col.classList.toggle("collapse-toggle"));
// })

/**
 * We will create a fresh Vue application instance.
 */
// import { createApp } from "vue";
//
// const app = createApp({});

// Sticky Navigation
window.onscroll = function(){ myFunction()};
// get the current value
let navbar = document.getElementById("header");

// get the navbar position
let sticky = navbar.offsetTop;

// sticky function
function myFunction(){
    if(window.pageYOffset >= sticky){
        navbar.classList.add("sticky");
    }else{
        navbar.classList.remove("sticky");
    }
}
// require('./bootstrap');

// app.component(
//     "reactions-component",
//     require("./components/ReactionsComponent.vue").default
// );
//
// app.mount("#app");

