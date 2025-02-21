document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.querySelector(".carousel");
  const carouselItems = document.querySelectorAll(".carousel-item");
  const prevBtn = document.querySelector(".carousel-prev");
  const nextBtn = document.querySelector(".carousel-next");
  const indicatorsContainer = document.querySelector(".carousel-indicators");

  let currentIndex = 0;
  let intervalId;
  const totalItems = carouselItems.length;

  // Crear indicadores
  carouselItems.forEach((_, index) => {
    const indicator = document.createElement("div");
    indicator.classList.add("indicator");
    if (index === currentIndex) {
      indicator.classList.add("active");
    }
    indicator.addEventListener("click", () => {
      goToSlide(index);
    });
    indicatorsContainer.appendChild(indicator);
  });

  const indicators = document.querySelectorAll(".indicator");

  // Inicializar el carousel
  updateCarousel();
  startAutoplay();

  // Event listeners
  prevBtn.addEventListener("click", prevSlide);
  nextBtn.addEventListener("click", nextSlide);

  carousel.addEventListener("mouseenter", () => {
    stopAutoplay();
  });

  carousel.addEventListener("mouseleave", () => {
    startAutoplay();
  });

  // Touch events para dispositivos móviles
  let touchStartX = 0;
  let touchEndX = 0;

  carousel.addEventListener(
    "touchstart",
    (e) => {
      touchStartX = e.changedTouches[0].screenX;
      stopAutoplay();
    },
    { passive: true }
  );

  carousel.addEventListener(
    "touchend",
    (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
      startAutoplay();
    },
    { passive: true }
  );

  // Permitir hacer clic en un slide para activarlo
  carouselItems.forEach((item, index) => {
    item.addEventListener("click", () => {
      if (index !== currentIndex) {
        goToSlide(index);
      }
    });
  });

  function handleSwipe() {
    const difference = touchStartX - touchEndX;
    if (difference > 50) {
      nextSlide();
    } else if (difference < -50) {
      prevSlide();
    }
  }

  function updateCarousel() {
    // Resetear todas las clases
    carouselItems.forEach((item) => {
      item.classList.remove(
        "active",
        "prev",
        "next",
        "far-prev",
        "far-next",
        "back"
      );
    });

    // Actualizar indicadores
    indicators.forEach((indicator, index) => {
      indicator.classList.toggle("active", index === currentIndex);
    });

    // Calcular posiciones relativas para cada tarjeta
    for (let i = 0; i < totalItems; i++) {
      // Calcular la distancia desde el índice actual
      const distance = calculateDistance(currentIndex, i, totalItems);

      // Asignar clases según la posición relativa
      if (distance === 0) {
        carouselItems[i].classList.add("active");
      } else if (distance === 1) {
        carouselItems[i].classList.add("next");
      } else if (distance === -1) {
        carouselItems[i].classList.add("prev");
      } else if (distance === 2) {
        carouselItems[i].classList.add("far-next");
      } else if (distance === -2) {
        carouselItems[i].classList.add("far-prev");
      } else {
        carouselItems[i].classList.add("back");
      }
    }
  }

  // Función para calcular la distancia más corta entre dos índices en un círculo
  function calculateDistance(current, target, total) {
    const direct = target - current;
    const throughEnd = direct > 0 ? direct - total : direct + total;
    return Math.abs(direct) < Math.abs(throughEnd) ? direct : throughEnd;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    updateCarousel();
  }

  function goToSlide(index) {
    currentIndex = index;
    updateCarousel();
  }

  function startAutoplay() {
    stopAutoplay();
    intervalId = setInterval(nextSlide, 3000);
  }

  function stopAutoplay() {
    if (intervalId) {
      clearInterval(intervalId);
    }
  }
});
