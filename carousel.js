const btnRight = document.querySelector(".button-next"),
    btnLeft = document.querySelector(".button-prev"),
    slider = document.querySelector("#slider"),
    sliderIframes = document.querySelectorAll(".slider-section"); /**cantidad de post */

btnRight.addEventListener("click", () => moveSlider(1));
btnLeft.addEventListener("click", () => moveSlider(-1));

let operacion = 0, // Controla el porcentaje de desplazamiento
    counter = 0, // Controla la posición actual
    widthImg = 100 / sliderIframes.length; // Calcula el ancho de cada slide en porcentaje

function moveSlider(direction) {
    // direction: 1 para derecha, -1 para izquierda
    counter += direction;
    
    // Manejar el caso circular
    if (counter >= sliderIframes.length || counter < 0) {
        // Si llegamos al final o al inicio, reiniciamos
        counter = direction > 0 ? 0 : sliderIframes.length - 1;
        operacion = counter * widthImg;
        slider.style.transition = "none";
    } else {
        operacion = counter * widthImg;
        slider.style.transition = "all ease .36s";
    }
    
    slider.style.transform = `translate(-${operacion}%)`;
}