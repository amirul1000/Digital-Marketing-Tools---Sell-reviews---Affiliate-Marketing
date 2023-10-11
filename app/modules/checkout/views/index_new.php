<!-- get Header top menu -->
<?php
  $data_link = (object)array(
    'link'  => cn($module),
    'name'  => lang('Checkout')
  );
?>

<style>
    .auth_icons {
        position: absolute !important;
        top: 50% !important;
        left: 10px !important;
        transform: translateY(-50%);
        color: #0091d1 !important;
        font-size: 16px !important;
        background: linear-gradient(rgb(251, 251, 251), rgb(236, 236, 236), rgb(206, 206, 206)) 0% 0% repeat scroll transparent;
        height: 100%;
        width: 30px;
        margin-left: -10px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-right: 1px solid #0091d1;
    }
    .tr-form-group {
        position: relative;
        border: 1px solid #0091d1;
        border-radius: 5px;
        overflow: hidden;
    }
    .loginFormWrapper input, .signUpBoxWrapper input {
        padding: 7px !important;
        padding-left: 40px !important;
        border: 0 !important;
    }
</style>

<section class="checkoutSection">
    <?php echo Modules::run("blocks/user_header_top_new", $data_link); ?>
    <div class="container">
        <p style="text-align: left;margin-left: 10px;">Please Review Order Summary again before entering checkout information.</p>
    </div>
    <div class="container">
        <div class="col-md-12 checkoutWrapper">
          <div>
            <div style="text-align: center;">
              <h4 class="booking-form-heading">
                CHECKOUT INFORMATION
              </h4>
              <form id="loginForm" class="loginForms" action="">
                <div class="loginFormWrapper" style="border: 1px solid #0091d1">
                  <div class="loginFormRow">
                    <p style="font-size: 15px;width: 160px;font-weight: bold;">Already an Account?</p>
                    <div class="tr-form-group">
                      <span class="fa fa-envelope auth_icons"></span>
                      <input
                        type="email"
                        name="loginEmail"
                        value=""
                        id="l_email"
                        placeholder="Email *"
                        class="ajaxField required"
                        style="border: 0 !important;"
                      />
                    </div>
                    <div class="tr-form-group">
                      <span class="fa fa-lock auth_icons"></span>
                      <input
                        type="password"
                        name="loginPassword"
                        value=""
                        id="l_password"
                        placeholder="Password *"
                        class="ajaxField required"
                        style="border: 0 !important;"
                      />
                    </div>
                    <!-- <div>
                      <input type="email" name="checkoutEmail" id="checkoutEmail" class="ajaxField required" placeholder="Email...">
                    </div>
                    <div>
                      <input type="password" name="checkoutPassword" class="ajaxField required" id="checkoutPassword">
                    </div> -->
                    <div>
                      <button class="authButton">Login</button>
                      <p><a href="<?= cn('forgotpassword') ?>">Forgot Password?</a></p>
                    </div>
                  </div>
                </div>
              
              </form>
              <!-- <button class="authButton">Signup</button> -->
              
            </div>
            <form
              id="checkoutForm"
              class="form-validate"
              method="post"
              action="mailhandler.php"
              style="max-width: 100% !important;border-top: none !important;"
            >
              
              <div class="">
                <div class="message">
                  <div class="send-success" id="o_success">
                    <img class="msgIcon" src="<?php echo BASE ?>themes/review/assets/images/doneIcon.png" alt="" srcset=""> Nous avons bien reçu votre demande de réservation, nous
                    reviendrons vers vous dés que possible
                  </div>
                </div>
                <div class="message">
                  <div class="send-error" id="o_fail">
                    <img class="msgIcon" src="<?php echo BASE ?>themes/review/assets/images/dangerIcon.png" alt="" srcset=""> Please fill out all the required fields
                  </div>
                </div>
    
              
                
                <!-- <div class="checkoutDivider"></div> -->
                
                <div class="signUpBox"> 
                  <div class="signUpBoxWrapper" style="border: 1px solid #0091d1">
                    <p style="font-weight: bold;">Not an Account yet ? Signup Now : </p>
                  <div class="row form-with-labels typeMar" style="display: flex;">
                    <div class="col" style="width: 80px;">
                      <div class="form-group form-problem">
                        <select name="gender" id="gender2" class="ajaxField disable-arrow">
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                        </select>
                        <span class="carets custom-arrow"></span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group tr-form-group">
                        <span class="fa fa-user auth_icons"></span>
                        <input
                          type="text"
                          name="firstName"
                          value=""
                          id="o_firstName"
                          placeholder="First Name *"
                          class="ajaxField required"
                          style="border: 0 !important;"
                        />
                      </div>
                    </div>
      
                    <div class="col">
                      <div class="form-group tr-form-group">
                        <span class="fa fa-user auth_icons"></span>
                        <input
                          type="text"
                          name="lastName"
                          id="o_lastName"
                          value=""
                          placeholder="Last Name *"
                          class="ajaxField required"
                          style="border: 0 !important;"
                        />
                      </div>
                    </div>
                    <div class="col">
                        <div class="form-group tr-form-group">
                          <span class="fa fa-building auth_icons"></span>
                          <input
                            type="text"
                            name="company"
                            id="o_company"
                            value=""
                            placeholder="Company "
                            class="ajaxField "
                            style="border: 0 !important;"
                          />
                        </div>
                      </div>
                  </div>
                
                  <div class="row form-with-labels">
                    <div class="col-md-12">
                      <div class="form-group tr-form-group">
                        <span class="fa fa-location-dot auth_icons"></span>
                        <input
                          type="text"
                          name="o_address1"
                          value=""
                          id="o_address1"
                          placeholder="Address 1 *"
                          class="ajaxField required"
                          style="border: 0 !important;"
                        />
                      </div>
                      
                    </div>
                    
                  </div>
                  <div class="row form-with-labels">
                    <div class="col-md-12">
                      <div class="form-group tr-form-group">
                        <span class="fa fa-location-dot auth_icons"></span>
                        <input
                          type="text"
                          name="o_address2"
                          value=""
                          id="o_address2"
                          placeholder="Address 2 "
                          class="ajaxField"
                          style="border: 0 !important;"
                        />
                      </div>
                      
                    </div>
                    
                  </div>
                  
                  <div class="row form-with-labels">
                    
                    <div class="col-md-4">
                        <div class="form-group tr-form-group">
                            <span class="fa-solid fa-location-dot auth_icons"></span>
                            <input
                              type="text"
                              name="zip"
                              value=""
                              id="o_zip"
                              placeholder="Zip Code *"
                              class="ajaxField required"
                              style="border: 0 !important;"
                            />
                          </div>
                        </div>
                    <div class="col-md-4">
                        <div class="form-group tr-form-group">
                            <span class="fa fa-location-dot auth_icons"></span>
                            <input
                              type="text"
                              name="o_city"
                              value=""
                              id="o_city"
                              placeholder="City *"
                              class="ajaxField required"
                              style="border: 0 !important;"
                            />
                          </div>
                      </div>
                      <div class="col-md-4">
                        <select
                          name="platform"
                          id="platform"
                          class="ajaxField required form-group disable-arrow"
                          aria-placeholder=""
                          style="text-align: left"
                        >
                          <option
                            selected="selected"
                            value=""
                          >
                            Country *
                          </option>
                          <option>Select Country</option><option value="AF">Afghanistan</option><option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Sint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, Democratic Republic of the Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curacao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic Peoples Republic of</option><option value="KR">Korea, Republic of</option><option value="XK">Kosovo</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao Peoples Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia, the Former Yugoslav Republic of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States of</option><option value="MD">Moldova, Republic of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthelemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="CS">Serbia and Montenegro</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan, Province of China</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.s.</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                          
                        </select>
                        <span
                        class="carets custom-arrow"
                      ></span>
                      </div>
                  
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-md-12">
                      <input type="checkbox" name="" id="1" checked>
                      <p style="display: inline-block;">By clicking I agree website <a target="_blank" href="<?= cn('privacy') ?>">Privacy Policy</a>  </p>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-md-12">
                      <input type="checkbox" name="" id="2" checked>
                      <p style="display: inline-block;">By Clicking I agree to our <a target="_blank" href="<?= cn('terms') ?>">Terms of Service.</a></p>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- <div class="checkoutDivider"></div> -->
                
                <div class="signUpBox">
                    <div class="signUpBoxWrapper" style="border: 1px solid #0091d1;overflow: unset;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo ('Payment Method'); ?> :</label>
                                    <select name="payment_id" id="select-payments" class="form-control custom-select">
                                      <?php 
                                        if ($payment_methods) {
                                          foreach ($payment_methods as $key => $row) {
                                      ?>
                                      <option value="<?php echo $row->id; ?>" data-data='{"image": "<?php echo BASE; ?>assets/images/payments/<?php echo $row->type; ?>.png"}'><?php echo $row->name; ?></option>
                                      <?php }}else{ ?>
                                      <option value="empty" data-data='{"image": "<?php echo BASE; ?>assets/images/payments/empty.png"}'><?php echo lang('empty'); ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div style="padding: 10px;">
                  <div class="row">
                    <div class="col-md-12">
                      <p style="display: inline-block;font-weight: bold;">Payment Informations :</p>
                    </div>
                  </div>
                  <div class="gradGrayBack">
                    <p class="paymentHeader" style="text-align: center;font-weight: bold;">Credit or Debit Card Payment</p>

                    <div class="row form-with-labels" style="display: flex;justify-content: center;padding: 0 10px;">
                      <div class="col-md-12">
                        <label for="o_creditNumber">Credit Card Number</label>
                        <div class="form-group">
                          
                          <input
                            type="text"
                            name="creditNumber"
                            value=""
                            id="o_creditNumber"
                            placeholder="Credit Card Number *"
                            class="ajaxField required"
                            style="padding: 7px;"
                          /><i style="position: absolute;top: 40px;right: 10px;color: #0091d1;;" class="fa-solid fa-credit-card"></i>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row form-with-labels" style="display: flex;justify-content: center;padding: 0 10px;">
                      <div class="col-md-6">
                        <label for="o_expiryDate">Expiry Date</label>
                        <div class="form-group">
                          <input
                            type="text"
                            name="expiryDate"
                            value=""
                            id="o_expiryDate"
                            placeholder="Expiry Date MM/YY*"
                            class="ajaxField required"
                          /><i style="position: absolute;top: 45px;right: 10px;color: #0091d1;;" class="fa-solid fa-credit-card"></i>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="o_cvCode">CV Code</label>
                        <div class="form-group">
                          <input
                            type="text"
                            name="cvCode"
                            value=""
                            id="o_cvCode"
                            placeholder="Cvv Code *"
                            class="ajaxField required"
                          /><i style="position: absolute;top: 45px;right: 10px;color: #0091d1;;" class="fa-solid fa-credit-card"></i>
                        </div>
                      </div>
                      
                    </div>

                    
                    
                    
                    
                    <input
                    type="submit"
                    name="submit"
                    id="submit-booking-btn"
                    value="Order Now"
                    class="btn btn-lg btn-black btn-white aligncenter btn-booking"
                    style="width: 120px;border: 1px solid #fff !important;"
                  />
                  <div class="row" style="text-align: center;">
                    <!-- <img
                      src="assets/images/securePayments-removebg-preview.png"
                      alt="Secure Payment"
                      srcset=""
                      style="width: 90px;"
                    /> -->
                    <img width="250px" src="<?php echo BASE ?>themes/review/assets/images/creditCardIcons.png" alt="" />
                    
                  </div>
                  </div>
                </div>
                
                
    
                
              </div>
            </form>
          </div>
            <div class="col-md-5">
                <div class="orderSummary">
                  <h4 class="booking-form-heading">
                    ORDER SUMMARY
                  </h4>
                  <div class="orderSummaryContent">
                    
                      <div style="padding: 20px 0 20px 0">
                        <div class="cartExpire" style="font-weight: bold">                                  
                          <img style="width: 50px;" src="https://www.ebiz.ac/hosted/images/90/554bb44f2f4555a87cfdb1fcf67a92/timer.gif" alt="" srcset="">
                          Cart will expire in <span id="countdown2">10:00</span> minutes !</div>
                      </div>
                        <p class="orderSummaryRow">
                          <span>Network :</span> <input value="Google" id="summaryNetwork" type="text">
                        </p>
                        <p class="orderSummaryRow">
                          <span>Category :</span> <input value="Google Maps Reviews" id="summaryCategory" type="text">
                        </p>
                        <p class="orderSummaryRow">
                          <span>Package :</span> <input value="100 Reviews" id="summaryPackage" type="text">
                        </p>
                        <p class="orderSummaryRow">
                          <span>Link :</span> <textarea
                        placeholder=""
                          name=""
                          id="link"
                          cols="30"
                          rows="3"
                          style="height: 65px;flex: 1;"
                          class="required"
                        >www.google.com</textarea>
                        </p>
                        <p class="orderSummaryRow">
                          <span>Option :</span> <input value="Custom" id="summaryOption" type="text">
                        </p>
                        
                        <p class="orderSummaryRow">
                          <span>Details :</span> <textarea
                          placeholder="Comment"
                          name=""
                          id="customReview"
                          cols="30"
                          rows="10"
                          style="height: 100px;flex: 1;"
                          class="required"
                          
                        >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, adipisci.</textarea>
                        </p>
                        <p class="orderSummaryRow">
                          <span>Promo Code:</span> <input style="width: 150px;" type="text">
                          <span class="applyBtn">Apply</span>
                        </p>

                        <div class="grayBack" style="display: flex;justify-content: center;align-items: center;padding: 10px; border-top: 1px solid #0091d1;">
                          <button class="buyNowBtn"><span class="pulseAnim">Limited Time <br> Offer</span></button>
                          <div style="display: flex;align-items: center;justify-content: center;">
                            <img style="width: 50px;" src="https://www.ebiz.ac/hosted/images/90/554bb44f2f4555a87cfdb1fcf67a92/timer.gif" alt="" srcset="">
                            <span class="packageTimer" style="display: inline-flex;flex-direction: column;line-height: 1.1; ">
                              <div class="flip-countdown-timer__wrapper">
                                <div class="flip-countdown-timer__item">
                                  <div class="flip-countdown-timer__value flip-countdown-timer__days3">00</div>
                                  <div class="flip-countdown-timer__label">Days</div>
                                </div>
                                :
                                <div class="flip-countdown-timer__item">
                                  <div class="flip-countdown-timer__value flip-countdown-timer__hours3">23</div>
                                  <div class="flip-countdown-timer__label">Hours</div>
                                </div>
                                :
                                <div class="flip-countdown-timer__item">
                                  <div class="flip-countdown-timer__value flip-countdown-timer__minutes3">59</div>
                                  <div class="flip-countdown-timer__label">Minutes</div>
                                </div>
                                :
                                <div class="flip-countdown-timer__item">
                                  <div class="flip-countdown-timer__value flip-countdown-timer__seconds3">10</div>
                                  <div class="flip-countdown-timer__label">Seconds</div>
                                </div>
                              </div>
                              <!-- <button style="border: none;font-size: 17px;letter-spacing: 3.8px;" id="whiteTimer">
                                24:00:00
                                
                              </button> -->
                              <!-- <span style="font-size: 12px;text-transform: lowercase;margin-left: -15px;display: flex;gap: 10px;justify-content: center;">
                                <span>days</span>  <span>hours</span>  <span>min</span>  <span>sec</span>
                              </span> -->
                            </span>
                          </div>
                        </div>
                        

                      <p class="orderTotalPrice" style="border-bottom: 1px solid #0091d1;">
                        <span style="margin-right: auto;"><strong>Total </strong></span>
                        <span style="font-size: 24px;"> <strong>$445</strong></span>
                        <span><s>$990</s></span>
                        <button class="summaryDiscountBtn">-50%</button>
                        <button class="summarySaveBtn">Save 445$</button>
                      </p>
                      
                      
                      <!-- <div class="formDivider"></div> -->
                      
                      <ul class="orderFeatures">
                        
                        <li class="orderFeatureListItem">
                            ✅ <span>Package Name GOOGLE MAPS</span>
                        </li>
                        <li class="orderFeatureListItem">
                            ✅ <span>Amount 600</span>
                        </li>
                        <li class="orderFeatureListItem">
                            ⭐️ <span>High Quality Reviews</span>
                        </li>
                        <li class="orderFeatureListItem">
                            🔓 <span>No Password Needed</span>
                        </li>
                        <li class="orderFeatureListItem">
                            👍 <span>Drop Protection</span>
                        </li>
                        <li class="orderFeatureListItem">
                            🛡️ <span>Safe and Easy</span>
                        </li>
                        <li class="orderFeatureListItem">
                            💬 <span>Instant Delivery Guaranteed</span>
                        </li>
                        <li class="orderFeatureListItem">
                            ✅ <span>Secure Payments</span>
                        </li>
                      </ul>
                      
                      
                      
                  </div>
                </div>
          </div>
        </div>
        
    </div>
</section>