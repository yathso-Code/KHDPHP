<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assist/CSS/gallery.css">
    <link rel="stylesheet" href="./Assist/CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>
    <!-- -------------nav bar ------------- -->
    <?php
           require './reuse/nav.php'
      ?>
  <!-- --------------nav bar ----------------->
 
    <!-- ===================== PHOTO GALLERY TEXT ======================-->
    <div class="text">
        <h1>PHOTO GALLERY</h1><br>
        <p><span>Home</span> / Gallery</p>
    </div><br>
    <!-- ===================== PHOTO GALLERY TEXT ======================-->

    <div class="parent_img_box">
               <div class="child_img_box">
                    <img src="Assist/img/1.jpeg">
               </div>

               <div class="child_img_box">
                    <img src="Assist/img/2.jpeg">
               </div>

               <div class="child_img_box">
                    <img src="Assist/img/3.jpeg">
               </div>

               <div class="child_img_box">
                    <img src="Assist/img/4.jpeg">
                </div>

               <div class="child_img_box">
                    <img src="Assist/img/5.jpeg">
                </div>

                <div class="child_img_box">
                    <img src="Assist/img/6.jpeg">
               </div>

               <div class="child_img_box">
                    <img src="Assist/img/7.jpeg">
               </div>

                <div class="child_img_box">
                    <img src="Assist/img/8.jpeg">
                </div>

                <div class="child_img_box">
                    <img src="Assist/img/9.jpeg">
                </div>
    </div>

      <!-- footer-------------- -->
      <?php
       require './reuse/footer.php'
     ?>
    <!-- footer---------- -->
</body>
</html>