<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | SpayAI</title>

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="shortcut icon" href="../img/logo/shortcut-icon.png">

    <!-- Meta Tags -->

    <meta name="description" content="Contact with SpayAI for Business">
    <meta name="keywords" content="SpayAI, SpayAI Inc., SpayAI Contact, Contact SpayAI, NuruCare, Nuru HealthCare, Nuru, Machine Learning, AI">
    <meta name="author" content="SpayAI">
    <meta property="og:title" content="Contact | SpayAI">
    <meta property="og:description" content="The most powerful version of Nuru yet, with enterprise-level security and privacy.">
    <meta property="og:keywords" content="SpayAI, SpayAI Inc., SpayAI Contact, Contact SpayAI, NuruCare, Nuru HealthCare, Nuru, Machine Learning, AI">
    <meta property="og:site_name" content="SpayAI Inc.">
    <meta property="og:url" content="https://spayai.com/contact">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://spayai.com/img/logo/SpayAI%20Logo.png">
    <meta property="article:section" content="Contact">
    <meta name="theme-color" content="#FFFFFF">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@SpayAI">
    <meta name="twitter:image" content="https://spayai.com/img/nuru-photos/safety.io.png">

    <!-- Meta Tags -->
</head>
<body>
    <section class="notification" id="notification">
        <button id="closeNotification">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496"/></svg>
        </button>
        <div class="notification-container">
            <div class="notification-content">
                <p id="notificationText"></p>
            </div>
        </div>
    </section>
    <nav class="relative">
        <?php include("../layouts/navbar.html") ?>
    </nav>
    <section class="contact section-container">
        <div class="contact-container">
            <div class="contact-details">
                <h1 class="subTitle">Contact</h1>
                <form action="" method="post" class="form">
                    <div class="inputBx">
                        <label for="name">First Name</label>
                        <input type="text" id="name">
                    </div>
                    <div class="inputBx">
                        <label for="surname">Last Name</label>
                        <input type="text" id="surname">
                    </div>
                    <div class="inputBx">
                        <label for="email_business">Business Email</label>
                        <input type="email" id="email_business">
                    </div>
                    <div class="inputBx">
                        <label for="company_name">Company Name</label>
                        <input type="text" id="company_name">
                    </div>
                    <div class="inputBx">
                        <label for="job">Job Title</label>
                        <input type="text" id="job">
                    </div>
                    <div class="inputBx">
                        <label for="company_web">Company Website</label>
                        <input type="text" id="company_web">
                    </div>
                    <div class="inputBx">
                        <label for="company_size">Company Size</label>
                        <select name="company_size" id="company_size">
                            <option selected disabled>Selected a size...</option>
                            <option value="1-50">1-50</option>
                            <option value="51-150">51-150</option>
                            <option value="151-500">151-500</option>
                            <option value="501-1,000">501-1,000</option>
                            <option value="1,001-5,000">1,001-5,000</option>
                            <option value="5,001-20,000">5,001-20,000</option>
                            <option value="20,001+">20,001+</option>
                        </select>
                    </div>
                    <div class="inputBx">
                        <label for="industry">Industry</label>
                        <select name="industry" id="industry">
                            <option selected disabled>Select an industry…</option>
                            <option value="Biotechnology">Biotechnology</option>
                            <option value="Consulting">Consulting</option>
                            <option value="Education">Education</option>
                            <option value="Finance">Finance</option>
                            <option value="Food Beverage">Food Beverage</option>
                            <option value="Government">Government</option>
                            <option value="Healthcare">Healthcare</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Law">Law</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Media">Media</option>
                            <option value="Nonprofit Organization">Nonprofit Organization</option>
                            <option value="Technology">Technology</option>
                            <option value="Telecom">Telecom</option>
                            <option value="Other">Other</option>
                            <option value="Sports">Sports</option>
                            <option value="Real estate">Real estate</option>
                            <option value="Retail">Retail</option>
                        </select>
                    </div>
                    <div class="inputBx">
                        <label for="company_hq_location">Company HQ Location</label>
                        <select name="company_hq_location" id="company_hq_location">
                            <option selected disabled>Select a country…</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cabo Verde">Cabo Verde</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option><option value="Costa Rica">Costa Rica</option><option value="Côte d’Ivoire">Côte d’Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option><option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Eswatini (formerly Swaziland)">Eswatini (formerly Swaziland)</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="North Korea">North Korea</option><option value="North Macedonia">North Macedonia</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States of America">United States of America</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="inputBx">
                        <label for="products">Which of our products or services are you interested in ? </label>
                        <select name="products" id="products">
                            <option selected disabled>Select a product…</option>
                            <option value="SpayAI">SpayAI Enterprise</option>
                            <option value="API">API for Enterprise</option>
                        </select>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div class="contact-img">
                
            </div>
        </div>
    </section>
    <?php include("../layouts/footer.html"); ?>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/contact.js"></script>
</body>
</html>