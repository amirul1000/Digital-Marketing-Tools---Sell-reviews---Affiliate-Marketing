
  <div class="wrapperLeft">
    <div class="left blueGradient">
      <img width="250px" class="signInLogo" src="<?php echo strip_tags(get_option('website_logo_white', BASE."themes/review/assets/images/logo (1) (1).png")); ?>" alt="" srcset="" />
      <p class="signInText">TOP REVIEWS IS THE N1 WEB REVIEWS AGENCY

      </p>
      <h1 class="signInHeading" style="margin-bottom: 100px;">Buy Reviews To Get Customers Trust and More Sales </h1>
      <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
      style="margin-bottom: 20px;"
    >
      <ol class="carousel-indicators" style="margin: -20px auto;"
      >
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="c_indicator active"
        ></li>
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="1"
          class="c_indicator"
        ></li>
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="2"
          class="c_indicator"
        ></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="left">
            <img
              width="130px"
              class="signInImg"
              src="<?php echo BASE ?>/themes/review/assets/images/person1.png"
              alt=""
            />
            <span class="signInAvatarTitle">Mollie Steele</span>
            <p class="signInQuote">
              “
              This Buy Real Media website really got my coffee shop really popular on local searches!! Best tool ever. Before this, I didn't even have my store on Google Maps.  Thank you”
            </p>

          </div>
        </div>
        <div class="carousel-item">
          <div class="left">
            <img
              width="130px"
              class="signInImg"
              src="<?php echo BASE ?>/themes/review/assets/images/person2.png"
              alt=""
            />
            <span class="signInAvatarTitle">Sofia Chan</span>
            <p class="signInQuote">
              “
              I have a jewelry shop and it was very important for me to have a good score. So I bought Google reviews from this website, and now I can't even place to fit my customers into my schedule. You guys deserve much more! Thanks!                    ”
            </p>

          </div>
        </div>
        <div class="carousel-item">
          <div class="left" style="background: transparent !important;">
            <img
              width="130px"
              class="signInImg"
              src="<?php echo BASE ?>/themes/review/assets/images/person3.png"
              alt=""
            />
            <span class="signInAvatarTitle">Isabell Short</span>
            <p class="signInQuote">
              “
              The Google my business reviews have been coming quickly and I have been able to see the results in a short time. So I can say that it is a quality service.                    ”
            </p>

          </div>
        </div>
        <div class="carousel-item">
          <div class="left" style="background: transparent !important;">
            <img
              width="130px"
              class="signInImg"
              src="<?php echo BASE ?>/themes/review/assets/images/person3.png"
              alt=""
            />
            <span class="signInAvatarTitle">Evan Mason</span>
            <p class="signInQuote">
              “Le consultant était professionnel et expérimenté, il a pu
              répondre à toutes mes questions d'ordre fiscal, juridique et
              de gestion d'entreprises,”
            </p>

          </div>
        </div>
      </div>
      <!-- <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->
      </div>
    </div>
    

    <div class="right">
          <div class="rightTop">
            <a href="signup">
              <button class="signInBtn mr-0 pr-0" style="background: transparent !important;color: rgb(72, 71, 71);border: none;">You got the password ?</button>
            </a>
            <a href="signin">
              <button class="signInBtn">Sign In</button>
            </a>
            
            <div style="position: relative;">
                <select name="currency" class="disable-arrow signInBtn mx-0 pl-0" id="currency" style="background: transparent !important;color: rgb(72, 71, 71);border: none !important;appearance: none;">
                  <option value="usd">$ USD</option>
                </select>
                <span class="carets d-block" style="position: absolute;top: 50%;right: 0px;transform: translateY(-50%);"></span>
            </div>
            
            <div class="signInLanguage dropdown">
                <button
                  class="dropdown-toggle signInBtn"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  style="background: transparent !important;color: rgb(72, 71, 71);border: none;"
                >
                  <span class="flag-icon flag-icon-<?php echo strtolower($lang_current->country_code); ?>"></span>
                  <?php echo language_codes($lang_current->code); ?>
                  <span class="carets"></span>
                </button>
                <div
                  class="dropdown-menu"
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
            
          </div>
          <div class="rightMain">
            <div class="wrapperRight" style="margin-top: 90px;">
            <div class="logoWrapper">
                  <img
                      class="signInLogo"
                      src="<?php echo strip_tags(get_option('website_logo', BASE."themes/review/assets/images/logo (1) (1).png")); ?>"
                      alt=""
                      srcset=""
                  />
                </div>
              <form action="" class="signInForm">
                <p class="welcome_text"> Forgot Password ?</p>
                
                <div class="message">
                  <div class="send-success" id="sccess">
                    Your password is sent to your inbox.Please check you email and spam folder.
                  </div>
                </div>
                <div class="message">
                  <div class="send-error" id="sccess">
                    <img class="msgIcon" src="<?php echo BASE ?>/themes/review/assets/images/dangerIcon.png" alt="" srcset=""> This email does't exist.
                  </div>
                </div>
                
                
                <div class="formRow">
                  <label for="signInEmail">Your Email Address</label>
                  <div style="position: relative;
                    border: 1px solid #0091d1;
                    border-radius: 5px;
                    overflow: hidden;">
                    <i class="fa-solid fa-envelope auth_icons"></i>
                    <input type="email" name="forgotEmail" id="forgotEmail" />
                  </div>
                </div>
                <!-- <div class="formRow">
                  <label for="signInPassword">Your Password</label>
                  <div
                    style="
                      position: relative;
                      border: 1px solid #0091d1;
                      border-radius: 5px;
                      overflow: hidden;
                    "
                  >
                    <i class="fa-regular fa-eye eye_icon"></i>
                    <div>
                      <i class="fa-solid fa-lock auth_icons"></i>
                      <input
                      type="password"
                      name="signInPassword"
                      id="signInPassword"
                      style="border: none !important"
                    />
                    </div>
                  </div>
                </div> -->
                <!-- <div class="formRow bottomForm">
                  <div class="formRowLeft">
                    <input
                      class="rememberCheckBox"
                      style="width: auto"
                      type="checkbox"
                      name=""
                      id=""
                    />
                    <span>Remember Me</span>
                  </div>
                  <div class="formRowRight">
                    <a href="forgot-password.php">Forgot Password?</a>
                  </div>
                </div> -->
                <div class="formRow" style="text-align: center">
                  <button class="formSignInBtn getPassword">Send Password</button>
                </div>
                <div class="formRow policy">
                  <a href="<?= cn('privacy') ?>" target="_blank">Privacy Policy</a>
                  <!-- <select
                    class="signInLanguage"
                    name="signInLanguage"
                    id="signInLanguage"
                  >
                    <option value=""></option>
                    <option value="">English</option>
                  </select> -->
                  <!-- Example single danger button -->
                  
                  <!--<div class="signInLanguage dropdown">-->
                  <!--  <button-->
                  <!--    class="dropdown-toggle"-->
                  <!--    type="button"-->
                  <!--    id="dropdownMenuButton"-->
                  <!--    data-toggle="dropdown"-->
                  <!--    aria-haspopup="true"-->
                  <!--    aria-expanded="false"-->
                  <!--  >-->
                  <!--    <img-->
                  <!--      src="<?php echo BASE ?>/themes/review/assets/images/usaFlag.png"-->
                  <!--      alt=""-->
                  <!--      srcset=""-->
                  <!--    />-->
                  <!--    English-->
                  <!--    <span class="carets"></span>-->
                  <!--  </button>-->
                  <!--  <div-->
                  <!--    class="dropdown-menu"-->
                  <!--    aria-labelledby="dropdownMenuButton"-->
                  <!--  >-->
                  <!--    <div class="lanOption">-->
                  <!--      <img-->
                  <!--        src="https://app.ecab.io/companyname/admin/public/french-flag.png"-->
                  <!--        alt=""-->
                  <!--        srcset=""-->
                  <!--      />-->
                  <!--      French-->
                  <!--    </div>-->
                  <!--    <div class="lanOption">-->
                  <!--      <img-->
                  <!--        src="<?php echo BASE ?>/themes/review/assets/images/usaFlag.png"-->
                  <!--        alt=""-->
                  <!--        srcset=""-->
                  <!--      />-->
                        
                  <!--      English-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                </div>
              </form>
              <!-- <p
                class="nosHeading"
              >
                NOS PARTENAIRES ET NOS CLIENTS
              </p>
              <section class="myPartners">
                <div class="container">
                  <div class="slider_c" style="overflow: hidden;">
                    <div class="slide-track_c">
                      <div class="slide_c bg-red-500">
                        <img style="margin-top: -10px;" src="../assets/images/partners1.png" alt="" srcset="" />
                      </div>
                      <div class="slide_c bg-purple-500">
                        <img style="margin-top: -10px;" src="../assets/images/partners2.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-blue-500" style="margin-right:40px ;">
                        <img src="../assets/images/partners3.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-indigo-500">
                        <img width="100px" height="80px" style="margin-top: -10px;" src="../assets/images/partners4.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-pink-500">
                        <img width="100px" height="80px" style="transform: translateY(-10px);" src="../assets/images/partners5.png" alt="" srcset="" />
          
                      </div>
                      
                      
                      <div class="slide_c bg-red-500">
                        <img style="margin-top: -10px;" src="../assets/images/partners1.png" alt="" srcset="" />
                      </div>
                      <div class="slide_c bg-purple-500">
                        <img style="margin-top: -10px;" src="../assets/images/partners2.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-blue-500" style="margin-right:40px ;">
                        <img src="../assets/images/partners3.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-indigo-500">
                        <img width="100px" height="80px" style="margin-top: -10px;" src="../assets/images/partners4.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-pink-500">
                        <img width="100px" height="80px" style="transform: translateY(-10px);" src="../assets/images/partners5.png" alt="" srcset="" />
          
                      </div>


                      <div class="slide_c bg-red-500 hide_slide">
                        <img style="margin-top: -10px;" src="../assets/images/partners1.png" alt="" srcset="" />
                      </div>
                      <div class="slide_c bg-purple-500 hide_slide">
                        <img style="margin-top: -10px;" src="../assets/images/partners2.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-blue-500 hide_slide" style="margin-right:40px ;">
                        <img src="../assets/images/partners3.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-indigo-500 hide_slide">
                        <img width="100px" height="80px" style="margin-top: -10px;" src="../assets/images/partners4.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-pink-500 hide_slide">
                        <img width="100px" height="80px" style="transform: translateY(-10px);" src="../assets/images/partners5.png" alt="" srcset="" />
          
                      </div>

                      <div class="slide_c bg-red-500 hide_slide">
                        <img style="margin-top: -10px;" src="../assets/images/partners1.png" alt="" srcset="" />
                      </div>
                      <div class="slide_c bg-purple-500 hide_slide">
                        <img style="margin-top: -10px;" src="../assets/images/partners2.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-blue-500 hide_slide" style="margin-right:40px ;">
                        <img src="../assets/images/partners3.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-indigo-500 hide_slide">
                        <img width="100px" height="80px" style="margin-top: -10px;" src="../assets/images/partners4.png" alt="" srcset="" />
          
                      </div>
                      <div class="slide_c bg-pink-500 hide_slide">
                        <img width="100px" height="80px" style="transform: translateY(-10px);" src="../assets/images/partners5.png" alt="" srcset="" />
          
                      </div>
          
          
                      
                      
                    </div>
                  </div>
                </div>
              </section> -->

              <!-- <section id="partners" style="overflow: hidden; margin: 20px">
                <div class="marquee-wrapper">
                  <div class="cont">
                    <div class="marquee-block">
                      <div
                        class="marquee-inner to-left"
                        style="margin-top: -10px"
                      >
                        <span>
                          <div class="row items">
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners1.png"
                                  alt="Partner"
                              /></a>
                            </div>
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners2.png"
                                  alt="Partner"
                              /></a>
                            </div>
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners3.png"
                                  alt="Partner"
                              /></a>
                            </div>
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners4.png"
                                  alt="Partner"
                              /></a>
                            </div>
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners5.png"
                                  alt="Partner"
                                  style="opacity: 0"
                              /></a>
                            </div>
                          </div>
                        </span>
                        <span>
                          <div class="row items">
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners1.png"
                                  alt="Partner"
                              /></a>
                            </div>
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners2.png"
                                  alt="Partner"
                              /></a>
                            </div>
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners3.png"
                                  alt="Partner"
                              /></a>
                            </div>
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners4.png"
                                  alt="Partner"
                              /></a>
                            </div>
                            <div
                              class="col-md-5ths col-sm-3 col-ms-4 col-xs-6 partners-logo"
                            >
                              <a href="#"
                                ><img
                                  class="img-fluid"
                                  src="../assets/images/partners5.png"
                                  alt="Partner"
                                  style="opacity: 0"
                              /></a>
                            </div>
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </section> -->
            </div>
          </div>
        </div>
  </div>
  
  
  
  
  
  
    
    
    <script>
      // const eye = document.querySelector(".eye_icon");
      // eye.addEventListener("click", () => {
      //   myFunction();
      //   if (eye.classList.contains("fa-eye-slash")) {
      //     eye.classList.remove("fa-eye-slash");
      //   } else {
      //     eye.classList.add("fa-eye-slash");
      //   }
      // });
      // function myFunction() {
      //   var x = document.getElementById("signInPassword");
      //   if (x.type === "password") {
      //     x.type = "text";
      //   } else {
      //     x.type = "password";
      //   }
      // }
    //   document
    //     .querySelector(".dropdown-toggle")
    //     .addEventListener("click", () => {
    //       document.querySelector(".dropdown-menu").classList.toggle("show");
    //     });

        const send = document.querySelector('.getPassword');
        console.log('Send bnt is ',send);
        send.addEventListener('click',(e)=>{
          e.preventDefault();
          const forgot = document.getElementById('forgotEmail').value;
          if(forgot.includes('.com') || forgot.includes('.net')){
            document.querySelector('.send-error').style.display = 'none';
            document.querySelector('.send-success').style.display = 'block';
          }else{
            document.querySelector('.send-success').style.display = 'none';
            document.querySelector('.send-error').style.display = 'block';

          }
        })
        
    </script>
    