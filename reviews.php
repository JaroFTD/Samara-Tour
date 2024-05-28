<section class="page__reviews reviews">
   <div class="reviews__container">
      <h2 class="reviews__title title">Отзывы клиентов</h2>
      <div class="reviews__text text">
         <p>Мы ценим каждый отзыв наших клиентов</p>
      </div>
      <div class="reviews__slider swiper">
         <div class="reviews__wrapper swiper-wrapper">
            <?php
               if (mysqli_connect_errno()) {
                  echo 'Ошибка: не удалось установить соединение с базой данных. 
                  Пожалуйста, повторите попытку позже';
                  exit;
               }
               $db=mysqli_connect ('localhost', 'root','','travel');
               $query="select*from reviews";
               $result=mysqli_query($db, $query);
               $num_results=mysqli_num_rows($result); 
            ?>
            <?php
               for ($i=0; $i<$num_results; $i++){
                  $row=mysqli_fetch_assoc($result);
                  echo '
                  <div class="reviews__slide swiper-slide reviews-swiper-slide">
                     <div class="reviews-swiper-slide__top">
                        <div class="reviews-swiper-slide__name">'.$row['name'].'</div>
                     </div>
                     <div class="reviews-swiper-slide__body">
                        <div class="reviews-swiper-slide__text">
                           <p>'.$row['text'].'</p>
                        </div>
                     </div>
                  </div>
                  ';
               }
               mysqli_free_result($result);
               mysqli_close($db);
            ?>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </div>
</section>