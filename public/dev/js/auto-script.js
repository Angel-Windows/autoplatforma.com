"use strict";

if (document.querySelector(".product-card")) {
  // Инициализируем первый свайпер
  let thumbsSwiper = new Swiper(".images-product__slider", {
    observer: true,
    observeParents: true,
    slidesPerView: 1,
    grabCursor: true,
    spaceBetween: 40,
    speed: 800,
    //loop: true,
    thumbs: {
      swiper: {
        el: ".images-preview__slider",
        slidesPerView: 8,
      },
    },
    navigation: {
      prevEl: ".swiper-button-prev-1",
      nextEl: ".swiper-button-next-1",
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  // Инициализируем второй свайпер
  new Swiper(".images-preview__slider", {
    observer: true,
    observeParents: true,
    grabCursor: true,
    spaceBetween: 17,
    speed: 800,
    //loop: true,
    slideToClickedSlide: true,
    controller: {
      control: thumbsSwiper, // Указываем, что это контролирующий свайпер
    },
    breakpoints: {
      320: {
        slidesPerView: 4,
        spaceBetween: 6,
      },
      450: {
        slidesPerView: 5,
        spaceBetween: 6,
      },
      768: {
        slidesPerView: 8,
        spaceBetween: 6,
      },
      992: {
        slidesPerView: 8,
        spaceBetween: 6,
      },
    },
  });
}

//=====================================================================================================

//------------------------------- кнопка показать больше в auto ----------------------------------------------------

const boxPost = document.querySelector(".box__post"); // блок с текстом
const btnMore = document.getElementById("btn-more"); // кнопка more
const btnShow = document.getElementById("btn-show"); // кнопка show

if (boxPost) {
  btnMore.addEventListener("click", () => {
    boxPost.classList.toggle("box__post");
    btnMore.classList.toggle("hidden");
    btnShow.classList.toggle("hidden");
  });

  btnShow.addEventListener("click", () => {
    boxPost.classList.toggle("box__post");
    btnMore.classList.toggle("hidden");
    btnShow.classList.toggle("hidden");
  });
}

//=================================================================================================================
//----------------------------- галерея модальное окн
// Проверяем, есть ли на странице элемент с классом "gallery"
const galleryExists = document.querySelector(".gallery");
const btnClose = document.getElementById("btn-close");
// Если элемент с классом "gallery" существует, то добавляем обработчик клика
if (galleryExists) {
  // Получаем ссылки на все элементы слайдера
  const sliderElements = document.querySelectorAll(".product-images__picture");
  const clasSect = document.querySelectorAll(".clas-sect");

  // Получаем ссылку на контейнер галереи
  const gallery = document.getElementById("gallery");

  // Добавляем обработчик клика на каждый элемент слайдера
  sliderElements.forEach((sliderElement) => {
    sliderElement.addEventListener("click", () => {
      // Проверяем текущую ширину экрана
      if (window.innerWidth < 991.98) {
        // Показываем галерею при клике
        gallery.style.display = "block";

        // Добавляем класс "hidden" к элементам с классом "clas-sect"
        clasSect.forEach((element) => {
          element.classList.add("hidden");
        });
      }
    });
  });
  btnClose.addEventListener("click", () => {
    gallery.style.display = "none";
    // Добавляем класс "hidden" к элементам с классом "clas-sect"
    clasSect.forEach((element) => {
      element.classList.remove("hidden");
    });
  });
}
