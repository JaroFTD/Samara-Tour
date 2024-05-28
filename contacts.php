<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <link rel="prefetch" as="style" href="css/style.css">
   <link rel="stylesheet" href="css/style.css">
   <title>Контакты</title>
</head>
<body>
   <div class="wrapper _defolt">
      <header class="header" data-lp>
         <div class="header__container">
            <a href="index.php" class="header__logo"><img src="img/logo.svg" alt="Логотип"><span class="header__logo-text">СамараТур</span></a>
            <div class="header__menu menu">
               <nav class="menu__body">
                  <ul class="menu__list">
                     <li class="menu__item"><a href="index.php" class="menu__link">Главная</a></li>
                     <li class="menu__item"><a href="about.php" class="menu__link">О компании</a></li>
                     <li class="menu__item"><a href="tours.php" class="menu__link">Туры</a></li>
                     <li class="menu__item"><a href="blogs.php" class="menu__link">Блог</a></li>
                     <li class="menu__item"><a href="contacts.php" class="menu__link">Контакты</a></li>
                  </ul>
               </nav>
               <button type="button" class="menu__icon icon-menu">
                  <span></span>
                  <span></span>
                  <span></span>
               </button>
            </div>
         </div>
      </header>
      <main class="page">     
         <section class="page__contacts contacts">
            <div class="contacts__container _anim-items _anim-no-hide">
               <h1 class="contacts__title title title--blue">Контакты</h1>
               <div class="contacts__body">
                  <div class="contacts__info info-contacts _anim-items _anim-no-hide">
                     <div class="info-contacts__item">
                        <span>Фактический адрес:</span> 443026, г. Самара, п. Управленчиский, ул. Серегея Лазо, 62, офис 214
                     </div>
                     <div class="info-contacts__item">
                        <span>Электронная почта:</span> <a href="mailto:samaratur@yandex.ru">samaratur@yandex.ru</a>
                     </div>
                     <div class="info-contacts__item">
                        <span>Телефоны:</span> <a href="tel:+78469727127">+7 (846) 972-71-27</a>, <a href="+78469727112">+7 (846) 972-71-12</a>, <a href="+79276927127">+7 (927) 692-71-27</a>
                     </div>
                  </div>
                  <div class="contacts__callback callback-contacts _anim-items _anim-no-hide">
                     <div class="callback-contacts__body">
                        <h2 class="callback-contacts__title title">Напишите нам</h2>
                        <form action="insert.php" method="post" class="callback-contacts__form form-callback">
                           <div class="form-callback__items">
                              <div class="form-callback__item">
                                 <input type="text" name="name" placeholder="Введите имя*" class="form-callback__input input _req">
                              </div>
                              <div class="form-callback__item">
                                 <input type="text" name="surname" placeholder="Введите Фамилию" class="form-callback__input input">
                              </div>
                              <div class="form-callback__item">
                                 <input type="email" name="email" placeholder="Введите email*" class="form-callback__input input _req _email">
                              </div>
                              <div class="form-callback__item">
                                 <textarea name="message" placeholder="Сообщение*" class="form-callback__textarea textarea _req"></textarea>
                              </div>
                           </div>
                           <div class="form-callback__text">
                              <p>Отправляя данную форму вы подтверждаете свое согласие на обработку персональных данных</p>
                           </div>
                           <button type="submit" class="form-callback__button btn">Отправить</button>
                        </form>
                     </div>
                     <div class="callback-contacts__map">
                        <img src="img/contacts/01.png" alt="Карта">
                     </div>
                  </div>
                  <div class="contacts__requisites requisites-contacts _anim-items _anim-no-hide">
                     <h2 class="requisites-contacts__title title title--blue">Юридическая информация</h2>
                     <h3 class="requisites-contacts__subtitle">Реквизиты:</h3>
                     <div class="requisites-contacts__body">
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">Полное наименование</div>
                           <div class="requisites-contacts__text">
                              <p>Общество с ограниченной ответственностью «Центр туристических программ «СамараТур»</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">Сокращенное наименование</div>
                           <div class="requisites-contacts__text">
                              <p>ООО «ЦТП «СамараТур»</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">Юридический адрес, фактический адрес, почтовый адрес</div>
                           <div class="requisites-contacts__text">
                              <p>443026, г. Самара, п. Управленческий, ул. Сергея Лазо, 62, офис 214</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">ИНН</div>
                           <div class="requisites-contacts__text">
                              <p>6324044880</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">КПП</div>
                           <div class="requisites-contacts__text">
                              <p>632401001</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">ОКПО</div>
                           <div class="requisites-contacts__text">
                              <p>43953302</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">ОКАТО</div>
                           <div class="requisites-contacts__text">
                              <p>36440373000</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">Расчетный счет</div>
                           <div class="requisites-contacts__text">
                              <p>40702810703000119233</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">Корреспондентский счет</div>
                           <div class="requisites-contacts__text">
                              <p>30101810700000000803</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">БИК</div>
                           <div class="requisites-contacts__text">
                              <p>042202803</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">Наименование банка</div>
                           <div class="requisites-contacts__text">
                              <p>Публичное акционерное общество «Сбербанк России»</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">Генеральный директор</div>
                           <div class="requisites-contacts__text">
                              <p>Тукмачева Анна Павловна</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">Телефон/факс</div>
                           <div class="requisites-contacts__text">
                              <p>+7 902 377 66 00</p>
                           </div>
                        </div>
                        <div class="requisites-contacts__item text">
                           <div class="requisites-contacts__name">E-mail</div>
                           <div class="requisites-contacts__text">
                              <p>samaratur@yandex.ru</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <?php
         include $_SERVER['DOCUMENT_ROOT']."/subdomain/footer.php";
      ?>
      <div class="follow-cursor"></div> 
   </div>
   <?php
      include $_SERVER['DOCUMENT_ROOT']."/subdomain/popup.php";
   ?>
   <script src="js/main.js"></script>
</body>
</html>