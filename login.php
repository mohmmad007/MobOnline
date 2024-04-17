<?php
include ("header.php");
?>

        <form action="log.php" class=" form" method="GET">
        <p> <b> ورود</b></p>
        <p class="p-2">نام کاربری</p>
      <i class="fa fa-user"></i>  <input type="text" placeholder= "نام کاربری را وارد کنید" id="name">
       
      <p class="p-2">کلمه عبور</p>
       <i class="fa fa-lock"></i> <input type="password" placeholder="کلمه عبور را وارد کنید" id="password">
        <a href="#" class="p-2">فراموشی کلمه عبور؟</a>
        
        <input type="submit" value="ورود">
        
        <a href="sign.php" class="p-3"><p >ثبت نام</p></a>

      
          <i class="fa fa-google  g"></i>
        <i class="fa fa-twitter  t"></i>
        <i class="fa fa-facebook-f  f"></i>
    </form>


    <?php
include ("footer.php");
?>