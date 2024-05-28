<div id="popup-booking" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <button class="popup__close" data-close>
            <svg class="icon-close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M18.75 5.25L5.25 18.75" stroke="#6F767E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               <path d="M18.75 18.75L5.25 5.25" stroke="#6F767E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </button>
         <div class="popup__title">Форма заявки на бронирование тура</div>
         <form action="insert.php" method="post" class="popup__form form-popup">
            <div class="form-popup__items">
               <div class="form-popup__item">
                  <input type="text" name="bname" placeholder="Имя*" class="form-popup__input input _req">
               </div>
               <div class="form-popup__item">
                  <input type="email" name="bemail" placeholder="E-mail" class="form-popup__input input">
               </div>
               <div class="form-popup__item">
                  <input type="tel" name="bphone" placeholder="Телефон*" class="form-popup__input input _req">
               </div>
               <div class="form-popup__item">
                  <select name="btours" class="form-popup__select">
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
                     ?>
                     <?php 
                        for ($i=0; $i<$num_results; $i++){
                           $count = $i;
                           $row=mysqli_fetch_assoc($result);
                           $str = mb_strimwidth($row['title'], 0, 50, "...");
                           if($i < 9){
                              ++$count;
                              $b = '0' . $count;
                              if($row['id'] === $id){
                                 echo '<option value="'.$b.'" selected>'.$str.'</option>';
                              }else{
                                 echo '<option value="'.$b.'">'.$str.'</option>';
                              }
                           }else{
                              if($row['id'] === $id){
                                 echo '<option value="'.++$count.'" selected>'.$str.'</option>';
                              }else{
                                 echo '<option value="'.++$count.'">'.$str.'</option>';
                              }
                           }
                        }
                        mysqli_free_result($result);
                        mysqli_close($db);
                     ?>
                  </select>
               </div>
            </div>
            <div class="form-popup__message">
               <textarea name="bmessage" placeholder="Дополнительные пожелания" class="form-popup__textarea textarea"></textarea>
            </div>
            <div class="form-popup__checkbox checkbox">
               <input id="agreement" checked class="checkbox__input _req" type="checkbox" value="1" name="tagreement">
               <label for="agreement" class="checkbox__label">
                  <span class="checkbox__text text">Я согласен(сна) на обработку персональных данных.</span>
               </label>
            </div>
            <button class="form-popup__btn btn">Забронировать</button>
         </form>
      </div>
   </div>
</div> 