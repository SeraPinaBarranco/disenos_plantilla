const aside = document.querySelector(".aside"),
        menu = document.querySelector("#menu"),
        ioption = document.querySelectorAll(".ioption")

menu.onclick = ()=> aside.classList.toggle('active')

ioption.forEach(io => {
    io.addEventListener('hover')
});