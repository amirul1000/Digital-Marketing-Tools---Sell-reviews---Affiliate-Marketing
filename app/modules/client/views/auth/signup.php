<style>
.rightMain img{
	width:100% !important;
}
.rightMain .signInForm label {    
    font-weight: normal !important;
}
.message .send-error{
  font-weight:400 !important;
}
.rightMain.signUp {
    max-width: 700px;
}
</style>
<div class="wrapperLeft" style="height: auto !important;">
        <div class="left blueGradient">
          <img
            width="250px"
            class="signInLogo"
            src="<?php echo strip_tags(get_option('website_logo_white', BASE."themes/review/assets/images/logo (1) (1).png")); ?>"
            alt=""
            srcset=""
          />
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
            <a href="/client/signin">
              <button class="signInBtn mr-0 pr-0" style="background: transparent !important;color: rgb(72, 71, 71);border: none;">You have already an account ?</button>
            </a>
            <a href="/client/signin">
              <button class="signInBtn"  >Sign In Now</button>
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
          <div class="rightMain signUp">
            <div class="wrapperRight">
                <div class="logoWrapper">
                  <img
                      class="signInLogo"
                      src="<?php echo strip_tags(get_option('website_logo', BASE."themes/review/assets/images/logo (1) (1).png")); ?>"
                      alt=""
                      srcset=""
                  />
                </div>
              <form action="" class="signInForm" onSubmit="return false;">
                <p class="welcome_text" style="color:#0091d1 !important">Client Sign Up</p>
                
                <div class="register-heading">
                  <!--<span>Informations personnelles</span>-->
                  <div class="divider"></div>
                </div>
                <div class="message">
                  <div class="send-success" id="sccess">
                    <img class="msgIcon" style="width:40px !important" src="<?php echo BASE ?>/themes/review/assets/images/doneIcon.png" alt="" srcset=""> 
                    Thank you for signing up! We have received your submission and will be in touch with you shortly
                  </div>
                </div>
                <div class="message">                  
                  <div class="send-error" id="error">
                    <div class="row">
                     <div class="col-md-2">
                    <img class="msgIcon" style="width:40px !important" src="<?php echo BASE ?>/themes/review/assets/images/dangerIcon.png" alt="" srcset="">
                    </div>
                     <div class="col-md-9" id="error_msg">Please fill in all the required fields.</div>
                   </div>
                  </div>                  
                </div>
                
                <div class="formRow row">
                  <div class="col-sm-6 form-group">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa-solid fa-user auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000;border-radius: 5px;"
                        name="civility"
                        required=""
                        id="firstNames"
                        placeholder="First Name *"
                      /> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa-solid fa-user auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000;border-radius: 5px;"
                        name="lastName"
                        required=""
                        id="lastNames"
                        placeholder="Last Name *"
                      /> 
                    </div>
                  </div>
                </div>
                <div class="formRow row">
                  <div class="col-sm-6 form-group">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa-solid fa-envelope auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="email"
                        id="email"
                        style="color: #000;font-size: 16px;border-radius: 5px;"
                        name="email"
                        required=""
                        placeholder="Your Email *"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa fa-phone auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000;border-radius: 5px;"
                        name="phone"
                        required=""
                        id="phone"
                        placeholder="Phone"
                      />
                    </div>
                  </div>
                </div>
                <div class="register-heading">
                  <!--<span>Adresse de facturation</span>-->
                  <div class="divider"></div>
                </div>
                <div class="formRow row">
                  <div class="col-sm-6 form-group">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa-solid fa-building-o auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        id="adresse"
                        style="color: #000;border-radius: 5px;"
                        name="adresse"
                        required
                        placeholder="Company"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa fa-fax auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000;border-radius: 5px;"
                        name="fax"
                        required=""
                        id="fax"
                        placeholder="Fax"
                      />
                    </div>
                  </div>
                </div>
                <div class="formRow row">
                  <div class="col-sm-12 form-group">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa-solid fa-location-dot auth_icons"></i>
                      <input
                        class="form-control adresse2"
                        type="text"
                        id="adresse2"
                        style="color: #000;border-radius: 5px;"
                        name="adresse"
                        required
                        placeholder="Address *"
                      />
                    </div>
                  </div>
                </div>
                <div class="formRow row">
                  <div class="col-sm-12 form-group">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa-solid fa-location-dot auth_icons"></i>
                      <input
                        class="form-control adresse2"
                        type="text"
                        id="adresse2"
                        style="color: #000;border-radius: 5px;"
                        name="adresse2"
                        required
                        placeholder="Address 2"
                      />
                    </div>
                  </div>
                </div>
                <div class="formRow row">
                  <div class="col-sm-4 form-group">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa-solid fa-location-dot auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000;border-radius: 5px;"
                        name="country"
                        id="country"
                        required=""
                        placeholder="Zip Code *"
                      />
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa-solid fa-location-dot auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000;border-radius: 5px;"
                        name="region"
                        required=""
                        id="region"
                        placeholder="City *"
                      />
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa-solid fa-location-dot auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000;border-radius: 5px;"
                        name="region"
                        required=""
                        id="region"
                        placeholder="Country *"
                      />
                    </div>
                  </div>
                  <!-- <div class="col-sm-4">
                    <div
                      class="input-group signupResBtnPopup2"
                      style="width: 100%; float: left; margin-right: 5px"
                    >
                      <span class="input-group-addon"
                        ><i class="fa fa-user"></i
                      ></span>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000"
                        name="city"
                        required
                        id="city"
                        placeholder="City"
                      />
                    </div>
                  </div> -->
                </div>
                <!-- <div class="row">
                  <div class="col-sm-6 form-group">
                    <div
                      class="input-group signupResBtnPopup2"
                      style="width: 100%; float: left; margin-right: 5px"
                    >
                      <span class="input-group-addon"
                        ><i class="fa fa-user"></i
                      ></span>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000"
                        name="postal_code"
                        id="postal_code"
                        required=""
                        placeholder="Postal Code"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div
                      class="input-group signupResBtnPopup2"
                      style="width: 100%; float: left; margin-right: 5px"
                    >
                      <span class="input-group-addon"
                        ><i class="fa fa-user"></i
                      ></span>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000"
                        name="numero"
                        required=""
                        id="numero"
                        placeholder="Numero VAT"
                      />
                    </div>
                  </div>
                </div> -->
                <div class="register-heading">
                  <!--<span>Sécurité du compte</span>-->
                  <div class="divider"></div>
                </div>
                <!-- <span class="register-heading"></span> -->

                <div class="formRow row">
                  <div class="col-sm-6 form-group">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa fa-lock auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000;border-radius: 5px;"
                        name="mot"
                        id="password"
                        required=""
                        placeholder="Password *"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div
                      style="position: relative;border: 1px solid #0091d1;border-radius: 5px;overflow: hidden;"
                    >
                      <i class="fa fa-lock auth_icons"></i>
                      <input
                        class="form-control c_civility"
                        type="text"
                        style="color: #000;border-radius: 5px;"
                        name="confermer"
                        required=""
                        id="confirm"
                        placeholder="Confirm Password *"
                      />
                    </div>
                  </div>
                </div>
                <!-- <div class="info_box">
                  <p class="info_text_top">
                    Joignez-vous à notre liste d'envoi
                  </p>
                  <p class="info_text_bottom">
                    We would like to send you occasional news, information and
                    special offers by email. To join our mailing list, simply
                    tick the box below. You can unsubscribe at any time
                  </p>
                  <div class="switchButtons">
                    <button class="switch_btn switch_btn_on on active ">On</button>
                    <button class="switch_btn switch_btn_off off">Off</button>
                  </div>
                </div> -->
                
                <div class="formRowLeft ml-5" style="font-size: 13px;">
                    <input
                      class=""
                      type="checkbox"
                      style="width: auto"
                      id="flexCheckIndeterminate"
                      checked=""
                    />
                    <label
                      class="mb-0" style="font-size: inherit !important;"
                      for="flexCheckIndeterminate"
                    >
                      By clicking below, I approve website 
                      <a href="<?= cn('terms') ?>" target="_blank" class="text-blue text-decoration-none"  style="color:#0091d1 !important">
                        Terms of services
                      </a>
                    </label>
                </div>
                <div class="formRowLeft ml-5" style="font-size: 13px;">
                    <input
                      class=""
                      type="checkbox"
                      style="width: auto"
                      id="flexCheckIndeterminate1"
                      checked=""
                    />
                    <label
                      class="mb-0" style="font-size: inherit !important;"
                      for="flexCheckIndeterminate1"
                    >
                      By clicking below, I approve website 
                      <a href="<?= cn('privacy') ?>" target="_blank" class="text-blue text-decoration-none" style="color:#0091d1 !important">
                        Privacy policy
                      </a>
                    </label>
                </div>
                
                <div class="formRow text-center">
                    <button class="formSignInBtn">Sign Up</button>
                </div>

                <!-- <div
                  class="col-lg-12 col-md-12 col-12"
                  style="
                    padding: 20px;
                    background-color: #fff;
                    margin-top: 10px;
                  "
                >
                  <div class="card">
                    <div class="card-body d-flex justify-content-center">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckIndeterminate"
                          checked=""
                        />
                        <label
                          class="form-check-label" style="margin-left: 20px;margin-bottom: 10px;"
                          for="flexCheckIndeterminate"
                        >
                          J'ai lu et j'accepte les
                          <a href="" class="text-blue text-decoration-none">
                            Conditions d'utilisation</a
                          >
                        </label>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="formRow" style="margin-top: 10px">
                </div>
              </form>
              <!-- <p
                style="
                  text-align: center;
                  color: rgb(68, 68, 68);
                  font-size: 18px;
                  font-weight: bold;
                "
              >
                NOS PARTENARIES ET NOS CLIENTS
              </p> -->

              
            </div>
          </div>
        </div>
      </div>
      
      
      
      
      
      
      
      <script>
      // sigin form handling
    
      const submit_btn = document.querySelector('.formSignInBtn');
  
      submit_btn.addEventListener('click',(e)=>{
		  
		   const fname =$('#firstNames').val();
		  const lname = $('#lastNames').val();
		  const email = $('#email').val();
		  const phone = $('#phone').val();
		  const address = $('#adresse').val();
		  const address2 = $('#adresse2').val();
		  const country = $('#country').val();
		
		  const region = $('#region').val();
		  const password = $('#password').val();
		  const confirme = $('#confirm').val(); 
		  
		  
        e.preventDefault();
        if(fname && lname && email && phone && address && address2 && country && region && password && confirme ) {
          
		 signup();
		  console.log(document.querySelector('#sccess'))
          document.querySelector('#error').style.display = 'none';
    
          document.querySelector('#sccess').style.display = 'block';
        }else{
          console.log(document.querySelector('#error'))
          document.querySelector('#sccess').style.display = 'none';
    
          document.querySelector('#error').style.display = 'block';
        }
      })
	  
	  function signup(){
		    $.ajax({
						type: "GET", 
						url: '<?php echo cn("client/ajax_sign_up"); ?>',
						data: { 
								   'fname' :$('#firstNames').val(),
								   'lname' : $('#lastNames').val(),
								   'email' : $('#email').val(),
								   'phone' : $('#phone').val(),
								   'address' : $('#adresse').val(),
								   'address2' : $('#adresse2').val(),
								   'country' : $('#country').val(),								
								   'region' :$('#region').val(),
								   'password' : $('#password').val()
	  
							  },
					success: function (data, text) {
						   console.log(data);
						
							var obj = JSON.parse(data);
							
							if(obj.status=='success'){
								 alert(obj.status+":"+obj.message);	
								window.location = '<?php echo cn("client/signin"); ?>';
							}
							else{
							   alert(obj.status+":"+obj.message);	
							}
							
					  },
					  error: function (xhr, ajaxOptions, thrownError) {
							alert(xhr.status);
							alert(thrownError);
						  }
					});
	  }

    </script>
    <!--<script src="<?php echo BASE; ?>themes/review/assets/js/authScript.js"></script>-->
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    