<?php
include ("header.php");
?>

        <form action="signin.php" class="form" method="GET">
        <p class="p_f"> <b> ثبت نام</b></p>
      <div>
        <p class="p-2">نام کاربری</p>
      <i class="fa fa-user"></i>  <input type="text" placeholder= "نام کاربری را وارد کنید" id="name">
      <p class="p-2">ایمیل</p>
      <i class="fa fa-google"></i>  <input type="text" placeholder= "ایمیل خودرا وارد کنید " id="email" >
      <p class="p-2">کلمه عبور</p>
       <i class="fa fa-lock"></i> <input type="password" placeholder="کلمه عبور را وارد کنید" id="password">
    </div>
        
        <input type="submit" value="ثبت نام">
        

      
          <i class="fa fa-google  g"></i>
        <i class="fa fa-twitter  t"></i>
        <i class="fa fa-facebook-f  f"></i>
   
    </form>

    <?php
include ("footer.php");
?>