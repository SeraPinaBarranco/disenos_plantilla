const aside = document.querySelector(".aside"),
        menu = document.querySelector("#menu"),
        ioption = document.querySelectorAll(".options > div > .bx")

menu.onclick = ()=> aside.classList.toggle('active')

// ioption.forEach(element => {
//     element.addEventListener('mouseover', (e) =>  {
//         if(document.querySelector('.active')){
//             console.log(e.target.nextElementSibling.nextElementSibling)
//             //console.log(e.target.nextElementSibling.nextElementSibling)
//         }
//     })
// });

function over(e) {
    if(document.querySelector('.active')){
        let dialogo = e.nextElementSibling.nextElementSibling
        dialogo.classList.add('dialogo')
        dialogo.style.display = "inline"
    //     let span = document.createElement('span')
    //     span.className = "span-i"
    //     span.innerHTML= "EEE"
    //     e.target.appendChild(span)
    }
}

function leave(e) {
    if(document.querySelector('.active')){
        let dialogo = e.nextElementSibling.nextElementSibling
        dialogo.classList.remove('dialogo')
        dialogo.style.display = "none"
        
        
    //     let span = document.createElement('span')
    //     span.className = "span-i"
    //     span.innerHTML= "EEE"
    //     e.target.appendChild(span)
    }
}