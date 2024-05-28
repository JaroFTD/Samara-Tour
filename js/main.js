"use strict";

let reviewsSwiper = document.querySelector('.reviews__slider');
if (reviewsSwiper) {
   const swiper = new Swiper('.reviews__slider', {
      // Optional parameters
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 2.3,
      loop: true,
      spaceBetween: 30,
      effect: "coverflow",
      coverflowEffect: {
         rotate: 0,
         depth: 800,
         slideShadows: true,
      },
      autoplay: {
         delay: 10000,
         disableOnInteraction: false,
      },
      // If we need pagination
      pagination: {
         el: '.swiper-pagination',
      },
   });
   window.onresize = queryResizer;
   queryResizer()
   function queryResizer() {
      if (window.innerWidth < 724) swiper.params.slidesPerView = 2
      if (window.innerWidth > 501) swiper.params.slidesPerView = 2
      if (window.innerWidth > 724) swiper.params.slidesPerView = 2.3
      if (window.innerWidth < 768) swiper.params.slidesPerView = 1
      swiper.update()
   }
}

let achievementsSwiper = document.querySelector('.achievements__slider');
if (achievementsSwiper) {
   const swiper = new Swiper('.achievements__slider', {
      effect: "cards",
      grabCursor: true,
   });
}

const cards = [...document.querySelectorAll(".card")];

cards.forEach(el => {
   el.addEventListener("mousemove", fCardRotate);
   el.addEventListener("mouseout", fCardDefault);
});

function fCardRotate(ev) {
   let wi = this.offsetWidth / 2;
   let x = ev.offsetX < wi ? 20 : -20;
   let b = ev.offsetX < wi ? -ev.offsetX : ev.offsetX;
   console.log(((ev.offsetX - this.offsetWidth / 2) / 15));
   this.style.transform = `perspective(2000px) rotatey(${((ev.offsetX - this.offsetWidth / 2) / 20)* -1}deg) rotatex(${((ev.offsetY - this.offsetHeight / 2) / 20)}deg)`;
}

function fCardDefault() {
   this.style.transform = ``;
}

document.addEventListener('DOMContentLoaded', () => {

   const followCursor = () => { // объявляем функцию followCursor
      const el = document.querySelector('.follow-cursor'); // ищем элемент, который будет следовать за курсором

      window.addEventListener('mousemove', e => { // при движении курсора
         const target = e.target; // определяем, где находится курсор
         if (!target) return;

         if (target.closest('a')) { // если курсор наведён на ссылку
            el.classList.add('follow-cursor_active'); // элементу добавляем активный класс
         } else { // иначе
            el.classList.remove('follow-cursor_active'); // удаляем активный класс
         }

         el.style.left = e.pageX + 'px'; // задаём элементу позиционирование слева
         el.style.top = e.pageY + 'px'; // задаём элементу позиционирование сверху
      })
   }

   followCursor(); // вызываем функцию followCursor

});
// МЕНЮ БУРГЕР
let menu = document.querySelector('.icon-menu');
let menuBody = document.querySelector('.menu__body');
menu.addEventListener('click', function () {
   document.body.classList.toggle('_lock');
   document.body.classList.toggle('_active');
   menu.classList.toggle('_active');
   menuBody.classList.toggle('_active');
});

// ЛИПКИЙ HEADER
let header = document.querySelector('.header');
let mainCnt = document.querySelector('.main');

document.onscroll = function () {
   let scroll = window.scrollY;
   if (scroll > 0){
      header.classList.add('_fixed');
   } else {
      header.classList.remove('_fixed');
   }
   
   if (mainCnt) {
      if (scroll > mainCnt.offsetHeight) {
         document.body.classList.add('_bg');
      } else {
         document.body.classList.remove('_bg');
      }
   }
}

// POPUP
const popupLinks = document.querySelectorAll('[data-popup]');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll("[data-lp]");

let unlock = true;

const timeout = 800;

if (popupLinks.length > 0) {
   for (let index = 0; index < popupLinks.length; index++){
      const popupLink = popupLinks[index];
      popupLink.addEventListener("click", function (e) {
         const popupName = popupLink.dataset.popup;
         const curentPopup = document.getElementById(popupName);
         popupOpen(curentPopup);
         e.preventDefault();
      });
   }
}
const popupCloseIcon = document.querySelectorAll('[data-close]');
if (popupCloseIcon.length > 0) {
   for (let index = 0; index < popupCloseIcon.length; index++){
      const el = popupCloseIcon[index];
      el.addEventListener('click', function (e) {
         popupClose(el.closest('.popup'));
         e.preventDefault();
      });
   }
}

function popupOpen(curentPopup) {
   if (curentPopup && unlock) {
      const popupActive = document.querySelector('.popup._open');
      if (popupActive) {
         popupClose(popupActive, false);
      } else {
         bodyLock();
      }
      curentPopup.classList.add('_open');
      curentPopup.addEventListener("click", function (e) {
         if (!e.target.closest('.popup__content')) {
            popupClose(e.target.closest('.popup'));
         }
      });
   }
}
function popupClose(popupActive, doUnlock = true) {
   if (unlock) {
      popupActive.classList.remove('_open');
      if (doUnlock) {
         bodyUnLock();
      }
   }
}

function bodyLock() {
   const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';

   if (lockPadding.length > 0) {

      for (let index = 0; index < lockPadding.length; index++) {
         const el = lockPadding[index];

         el.style.paddingRight = lockPaddingValue;
      }
   }   
   body.style.paddingRight = lockPaddingValue;
   body.classList.add('_lock');
   body.classList.add('_popup-open');

   unlock = false;
   setTimeout(function () {
      unlock = true;
   }, timeout);
}

function bodyUnLock() {
   setTimeout(function () {
      if (lockPadding.length > 0) {
         for (let index = 0; index < lockPadding.length; index++) {
            const el = lockPadding[index];
            el.style.paddingRight = '0px';
         }
      }   
      body.style.paddingRight = '0px';
      body.classList.remove('_lock');
      body.classList.remove('_popup-open');
   }, timeout);

   unlock = false;
   setTimeout(function () {
      unlock = true;
   }, timeout);
}

document.addEventListener('keydown', function (e) {
   if (e.which === 27) {
      const popupActive = document.querySelector('.popup._open');
      popupClose(popupActive);
   }
});

(function () {
   // проверяем поддержку
   if (!Element.prototype.closest) {
      // реализуем
      Element.prototype.closest = function (css) {
         var node = this;
         while (node) {
            if (node.matches(css)) return node;
            else node = node.parentElement;
         }
         return null;
      }
   }
})();
(function () {
   // проверяем поддержку
   if (!Element.prototype.matches) {
      // определяем свойство
      Element.prototype.matches = Element.prototype.matchesSelector ||
         Element.prototype.webkitMatchesSelector ||
         Element.prototype.mozMatchesSelector ||
         Element.prototype.msMatchesSelector;
   }
})();

// ВАЛИДАЦИЯ ФОРМЫ
let forms = document.querySelectorAll('form');
if (forms.length > 0) { 
   intitForms(forms);
}
function intitForms(forms) {
   for (let i = 0; i < forms.length; i++){
      initForm(forms[i]);
   }

   function initForm(form) { 
      form.addEventListener('submit', formSend);

      async function formSend(e) {
         e.preventDefault();
         
         let error = formValidate(form);

         // для отправки спомощью AJAX
         const formAction = form.getAttribute('action') ? form.getAttribute('action').trim() : '#';
         const formMethod = form.getAttribute('method') ? form.getAttribute('method').trim() : 'GET';
         const formData = new FormData(form);

         if (error === 0) {
            form.classList.add('_sending');

            // для отправки спомощью AJAX
				const response = await fetch(formAction, {
					method: formMethod,
					body: formData
            });
            
            if (response.ok) {
               form.classList.remove('_sending');
               form.reset();
               function open(e) {
                  const popupName = 'popup';
                  const curentPopup = document.getElementById(popupName);
                  popupOpen(curentPopup);
               }
               open();
            }else{
               form.classList.remove('_sending');
            }
         }
      }

      function formValidate(form) { 
         let error = 0;
         let formReq = form.querySelectorAll('._req');

         for (let i = 0; i < formReq.length; i++){
            const input = formReq[i];
            formRemoveError(input);
            // проверяем input на email
            if (input.classList.contains('_email')) {
               if (emailTest(input)) {
                  formAddError(input);
                  error++;
               }
            // проверяем input на checkbox
            } else if (input.getAttribute('type') === 'checkbox' && input.checked === false) {
               formAddError(input);
               error++;
            } else {
               // проверяем input на пустые поля
               if (input.value === '') {
                  formAddError(input);
                  error++;
               }
            }
         }
         return error;
      }
      // Функция для добавления класса error
      function formAddError(input) { 
         input.parentElement.classList.add('_error');
         input.classList.add('_error');
      }
      // Функция для удаления класса error
      function formRemoveError(input) { 
         input.parentElement.classList.remove('_error');
         input.classList.remove('_error');
      }
      // Функия теста email
      function emailTest(input) {
         return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
      }
   }
}

let blogs = document.querySelectorAll('.blog__body [data-current]');
redirection(blogs, 'blog', true);

let dir = document.querySelectorAll('.directions__body [data-current]');
redirection(dir, 'choice-tour', false);

let choices = document.querySelectorAll('.choice__body [data-current]');
redirection(choices, 'about-tour', true);

let popular = document.querySelectorAll('.popular__body [data-current]');
redirection(popular, 'about-tour', true);

function redirection(arr, loc, flag = true) {
   if (flag) {
      for (let i = 0; i < arr.length; i++) {
         const element = arr[i];
         let links = element.querySelectorAll('a');
         for (let j = 0; j < links.length; j++) {
            const element = links[j];
            element.addEventListener('click', function (e) {
               let id = encodeURIComponent(arr[i].dataset.current);
               window.location.href = `http://localhost/subdomain/${loc}.php?id=`+id;
            });
         }
      }
   } else {
      for (let i = 0; i < arr.length; i++) {
         const element = arr[i];
         element.addEventListener('click', function (e) {
            let id = encodeURIComponent(arr[i].dataset.current);
            let from = encodeURIComponent(arr[i].dataset.from);
            let to = encodeURIComponent(arr[i].dataset.to);
            window.location.href = `http://localhost/subdomain/${loc}.php?id=`+id + '&from='+from + '&to='+to;
         });
      }
   }
}

// Ждем загрузку контента
window.onload = function () {
   const parallax = document.querySelector('.main');

   if (parallax) {
      const content = document.querySelector('.main__container');
      const image = document.querySelector('.main__image img');

      // Коэффиценты
      const forImage = 20;

      // Скорость анимации 
      const speed = 0.05;

      // Объявление переменнуых
      let positionX = 0, positionY = 0;
      let coordXprocent = 0, coordYprocent = 0;

      function setMouseParallaxStyle() {
         const distX = coordXprocent - positionX;
         const distY = coordYprocent - positionY;

         positionX = positionX + (distX * speed);
         positionY = positionY + (distY * speed);

         // Передаём стили
         image.style.cssText = `transform: translate(${positionX / forImage}%,${positionY / forImage}%);`;

         requestAnimationFrame(setMouseParallaxStyle);
      }
      setMouseParallaxStyle();

      parallax.addEventListener('mousemove', function (e) {
         // Получение ширины и высоты блока
         const parallaxWidth = parallax.offsetWidth;
         const parallaxHeight = parallax.offsetHeight;

         // Ноль по середине
         const coordX = e.pageX - parallaxWidth / 2;
         const coordY = e.pageY - parallaxHeight / 2;

         // Получаем проценты
         coordXprocent = coordX / parallaxWidth * 100;
         coordYprocent = coordY / parallaxHeight * 100;
      });

      // Parallax при скролле
      let thresholdSets = [];
      for (let i = 0; i <= 1.0; i += 0.005){
         thresholdSets.push(i);
      }
      
      const callback = function (entries, observer) {
         const scrollTopProcent = window.pageYOffset / parallax.offsetHeight * 100;
         setParallaxItemsStyle(scrollTopProcent);
      };
      
      const observer = new IntersectionObserver(callback, {
         threshold: thresholdSets
      });

      observer.observe(document.querySelector('.page__body'));

      function setParallaxItemsStyle(scrollTopProcent) {
         content.style.cssText = `transform: translate(0%, -${scrollTopProcent / 9}%);`;
         // image.parentElement.style.cssText = `transform: translate(0%, -${scrollTopProcent / 6}%);`;
      }
   }
}

const animItems = document.querySelectorAll('._anim-items');
if (animItems.length > 0) {
   window.addEventListener('scroll', animOnScroll);
   function animOnScroll() {
      for (let index = 0; index < animItems.length; index++){
         const animItem = animItems[index];
         const animItemHeight = animItem.offsetHeight;
         const animItemOffset = offset(animItem).top;
         const animStart = 4;

         let animItemPoint = window.innerHeight - animItemHeight / animStart;
         if (animItemHeight > window.innerHeight) {
            animItemPoint = window.innerHeight - window.innerHeight / animStart;
         }

         if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
            animItem.classList.add('_active');
         } else {
            if (!animItem.classList.contains('_anim-no-hide')) {
               animItem.classList.remove('_active');
            }
         }
      }
   }
   function offset(el) {
      const rect = el.getBoundingClientRect(),
         scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
         scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
   }

   setTimeout(() => {
      animOnScroll();
   }, 300);
}