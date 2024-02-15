<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Assist/CSS/registration.css">
    <link rel="stylesheet" href="./Assist/CSS/index.css"/>
</head>

<body>

      <!-- -------------nav bar ------------- -->
      <?php
           require './reuse/nav.php'
      ?>
  <!-- --------------nav bar ----------------- -->

    <div class="title-text">

        <h1>KURMI HELP DESK UP INDIA</h1>
        <h3>अंग्रेजी के बड़े अक्षरों में भरें। <span>* केवल UP के कुर्मी *</span> आज का अपना सहयोग , कल परिवार की सुरक्षा.</h3>

    </div>

    <!-------------- FORM - SECTION - STARTS -------------->

    <form>

        <!----- INPUT - BOX - ONE  ----->

        <div class="input-box">
            <div class="input-one">
                <label>आईडी का प्रकार (ID Type) <span>*</span></label>
                <select required>
                    <option value="Select-ID-Type">---Select ID Type---</option>
                    <option value="PAN">PAN CARD</option>
                    <option value="DL">DRIVING LICENCE</option>
                    <option value="AAD">AADHAAR CARD</option>
                    <option value="PASS">PASSPORT</option>
                    <option value="RATION">RATION CARD</option>
                    <option value="OTHERS">OTHER</option>
                </select>
            </div>

            <div class="input-two">
                <label> आई डी नO (ID No) <span>*</span> </label>
                <input type="text" required>
            </div>
        </div>

        <!----- INPUT - BOX - TWO ----->

        <div class="input-box">
            <div class="input-one">
                <label>नाम (NAME) <span>*</span></label>
                <input type="text" required>
            </div>

            <div class="input-two">
                <label> पिता / पति (FATHER / HUSBAND) <span>*</span> </label>
                <input type="text" required>
            </div>
        </div>

        <!----- INPUT - BOX - THREE ----->

        <div class="input-box">

            <div class="input-one">
                <label for="dateInput"> जन्मतिथि (BIRTH DATE) <span>*</span> </label>
                <input type="date" readonly>
            </div>

            <div class="input-two">
                <label>आईडी का प्रकार (ID Type) <span>*</span></label>
                <select>
                    <option value="Select-ID-Type">---Select Gender---</option>
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                    <option value="OTHERS">OTHER</option>
                </select>
            </div>


        </div>

        <!----- INPUT - BOX - FOUR ----->

        <div class="input-box">

            <div class="input-one">

                <label>व्यवसाय (OCCUPATION) <span>*</span></label>
                <select>
                    <option>---Select Occupation---</option>
                    <option>Advocate (वकील)</option>
                    <option>Agent (मुनीम)</option>
                    <option>Artisan (शिल्पकार, कारीगर)</option>
                    <option>Artist (कलाकार)</option>
                    <option>Painter (चित्रकार)</option>
                    <option>Auctioneer (नीलाम में बेचना)</option>
                    <option>Author (लेखक,ग्रन्थकार)</option>
                    <option>Baker (बेकर,नानबाई)</option>
                    <option>Barber (नाई,हज्जाम)</option>
                    <option>Betel-seller (पान विक्रेता, तमोली, पनवाड़ी)</option>
                    <option>Blacksmith (लोहार)</option>
                    <option>Boatman (केवट, मल्लाह)</option>
                    <option>Book-binder (पुस्तक बांधने की मशीन, जिल्दसाज)</option>
                    <option>Brasier (ठठेरा)</option>
                    <option>Broker (दलाल)</option>
                    <option>Butcher (कसाई)</option>
                    <option>Butler (नौकर, भण्डारी)</option>
                    <option>Carder (दांतेदार कंधोंवाला मशीन, धुनिया)</option>
                    <option>Carpenter (बढ़ई)</option>
                    <option>Carrier (वाहक, माल ढोने वाला)</option>
                    <option>Cashier (केशियर, रोकड़िया (खजांची) )</option>
                    <option>Chauffeur (कर चालक)</option>
                    <option>Chemist (रसायनज्ञ, रसायनी)</option>
                    <option>Cleaner (सफाई वाला)</option>
                    <option>Clerk (मुन्शी, लिपिक, मुहर्रिर)</option>
                    <option>Coachman (कोचवान, गाड़ीवान)</option>
                    <option>Cobbler (मोची)</option>
                    <option>Compositor (अक्षरयोजक,)</option>
                    <option>Compounder (औषधि बनाने वाला)</option>
                    <option>Conductor (कंडक्टर, बस का टिकट देने वाला)</option>
                    <option>Confectioner (हलवाई)</option>
                    <option>Constable (सिपाही, पुलिस का सिपाही, आरक्षक)</option>
                    <option>Contractor (ठेकेदार)</option>
                    <option>Cook (रसोइया)</option>
                    <option>Coolies (कुली)</option>
                    <option>Dancer (नाचने वाला)</option>
                    <option>Dentist (दंतचिकित्सक)</option>
                    <option>Doctor (चिकित्सक, डाक्टर)</option>
                    <option>Draftsman (लेखक, नक्शानवीस)</option>
                    <option>Dramatist (नाटककार)</option>
                    <option>Draper (बज़ाज़)</option>
                    <option> Druggist/chemist (अत्तार/दवा की दुकान, दवा विक्रेता)</option>
                    <option>Dyer (रंगरेज़)</option>
                    <option>Editor (संपादक)</option>
                    <option>Enameller (मीनाकार)</option>
                    <option>Engineer (इंजीनियर, अभियन्ता)</option>
                    <option>Examiner (परीक्षक)</option>
                    <option>Farmer (किसान)</option>
                    <option>Fisherman (मछुआ)</option>
                    <option>Gardener (माली)</option>
                    <option>Glazier (कांच का काम करनेवाला, शीशा लगाने वाला)</option>
                    <option>Goldsmith (सुनार)</option>
                    <option>Green vendor (ग्रीन वेंडर, कुंजड़ा)</option>
                    <option>Hawker (फेरीवाला)</option>
                    <option>Inkman (स्याहीवाला, रोशनाई वाला)</option>
                    <option>Inspector (निरीक्षक)</option>
                    <option>Jeweller (जौहरी)</option>
                    <option>Magician (जादूगर)</option>
                    <option>Manager (प्रबन्धकर्ता)</option>
                    <option>Mason (मकानबनाने वाला, राजमिस्त्री)</option>
                    <option>Mechanic (मिस्त्री)</option>
                    <option>Merchant (सोदागर)</option>
                    <option>Messenger (दूत)</option>
                    <option>Midwife (दाई)</option>
                    <option>Musician (संगीतकार)</option>
                    <option>Newspapervendor (अखबार विक्रेता, अखबार वाला)</option>
                    <option>Novelist (उपन्यासकार)</option>
                    <option>Nurse (नर्स,धाय)</option>
                    <option>Oilman (ओइलमैन, तेली)</option>
                    <option>Operator (ऑपरेटर, मशीन चलाने वाला)</option>
                    <option>Painter (चित्रकार, रंगसाज)</option>
                    <option>Peon (चपरासी)</option>
                    <option>Perfumer (गंधी)</option>
                    <option>Photographer (फोटोग्राफर, फोटों खींचने वाला)</option>
                    <option>Physician (चिकित्सक, डाक्टर, वेध)</option>
                    <option>Poet (कवि)</option>
                    <option>Politician (राजनीतिज्ञ)</option>
                    <option>Postman (डाकिया)</option>
                    <option>Potter (कुम्हार)</option>
                    <option>Priest (पुजारी, पुरोहित)</option>
                    <option>Printer (मुद्रक)</option>
                    <option>Prose-writer (गद्य-लेखक)</option>
                    <option>Publisher (प्रकाशक)</option>
                    <option>Retailer (फुटकर विक्रेता, खुदरा फरोश)</option>
                    <option>Sailor (नाविक, मांझी (जहाज़ी) )</option>
                    <option>Sanitaryinspector (स्वच्छता निरीक्षक, सफाई का दरोगा)</option>
                    <option>Sculptor (संगतराश)</option>
                    <option>Seedsman (बीज-विक्रेता)</option>
                    <option>Shoe-maker (जूता निर्माता)</option>
                    <option>Shopkeeper (दुकानदार)</option>
                    <option>Surgeon (शल्य चिकित्सक, जर्राह, वेध)</option>
                    <option>Sweeper (मेहतर)</option>
                    <option>Table player (तालिका खिलाड़ी, तबलची)</option>
                    <option>Tailor (दर्जी)</option>
                    <option>Teacher (अध्यापक, शिक्षक)</option>
                    <option>TrainTicket Examiner, T.T.E. (ट्रेन टिकट परीक्षक)</option>
                    <option>Treasurer (कोषाध्यक्ष, खजांची)</option>
                    <option>Turner (टर्नर, खरादने वाला)</option>
                    <option>Vaccinator (चेचक के टिके लगाने वाला)</option>
                    <option>Waiter (वेटर, होटल में खाना खिलाने वाला)</option>
                    <option>Washerman (धोबी)</option>
                    <option>Washerwoman (धोबिन)</option>
                    <option>Watchman (चौकीदार)</option>
                    <option>Watercarrier (जल वाहक, महरा)</option>
                    <option>Weaver (जुलाहा)</option>
                    <option>Writer (लेखक)</option>
                    <option>Housewife (गृहिणी)</option>
                    <option>Student (विद्यार्थी)</option>
                    <option>Florist (पुष्पविक्रेता)</option>
                    <option>Judge (न्यायमूर्ति)</option>
                    <option>Journalist (संवाददाता, पत्रकार)</option>
                    <option>Pharmacist (औषध विक्रेता)</option>
                    <option>Soldierman (सैनिक)</option>
                    <option>Accountant (मुनीम,लेखपाल)</option>
                    <option>Driver (चालक)</option>
                    <option>Secretary (सचिव)</option>
                    <option>Assistant (सहायक)</option>
                    <option>Translator (अनुवादक)</option>
                    <option>Worker (श्रमिक)</option>
                    <option>Plumber (नलसाज)</option>
                    <option>Pilot (पायलट, विमान चालक)</option>
                    <option>Lecturer (व्याख्याता)</option>
                    <option>Government employee (?????? ????????)</option>
                    <option>Private employee (???? ????????)</option>
                    <option>Other Work (???? ???)</option>
                </select>
            </div>

            <div class="input-two">
                <label for="dateInput"> मोबाईल नम्बर #1 (MOBILE NUMBER) <span>*</span> </label>
                <input type="text" required>
            </div>


        </div>

        <!----- INPUT - BOX - FIVE ----->

        <div class="input-box">

            <div class="input-one">
                <label for="dateInput">मोबाईल नम्बर #2 (NOMINEE) नामिनी</label>
                <input type="text">
            </div>

            <div class="input-two">
                <label>ईमेल पता (EMAIL ADDRESS)</label>
                <input type="text">
            </div>


        </div>

        <!----- INPUT - BOX - SIX ----->

        <div class="input-box">

            <div class="input-one">
                <label>वेबसाइट (WEBSITE)</label>
                <input type="text">
            </div>


        </div>

        <!----------- ADDRESS - SECTION - STARTS ----------->
        <h2>घर का पता (HOME ADDRESS)</h2>

        <!----- INPUT - BOX - SEVEN ----->

        <div class="input-box">

            <div class="input-two">
                <label> राज्य (State) <span>*</span> </label>
                <input type="text" value="उत्तर प्रदेश" disabled>
            </div>

            <div class="input-one">
                <label>आईडी का प्रकार (ID Type) <span>*</span></label>
                <select>
                    <option>---Select District---</option>
                    <option>Agra</option>
                    <option>Aligarh</option>
                    <option>Ambedkar Nagar</option>
                    <option>Amethi</option>
                    <option>Amroha</option>
                    <option>Auraiya</option>
                    <option>Ayodhya</option>
                    <option>Azamgarh</option>
                    <option>Baghpat</option>
                    <option>Bahraich</option>
                    <option>Ballia</option>
                    <option>Balrampur</option>
                    <option>Banda</option>
                    <option>Bara Banki</option>
                    <option>Bareilly</option>
                    <option>Basti</option>
                    <option>Bhadohi</option>
                    <option>Bijnor</option>
                    <option>Budaun</option>
                    <option>Bulandshahr</option>
                    <option>Chandauli</option>
                    <option>Chitrakoot</option>
                    <option>Deoria</option>
                    <option>Etah</option>
                    <option>Etawah</option>
                    <option>Farrukhabad</option>
                    <option>Fatehpur</option>
                    <option>Firozabad</option>
                    <option>Gautam Buddha Nagar</option>
                    <option>Ghaziabad</option>
                    <option>Ghazipur</option>
                    <option>Gonda</option>
                    <option>Gorakhpur</option>
                    <option>Hamirpur</option>
                    <option>Hapur</option>
                    <option>Hardoi</option>
                    <option>Hathras</option>
                    <option>Jalaun</option>
                    <option>Jaunpur</option>
                    <option>Jhansi</option>
                    <option>Kannauj</option>
                    <option>Kanpur Dehat</option>
                    <option>Kanpur Nagar</option>
                    <option>Kasganj</option>
                    <option>Kaushambi</option>
                    <option>Kheri</option>
                    <option>Kushinagar</option>
                    <option>Lalitpur</option>
                    <option>Lucknow</option>
                    <option>Mahoba</option>
                    <option>Mahrajganj</option>
                    <option>Mainpuri</option>
                    <option>Mathura</option>
                    <option>Mau</option>
                    <option>Meerut</option>
                    <option>Mirzapur</option>
                    <option>Moradabad</option>
                    <option>Muzaffarnagar</option>
                    <option>Pilibhit</option>
                    <option>Pratapgarh</option>
                    <option>Prayagraj</option>
                    <option>Rae Bareli</option>
                    <option>Rampur</option>
                    <option>Saharanpur</option>
                    <option>Sambhal</option>
                    <option>Sant Kabir Nagar</option>
                    <option>Shahjahanpur</option>
                    <option>Shamli</option>
                    <option>Shrawasti</option>
                    <option>Siddharthnagar</option>
                    <option>Sitapur</option>
                    <option>Sonbhadra</option>
                    <option>Sultanpur</option>
                    <option>Unnao</option>
                    <option>Varanasi</option>
                </select>
            </div>

        </div>

        <!----- INPUT - BOX - EIGHT ----->

        <div class="input-box">
            <div class="input-one">
                <label>तहसील (Tahsil) <span>*</span></label>
                <input type="text" required>
            </div>

            <div class="input-two">
                <label>
                    पिन कोड (Pin Code) </label>
                <input type="text" required>
            </div>
        </div>

        <!----- INPUT - BOX - NINE ----->

        <div class="input-box">

            <div class="input-one">
                <label>पता (ADDRESS) <span>*</span></label>
                <input type="text" required>
            </div>


        </div>


        <!----------- ADDRESS - SECTION - ENDS ----------->


        <!-- WORK - ADDRESS - SECTION - STARTS -->

        <h2>कार्य स्थल का पता (WORK ADDRESS )</h2>

        <!----- INPUT - BOX - TEN ----->

        <div class="input-box">
            <div class="input-one">
                <label>देश (Country)</label>
                <select>
                    <option>---Select Country---
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Antigua and Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>The Bahamas</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Benin</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia and Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brazil</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burundi</option>
                    <option>Cabo Verde</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Central African Republic</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Congo, Democratic Republic of the</option>
                    <option>Congo, Republic of the</option>
                    <option>Costa Rica</option>
                    <option>Côte d’Ivoire</option>
                    <option>Croatia</option>
                    <option>Cuba</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>East Timor (Timor-Leste)</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Salvador</option>
                    <option>Equatorial Guinea</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Eswatini</option>
                    <option>Ethiopia</option>
                    <option>Fiji</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>Gabon</option>
                    <option>The Gambia</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Greece</option>
                    <option>Grenada</option>
                    <option>Guatemala</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>Korea, North</option>
                    <option>Korea, South</option>
                    <option>Kosovo</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Laos</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Marshall Islands</option>
                    <option>Mauritania</option>
                    <option>Mauritius</option>
                    <option>Mexico</option>
                    <option>Micronesia, Federated States of</option>
                    <option>Moldova</option>
                    <option>Monaco</option>
                    <option>Mongolia</option>
                    <option>Montenegro</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Myanmar (Burma)</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option>Nigeria</option>
                    <option>North Macedonia</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Palau</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Qatar</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Saint Kitts and Nevis</option>
                    <option>Saint Lucia</option>
                    <option>Saint Vincent and the Grenadines</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Sao Tome and Principe</option>
                    <option>Saudi Arabia</option>
                    <option>Senegal</option>
                    <option>Serbia</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Africa</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>Sudan</option>
                    <option>Sudan, South</option>
                    <option>Suriname</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tonga</option>
                    <option>Trinidad and Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Tuvalu</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>Uruguay</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Vatican City</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Yemen</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                </select>
            </div>

            <div class="input-two">
                <label> राज्य (State)</label>
                <input type="text">
            </div>
        </div>

        <!----- INPUT - BOX - ELEVEN ----->

        <div class="input-box">
            <div class="input-one">
                <label>जनपद (DISTRICT)</label>
                <input type="text">
            </div>

            <div class="input-two">
                <label> तहसील (Tahsil) </label>
                <input type="text">
            </div>

            <div class="input-two">
                <label> पिन कोड (Pin Code) </label>
                <input type="text">
            </div>
        </div>

        <!----- INPUT - BOX - TWELVE ----->

        <div class="input-box">
            <div class="input-one">
                <label>पता (ADDRESS)</label>
                <input type="text">
            </div>
        </div>

        <!--- WORK - ADDRESS - SECTION - ENDS --->

        <!--- FIRST - NOMINEE - STARTS --->

        <h2>पहला नामिनी (FIRST NOMINEE)</h2>

        <!----- INPUT - BOX - 13 ----->

        <div class="input-box">
            <div class="input-one">
                <label>नामिनी का नाम (NOMINEE NAME) <span>*</span></label>
                <input type="text">
            </div>

            <div class="input-two">
                <label> नामिनी का संबंध (NOMINEE'S RELATION) <span>*</span> </label>
                <input type="text">
            </div>
        </div>

        <!----- INPUT - BOX - 14 ----->

        <div class="input-box">
            <div class="input-one">
                <label>आईडी का प्रकार (ID Type) <span>*</span></label>
                <select required>
                    <option value="Select-ID-Type">---Select ID Type---</option>
                    <option value="PAN">PAN CARD</option>
                    <option value="DL">DRIVING LICENCE</option>
                    <option value="AAD">AADHAAR CARD</option>
                    <option value="PASS">PASSPORT</option>
                    <option value="RATION">RATION CARD</option>
                    <option value="OTHERS">OTHER</option>
                </select>
            </div>

            <div class="input-two">
                <label> आई डी नO (ID No) <span>*</span> </label>
                <input type="text">
            </div>
        </div>

        <!---- FIRST - NOMINEE - ENDS ---->

        <!--- SECOND - NOMINEE - STARTS --->

        <h2>पहला नामिनी (SECOND NOMINEE)</h2>

        <!----- INPUT - BOX - 15 ----->

        <div class="input-box">
            <div class="input-one">
                <label>नामिनी का नाम (NOMINEE NAME) </label>
                <input type="text">
            </div>

            <div class="input-two">
                <label> नामिनी का संबंध (NOMINEE'S RELATION) </label>
                <input type="text">
            </div>
        </div>

        <!----- INPUT - BOX - 16 ----->

        <div class="input-box">
            <div class="input-one">
                <label>आईडी का प्रकार (ID Type) <span>*</span></label>
                <select>
                    <option value="Select-ID-Type">---Select ID Type---</option>
                    <option value="PAN">PAN CARD</option>
                    <option value="DL">DRIVING LICENCE</option>
                    <option value="AAD">AADHAAR CARD</option>
                    <option value="PASS">PASSPORT</option>
                    <option value="RATION">RATION CARD</option>
                    <option value="OTHERS">OTHER</option>
                </select>
            </div>

            <div class="input-two">
                <label> आई डी नO (ID No)</label>
                <input type="text">
            </div>
        </div>

        <!---- SECOND - NOMINEE - ENDS ---->

        <!-- OTHERS - SECTION - STARTS -->

        <h2>अन्य (OTHERS)</h2>

        <!----- INPUT - BOX - 17 ----->

        <div class="input-box">
            <div class="input-one">
                <label>पासवर्ड बनाएं (Create Password)</label>
                <input type="password">
            </div>
        </div>

        <!----- INPUT - BOX - 18 ----->

        <div class="input-box">
            <div class="input-one">
                <label>क्या असाध्य रोग से ग्रसित हैं ? रोग का नाम और शुरुआत का समय (माह / वर्ष) तथा इलाज कर रहे डॉ0 का नाम व
                    स्थान लिखें।</label>
                <textarea></textarea>
            </div>
        </div>
        <!----- INPUT - BOX - 19 ----->

        <div class="input-box" id="input-file">
            <div class="input-two">
                <label>फोटोयुक्त परिचय - पत्र (I CARD) <span>*</span></label>
                <input type="file" required>
            </div>
        </div>


        <!----- INPUT - BOX - 20 ----->

        <div class="confirm-box" >
                <input type="checkbox" checked="checked">
                <div class="Text">
                    मैंने KHD से जुड़ने, सहयोग करने सम्बधी जानकारी प्राप्त कर ली है। मैंने वेबसाइट पर
                    <a href="#">नियमावली (MANUAL)</a>
                    को पढ़ लिया है, मैं सभी नियम एवं शर्तो से सहमत हूं। मै आधिकारिक टेलीग्राम ग्रुप से जुड़कर सप्ताह मे कम
                    से कम दो बार अवश्य विज़िट करके जानकारी से अपडेट रहूँगा। यदि KHD द्वारा बनाए गए नियमों के अंतर्गत मै
                    सहयोग नहीं करता हूँ तो मेरे नॉमिनी द्वारा सहयोग प्राप्त करने का दावा नहीं किया जाएगा।
                </div>
        </div>

        <!-- BUTTON -->

            <button>Submit</button>

        <!--- OTHERS - SECTION - ENDS --->


    </form>

    <!-------------- FORM - SECTION - ENDS -------------->



  <!-- footer-------------- -->
  <?php
       require './reuse/footer.php'
     ?>
    <!-- footer---------- -->



</body>

<script src="./Assist//JS/registration.js"></script>

</html>