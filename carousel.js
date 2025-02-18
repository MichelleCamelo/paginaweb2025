document.addEventListener("DOMContentLoaded", () => {
  const reelContainer = document.querySelector(".carouseles");
  const reels = document.querySelectorAll(".instagram-media");
  const prevBtn = document.querySelector(".button-prev");
  const nextBtn = document.querySelector(".button-next");
  let currentIndex = 0;
  let autoChangeInterval;

  // Función para mostrar el Reel actual
  function showReel(index) {
    const offset = -index * 90;
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

  // Función para iniciar el cambio automático
  function startAutoChange() {
    autoChangeInterval = setInterval(nextReel, 5000); // Cambia cada 5 segundos
  }

  // Función para detener el cambio automático
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

  // Iniciar el cambio automático al cargar la página
  startAutoChange();
});