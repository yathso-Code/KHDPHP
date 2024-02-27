<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assist//CSS//AdminPanel.css">
</head>

<body style="background-color: #EDF1FA;">

    <!-- -------------top navbar----------------------------------- -->
   <div id="topbar" class="d-flex ">
    <div class="container-fluid">
        <div>
           <p style="font-size: 14px;"><i class="fa-solid fa-phone"></i> 9415380793</p>
        </div>
        
        <div class="login_box">
                <i class="fa-solid fa-lock" style="color: rgb(10, 229, 10);"></i> <a  style="color: rgb(239, 238, 238); font-size: 14px;" class="twitter" href="login2.php">Login</a>
        </div>
    </div>
  </div>
   <!-- =============================top nav end----------------------------- -->
   <!-- -----------------------------icon and regestration box--------------------------- -->
     
      <div class="icon_box">
            <div class="logo_box">
                <a href="login.php"><img src="./Assist/img/Logo.png" alt="" class="logo_img" /></a>
           </div>
      
          <div class="regestration_box">
          <a href="registration.php" class="twitter" style="color: white;">Registration</a>  
  
          </div>
      </div>
   <!-- ------------------------------ -icon and regestration box end=======================-->
   <!-- ------------------------------navbar ------------------------------------------ -->
   <div class="navbar">
          
    <a class="navlink a1"  href="Index.php" >HOME</a>
    <a class="navlink a2"  href="About.php" >ABOUT US</a>
    <a class="navlink a3" href="MemberList.php">Member List (सदस्य सूची)</a>
  
    <a class="navlink a4"  href="Sahayog.php">Sahayog (सहयोग)</a>
    <a class="navlink a5"  href="SahayogList.php">Sahayog List (सहयोग सूची)</a>
    <a class="navlink a6"  href="vyavasthaSahyogList.php">Vyavastha List (व्यवस्था सहयोग सूची)
  </a>
    <!-- <a class="navlink a7"  href="#"></a> -->
    <a class="navlink a8"  href="Contact.php">CONTACT</a>
  
  </div>
  <!-- -------------------------navbar end---------------------------- -->

    <!---------------- PAGE - NAME - Starts ---------------->

    <div class="title">
        <div class="Page">Members <Button>Register</Button></div>
        <div class="path">Admin / Members</div>
    </div>

    <!----------------- PAGE - NAME - Ends ----------------->



    <!--------------- Member - List - Starts --------------->

    <div class="Member-Box">
        <div class="text">Member List</div>

        <!---- Search - Section ---->

        <div class="searchSection">
            <div class="displayCount">Display
                <span>20</span>
                records per page
            </div>
            <div class="SearchBox">
                <label>Search:</label>
                <input type="text">
            </div>
        </div>

        <!---- Search - Section ---->

        <!----- Table - Starts ----->


        <div class="TableSection">

            <table>
                <!-- Table - Heading -->
                <tr>
                    <th>Action</th>
                    <th>KHDID</th>
                    <th>Name</th>
                    <th>IdentityProofName</th>
                    <th>IdentityProofNo.</th>
                    <th>FatherName</th>
                    <th>Dob</th>
                    <th>Gender</th>
                    <th>OccupationName</th>
                    <th>MobileNo1</th>
                    <th>MobileNo2</th>
                    <th>EmailId</th>
                    <th>Website</th>
                    <th>HomeDistrict</th>
                    <th>HomeTahsil</th>
                    <th>HomePinCode</th>
                    <th>HomeAddress</th>
                    <th>WorkDistrict</th>
                    <th>WorkTahsil</th>
                    <th>WorkPinCode</th>
                    <th>WorkAddress</th>
                    <th>FirstNominee</th>
                    <th>FirstNomineeProof</th>
                    <th>FirstNomineeIdentityProofNo.</th>
                    <th>SecondNominee</th>
                    <th>SecondNomineeProof</th>
                    <th>SecondNomineeIdentityProofNo.</th>
                    <th>DiseaseDescription</th>
                    <th>CreatedOn</th>
                </tr>
                <!-- Table - Heading -->


                <!-- Table - Data -->
                <tr>
                    <td class="control">
                        <a href="#">Edit</a>
                        <a href="#" class="cancel">DisApprove</a>
                        <a href="#">Change Password</a>
                    </td>
                    <td>KHD0001</td>
                    <td>Durga Das</td>
                    <td>ADHAR CARD</td>
                    <td class="">697240880089</td>
                    <td class="">BABURAM PATEL</td>
                    <td class="">1973-11-30T00:00:00</td>
                    <td class="">Male</td>
                    <td>Teacher ( अध्यापक, शिक्षक )</td>
                    <td>8172960920</td>
                    <td>9415380793</td>
                    <td>ddpatel3873@gmail.com</td>
                    <td>khdindia.com</td>
                    <td>Jaunpur</td>
                    <td>Machhali shahar </td>
                    <td>222144</td>
                    <td>Vill_ Batata Machhali Shahar</td>
                    <td>Bahraich </td>
                    <td>Nanpara </td>
                    <td>271865</td>
                    <td>Jubaliganj, nanpara Bahraich </td>
                    <td>Gita Devi</td>
                    <td>ADHAR CARD</td>
                    <td>459277925327</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>NO</td>
                    <td>2021-04-03T11:31:00</td>
                </tr>
                <!-- Table - Data -->

            </table>
        </div>

        <!------ Table - Ends ------>

    </div>

    <!---------------- Member - List - Ends ---------------->

</body>

</html>