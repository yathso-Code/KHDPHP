<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assist/CSS/SahayogList.css">
    <link rel="stylesheet" href="./Assist/CSS/SahayogListMedia.css">
    <link rel="stylesheet" href="./Assist/CSS/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
    <!-- -------------nav bar ------------- -->
    <?php
           require './reuse/nav.php';
      ?>
  <!-- --------------nav bar ----------------- -->
  
    <!-----------------------------------  HEADING START----------------------------------------------- -->
<div class="donation">
    <span>DONATION LIST</span>
    <span>Home / Donetion</span>
</div>
<!-- ================================ HEADING ENDS ==========================================-->


<!-- -------------------------------- TABLE HEADIND STARRT ------------------------------------>
<div class="table_box">
<div class="table_heading"> 
  <span>Display records per page</span>
  <span>Search: <input type="search"></span>
</div>
<!-- ================================ TABLE HEADING END =======================================-->

<!-- --------------------------------  TABLE START -------------------------------------------- -->
<div class="scrollable-table-container">
    <table>
      <tbody>
      <th>KHDID <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
      <th>Name <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
      <th>Account Holder Name <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
      <th>Account Number <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
      <th>DeathDate <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
      <th>District <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
    </tr>
    <tr>
        <td>KHD0654</td>
        <td>SANT LAL PATEL</td>
        <td>INDRAVATI</td>
        <td>28208100006245</td>
        <td>08-02-2024</td>
        <td>Jaunpur</td>
    </tr>
    <tr>
        <td colspan="6"><b>Action</b> <button class="btn1_inside_table">View Donors</button></td>
    </tr>
    <tr>
        <td>KHD0655</td>
        <td>RAMAKANT PATEL</td>
        <td>LALTI DEVI</td>
        <td>50100644437343</td>
        <td>08-02-2024</td>
        <td>Jaunpur</td>
    </tr>
    <tr>
        <td colspan="6"><b>Action</b> <button class="btn1_inside_table">View Donors</button></td>
    </tr>
    <tr>
        <td>KHD0800</td>
        <td>VIVEK RATHORE</td>
        <td>ALKA RATHORE</td>
        <td>31639791019</td>
        <td>08-02-2024</td>
        <td>Badaun</td>
    </tr>
    <tr>
        <td colspan="6"><b>Action</b> <button class="btn1_inside_table">View Donors</button></td>
    </tr>
  </table>
</div>
  <!-- ================================  TABLE END ===============================================-->

   <!-- --------------------------------- BUTTON START -------------------------------------------------- -->
<div class="div_button">
    <span>Showing page 1 of 1</span>
    <span>
    <button>Previous</button>
    <button>Next</button>
    </span>
    </div>
    </div>
    <!--  ================================= BUTTON END ==================================================  -->
      <!-- footer-------------- -->
      <?php
       require './reuse/footer.php'
     ?>
    <!-- footer---------- -->

</body>
</html>