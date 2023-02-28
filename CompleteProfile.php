<?php 
    include('connexion.php');
    session_start();
?>
<!-- N142043297 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/ECSA.png" type="image/x-icon">
        <link rel="stylesheet" href="css/styleda.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
</head>
<style>
    body{
    padding: 30px;
    padding-left:150px ;
    }
    label{
        color: black;
    }
    span{
        color:#6a6c71;
        font-size: 14px;
        margin-left: 200px;
    }
    .form-control{
        width: 100%;
    }
    
    
</style>
<body>
    <?php include('ProfileMenu.php');?>
    <h1 style="font-size: 30px;" >Basic Account Information </h1>
    <h6 style="color: grey; font-weight:300;"> These settings include basic information about your account </h6>
    <br><br>

    <h6 style="color: grey; font-weight:300;"> Username : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The name that identifies you on ECA Skills. You cannot change your username. </h6>
    <h1 style="font-size: 25px; font-weight:300;" > <?php echo $_SESSION['Nom'] ?> </h1>
    
    <br><br>

    <form class="form-inline" method="POST" enctype="multipart/form-data">

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Full Name </label>
            </div>
            <div style="display: flex;" >
                <div class="col-auto">
                    <input type="text" disabled name="FullName" value='<?php echo $_SESSION["Nom"] .'&nbsp;'. $_SESSION["Prenom"]  ?>'  class="form-control" >
                </div>
                <div class="col-auto">
                    <span  class="form-text">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The name that it is used for ID verification and that appears on your certificates. 
                    </span>
                </div>
            </div> 
        </div>

        <br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Email Address (Sign In)</label>
            </div>
            <div style="display: flex;">
                <div class="col-auto">
                    <input type="text" disabled name="FullName" value='<?php echo $_SESSION["Email"]  ?>'  class="form-control" >
                </div>
                <div class="col-auto">
                    <span  class="form-text">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You receive messages from ECA Skills and course teams at this address. 
                    </span>
                </div>
            </div> 
        </div>

        <br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Password</label>
            </div>
            <div style="display: flex;">
                <div class="col-auto">
                    <input type="password" name="psswd" class="form-control" >
                </div>
                <div style="margin-left: 500px;" class="col-12">   
                        <button style="padding:10px; " class="btn btn-secondary " name="Envoyer1"  type="submit" > 
                            Reset your password
                        </button>            
                </div>
            </div>
        </div>

        <?php 
            if  ( !empty($_POST['psswd']) & isset($_POST['Envoyer1']) )
            {
                $new_pass=md5($_POST['psswd']);
                $reqe=$c->prepare("UPDATE `newstudents` SET `Password`=:val1 WHERE `CNE`=:val2 ");
                $reqe->execute(array(':val1'=>$new_pass,':val2'=>$_SESSION['ID']));
                if ($_SESSION['etu_or_instr']=='etudiant')
                {
                    echo 'Your password has been reset successfully';
                }
                elseif ($_SESSION['etu_or_instr']=='instructeur')
                {
                    echo 'Your password has been reset successfully';
                }  
            } 
        ?>
        <br><br>

        <div class="align-items-center">
            <div class="col-auto">
                <label for="formFile" class="form-label">Import your profile image</label>
                <input class="form-control" type="file" name="image" id="formFile">
            </div>
        </div>


        
        <br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label"> Language </label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <select style="width: 500px;" name="langage" class="form-select" aria-label="Default select example">
                        <option >Select Your Langage</option>
                        <option value="english">English</option>
                        <option value="français">Français</option>
                        <option value="español">Espagñol</option>
                    </select>
                </div> 
            </div> 
        </div>

        
        <br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Country of origin</label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <select style="width: 500px;" name="country" class="form-select" aria-label="Default select example">
                        <option >Select Your Country</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </select>
                </div> 
            </div> 
        </div>

    <br><br><br><br>

        <h1 style="font-size: 30px;" > Additional Information </h1>
        <h6 style="color: grey; font-weight:300;">Let us know more about you </h6>

        <br><br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Education</label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <select style="width: 500px;" name="education" class="form-select" aria-label="Default select example">
                        <option value="api1">Integrated Preparatory Cycle - 1st year</option>                    
                        <option value="api2"> Integrated Preparatory Cycle - 2nd year</option>                
                        <option value="ci1">Engineering Cycle - 1st year</option>                
                        <option value="ci2">Engineering Cycle - 2nd year</option>               
                        <option value="ci3">Engineering Cycle - 3rd year</option>
                        <option selected value="other">Other</option>
                    </select>
                </div> 
            </div> 
        </div>

        <br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Gender</label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <select style="width: 500px;" class="form-select" name="gender" aria-label="Default select example">
                        <option selected>Select your gender</option>                  
                        <option value="male">Male</option>                    
                        <option value="female">Female</option>                           
                        
                    </select>
                </div> 
            </div> 
        </div>


        <br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Year of birth </label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <select style="width: 500px;" class="form-select" name="BirthYear" aria-label="Default select example">
                        <option>Year</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>                
                    </select>
                </div> 
            </div> 
        </div>
        <br><br>
        <button style="padding:10px; " class="btn btn-secondary" name="Envoyer2" type="submit" > 
            Confirm your changes
        </button>  
    </form>

    <?php

        function test_input($var) 
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }

        if ( !empty($_FILES['image']['name']) & !empty($_POST['langage']) & !empty($_POST['country']) & isset($_POST['Envoyer2']) & !empty($_POST['gender']) & !empty($_POST['BirthYear']) & !empty($_POST['education']) )
        {
            // var_dump($_FILES);
            $Certif=$_FILES["image"]["name"];
            $extension=pathinfo($Certif, PATHINFO_EXTENSION);
            $file_extension=strtolower(strchr($Certif,"."));
            $extensios_autorise=array('.png','.jpg','.jpeg');
            $randomno=rand(0,100);
            $rename='ECSA-'.date('Ymd'). $randomno;
            $newname=$rename.'.'.$extension;
            $file_temp_name=$_FILES['image']['tmp_name'];
            $file_dest='profils/'.$newname;

            $langage=$_POST['langage'];
            $country=$_POST['country'];
            $gender=$_POST['gender'];
            $year=$_POST['BirthYear'];
            $education=$_POST['education'];

            if ( in_array($file_extension,$extensios_autorise) )
            {
                if(move_uploaded_file($file_temp_name,$file_dest))
                {
                    $statement1 = $sq->prepare("UPDATE `newstudents` SET ProfileImg=:img , Country=:country, Education=:educ, BirthYear=:birth, Langage=:lang, Gender=:gen WHERE CNE=:cne ");
                    $statement1->execute(array(':img'=>$newname,'country'=>$country,':educ'=>$education,':birth'=>$year,':lang'=>$langage,':gen'=>$gender,':cne'=>$_SESSION['ID']));
                    echo "Your account details have been saved.";
                }

            }else{
                echo "Only these extensions: .png/.jpg/.jpeg are autorised";
            }
            
        }

    
    
    ?>


</body>
</html>