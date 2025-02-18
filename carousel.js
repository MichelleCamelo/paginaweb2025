document.addEventListener("DOMContentLoaded", () => {
  const reelContainer = document.querySelector(".reel-container");
  const reels = document.querySelectorAll(".instagram-media");
  const prevBtn = document.querySelector(".button-prev");
  const nextBtn = document.querySelector(".button-next");
  let currentIndex = 0;
  let autoChangeInterval;

  // Función para mostrar el Reel actual con desplazamiento horizontal
  function showReel(index) {
    const offset = -index * 100; // Mueve los reels horizontalmente
    reelContainer.style.transform = `translateX(${offset}%)`;
  }

  // Función para avanzar al siguiente Reel
  function nextReel() {
    currentIndex = (currentIndex + 1) % reels.length;
    showReel(currentIndex);
  }

  // Función para retroceder al Reel anterior
  function prevReel() {
    currentIndex = (currentIndex - 1 + reels.length) % reels.length;
    showReel(currentIndex);
  }

  // Inicia el cambio automático de reels
  function startAutoChange() {
    autoChangeInterval = setInterval(nextReel, 5000);
  }

  // Detiene el cambio automático
  function stopAutoChange() {
    clearInterval(autoChangeInterval);
  }

  // Eventos para los botones de navegación
  nextBtn.addEventListener("click", () => {
    nextReel();
    stopAutoChange();
    startAutoChange();
  });

  prevBtn.addEventListener("click", () => {
    prevReel();
    stopAutoChange();
    startAutoChange();
  });

  // Iniciar el carrusel al cargar la página
  startAutoChange();
});