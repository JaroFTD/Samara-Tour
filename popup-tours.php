<div id="popup-tours" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <button class="popup__close" data-close>
            <svg class="icon-close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M18.75 5.25L5.25 18.75" stroke="#6F767E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               <path d="M18.75 18.75L5.25 5.25" stroke="#6F767E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </button>
         <div class="popup__title">Форма заявки на подбор тура</div>
         <div class="popup__text text">
            <p>С удовольствием поможем вам подобрать подходящий тур! Просто оставьте свой номер телефона и желаемое направление. Наши специалисты ответят Вам в ближайшее время.</p>
         </div>
         <form action="insert.php" method="post" class="popup__form form-popup">
            <div class="form-popup__items">
               <div class="form-popup__item">
                  <input type="text" name="tname" placeholder="Имя*" class="form-popup__input input _req">
               </div>
               <div class="form-popup__item">
                  <input type="email" name="temail" placeholder="E-mail" class="form-popup__input input">
               </div>
               <div class="form-popup__item">
                  <input type="tel" name="tphone" placeholder="Телефон*" class="form-popup__input input _req">
               </div>
               <div class="form-popup__item">
                  <input type="text" name="tdirection" placeholder="Желаемое направление" class="form-popup__input input">
               </div>
               <div class="form-popup__item">
                  <input type="number" name="tdays" placeholder="Количество дней" class="form-popup__input input">
               </div>
               <div class="form-popup__item">
                  <input type="number" name="ttourists" placeholder="Количество туристов" class="form-popup__input input">
               </div>
            </div>
            <div class="form-popup__message">
               <textarea name="tmessage" placeholder="Дополнительные пожелания" class="form-popup__textarea textarea"></textarea>
            </div>
            <div class="form-popup__checkbox checkbox">
               <input id="agreement" checked class="checkbox__input _req" type="checkbox" value="1" name="tagreement">
               <label for="agreement" class="checkbox__label">
                  <span class="checkbox__text text">Я согласен(сна) на обработку персональных данных.</span>
               </label>
            </div>
            <button class="form-popup__btn btn">Отправить</button>
         </form>
      </div>
   </div>
</div> 