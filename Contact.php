<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assist/CSS/contact.css">
    <link rel="stylesheet" href="./Assist/CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
     <!-- -------------nav bar ------------- -->
     <?php
           require './reuse/nav.php';
      ?>
  <!-- --------------nav bar -----------------> 
    <!-- heading box start -->
    <div class="box1">
        <h2>CONTACT US</h2>
        <ol>
            <li><a href="/">Home</a></li>
            /
            <li>Contact us</li>
        </ol>
    </div>
    <!-- heading box end -->

    <!-- meassag box start -->
    <div class="box2">
        <div class="text">
            <h2>Leave a Reply</h2>
        <p>Your email address will not be published.</p>
        </div>
        <div class="info">
            <form action="">
            <div class="name">
                <h3>Your Name</h3>
                <input type="text" placeholder="Enter Your Name">
            </div>
            <div class="name">
                <h3>Your Email</h3>
                <input type="text" placeholder="Enter Your Email">
            </div>
            <div class="name">
                <h3>Subject</h3>
                <input type="text" placeholder="Subject">
            </div>
            <div class="name">
                <h3>Comment</h3>
                <textarea name="" id="" cols="111" rows="6"></textarea>
            </div>
        </form>
        </div>
        <button>Send Message</button>
    </div>
    <!-- meassag box end -->

      <!-- footer-------------- -->
      <?php
       require './reuse/footer.php'
     ?>
    <!-- footer---------- -->
</body>
</html>