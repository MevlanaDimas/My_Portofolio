// Navbar Fixed
window.onscroll = function(){
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav){
        header.classList.add('navbar-fixed');
    }
    else{
        header.classList.remove('navbar-fixed');
    }
};


// Hamburger
let toggledMenu = false;

let tl = gsap.timeline({paused: true});

tl.from('#nav-menu',{
    duration: 1,
    x: -100,
    opacity: 0,
    ease: "power2.out"
});

hamburger.addEventListener('click', function(){
    const hamburger = document.querySelector('#hamburger');
    const navMenu = document.querySelector('#nav-menu');
    
    if(!toggledMenu){
        hamburger.classList.add('hamburger-active');
        navMenu.classList.remove('hidden');
        
        tl.restart();
    }
    else if(toggledMenu){
        tl.reverse();

        hamburger.classList.remove('hamburger-active');
        navMenu.classList.add('hidden');
    }
    toggledMenu = !toggledMenu;
});

// Footer Year
document.addEventListener("DOMContentLoaded", function(){
    const yearSpan = document.querySelector('#year');
    const currentYear = new Date().getFullYear();
    yearSpan.textContent = currentYear;

    gsap.from('.header', {
        duration: 0.5,
        y: -100,
        opacity: 0
    });
    loadAnimation();
});

document.addEventListener("scroll", function(){
    aboutAnimation();
});

function aboutAnimation(){
    gsap.registerPlugin(ScrollTrigger);
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
    })

    function raf(time){
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)

    const bio = new SplitType('.bio');
    const textAbout = new SplitType('.text-about');
    const who = new SplitType('.who');
    const mySocial = new SplitType('.my-social');
    const socialGo = new SplitType('.social-go');

    const tl = gsap.timeline({
        scrollTrigger: {
          trigger: "#home",
          start: "top top",
          end: "bottom bottom",
          paused: true
        }
      });

    tl.add([
        gsap.from('.text-about .word', 0.05, {
            x: -250,
            stagger: 0.05,
            delay: 0.2,
            opacity: 0,
            ease: "power2.out"
        })
    ])
    .add([
        gsap.from('.who .word', 0.05, {
            x: -250,
            stagger: 0.05,
            delay: 0.2,
            opacity: 0,
            ease: "power2.out"
        })
    ])
    .add([
        gsap.from('.bio .word', 0.05, {
            y: 125,
            stagger: 0.05,
            delay: 0.2,
            opacity: 0,
            ease: "power2.out"
        })
    ])
    .add([
        gsap.from('.my-social .word', 0.05, {
            x: 250,
            stagger: 0.05,
            delay: 0.2,
            opacity: 0,
            ease: "power2.out"
        })
    ])
    .add([
        gsap.from('.social-go .word', 0.05, {
            x: 250,
            stagger: 0.05,
            delay: 0.2,
            opacity: 0,
            ease: "power2.out"
        })
    ]);
}

function loadAnimation(){
    const intro = new SplitType('.intro');
    
    const firstAnimation = gsap.timeline({
    });

    firstAnimation.add([
        gsap.from(".hello", 3, {
            x: -100,
            opacity: 0,
            ease: "power2.out"
        }),
        gsap.from(".name", 3, {
            x: 250,
            opacity: 0,
            ease: "power2.out"
        }),
        gsap.from(".job1", 3, {
            y: -100,
            opacity: 0,
            ease: "power2.out"
        }),
        gsap.from(".intro .word", 0.05, {
            y: 125,
            stagger: 0.05,
            delay: 0.2,
            opacity: 0
        }),
        gsap.from('.photo', {
            duration: 3,
            y: -100,
            opacity: 0,
            ease: 'bounce'
        }),
        gsap.from('.blob', {
            duration: 3,
            y: 100,
            opacity: 0,
            ease: 'bounce'
        })
    ]);
}