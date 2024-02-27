<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assist//CSS//changePasswordAdmin.css">
</head>
<body style="background-color: #ECF0F9;">

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


  <!---------------------- FORM - SECTION - STARTS ---------------------->
  
  <div class="box">
      <div class="title-text">
          
          <h1>KURMI HELP DESK UP INDIA</h1>
          <h3>अंग्रेजी के बड़े अक्षरों में भरें। <span>* केवल UP के कुर्मी *</span> आज का अपना सहयोग , कल परिवार की सुरक्षा.</h3>
          
        </div>
        
        <p>Change Password</p>
        
        <!------------ INPUT - SECTION ------------>
        
        
        <form>
            <div class="input-box">
                
                <div class="input-one">
                    <label>केएचडी आईडी (KHD ID)</label>
                    <input type="text">
                </div>
                
                
            </div>
            <div class="input-box">
                <div class="input-one">
                    <label>पासवर्ड (Password)</label>
                    <input type="text" required>
                </div>
                
                <div class="input-two">
                    <label> पासवर्ड की पुष्टि करे (Confirm Password) <span>*</span> </label>
                    <input type="text" required>
                </div>
            </div>
            
            <button>Submit</button>
        </form>
        
        <!------------ INPUT - SECTION ------------>
    </div>
    
    <!----------------------- FORM - SECTION - ENDS ----------------------->
    
</body>
</html>