"use strict";
// --------------------------- синий фон на странице sign-up ----------------------------
// Обработчик события "DOMContentLoaded" для выполнения кода после загрузки страницы
document.addEventListener("DOMContentLoaded", function () {
  const bacgBlue = document.getElementById("bacg-blue"); // синий фон страницы sign-up
  const bacgBlue1 = document.getElementById("bacg-blue-1"); // синий фон страницы sign-in

  // Функция для проверки и обработки изменений ширины окна
  function handleWindowResize() {
    const windowWidth = window.innerWidth;

    if (windowWidth > 767.98) {
      bacgBlue.classList.add("bacg-blue");
      bacgBlue1.classList.add("bacg-blue-1");
    } else {
      bacgBlue.classList.remove("bacg-blue");
      bacgBlue1.classList.remove("bacg-blue-1");
    }
  }

  // Вызываем функцию при загрузке страницы и при изменении размера окна
  handleWindowResize();
  window.addEventListener("resize", handleWindowResize);
});

//------------------------- код на глазик на инпуте пароль sign-in  ---------------------------------------------

const btnEye = document.getElementById("btn-eye-2");
const pass = document.getElementById("password-2");
const eyeIcon = document.getElementById("eye-icon-2");

btnEye.addEventListener("click", () => {
  if (pass.type === "password") {
    pass.type = "text";
    eyeIcon.classList.remove("icon-eye");
    eyeIcon.classList.add("icon-eye-activ");
  } else {
    pass.type = "password";
    eyeIcon.classList.remove("icon-eye-activ");
    eyeIcon.classList.add("icon-eye");
  }
});

//========================================================================================
//------------------------- код на глазик на инпуте пароль sign-up  ---------------------------------------------

const btnEye1 = document.getElementById("btn-eye1");
const pass1 = document.getElementById("password1");
const eyeIcon1 = document.getElementById("eye-icon1");

btnEye1.addEventListener("click", () => {
  if (pass1.type === "password") {
    pass1.type = "text";
    eyeIcon1.classList.remove("icon-eye");
    eyeIcon1.classList.add("icon-eye-activ");
  } else {
    pass1.type = "password";
    eyeIcon1.classList.remove("icon-eye-activ");
    eyeIcon1.classList.add("icon-eye");
  }
});
//----------------------------- скрипт на попап sign up ----------------------------------
const singUp = document.getElementById("sign-up"); // кнопка логин на декстопе
const singUp1 = document.getElementById("sign-up1"); // кнопка логин в шапке на мобилке
const popClose = document.getElementById("pop-close"); // кнопка закрытия модалки на синем блоке
const popClose1 = document.getElementById("pop-close1"); // крестик на мобилке на закрытие модалки
const popupBg = document.getElementById("popup-bg"); // модалка регистрации
const signIn = document.getElementById("sign-in"); // кнопка переход в аккаунт
const popupBg1 = document.getElementById("popup-bg-1"); // модалка вход
const popCloseIn = document.getElementById("pop-close-in"); // кнопка закрытия модалки Sign-in на синем блоке
const popCloseIn1 = document.getElementById("pop-close-in-1"); // кнопка закрытия модалки Sign-in крестиком
const backToUp = document.getElementById("back-to-up"); // иконка двери на up
const backToIn = document.getElementById("back-to-in"); // иконка двери на up
const bodyPage = document.getElementById("body-page");

singUp.addEventListener("click", () => {
  popupBg.classList.remove("hidden"); // открыл модалку регистрации из меню на десктопе
  bodyPage.classList.add("overflow-hidden");
});
singUp1.addEventListener("click", () => {
  popupBg.classList.remove("hidden"); // отрыл модалку регистрации из меню на мобилке
  bodyPage.classList.add("overflow-hidden");
});
popClose.addEventListener("click", () => {
  popupBg.classList.add("hidden"); // закрыл модалку регистрации кнопкой на синем фоне
  bodyPage.classList.remove("overflow-hidden");
});

popClose1.addEventListener("click", () => {
  popupBg.classList.add("hidden"); // закрыл модалку регистрации крестиком на мобилке
  bodyPage.classList.remove("overflow-hidden");
});
signIn.addEventListener("click", () => {
  popupBg1.classList.remove("hidden"); // открыл модалку входа кликом на Sign-in
  bodyPage.classList.add("overflow-hidden");
});
popCloseIn.addEventListener("click", () => {
  popupBg1.classList.add("hidden"); // закрыл модалку регистрации кнопкой на синем фоне
  popupBg.classList.add("hidden"); // закрыл модалку регистрации крестиком на мобилке
  bodyPage.classList.remove("overflow-hidden");
});
popCloseIn1.addEventListener("click", () => {
  popupBg1.classList.add("hidden"); // закрыл модалку регистрации крестиком на синем фоне
  popupBg.classList.add("hidden"); // закрыл модалку регистрации крестиком на мобилке
  bodyPage.classList.remove("overflow-hidden");
});

// меняю цвет иконки при наведении в sign up
popClose.addEventListener("mouseenter", () => {
  backToUp.classList.remove("color");
  backToUp.classList.add("color-black");
});
popClose.addEventListener("mouseleave", () => {
  backToUp.classList.remove("color-black");
  backToUp.classList.add("color");
});
//-----------------------------------------------
// меняю цвет иконки при наведении в sign in
popCloseIn.addEventListener("mouseenter", () => {
  backToIn.classList.remove("color");
  backToIn.classList.add("color-black");
});
popCloseIn.addEventListener("mouseleave", () => {
  backToIn.classList.remove("color-black");
  backToIn.classList.add("color");
});
//------------ убираю скрол основной страницы под модалкой ------------
