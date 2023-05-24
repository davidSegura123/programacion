window.addEventListener('scroll', () => {
    let header = document.querySelector('#home-header');
    let option1 = document.querySelector('.gf1');
    let option2 = document.querySelector('.gf2');
    let option3 = document.querySelector('.gf3');
    let option4 = document.querySelector('.gf4');
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > 0) {
        header.classList.add('fondoNegro');
        option1.classList.add('borderLeft');
        option2.classList.add('borderLeft');
        option3.classList.add('borderLeft');
        option4.classList.add('borderLeft');
    } else {
        header.classList.remove('fondoNegro');
        option1.classList.remove('borderLeft');
        option2.classList.remove('borderLeft');
        option3.classList.remove('borderLeft');
        option4.classList.remove('borderLeft');
    }
});