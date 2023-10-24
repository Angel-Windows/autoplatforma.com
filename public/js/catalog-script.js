"use strict";

// --------------- слайдер цена ----------------------------

// Получаем ссылки на элементы
const slider = document.getElementById("slider");
const minValue = document.getElementById("min-value");
const maxValue = document.getElementById("max-value");
var event = new Event('change', {bubbles: true});
let timeoutChangeFilters = false;
console.log(slider)
// Создаем слайдер с помощью noUiSlider
if (slider){
    noUiSlider.create(slider, {
        start: [arrayYearSlider[0], arrayYearSlider[1]], // Значения по умолчанию
        connect: true, // Связываем оба ползунка
        range: {
            min: arrayYearSlider[0],
            max: arrayYearSlider[1],
        },
        format: {
            to: (value) => Math.round(value), // Форматируем значения до целых чисел
            from: (value) => parseInt(value),
        },
    });
    let is_start = 0;
// Обновляем значения текстовых полей при изменении слайдера
    slider.noUiSlider.on("update", (values, handle) => {
        let lastValue = false;
        if (handle === 0) {
            lastValue = minValue.value;
            minValue.value = values[handle];
            lastValue = lastValue !== minValue.value
        } else if (handle === 1) {
            lastValue = maxValue.value;
            maxValue.value = values[handle];
            lastValue = lastValue !== maxValue.value
        }

        if (lastValue && is_start > 1) {
            clearTimeout(timeoutChangeFilters);
            timeoutChangeFilters = setTimeout(()=>{
                minValue.dispatchEvent(event);
            }, 1000)

        }

        is_start++

    });
    minValue.addEventListener("change", () => {
        slider.noUiSlider.set([minValue.value, null]);
    });

    maxValue.addEventListener("change", () => {
        slider.noUiSlider.set([null, maxValue.value]);
    });
}


// Обновляем слайдер при изменении значений в текстовых полях


// Функция для проверки текущей ширины экрана и переключения видимости элементов
function toggleElements() {
    const dropdownMobile = document.getElementById("dropdownMobile");
    const dropdownDesktop = document.getElementById("dropdownDesktop");

    if (window.innerWidth < 768) {
        dropdownMobile.classList.remove("hidden");
        dropdownDesktop.classList.add("hidden");
    } else {
        dropdownMobile.classList.add("hidden");
        dropdownDesktop.classList.remove("hidden");
    }
}

// Вызываем функцию при загрузке страницы и изменении размера окна
window.addEventListener("load", toggleElements);
window.addEventListener("resize", toggleElements);

//=================================================================================================================
//------------------------------- на странице каталога смена крестика на крыжик ------------------------------------
const blockSearch = document.querySelectorAll(".box-search"); // блок с поисками
const input = document.querySelectorAll(".inp-search"); // поле инпут
const buttonBtn = document.querySelector(".button-btn"); // крестик
const btnCross = document.querySelector(".button-btn-cross"); // кнопка закрыть

// Функция для показа блоков поиска и скрытия кнопок
function showSearchBlocks() {
    blockSearch.forEach((blockElement) => {
        blockElement.classList.remove("hidden");
    });
    buttonBtn.classList.add("hidden");
    btnCross.classList.remove("hidden");
}

// Функция для скрытия блоков поиска и показа кнопок
function hideSearchBlocks() {
    blockSearch.forEach((blockElement) => {
        blockElement.classList.add("hidden");
    });
    buttonBtn.classList.remove("hidden");
    btnCross.classList.add("hidden");
}

// Добавляем обработчик клика к input
input.forEach((inputElement) => {
    inputElement.addEventListener("click", (e) => {

        e.stopPropagation(); // Отменяем всплытие события
        showSearchBlocks();
    });
});

// Добавляем обработчик клика к кнопке закрыть
btnCross.addEventListener("click", (e) => {
    e.stopPropagation(); // Отменяем всплытие события
    hideSearchBlocks();
    input.forEach((inputElement) => {
        inputElement.value = ""; // Очищаем значение поля ввода
        inputElement.blur(); // Убираем фокус с поля ввода
    });
});

// Добавляем обработчик клика к документу для скрытия блоков поиска
document.addEventListener("click", () => {
    hideSearchBlocks();
    input.forEach((inputElement) => {
        inputElement.value = ""; // Очищаем значение поля ввода
        inputElement.blur(); // Убираем фокус с поля ввода
    });
});

// Добавляем обработчик клика к блокам поиска, чтобы предотвратить всплытие события
blockSearch.forEach((blockElement) => {
    blockElement.addEventListener("click", (e) => {
        e.stopPropagation(); // Отменяем всплытие события
    });
});

//---------------------------- код на выпадашку внутри make -----------------------------------------------

const inpMake = document.querySelectorAll(".inp-make");
const checkMake = document.querySelectorAll(".check-make");

inpMake.forEach((inputElement, index) => {
    inputElement.addEventListener("click", () => {
        // Убираем класс hidden у соответствующего checkMake
        checkMake[index].classList.remove("hidden");
    });
});

//========================================================================================================
//--------------------------- код на кнопки all  live  sold ----------------------------------------------

const bottons = document.querySelectorAll(".tabu-body__item");
const tabuBtn = document.querySelectorAll("[data-tab]"); // выбираю кнопки табы
const tabContent = document.querySelectorAll("[data-tab-content]"); // вибираю тело таба

tabuBtn.forEach((item) => {
    // перебираю кнопки табы
    item.addEventListener("click", function () {
        // вешаю клик на каждую кнопку
        tabuBtn.forEach(function (element) {
            // перебираю кнопки
            element.classList.remove("_activ"); // удадяю класс актив сразу же
        });
        item.classList.add("_activ"); // добавляю класс актив к следующей кнопку
        //console.log(this.dataset.tab); // tab - потому что data-
        const tabActiv = document.querySelector("#" + this.dataset.tab); // вибираю активний таб в теле таба

        tabContent.forEach(function (i) {
            // перебираю тела табов
            i.classList.add("hiden"); // добавляю активний класс
        });
        tabActiv.classList.remove("hiden"); // удаляю активний класс
    });
});

//===================================================================================================================
