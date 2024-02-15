<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assist/CSS/MemberList.css">
    <link rel="stylesheet" href="./Assist/CSS/MemberListMedia.css">
    <link rel="stylesheet" href="./Assist/CSS/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
   <!-- -------------nav bar ------------- -->
   <?php
           require './reuse/nav.php'
      ?>
  <!-- --------------nav bar ----------------- -->
  

    <!-----------------------------------  HEADING START----------------------------------------------- -->
<div class="donation">
    <span>MEMBER LIST</span>
    <span>पुरानी सदस्यता सूची</span>
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
  <tr>
    <th>KHDID <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
    <th>Name <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
    <th>FATHER / HUSBAND <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
    <th>District <i class="fa-solid fa-arrow-up"></i> <i class="fa-solid fa-arrow-down"></i></th>
  </tr>
  <tr>
    <td>KHD1051</td>
    <td>DURGA DAS PATEL</td>
    <td>Baburam</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1052</td>
    <td>Ashok Kumar</td>
    <td>Vijay bahadur</td>
    <td>Prayagraj</td>
  </tr>
  <tr>
    <td>KHD1053</td>
    <td>Meva lal patel</td>
    <td>Sukkho</td>
    <td>Prayagraj</td>
  </tr>
  <tr>
    <td>KHD1054</td>
    <td>Pooja</td>
    <td>Narendra pratap gangwar</td>
    <td>Bareily</td>
  </tr>
  <tr>
    <td>KHD1055</td>
    <td>URMILA</td>
    <td>BRIJLAL BHULAI PATEL</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1056</td>
    <td>Kusum</td>
    <td>Aditya Kumar</td>
    <td>Prayagraj</td>
  </tr>
  <tr>
    <td>KHD1057</td>
    <td>KHD1057</td>
    <td>Durga Das Patel</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1058</td>
    <td>RAM BALI PATEL</td>
    <td>	RAM KAKHAN</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1059</td>
    <td>RAM SUKH PATEL</td>
    <td>HARI LAL</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1060</td>
    <td>Rakesh Verma</td>
    <td>Shri Ram Lalit Verma</td>
    <td>Locknow</td>
  </tr>
  <tr>
    <td>KHD1061</td>
    <td>Rajendra kumar</td>
    <td>Raja Ram Patel</td>
    <td>	Prayagraj</td>
  </tr>
  <tr>
    <td>KHD1062</td>
    <td>	Jay prakash</td>
    <td>Raj pati</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1063</td>
    <td>	krishna raj singh</td>
    <td>Gajraj singh</td>
    <td>Chitrkoot</td>
  </tr>
  <tr>
    <td>KHD1064</td>
    <td>Phool chandra Patel</td>
    <td>	Brijlal patel</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1065</td>
    <td>	Phool chandra Patel</td>
    <td>	Brijlal</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1066</td>
    <td>RAM MURAT</td>
    <td>Late - MAYARAM</td>
    <td>	Prayagraj</td>
  </tr>
  <tr>
    <td>KHD1067</td>
    <td>GULAB CHAND PATEL</td>
    <td>	BAL GOVIND PATE</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1068</td>
    <td>	Shiv Baboo</td>
    <td>	Prabhu nath</td>
    <td>Prayagraj</td>
  </tr>
  <tr>
    <td>KHD1069</td>
    <td>Prem Chandra Verma</td>
    <td>	Brijlal Verma</td>
    <td>Pratapgarh</td>
  </tr>
  <tr>
    <td>KHD1070</td>
    <td>Dr Rajesh Kumar Patel</td>
    <td>	Shri Kishori Lal Patel</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1071</td>
    <td>	Vrijlal Patel</td>
    <td>Kishori Lal Patel</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1072</td>
    <td>	RAJENDRA PRASAD</td>
    <td>	RAM NIHOR</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1073</td>
    <td>Rohit Kumar Verma</td>
    <td>	Ram Kumar Verma</td>
    <td>	Sultanpur</td>
  </tr>
  <tr>
    <td>KHD1074</td>
    <td>RAKESH KUMAR PATEL</td>
    <td>	SHYAM RAJ PATEL</td>
    <td> 	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1075</td>
    <td>	अवधेश कुमार पटेल</td>
    <td>श्री गया प्रसाद पटेल</td>
    <td>	Jalaun</td>
  </tr>
  <tr>
    <td>KHD1076</td>
    <td>brijesh kumar patel</td>
    <td>	ved prakash patel</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1077</td>
    <td>	ANIl kumar patel</td>
    <td>	Hari ram</td>
    <td>	Pratapgarh</td>
  </tr>
  <tr>
    <td>KHD1078</td>
    <td>	VIdya Devi</td>
    <td>Dileep Kumar</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1079</td>
    <td>RAJESH KUMAR PATEL</td>
    <td>	RAMLAKHAN</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1080</td>
    <td>URMILA PATEL</td>
    <td>	RAJESH KUMAR PATEL</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1081</td>
    <td>	Amit kumar</td>
    <td>	Ramautar</td>
    <td>	Bareily</td>
  </tr>
  <tr>
    <td>KHD1082</td>
    <td>Pramod Kumar patel</td>
    <td>	Bhaiya Ram patel</td>
    <td>Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1083</td>
    <td>वंदना देवी</td>
    <td>अवधेश कुमार पटेल</td>
    <td>	Jalaun</td>
  </tr>
  <tr>
    <td>KHD1084</td>
    <td>Govind prasad patel</td>
    <td>Baij nath</td>
    <td>	Prayagraj</td>
  </tr>
  <tr>
    <td>KHD1085</td>
    <td>PRAMOD KUMAR PATEL</td>
    <td>PRITHVI PAL PATEL</td>
    <td>	Pratapgarh</td>
  </tr>
  <tr>
    <td>KHD1086</td>
    <td>Rajesh kumar</td>
    <td>	Ram harsh</td>
    <td>	Pratapgarh</td>
  </tr>
  <tr>
    <td>KHD1087</td>
    <td>VIVEK KUMAR PATEL</td>
    <td>	KRISHNA AVATAR PATEL</td>
    <td>	Prayagraj</td>
  </tr>
  <tr>
    <td>KHD1088</td>
    <td>UDAY RAJ VERMA</td>
    <td>	DAYA RAM VERMA</td>
    <td>	Sultanpur</td>
  </tr>
  <tr>
    <td>KHD1089</td>
    <td>	VIJAY PATEL</td>
    <td>RAM MURTI PATEL</td>
    <td>	Prayagraj</td>
  </tr>
  <tr>
    <td>KHD1090</td>
    <td>	SANDEEP KUMAR PATEL</td>
    <td>	Late RAM LAKHAN</td>
    <td>	Amethi</td>
  </tr>
  <tr>
    <td>KHD1091</td>
    <td>	MEWA LAL</td>
    <td>	Mahesh verma</td>
    <td>	Amethi</td>
  </tr>
  <tr>
    <td>KHD1092</td>
    <td>	AJAY KUMAR</td>
    <td>	BABANATH VERMA</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1093</td>
    <td>VIJAY KUMAR PATEL</td>
    <td>BABANATH VERMA</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1094</td>
    <td>DIGVIJAY PATEL</td>
    <td>	LALMANI PATEL</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1095</td>
    <td>	RAM ASARE PATEL</td>
    <td>RADHE SHYAM PATEL</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1096</td>
    <td>JEETLAL PATEL</td>
    <td>RADHESHYAM PATEL</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1097</td>
    <td>	ROHIT KUMAR PATEL</td>
    <td>SURYALAL RAMKISHOR PATEL</td>
    <td>	Jaunpur</td>
  </tr>
  <tr>
    <td>KHD1098</td>
    <td>RAMEDH PRITHVIPAL PATEL</td>
    <td>PRITHVIPAL PATEL</td>
    <td>	Pratapgarh</td>
  </tr>
  <tr>
    <td>KHD1099</td>
    <td>	BRIJESH KUMAR SINGH</td>
    <td>RAJA RAM SINGH</td>
    <td>	Kanpur Nagar</td>
  </tr>
  <tr>
    <td>KHD1100</td>
    <td>	Arvind Singh</td>
    <td>	Jai Singh</td>
    <td>	Azamgarh</td>
  </tr>
  <tr>
    <td>KHD1100</td>
    <td>	Arvind Singh</td>
    <td>	Jai Singh</td>
    <td>	Azamgarh</td>
  </tr>
  </tbody>
</table>
</div>
<!-- ================================  TABLE END ===============================================-->

 <!-- --------------------------------- BUTTON START -------------------------------------------------- -->
<div class="div_button">
<span>Showing page 1 of 13</span>
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