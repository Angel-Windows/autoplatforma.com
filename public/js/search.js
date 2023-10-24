const blockSearch = document.querySelectorAll(".box-search"); // блок с поисками
const input = document.querySelectorAll(".inp-search"); // поле инпут
const buttonBtn = document.querySelector(".button-btn"); // крестик
const btnCross = document.querySelector(".button-btn-cross"); // кнопка закрыть

function hideSearchBlocks() {
    blockSearch.forEach((blockElement) => {
        blockElement.classList.add("hidden");
    });
    buttonBtn.classList.remove("hidden");
    btnCross.classList.add("hidden");
}

function showSearchBlocks() {
    blockSearch.forEach((blockElement) => {
        blockElement.classList.remove("hidden");
    });
    buttonBtn.classList.add("hidden");
    btnCross.classList.remove("hidden");
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
