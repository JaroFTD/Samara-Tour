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
         <section class="page__choice choice">
            <div class="choice__container _anim-items _anim-no-hide">
               <?php
                  $id = $_GET['id'];
                  $from = $_GET['from'];
                  $to = $_GET['to'];
                  if (mysqli_connect_errno()) {
                     echo 'Ошибка: не удалось установить соединение с базой данных. 
                     Пожалуйста, повторите попытку позже';
                     exit;
                  }
                  $db=mysqli_connect ('localhost', 'root','','travel');
                  $query="select*from directions";
                  $result=mysqli_query($db, $query);
                  $num_results=mysqli_num_rows($result); 
               ?>
               <?php
                  for ($i=0; $i<$num_results; $i++){
                     $row=mysqli_fetch_assoc($result);
                     if($row['id'] === $id){
                        echo '
                           <h1 class="choice__title title">'.$row['text'].' '.$row['title'].'</h1>
                        ';
                     }
                  }
               ?>
               <?php
                  mysqli_free_result($result);
                  mysqli_close($db);

                  $db=mysqli_connect ('localhost', 'root','','travel');
                  $query="select*from tours";
                  $result=mysqli_query($db, $query);
                  $num_results=mysqli_num_rows($result); 
               ?>
               <div class="choice__body">
                  <?php
                     for ($i=0; $i<$num_results; $i++){
                        $row=mysqli_fetch_assoc($result);
                        $str = mb_strimwidth($row['text'], 0, 100, "...");
                        if($i >= $from && $i <= $to){
                           echo '
                           <div data-current="'.$row['id'].'" class="choice__item item-choice">
                              <div class="item-choice__face item-choice__face--front">
                                 <div class="item-choice__image">
                                    <img src="img/tours/choice-tour/'.$row['id'].'.jpg" alt="Изображение">
                                 </div>
                              </div>
                              <div class="item-choice__face item-choice__face--back">
                                 <div class="item-choice__image">
                                    <img src="img/tours/choice-tour/'.$row['id'].'.jpg" alt="Изображение">
                                 </div>
                                 <div class="item-choice__body">
                                    <h4 class="item-choice__title">'.$row['title'].'</h4>
                                    <div class="item-choice__text">
                                       <p>'.$str.'</p>
                                    </div>
                                    <a href="#" class="item-choice__btn btn">Подробнее</a>
                                 </div>
                              </div>
                           </div>
                           ';
                        }
                     }
                     mysqli_free_result($result);
                     mysqli_close($db);
                  ?>
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