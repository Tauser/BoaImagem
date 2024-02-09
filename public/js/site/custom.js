window.addEventListener("scroll", function () {
    let menufixo = document.querySelector('#menufixoid')
    menufixo.classList.toggle('rolagem', window.scrollY > 100)
})

// Esse Script ativa a função de rolagem que pus em alguns itens, deixar pois irei adicionar em outros pelo site ex: Peça e texto abaixo do slide da peça
window.addEventListener('scroll', () => {
    document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
}, false);
window.addEventListener(
    "scroll",
    () => {
        document.body.style.setProperty(
            "--scroll",
            window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
        );
    },
    false
);

//  Esse Script abre o sidebar do astronauta
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
