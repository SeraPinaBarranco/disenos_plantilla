const aside = document.querySelector(".aside"),
        menu = document.querySelector("#menu"),
        ioption = document.querySelectorAll(".options > div > .bx")

menu.onclick = ()=> aside.classList.toggle('active')

ioption.forEach(element => {
    element.addEventListener('mouseover', (e) =>  {
        if(document.querySelector('.active')){
            e.target.nextElementSibling.nextElementSibling.style.display = 'inline'
            //console.log(e.target.nextElementSibling.nextElementSibling)
        }else{
            e.target.nextElementSibling.nextElementSibling.style.display = 'none'
        }
    })
});