<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <title>Document</title>
 <link rel="stylesheet" href="./Assist/CSS/index.css"/>
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
  <?php
      require './reuse/nav.php'
  ?>
<!-- ===============================sliding hero banner------------------ -->
<div class="slider_box">
 <div class="img_box" id="img_silde">
     <div class="slid active" id="slid" style="   object-position: bottom;"><img src="./Assist/img/1.jpeg"/></div>
     <div class="slid" id="slid"><img src="./Assist/img/9.jpeg"/></div>
     <div class="slid" id="slid"><img src="https://images.unsplash.com/photo-1518773553398-650c184e0bb3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Njh8fGNvZGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"/></div>
     <div class="slid active" id="slid"><img src="https://images.unsplash.com/photo-1593720213681-e9a8778330a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGNvZGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"/></div>
     <div class="slid" id="slid"><img src="https://images.unsplash.com/photo-1505238680356-667803448bb6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTd8fGNvZGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"/></div>
   
    </div>
 <div class="btn"> 
     <button class="back_btn" id="back">Back</button>
     <button class="next_btn" id="next">Next</button>
 </div>
</div>
<!-- ------------------------------sliding hero banner end----------------------- -->
<div class="navbar" style="margin-top: 10px; ">
        
   <a class="navlink a1"  href="./Founder.php" >Founder (संस्थापक)</a>
   <a class="navlink a2"  href="./gallery.php" >Photo Gallery</a>
   <a class="navlink a3"  href="#">Manual (नियमावली)</a>
 </div>
<!-- =============================other ===================================== -->
   <div class="about_box">
       <div class="about_box1">
           <img src="./Assist/img/headr.png" class="img-fluid" alt="">
           <h3 class="mt-3 text-center">कुर्मी हेल्प डेस्क (KHD) नियमावली</h3>
           <h4 class="text-center"><a href="/Home/Manual"> Read Now </a>  <a class="getstarted" href="#">Registration</a> </h4>
       </div>
       <div class="about_box2">
           <p>
               <b>BRDJS TRUST ( ब्रज ट्रस्ट)</b> द्वारा संचालित कुर्मी हेल्प डेस्क, कुर्मी समाज के आर्थिक, शैक्षणिक, और सामाजिक सहयोग का गैर राजनीतिक और गैर धार्मिक मंच है। जो सहभागिता के द्वारा अपने सदस्यों को पारदर्शी, तकनीक आधारित सहयोग करने की व्यवस्था उपलब्ध कराता है। यह सहयोग करने वाले, और सहयोग प्राप्त करने वाले लोगों की सूचनाओं की व्यवस्था करता है।
           </p>
           <p>यह मंच मानता है की किसी भी स्तर के परिवार के कमाने वाले व्यक्ति की आकस्मिक ट्रेजडी के बाद उसका परिवार आर्थिक और सामाजिक रुप से काफी पिछड़ जाता है। यहां तक कि वह विविध प्रकार के शोषण का शिकार होने लगता है । इससे पूरे समाज की बदनामी होती है। ऐसी स्थिति में यदि हम थोड़ा थोड़ा सहयोग कर दें तो न्यूनतम सहयोग से वह परिवार पुनः मुख्यधारा में आ जाता है। कोई भी व्यक्ति, संगठन या मंच शत प्रतिशत लोगों का उन्नयन अकेले नहीं कर सकता। इस लिए यह मंच अभी केवल कुर्मी समाज के अधिक से अधिक लोगों का उन्नयन करके समृद्ध राष्ट्र निर्माण में अपना छोटा सा योगदान करेगा।</p>
       </div>
   </div>
<!-- -----------------------about--------------------------------------- -->
<!-- -------------------------more about --------------------------- -->

   <div class="container">
           <div class="col-md-6">
               <div class="icon-box">
                  <i class="fa-solid fa-bag-shopping" style="font-size: 30px; color: teal; margin-right: 20px;"></i>
                   <a href="#">KHD क्या है?</a>
                   <p>
                       कुर्मी समाज हेतु सहयोग देने और सहयोग लेने का यह एक गैर राजनैतिक, और गैर धार्मिक पारदर्शी मंच है। यह सहभागिता पर आधारित, पारदर्शी सहयोग पर कार्य करता है।
                   </p>
               </div>
           </div>
           <div class="col-md-6 mt-4 mt-md-0">
               <div class="icon-box">
                  <i class="fa-regular fa-sun" style="font-size: 30px; color: teal; margin-right: 20px;"></i>
                   <a href="#">KHD का लक्ष्य</a>
                   <p>
                       कुर्मी समाज के अधिक से अधिक लोगों को इस मंच का विधिक सदस्य बनाकर सहभागिता के द्वारा
                       न्यूनतम सहयोग से अधिक से अधिक सदस्यों को विषम परिस्थितियों में सहयोग की पारदर्शी व्यवस्था
                       उपलब्ध कराना।
                   </p>
               </div>
           </div>
           <div class="col-md-6 mt-4 mt-md-0">
               <div class="icon-box">
                  <i class="fa-solid fa-seedling" style="font-size: 30px; color: teal; margin-right: 20px;"></i>
                   <a href="#">KHD से कौन जुड़ सकता है</a>
                   <p>
                       KHD से वर्तमान में उत्तर प्रदेश के कुर्मी समाज का कोई भी व्यक्ति (सरकारी, गैर सरकारी, किसान,
                       डाक्टर, मास्टर,नेता, अभिनेता, विद्यार्थी, व्यवसाई आदि) जो 21 से 62 वर्ष का हो, जुड़ सकता है।
                   </p>
               </div>
           </div>
           <div class="col-md-6 mt-4 mt-md-0">
               <div class="icon-box">
                  <i class="fa-solid fa-calendar-days" style="font-size: 30px; color: teal; margin-right: 20px;"></i>
                   <a href="#">KHD से कैसे जुड़ें</a>
                   <p>दिए गए गूगल लिंक या वेबसाइट khdindia.com या ऐप के माध्यम से रजिस्ट्रेशन करके केएचडी से जुड़ा जा सकता है। इसके लिए सदस्य का पता और फोटोयुक्त स्थाई पहचान पत्र आवश्यक है।</p>
               </div>
           </div>

   </div>

<!-- ------------------------more about--------------------------- -->
<!-- --------------------------donation box----------------------- -->
<div class="donation_box">
     <h1>व्यवस्था सहयोग</h1>
     <p>व्यवस्था सहयोग कभी भी जमा कर सकते हैं। जमा करने की तिथि से एक वर्ष (365 दिन) के लिए होगा।</p>
     <div class="doner_box">
         <div class="img_box">
             <img src="./Assist/img/DDPATEL.jpg"/>
         </div>
         <div class="doner_detal">
                <h3 class="d_text">खाताधारक का नाम : KURMI HELP DESK</h3>
                <h3  class="d_text">खाता संख्या : 383801010036480</h3>
                <h3  class="d_text">IFSC : UBIN0538388</h3>
                <h3 class="d_text">बैंक : यूनियन बैंक ऑफ इंडिया</h3>
                <h3  class="d_text">शाखा : MACHHALI SHAHAR, JAUNPUR</h3>
                <p  class="d_text">व्यवस्था सहयोग जमा करने के बाद रसीद वेबसाईट पर अवश्य अपलोड करें।</p>
                <button class="twitter" style="color: white;">Donate</button>
         </div>
     </div>
</div>
<!-- -----------------------donation end--------------------------- -->
<!-- ---------------------------list=-------------------------------- -->
    <div class="info_box">
           <div class="text">
                <h3>सदस्यता शुल्क</h3>
                <p>जुड़ने के लिए किसी भी प्रकार का कोई शुल्क नहीं है।</p>
           </div>
           <div class="text">
            <h3>सहयोग एवं पारदर्शिता</h3>
            <p>यह मंच अपने पास से किसी को न कुछ देता है, न ही लेता है। यह केवल सहयोग दाता और सहयोग प्राप्त करता, सदस्यों की जानकारी अपने पास रखता है। यह सहयोग सीधा लाभार्थी के खाते में देने की अपील करता है। वैधानिकता हेतु सहयोग रसीद की प्रति अपने पास रखता है।</p>
           </div>
           <div class="text">
             <h3>कोष</h3>
            <p>मंच संचालन हेतु कार्यालय, तकनीकी उपकरण, वेबसाईट, डाटा,मानव संसाधन आदि के खर्च हेतु अपने विधिक सदस्यों से 100 रूपये वार्षिक संचालन खर्च की अपेक्षा करता है। जो स्वैच्छिक है। खर्च से अवशेष धन, संचालन खर्च दाताओं में ही खर्च किया जाएगा।</p>
           </div>
            <div class="text">
                <h3>KHD कैसे जुड़ें</h3>
                 <p>दिए गए गूगल लिंक या वेबसाइट या ऐप के माध्यम से रजिस्ट्रेशन करके केएचडी से जुड़ा जा सकता है। इसके लिए सदस्य और नामिनी का पता और फोटोयुक्त स्थाई पहचान पत्र आवश्यक है।</p>
            </div>
            <div class="text">
                <h3>सूचना का माध्यम</h3>
                <p>KHD का सूचना का विधिक माध्यम टेलीग्राम ग्रुप है इसके अलावा व्हाट्सएप, फेसबुक, इंस्टाग्राम आदि पर भी सूचनाएं दी या ली जाती हैं।</p>
            </div>
            <div class="text">
                <h3>हेल्पलाइन</h3>
                <p>9415380793</p>
            </div>
            <div class="text">
                 <h3>वेबसाइट</h3>
                 <p>khdindia.com</p>
            </div> 
            <div class="text">
                <h3>ईमेल</h3>
                <p>khdindia38@gmail.com</p>
                
            </div>
            <div style="border: none;">
                <h3>डीडी पटेल, जौनपुर</h3>
            </div>
    </div>
<!-- -------------------------list end---------------------------- -->
<?php
  require './reuse/footer.php'
?>
</body>
<script>
   
   var back = document.querySelector("#back");
      var next = document.getElementById("next");
      var src = document.querySelector(".img_box");
      var slide  = document.querySelectorAll(".slid");
      
      // console.log(back)
      // console.log(next)
      // console.log(srcol_box)
      // console.log(slide)
      let ind = 0;
      slide[ind].classList.add('active');
       // ==================next slide ========function===========
      next.addEventListener("click", function(){
           slide[ind].classList.remove('active');
           // console.log(slide.length-1)
           // console.log(ind);
           ind = (ind == slide.length - 1) ? 0 : ind+1;
           slide[ind].classList.add('active');
           src.style.transform = `translateX(-${ind * 100}%)`;
           
      })
      // ==================back slide =============functions =================
      back.addEventListener('click', function(){
           slide[ind].classList.remove('active');
           // console.log(slide.length-1)
           // console.log(ind);
           ind = (ind == 0) ? slide.length - 1 : ind- 1;
           slide[ind].classList.add('active');
           src.style.transform = `translateX(-${ind * 100}%)`;
           
      });
</script>
</html>