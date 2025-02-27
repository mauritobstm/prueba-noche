const carrusel = document.querySelector(".carrusel-items");

let maxScrollLefrt = carrusel.scrollWidth -carrusel.clientWidth;
let intervalo = null;
let step = 1;

const start = () => {
    intervalo = setInterval(function (params){
        carrusel.scrollLeft = carrusel.scrollLeft + step;
        if(carrusel.scrollLeft === maxScrollLefrt){
            step = step * -1;
        }else if(carrusel.scrollLeft === 0){
            step = step * -1;
        }
    }, 10);
};

const stop = () => {
    clearInterval(intervalo);
};

carrusel.addEventListener('mouseover', () => {
    stop();
});

carrusel.addEventListener('mouseout', () => {
    start();
});

start();