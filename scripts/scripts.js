// let body = document.body
// let iMenu = document.querySelector('#menu-icon')
// let aside = document.querySelector('.aside-menu-icon')
// let opciones = document.querySelectorAll('.imenu')
// let menuSpan = document.querySelectorAll('.link_externo')

// menuSpan.forEach(span =>{
//     span.addEventListener('click', (e)=>{
//         e.preventDefault()
//         e.target.classList.toggle('active')
//         e.target.nextElementSibling.classList.toggle('show')
//     })
// })

// iMenu.addEventListener('click', (e)=>{

//     e.target.classList.toggle('fa-times')
//     e.target.classList.toggle('xmenu')

//     console.log(aside)
//     aside.classList.toggle('show_aside')

// })

import { vista, vista2 } from "../views/vista.js";

let uri = document.querySelectorAll(".uri");
let main = document.getElementsByTagName("main");
uri.forEach((e) => {
  e.addEventListener("click", (tg) => {
    tg.preventDefault();

    main[0].innerHTML = "";

    // TODO Cargar el html correspondiente
    main[0].innerHTML = vista

    let ruta = tg.target.getAttribute("href");
    console.log(ruta.includes("vista2"));

    
  });
  
});
