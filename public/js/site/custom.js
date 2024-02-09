window.addEventListener("scroll", function () {
    let menufixo = document.querySelector('#menufixo')
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

let sortBtn = document.querySelector('.filter-menu').children;
let sortItem = document.querySelector('.filter-item').children;
for (let i = 0; i < sortBtn.length; i++) {
    sortBtn[i].addEventListener('click', function () {
        for (let j = 0; j < sortBtn.length; j++) {
            sortBtn[j].classList.remove('current');
        }
        this.classList.add('current');
        let targetData = this.getAttribute('data-target');
        for (let k = 0; k < sortItem.length; k++) {
            sortItem[k].classList.remove('active');
            sortItem[k].classList.add('delete');
            if (sortItem[k].getAttribute('data-item') == targetData || targetData == "all") {
                sortItem[k].classList.remove('delete');
                sortItem[k].classList.add('active');
            }
        }
    });
}