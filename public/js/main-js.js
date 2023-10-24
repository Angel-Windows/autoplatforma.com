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
//================================== делаю ховер на пункты сайтбара ===============================
const buttonAccordion = document.querySelectorAll("[data-target]");
const butIcon = document.querySelectorAll(".btn");

// Функция для удаления класса "but-icon" у всех элементов с классом "btn"
function deleteBlacColor() {
    butIcon.forEach((btn) => {
        btn.classList.remove("but-icon");
    });
}

// Изначально удаляем класс "but-icon" у всех элементов с классом "btn"
deleteBlacColor();

// Добавляем обработчик события для каждого элемента в buttonAccordion
buttonAccordion.forEach((btn, index) => {
    // Удаляем класс "button-accordion" у каждого элемента
    btn.classList.remove("button-accordion");

    // Добавляем обработчик события наведения мыши
    btn.addEventListener("mouseenter", function () {
        // Переключаем класс "button-accordion"
        btn.classList.toggle("button-accordion");

        // Проверяем, содержит ли элемент класс "button-accordion"
        if (btn.classList.contains("button-accordion")) {
            // Если содержит, добавляем класс "but-icon" соответствующему элементу в butIcon
            butIcon[index].classList.add("but-icon");
        } else {
            // Иначе, удаляем класс "but-icon" у соответствующего элемента в butIcon
            butIcon[index].classList.remove("but-icon");
        }
    });
    // Добавляем обработчик ухода мыши
    btn.addEventListener("mouseleave", function () {
        // Переключаем класс "button-accordion"
        btn.classList.toggle("button-accordion");

        // Проверяем, содержит ли элемент класс "button-accordion"
        if (btn.classList.contains("button-accordion")) {
            // Если содержит, добавляем класс "but-icon" соответствующему элементу в butIcon
            butIcon[index].classList.add("but-icon");
        } else {
            // Иначе, удаляем класс "but-icon" у соответствующего элемента в butIcon
            butIcon[index].classList.remove("but-icon");
        }
    });
});

// спойлер страница каталог =======================================
const spollerTitle = document.querySelectorAll("[data-name]");

spollerTitle.forEach((item) => {
    item.addEventListener("click", function () {
        this.nextElementSibling.classList.toggle("hidden");
    });
});

// випадашки на крошки ==============================================

function setupDropdown(dataDropdownSelector, dropdownId) {
    const dataDropdown = document.querySelector(dataDropdownSelector);
    const noneBreadcrumb = document.getElementById(dropdownId);

    dataDropdown.addEventListener("click", (event) => {
        event.stopPropagation();
        noneBreadcrumb.classList.toggle("none-breadcrumb");
    });

    document.addEventListener("click", (event) => {
        if (
            !noneBreadcrumb.contains(event.target) &&
            event.target !== dataDropdown
        ) {
            noneBreadcrumb.classList.add("none-breadcrumb");
        }
    });
}

setupDropdown("[data-dropdow-1]", "item-1");
setupDropdown("[data-dropdow-2]", "item-2");
// setupDropdown("[data-dropdow-3]", "item-3");
// setupDropdown("[data-dropdow-4]", "item-4");
