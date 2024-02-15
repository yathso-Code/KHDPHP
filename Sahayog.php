<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assist/CSS/Sahayog.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Assist/CSS/Sahayogmedia.css">
    <link rel="stylesheet" href="./Assist/CSS/index.css"/>
</head>
<body> 
  <!-- -------------nav bar ------------- -->
  <?php
           require './reuse/nav.php'
      ?>
  <!--  --------------nav bar ----------------- > -->
<!-----------------------------------  HEADING START----------------------------------------------- -->
<div class="donation">
    <span>DONATION</span>
    <span>Home / Donetion</span>
</div>
<!-- ================================ HEADING ENDS ==========================================-->


<!-- -------------------------------- TABLE HEADIND STARRT ------------------------------------>
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
    <th>Nominee <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
    <th>Account Number <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
    <th>IFSC Code <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
    <th>Start Date <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
    <th>End Date <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
    <th>District <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
  </tr>
  <tr>
  <td  colspan="8">Nothing Found - sorry</td>
  
  </tr>
</table>
</div>
<!-- ================================  TABLE END ===============================================-->

 <!-- --------------------------------- BUTTON START -------------------------------------------------- -->
<div class="div_button">
<span>No record available</span>
<span>
<button>Previous</button>
<button>Next</button>
</span>
</div>
<!--  ================================= BUTTON END ==================================================  -->
  <!-- footer-------------- -->
  <?php
       require './reuse/footer.php'
     ?>
    <!-- footer---------- -->
</body>
</html>