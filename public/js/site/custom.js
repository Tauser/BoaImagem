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


/***************************

preloader

***************************/

var timeline = gsap.timeline();

timeline.to(".bi-preloader-animation", {
    opacity: 1,
});

timeline.fromTo(
    ".bi-animation-1 .bi-h3", {
        y: "30px",
        opacity: 0
    }, {
        y: "0px",
        opacity: 1,
        stagger: 0.4
    },
);

timeline.to(".bi-animation-1 .bi-h3", {
    opacity: 0,
    y: '-30',
}, "+=.3");

timeline.fromTo(".bi-reveal-box", 0.1, {
    opacity: 0,
}, {
    opacity: 1,
    x: '-30',
});

timeline.to(".bi-reveal-box", 0.45, {
    width: "100%",
    x: 0,
}, "+=.1");
timeline.to(".bi-reveal-box", {
    right: "0"
});
timeline.to(".bi-reveal-box", 0.3, {
    width: "0%"
});
timeline.fromTo(".bi-animation-2 .bi-h3", {
    opacity: 0,
}, {
    opacity: 1,
}, "-=.5");
timeline.to(".bi-animation-2 .bi-h3", 0.6, {
    opacity: 0,
    y: '-30'
}, "+=.5");
timeline.to(".bi-preloader", 0.8, {
    opacity: 0,
    ease: 'sine',
}, "+=.2");
timeline.fromTo(".bi-up", 0.8, {
    opacity: 0,
    y: 40,
    scale: .98,
    ease: 'sine',

}, {
    y: 0,
    opacity: 1,
    scale: 1,
    onComplete: function () {
        $('.bi-preloader').addClass("bi-hidden");
    },
}, "-=1");



