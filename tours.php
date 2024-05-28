<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   <link rel="prefetch" as="style" href="css/style.css">
   <link rel="stylesheet" href="css/style.css">
   <title>Туры</title>
</head>
<body>
   <div class="wrapper">
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
      <main class="page _anim-items _anim-no-hide">      
         <section class="page__main main">
            <div class="main__body" data-lp>
               <div class="main__container main__container--center _anim-items _anim-no-hide">
                  <div class="main__content">
                     <h1 class="main__title">Лучшие туры и экскурсии здесь!</h1>
                  </div>
               </div>
               <div class="main__image">
                  <img src="img/tours/bg.jpg" alt="Фон">
               </div>
            </div>
         </section>
         <section class="page__body">
            <section class="page__directions directions">
               <div class="directions__container _anim-items _anim-no-hide">
                  <h2 class="directions__title title">Направления</h2>
                  <div class="directions__body">
                     <div class="directions__top">
                        <a href="#" data-current="01" data-from="0" data-to="2" class="directions__item item-directions">
                           <div class="item-directions__image">
                              <img src="img/tours/directions/01.jpg" alt="Изображение">
                           </div>
                           <div class="item-directions__body">
                              <h4 class="item-directions__title">Жигулёвские выходные</h4>
                              <div class="item-directions__text">
                                 <p>Национальный туристический маршрут</p>
                              </div>
                           </div>
                        </a>
                        <a href="#" data-current="02" data-from="3" data-to="6" class="directions__item item-directions">
                           <div class="item-directions__image">
                              <img src="img/tours/directions/03.jpg" alt="Изображение">
                           </div>
                           <div class="item-directions__body">
                              <h4 class="item-directions__title">Обзорные экскурсии по городу</h4>
                              <div class="item-directions__text">
                                 <p>по-новому откроетются перед вами</p>
                              </div>
                           </div>
                        </a>
                        <a href="#" data-current="03" data-from="7" data-to="8" class="directions__item item-directions">
                           <div class="item-directions__image">
                              <img src="img/tours/directions/04.jpg" alt="Изображение">
                           </div>
                           <div class="item-directions__body">
                              <h4 class="item-directions__title">Тематические экскурсии</h4>
                              <div class="item-directions__text">
                                 <p>Музеи и этнические комплексы</p>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="directions__bottom">
                        <a href="#" data-current="04" data-from="9" data-to="11" class="directions__item item-directions">
                           <div class="item-directions__image">
                              <img src="img/tours/directions/05.jpg" alt="Изображение">
                           </div>
                           <div class="item-directions__body">
                              <h4 class="item-directions__title">Экскурсии в Самарскую Луку</h4>
                              <div class="item-directions__text">
                                 <p>заповедной природы и целебных источников</p>
                              </div>
                           </div>
                        </a>
                        <a href="#" data-current="05" data-from="12" data-to="15" class="directions__item item-directions">
                           <div class="item-directions__image">
                              <img src="img/tours/directions/02.jpg" alt="Изображение">
                           </div>
                           <div class="item-directions__body">
                              <h4 class="item-directions__title">Школьникам</h4>
                              <div class="item-directions__text">
                                 <p>едем в Самару</p>
                              </div>
                           </div>
                        </a>
                        <a href="#" data-current="06" data-from="16" data-to="17" class="directions__item item-directions">
                           <div class="item-directions__image">
                              <img src="img/tours/directions/06.jpg" alt="Изображение">
                           </div>
                           <div class="item-directions__body">
                              <h4 class="item-directions__title">Интерактивные экскурсии</h4>
                              <div class="item-directions__text">
                                 <p>Центры исторического моделирования</p>
                              </div>
                           </div>
                        </a>
                        <a href="#" data-current="07" data-from="18" data-to="19" class="directions__item item-directions">
                           <div class="item-directions__image">
                              <img src="img/tours/directions/07.jpg" alt="Изображение">
                           </div>
                           <div class="item-directions__body">
                              <h4 class="item-directions__title">Экскурсии по святым местам</h4>
                              <div class="item-directions__text">
                                 <p>Церкви и храмы</p>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </section>
            <?php
               include $_SERVER['DOCUMENT_ROOT']."/subdomain/reasons.php";
            ?>
            <?php
               include $_SERVER['DOCUMENT_ROOT']."/subdomain/reviews.php";
            ?>
            <?php
               include $_SERVER['DOCUMENT_ROOT']."/subdomain/not-find.php";
            ?>
         </section>
      </main>
      <?php
         include $_SERVER['DOCUMENT_ROOT']."/subdomain/footer.php";
      ?>
      <div class="follow-cursor"></div> 
   </div>
   <?php
      include $_SERVER['DOCUMENT_ROOT']."/subdomain/popup-tours.php";
   ?>
   <?php
      include $_SERVER['DOCUMENT_ROOT']."/subdomain/popup.php";
   ?>
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="js/main.js"></script>
</body>
</html>