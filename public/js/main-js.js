"use strict";

const karyselFirst = document.getElementById("karysel-1"); // выбираю первый блок с каруселью
const karyselSecond = document.getElementById("karysel-2"); // выбираю второй блок с каруселью
const itemsWrap = document.querySelector(".items-wrap"); // проверяю на наличие класса

// Функция для обновления класса "marquee" на основе ширины экрана
function updateMarqueeClass() {
  if (window.innerWidth < 991.98) {
    karyselFirst.classList.add("marquee");
    karyselSecond.classList.add("marquee");
  } else {
    karyselFirst.classList.remove("marquee");
    karyselSecond.classList.remove("marquee");
  }
}

// Проверяем наличие элемента с классом "items-wrap" на странице
if (itemsWrap) {
  // Инициализируем класс "marquee" при загрузке страницы
  updateMarqueeClass();

  // Добавляем обработчик события resize для отслеживания изменения размеров окна
  window.addEventListener("resize", updateMarqueeClass);
}

//----------------------------

// ============ файл аккаунт делаю темный фон при наведении на спойлер ==================

const buttonAccordion = document.querySelectorAll(".button-accordion");
buttonAccordion.forEach((btn) => {});
