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
         <section class="page__about-tour about-tour">
            <div class="about-tour__container _anim-items _anim-no-hide">
               <?php
                  $id = $_GET['id'];
                  if (mysqli_connect_errno()) {
                     echo 'Ошибка: не удалось установить соединение с базой данных. 
                     Пожалуйста, повторите попытку позже';
                     exit;
                  }
                  $db=mysqli_connect ('localhost', 'root','','travel');
                  $query="select*from tours";
                  $result=mysqli_query($db, $query);
                  $num_results=mysqli_num_rows($result); 

                  session_start();
                  if( empty($_SESSION[$id]) ) {
                     $_SESSION[$id] = 1;
                  }

                  $_SESSION[$id]++;
                  
                  $sql = "UPDATE tours SET count = $_SESSION[$id] WHERE id = $id";
                  mysqli_query($db, $sql);
               ?>
               <?php
                  for ($i=0; $i<$num_results; $i++){
                     $row=mysqli_fetch_assoc($result);
                     if($row['id'] === $id){
                        echo '
                        <div class="about-tour__body _anim-items _anim-no-hide">
                           <div class="about-tour__image">
                              <img src="img/tours/choice-tour/'.$row['id'].'.jpg" alt="Изображение">
                           </div>
                           <div class="about-tour__content">
                              <div class="about-tour__days">'.$row['days'].'</div>
                              <h1 class="about-tour__title">'.$row['title'].'</h1>
                              <div class="about-tour__category">#'.$row['category'].'</div>
                              <div class="about-tour__from-to">
                                 <span>Место начала / Завершения тура:</span> '.$row['from-to'].'
                              </div>
                              <div class="about-tour__locations">
                                 <span>Места показа:</span> '.$row['locations'].'
                              </div>
                              <div class="about-tour__age">
                                 <span>Допустимый возраст:</span> '.$row['age'].'
                              </div>
                              <div class="about-tour__price">
                                 Цена за человека от
                                 <span>'.$row['price'].' руб.</span>
                              </div>
                           </div>
                        </div>
                        <div class="about-tour__description description-tour">
                           <div class="description-tour__body _anim-items _anim-no-hide">
                              <div class="description-tour__top">
                                 <h3 class="description-tour__title">Описание тура</h3>
                                 <div class="description-tour__text">
                                    <p>'.$row['text'].'</p>
                                 </div>
                              </div>
                              <div class="description-tour__locations">
                                 <h3 class="description-tour__title">Места сбора группы</h3>
                                 <div class="locations-tour">
                                    <ul class="locations-tour__list">
                                       '.$row['places'].'
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="description-tour__content _anim-items _anim-no-hide">
                              <div class="description-tour__enabled enabled-tour">
                                 <h3 class="description-tour__title">В стоимость тура включено</h3>
                                 <ul class="enabled-tour__list">
                                    '.$row['enabled'].'
                                 </ul>
                              </div>
                              <div class="description-tour__not-included">
                                 <h3 class="description-tour__title">В стоимость тура не включено</h3>
                                 '.$row['not-included'].'
                              </div>
                           </div>
                        </div>
                        <a href="#" class="about-tour__btn btn" data-popup="popup-booking">Забронировать</a>
                        ';
                     }
                  }
                  mysqli_free_result($result);
                  mysqli_close($db);
               ?>
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
      </main>
      <?php
         include $_SERVER['DOCUMENT_ROOT']."/subdomain/footer.php";
      ?>
      <div class="follow-cursor"></div> 
   </div>
   <?php
      include $_SERVER['DOCUMENT_ROOT']."/subdomain/popup-booking.php";
   ?>
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