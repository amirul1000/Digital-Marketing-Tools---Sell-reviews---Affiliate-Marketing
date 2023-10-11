    <div class="nav-wrapper" id="nav-wrapper">
      <nav
        class="navbar navbar-static navbar-affix affix-top"
        style="
          overflow: hidden;
          position: fixed;
          top: 0;
          width: 100%;
          background: radial-gradient(
            circle,
            #00c4fb 0,
            #0091d1 0%,
            #003e7c 100%
          );
          z-index: 10000;
        "
      >
        <div
          class="container set_relative nav_container"
          style="padding-bottom: 10px;overflow: hidden;min-width: 1260px;"
        >
        
          <div>
            <a class="logo" href="<?php echo cn(); ?>"
              ><img
                src="<?php echo get_option('website_logo', BASE."themes/review/assets/images/logo (1) (1).png"); ?>"
                width="190px"
                height="70px"
                alt="Cabaccess"
            /></a>
          </div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed">
              <span class="navbar-header-text">MENU</span>

              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar top-bar" style="margin-top: 14px"></span>
              <span class="icon-bar middle-bar"></span>
              <span class="icon-bar bottom-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse nav_items">
            <ul class="nav navbar-nav" style="position: relative;">
              <li>
                <a href="<?php echo cn(); ?>" class="navitem <?php echo (json_encode(segment(1)) == "null") ? "active" : ""?>"
                  ><i class="fa-solid fa-house" style=""></i> <?php echo lang("Home"); ?></a
                >
              </li>
              <li class="dropdownContainer">
                <a href="javascript:void(0)" class="navitem <?php echo (strpos(segment(1), 'buy') !== false ) ? "active" : ""?>"><i class="fa-solid fa-globe"></i> Services
                <span class="carets"></span>
                </a>
              </li>
              
              <li>
                <a href="#whyBuy" class="navitem"
                  ><i class="fa-solid fa-shield-halved"></i> Why buy from us
                </a>
              </li>
              <li>
                <a href="#servicesWork" class="navitem"
                  ><i class="fa-solid fa-question-circle"></i> How it works ?
                </a>
              </li>
              <li>
                <a href="#testimonials" class="navitem"
                  ><i class="fa-solid fa-comment-dots"></i> Testimonials
                </a>
              </li>

              <li>
                <a href="#faq" class="navitem"
                  ><i class="fa-solid fa-question"></i> Faq</a
                >
              </li>
              <!-- <li>
                <a href="#" class="navitem open-booking"
                  ><i class="fa fa-envelope"></i> Contact-Us</a
                >
              </li> -->
              <!-- <li>
                <a href="contact.html" class="navitem"
                  ><i class="fa fa-envelope"></i> Client Access</a
                >
              </li> -->

              <!-- <li>
                <a href="temoignages.html" class="navitem"
                  ><i class="fa-solid fa-comments-o"></i>
                  Temoignages</a
                >
              </li>
              <li>
                <a href="faq.html" class="navitem"
                  ><i class="fa fa-question-circle"></i> FAQ</a
                >
              </li>
              <li>
                <a href="contact.html" class="navitem"
                  ><i class="fa fa-envelope"></i> Contact</a
                >
              </li> -->

              <!-- <li><a href="" class="top-btn">Reserver Maintenant</a></li> -->
            </ul>
            
            <div id="phone-book" class="headerRight">
              <div style="position: relative;margin-left: 5px;">
                <select name="currency" style="width: 70px;font-weight: bold;" class="disable-arrow" id="currency">
                  <option value="usd">$ USD</option>
                  <!--<option value="euro">€ EURO</option>-->
                </select>
                <span class="carets" style="position: absolute;top: 60%;right: 10px;transform: translateY(-50%);"></span>
              </div>
              
              <div class="dropdown">
                <button
                  class="dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  style="background: transparent !important;color: #fff;border: none;"
                >
                  <span class="flag-icon flag-icon-<?php echo strtolower($lang_current->country_code); ?>"></span>
                  <?php echo language_codes($lang_current->code); ?>
                  <span class="carets"></span>
                </button>
                <div
                  class="dropdown-menu langDropdowns"
                  aria-labelledby="dropdownMenuButton"
                >
                  <?php 
                    foreach ($languages as $key => $row) {
                  ?>
                  <div class="lanOption px-4">
                    <span class="flag-icon flag-icon-<?php echo strtolower($row->country_code); ?>"></span>
                    <?php echo language_codes($row->code); ?>
                  </div>
                  <?php }?>
                </div>
              </div>
              
              <!--<div class="langContainer">-->
              <!--  <div class="francias">-->
              <!--    <img src="https://www.digital-office.ma/html/assets/images/flag-french.png" alt="" srcset="">-->
              <!--    Francias-->
              <!--    <span class="carets"></span>-->
              <!--  </div>-->
              <!--  <div class="english active">-->
              <!--    <img src="<?php echo BASE; ?>themes/review/assets/images/usaFlag.png"  alt="" srcset="">-->
              <!--    English-->
              <!--    <span class="carets "></span>-->
              <!--  </div>-->
                
              <!--</div>-->
              
              <!--<a href="<?php echo cn('signup'); ?>">-->
              <!--  <button class="clientAccess signup"><img width="20px" src="<?php echo BASE; ?>themes/review/assets/images/signupIcon.png" alt="" srcset=""> SignUp</button>-->
              <!--</a>-->
              <a href="<?php echo cn('client/signin'); ?>">
                <button class="clientAccess"><img width="20px" src="<?php echo BASE; ?>themes/review/assets/images/accountIcon.png" alt="" srcset=""> Login</button>
              </a>
            </div>
            
          </div>
          <div class="phone_book_mob">
            <img
              src="https://handio.fr/assets/system_design/images/call-us-girl.png"
              alt=""
              class="girl"
              srcset=""
            />
            <div class="textWrapper">
              <h4>Info Et Reservation</h4>
              <img
                src="<?php echo BASE; ?>themes/review/assets/images/customphonebook.PNG"
                alt=""
                class="phoneImg"
                style="border-radius: 20px"
                srcset=""
              />
            </div>
          </div>
          
        </div>
      </nav>
    </div>
    <div class="container" style="position: relative">
      <div class="langDropdown">
        <div class="frSelect">
          <img src="https://www.digital-office.ma/html/assets/images/flag-french.png" alt="" srcset="">
          Francias
        </div>
        <div class="enSelect">
          <img src="<?php echo BASE; ?>themes/review/assets/images/usaFlag.png" alt="" srcset="">
          English
        </div>
      </div>
    </div>

    <div class="container" style="position: relative">
      <div class="dropdownMenu">
        <ul class="dropdownList">
          <!--<li class="dropdownList_item">-->
          <!--  <a href="buy-google-reviews.html"> Google Map Reviews</a>-->
          <!--</li>-->
          <!--<li class="dropdownList_item">-->
          <!--  <a href="buy-trustpilot-reviews.html">Trustpilot Reviews</a>-->
          <!--</li>-->
          <!--<li class="dropdownList_item">-->
          <!--  <a href="buy-tripadvisor-reviews.html"> Tripadvisor Reviews</a>-->
          <!--</li>-->
          
          <?php 
            if (!empty($all_items)) {
              foreach ($all_items as $key => $social_network) {
          ?>
          <li class="dropdownList_item">
            <a href="<?php echo cn($social_network[0]->url_slug) ?>"> <?php echo strip_tags($social_network[0]->name)?></a>
          </li>
          <?php }} ?>
          
        </ul>
      </div>
    </div>

    <!-- <div class="lgs"></div> -->
    <div class="promo-bar" id="promo-bar" style="padding: 0;">
      <div class="container">
        <div style="background-color: orange">
          <!-- <div class="blue-promo">
            <i class="fa-solid fa-book" style="margin-right: 10px"></i
            ><span>Annonce</span>
          </div> -->
        </div>
        <div class="announcementBar"
          >Don't miss our  <span class="yellowBack">Limited DISCOUNT SALE</span> UP TO <span class="redBack"><span class="pulseAnim">-50%</span></span> 
          <span style="position: relative;">
            <img style="width: 40px;" src="https://www.ebiz.ac/hosted/images/90/554bb44f2f4555a87cfdb1fcf67a92/timer.gif" alt="" srcset="">
            <span style="display: inline-flex;flex-direction: column;line-height: 1.1;    transform: translateY(-4px);">
              <div class="flip-countdown-timer__wrapper promo_timer">
                <div class="flip-countdown-timer__item">
                  <div class="flip-countdown-timer__value flip-countdown-timer__days"><span>00</span></div>
                  <div class="flip-countdown-timer__label">Days</div>
                </div>
                :
                <div class="flip-countdown-timer__item">
                  <div class="flip-countdown-timer__value flip-countdown-timer__hours"><span>23</span></div>
                  <div class="flip-countdown-timer__label">Hours</div>
                </div>
                :
                <div class="flip-countdown-timer__item">
                  <div class="flip-countdown-timer__value flip-countdown-timer__minutes"><span>59</span></div>
                  <div class="flip-countdown-timer__label">Minutes</div>
                </div>
                :
                <div class="flip-countdown-timer__item">
                  <div class="flip-countdown-timer__value flip-countdown-timer__seconds"><span>10</span></div>
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
          </span>
          <a href="#nav-wrapper">
            <button class="buyNowBtn"><span class="pulseAnim">Get  Reviews Now</span></button>
          </a>
          
          
        </div>
        <!-- <button class="pulse-btn">
          <span class="pulse open-booking">Buy Now</span>
        </button> -->
      </div>
    </div>

    <section class="set_relative" style="margin-top: 50px">
      <button class="floating_button">
        <span class="" onclick="openContact()">CONTACT-US</span>
      </button>
      <div id="contact_popup_container" class="contact_popup_container error">
        <button onclick="closeContact()" class="close_form_btn">&times;</button>

        <div class="booking-container">
          <div class="">
            <form
              id="booking-form"
              class="form-validate"
              method="post"
              action="<?php echo strip_tags(cn("tickets/ajax_add")); ?>"
            >
              <h4 class="booking-form-heading">
                Contact-Us
              </h4>
              <div class="booking-lower-body">
                <div class="message">
                  <div class="send-success" id="sccess">
                    <img class="msgIcon" src="<?php echo BASE; ?>themes/review/assets/images/doneIcon.png" alt="" srcset="">
                    We have received your booking request, we will get back to you as soon as possible
                  </div>
                </div>
                <div class="message">
                  <div class="send-error" id="error">
                    <img class="msgIcon" src="<?php echo BASE; ?>themes/review/assets/images/dangerIcon.png" alt="" srcset="">
                    Please fill in all the required information
                  </div>
                </div>
                <div class="row form-with-labels typeMar">
                  <div class="col-md-2">
                    <div class="form-group form-problem">
                      <select name="civility" id="civility" class="ajaxField">
                        <option value="Mr">Mr</option>
                        <option value="Miss">Miss</option>
                        <option value="Mrs">Mrs</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <input
                        type="text"
                        name="first_name"
                        value=""
                        id="b_firstName"
                        placeholder="First Name *"
                        class="ajaxField"
                      /><span class="fa fa-user"></span>
                    </div>
                  </div>
    
                  <div class="col-md-5">
                    <div class="form-group">
                      <input
                        type="text"
                        name="last_name"
                        id="b_lastName"
                        value=""
                        placeholder="Last Name *"
                        class="ajaxField"
                      /><span class="fa fa-user"></span>
                    </div>
                  </div>
                </div>
                
                
    
                <div class="row form-with-labels">
                  
                  <div class="col-md-6" style="position: relative">
                      
                    <input
                      type="text"
                      name="company"
                      id="company"
                      value=""
                      placeholder="Company Name"
                      id="companyName"
                      class="ajaxField"
                     
                    />
                    <i class="fa fa-building booking-form-icon"  style="top:20px"></i>
                  </div>
                    
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        name="email"
                        id="bookemail"
                        value=""
                        placeholder="Email *"
                        class="ajaxField"
                      /><span class="fa fa-envelope"></span>
                    </div>
                  </div>
                </div>

                <div class="row form-with-labels">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        name="phone"
                        id="phoneNumber"
                        value=""
                        placeholder="Phone"
                        class="ajaxField"
                      /><span class="fa fa-phone"></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        name="order_id"
                        id="order_id"
                        value=""
                        placeholder="Order Number "
                        class="ajaxField "
                      /><span class="fa fa-solid fa-file-invoice" ></span>
                    </div>
                  </div>
                  
                  
                </div>

                <div class="row form-with-labels">
                  <div class="col-md-6">
                    <div class="selectBox">
                      <i class="fa-solid fa-caret-down selectCaret transport" style="position: absolute;top: 20px;transform: translateY(-50%);color: #0091d1;"></i>                      

                      <select
                      name="department"
                      id="c_services"
                      class="ajaxField form-group"
                      aria-placeholder=""
                      style="text-align: left"
                      
                    >
                      <option id="option1" value="Presale">Presale</option>
                      <option id="option2" value="Billing">Billing</option>
                      <option selected="selected" id="option3" value="Client">Client</option>
                      <!-- <option value="Transport Shuttle">
                        Transport Shuttle
                      </option>
                      <option value="Transport Professionnel">
                        Transport Professionnel
                      </option>
    
                      <option value="Transport Scoliare">
                        Transport Scolaire
                      </option> -->
                    </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="selectBox" style="position: relative;">
                      <i class="fa-solid fa-caret-down selectCaret ocassion" style="position: absolute;top: 20px;transform: translateY(-50%);color: #0091d1;"></i>                      
                      <select
                      name="priority"
                      id="priority"
                      class="ajaxField form-group"
                      >
                      <option value="Regular">Regular</option>
                      <option value="Ocassional">Ocassional</option>
                      <!--<option value="Reguiler">Priority</option>-->
                      <!-- <option value="Ocassionnel" selected="selected">
                        Ocassionnel
                      </option> -->
                    </select>
                    </div>
                  </div>
                 
                </div>
    
                
    
    
                
                <?php
                    $min  = 1;
                    $max  = 10;
                    $num1 = rand( $min, $max );
                    $num2 = rand( $min, $max );
                    $sum  = $num1 + $num2;
                ?>
                
    
                
             
    
                   <div class="row form-with-labels">
                  <div class="col-md-12">
                    <textarea placeholder="Message" name="message" id="Commentaire" cols="30" rows="7"
                      style="height: 100px"></textarea>
                  </div>
                </div>

                 <div style="display:flex;align-items: center;  justify-content: space-between;">
                  <div style="display:flex;align-items: center;  justify-content: space-between;">
                      <?= $num1 ?> + <?= $num2 ?> ? <input type="number" name="robot_answer" id="robot_answer" style="width:50px;height:35px;margin-left:15px;padding: 9px 5px;">
                  </div>
                  <div>
                  <input type="submit" data-res="<?= $sum ?>" name="submit" id="submit-booking-btn" value="SEND"
                    class="btn btn-lg btn-black btn-white  btn-booking" />

                  <label for="fileUpload">
                    <input type="file" class="hidden" id="fileUpload">
                    <a class="btn btn-lg btn-black btn-white text-uppercase fileupload-btn" style="padding: 10px 10px;font-size: 13px;">
                      Upload File
                    </a>
                  </label>
                  </div>
                </div>
    
                <input
                  type="hidden"
                  id="type"
                  name="type"
                  value="2"
                  class="ajaxField"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </section>