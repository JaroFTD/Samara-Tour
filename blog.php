<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <link rel="prefetch" as="style" href="css/style.css">
   <link rel="stylesheet" href="css/style.css">
   <title>Блог</title>
</head>
<body>
   <div class="wrapper _defolt">
      <header class="header">
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
         <section class="page__blog-main blog-main">
            <div class="blog-main__container _anim-items _anim-no-hide">
               <?php
                  $id = $_GET['id'];
                  if (mysqli_connect_errno()) {
                     echo 'Ошибка: не удалось установить соединение с базой данных. 
                     Пожалуйста, повторите попытку позже';
                     exit;
                  }
                  $db=mysqli_connect ('localhost', 'root','','travel');
                  $query="select*from blog";
                  $result=mysqli_query($db, $query);
                  $num_results=mysqli_num_rows($result); 
               ?>
               <?php
                  for ($i=0; $i<$num_results; $i++){
                     $row=mysqli_fetch_assoc($result);
                     if($row['id'] === $id){
                        echo '
                        <h1 class="blog-main__title title title--blue">'.$row['title'].'</h1>
                        <div class="blog-main__content">
                           <div class="blog-main__image">
                              <img src="img/blog/'.$row['id'].'.jpg" alt="Изображение">
                           </div>
                           <div class="blog-main__body">
                              <div class="blog-main__date">'.$row['date'].'</div>
                              <div class="blog-main__tag">ТЕГИ: <span>'.$row['tag'].'</span></div>
                              <div class="blog-main__text">
                                 '.$row['text'].'
                              </div>
                           </div>
                        </div>
                        ';
                     }
                  }
               ?>
               <?php
                  mysqli_free_result($result);
                  mysqli_close($db);
               ?>
            </div>
         </section>
      </main>
      <?php
         include $_SERVER['DOCUMENT_ROOT']."/subdomain/footer.php";
      ?>
      <div class="follow-cursor"></div> 
   </div>
   <script src="js/main.js"></script>
</body>
</html>