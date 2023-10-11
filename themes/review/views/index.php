<?php echo Modules::run(get_theme()."/header_new", false); ?>

    <main class="mains set_relatives">
      <div class="taxi-form-full" style="position: relative;overflow: hidden;" id="reservation">
        <!-- <img class="standingBoy" style="position: absolute;right: 250px;bottom: 0;" src="https://ecab.io/assets/images/standing-boy.png" alt="" srcset=""> -->
        <section
          class="container form-taxi-short header-container"
        >
            <div class="row hero">
                
                <div class="col-md-6" id="getMyReviews" style="scroll-margin-top: 130px;">
                  <form
                  id="checkoutForm"
                  class="form-validate"
                  method="post"
                  action="mailhandler.php"
                >
                  <h4 class="booking-form-heading">
                    START GETTING 5 <span style="margin: 0 5px 3px 5px;" class="fa fa-star"></span> REVIEWS NOW
                  </h4>
                  <div class="booking-lower-body">
                    <div class="message">
                      <div class="send-success" id="sccess">
                        <img class="msgIcon" src="<?php echo BASE; ?>themes/review/assets/images/doneIcon.png" alt="" srcset=""> Nous avons bien reçu votre demande de réservation, nous
                        reviendrons vers vous dés que possible
                      </div>
                    </div>
                    <div class="message">
                      <div class="send-error" id="sccess">
                        <img class="msgIcon" src="<?php echo BASE; ?>themes/review/assets/images/dangerIcon.png" alt="" srcset=""> Merci de bien remplir toutes les informations requises
                      </div>
                    </div>
        
                    <div class="row form-with-labels">
                      <div class="col">
                        <div class="form-group">
                          
                        </div>
                      </div>
                    </div>
                    <div class="row form-with-labels formRow">
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
                            Select Network
                          </option>
                          <option
                            id="option1"
                            value="google"
                          >
                            Google 
                          </option>
                          <option
                            id="option2"
                            value="trustpilot"
                          >
                            Tristpilot 
                          </option>
                          <option
                            id="option3"
                            value="tripadvisor"
                          >
                            Tripadvisor 
                          </option>
                          
                        </select>
                        <span
                        class="carets custom-arrow"
                      ></span>
                      </div>
                      <div class="col-md-4">
                        <select
                          name="category"
                          id="category"
                          class="ajaxField required form-group disable-arrow categorySelect googleSelect active"
                        >
                          <option value="">Select Category</option>
                          <option value="google">Google Maps Reviews</option>
                          <!--<option value="">Trustpilot Reviews</option>-->
                          <!--<option value="">Tripadvisor Reviews</option>-->
                          
                          
                        </select>
                        <select
                          name="category"
                          id="category"
                          class="ajaxField required disable-arrow categorySelect trustpilotSelect"
                        >
                          <option value="">Select Category</option>
                          <!-- <option value="">Google Maps Reviews</option> -->
                          <option value="trustpilot">Trustpilot Reviews</option>
                          <!-- <option value="">Tripadvisor Reviews</option> -->
                          
                        </select>
                        <select
                          name="category"
                          id="category"
                          class="ajaxField required form-group disable-arrow categorySelect tripadvisorSelect"
                        >
                          <option value="">Select Category</option>
                          <!-- <option value="">Google Maps Reviews</option> -->
                          <!-- <option value="">Trustpilot Reviews</option> -->
                          <option value="tripadvisor">Tripadvisor Reviews</option>
                          
                        </select>
                        <span
                        class="carets custom-arrow"
                      ></span>
                      </div>
                      <div class="col-md-4">
                        <select
                          name="package"
                          id="package"
                          class="ajaxField required form-group disable-arrow"
                          onchange="displayPrice()"
                        >
                          <option value="">Select Package</option>
                          <option value="100">100 Reviews</option>
                          <option value="200">200 Reviews</option>
                          <option value="300">300 Reviews</option>
                          <option value="400">400 Reviews</option>
                          <option value="500">500 Reviews</option>
                          <option value="600">600 Reviews</option>
                          <option value="700">700 Reviews</option>
                          <option value="800">800 Reviews</option>
                          <option value="900">900 Reviews</option>
                          <option value="1000">1000 Reviews</option>
                          
                        </select>
                        <span
                        class="carets custom-arrow"
                      ></span>
                      </div>
                    
                    </div>
                    <!-- <div class="row form-with-labels typeMar">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <input
                            type="text"
                            name="Name"
                            value=""
                            id="b_Name"
                            placeholder="Name *"
                            class="ajaxField required"
                          /><span class="fa fa-user"></span>
                        </div>
                      </div>
        
                      <div class="col-md-6">
                        <div class="form-group">
                          <input
                            type="text"
                            name="email"
                            id="bookemail"
                            value=""
                            placeholder="Email *"
                            class="ajaxField required"
                          /><span class="fa fa-envelope"></span>
                        </div>
                      </div>
                    </div> -->
                    <div class="row form-with-labels">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" name="Link" value="" id="b_link" placeholder="Link *" class="ajaxField required" style="padding-left: 40px" aria-required="true">
                          <span class="leftIcon fa-solid fa-link" style="padding: 10.5px 6px !important;border-right: 1px solid #1980ad;"></span>
                        </div>
                        
                      </div>
                      
                    </div>

                    
                    <div class="row form-with-labels">
                      <div class="col-md-6">
                        <div class="form-group">
                          <select
                          name="reviewType"
                          id="reviewType"
                          class="ajaxField required form-group disable-arrow"
                          aria-placeholder=""
                          style="text-align: left"
                        >
                          <option
                            selected
                            id="option1"
                            value="Random"
                          >
                            Random Reviews
                          </option>
                          <option
                            id="option2"
                            value="Custom"
                          >
                            Custom Reviews
                          </option>
                          
                        </select>
                            <span
                            class="carets custom-arrow"
                          ></span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row form-with-labels">
                      <div class="col-md-12">
                        <textarea
                          placeholder="Custom Review 1 (Review Per Line)"
                          name=""
                          id="customReview"
                          cols="30"
                          rows="10"
                          style="height: 150px;display: none;"
                          class="required"
                        ></textarea>
                      </div>
                    </div>
                    <div class="row" id="priceRowForm">
                      <div class="col-md-12">
                        <div class="prices">
                          <div class="newPrice">445$</div>
                          <div class="barredPrice"><s>990$</s></div>
                          <button class="saveBtn">-50%</button>
                          <button class="saveBtn green" style="font-weight: normal;">Save 445$</button>
                          <!-- <button class="saveBtn"><span class="pulseAnim">Limited Time Offer</span></button> -->
                        </div>
                      </div>
                    </div>
                    
                    <div class="row form-with-labels">
                      <div class="col-md-12">
                        <div style="display: flex;justify-content: center;align-items: center;">
                          <p class="limitedOffer"><span class="pulseAnim">Limited Time <br> Offer</span></p>
                          <img style="width: 50px;" src="https://www.ebiz.ac/hosted/images/90/554bb44f2f4555a87cfdb1fcf67a92/timer.gif" alt="" srcset="">

                        <div class="flip-countdown-timer__wrapper booking " style="color: red !important;">
                          <div class="flip-countdown-timer__item">
                            <div class="flip-countdown-timer__value flip-countdown-timer__days2">00</div>
                            <div class="flip-countdown-timer__label">Days</div>
                          </div>
                          :
                          <div class="flip-countdown-timer__item">
                            <div class="flip-countdown-timer__value flip-countdown-timer__hours2">23</div>
                            <div class="flip-countdown-timer__label">Hours</div>
                          </div>
                          :
                          <div class="flip-countdown-timer__item">
                            <div class="flip-countdown-timer__value flip-countdown-timer__minutes2">59</div>
                            <div class="flip-countdown-timer__label">Minutes</div>
                          </div>
                          :
                          <div class="flip-countdown-timer__item">
                            <div class="flip-countdown-timer__value flip-countdown-timer__seconds2">10</div>
                            <div class="flip-countdown-timer__label">Seconds</div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>

        
                    <input
                      onclick="bookMessage()"
                      type="submit"
                      name="submit"
                      id="submit-booking-btn"
                      value="Get Reviews Now"
                      class="btn btn-lg btn-black btn-white aligncenter btn-booking"
                    />
        
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
                
                <div class="col-md-6 banner_right" style="position: relative;">
                      
                      
                      <div class="container">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <?php 
                              if (!empty($all_items)) {
                                $i=0;
                                foreach ($all_items as $key => $social_network) {
                                    $categories = $social_network->categories;
                            ?>
                            <li data-target="#myCarousel" data-slide-to="<?= $i ?>" class="<?= ($i==0) ? 'active' : '' ?>"></li>
                            <?php $i++; }} ?>
                            <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
                            <!--<li data-target="#myCarousel" data-slide-to="1"></li>-->
                            <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
                            
                          </ol>
                        
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            
                            <?php 
                              if (!empty($all_items)) {
                                $i=0;
                                foreach ($all_items as $key => $social_network) {
                                    $categories = $social_network->categories;
                            ?>
                            <div class="item <?= ($i==0) ? 'active' : '' ?>">
                              <a href="<?php echo cn($categories[0]->url_slug) ?>">
                                <div class="col-md-6" style="position: relative;">
                                  <p class="buyHeading">BUY <?php echo strip_tags($categories[0]->name) ?> FROM N<sup>O</sup> 1 REVIEWS AGENCY</p>
                                  <div class="bottom-car">
                                    
                                    <div class="floating-images" style="align-items: center;">
                                      <img
                                          class="floating-img floating-img-bottom"
                                          src="<?php echo BASE; ?>themes/review/assets/images/steps.png"
                                          alt=""
                                          srcset=""
                                        />
                                    </div>
                                    
                                  </div>                      
                                  <div class="reviewImgContainer" style="text-align: left;position: relative;">
                                    <div class="featureBox">
                                      <ul class="featureList">
                                        <?php $features = json_decode($categories[0]->features); ?>
                                        <?php foreach ($features as $feature) { ?>
                                        <li class="featureListItem"><span class="checkmark fe fe-<?= $feature->icon ?> text-icon"></span> <span><?php echo strip_tags($feature->content) ?></span></li>
                                        <?php } ?>
                                        <!--<li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>High Quality Reviews</span></li>-->
                                        <!--<li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>No Password Needed</span></li>-->
                                        <!--<li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Drop Protection</span></li>-->
                                        <!--<li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Safe and Easy </span></li>-->
                                        <!--<li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Instant Delivery Guaranteed </span></li>-->
                                        <!--<li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Secure Payment </span></li>-->
    
                                        
                                      </ul>
                                    </div>
        
                
                                  </div>
                                  <img class="googleMapImg" style="max-width: 230px;"  src="<?php echo $categories[0]->image ?>" alt="" srcset="">
                                </div>
                              </a>
                    
                            </div>
                            <?php $i++; }} ?>
                            
                            <!--<div class="item active">-->
                            <!--  <a href="buy-google-reviews.html">-->
                            <!--    <div class="col-md-6" style="position: relative;">-->
                            <!--      <p class="buyHeading">BUY GOOGLE MAPS REVIEWS FROM NO 1 REVIEWS AGENCY</p>-->
                            <!--      <div class="bottom-car">-->
                                    
                            <!--        <div class="floating-images" style="align-items: center;">-->
                            <!--          <img-->
                            <!--              class="floating-img floating-img-bottom"-->
                            <!--              src="<?php echo BASE; ?>themes/review/assets/images/steps.png"-->
                            <!--              alt=""-->
                            <!--              srcset=""-->
                            <!--            />-->
                
                                      
                                      
                    
                                      
                                      
                            <!--        </div>-->
                                    
                            <!--      </div>                      -->
                            <!--      <div class="reviewImgContainer" style="text-align: left;position: relative;">-->
                            <!--        <div class="featureBox">-->
                            <!--          <ul class="featureList">-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>High Quality Reviews</span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>No Password Needed</span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Drop Protection</span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Safe and Easy </span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Instant Delivery Guaranteed </span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Secure Payment </span></li>-->
    
                                        
                            <!--          </ul>-->
                            <!--        </div>-->
        
                
                            <!--      </div>-->
                            <!--      <img class="googleMapImg"  src="<?php echo BASE; ?>themes/review/assets/images/GoogleMap.png" alt="" srcset="">-->
                                  
                                  
                                  
                            <!--    </div>-->
                            <!--  </a>-->
                    
                            <!--</div>-->
                        
                            <!--<div class="item">-->
                            <!--  <a href="buy-trustpilot-reviews.html">-->
                            <!--    <div class="col-md-6" style="position: relative;">-->
                            <!--      <p class="buyHeading">BUY TRUSTPILOT REVIEWS FROM NO 1 REVIEWS AGENCY</p>-->
                            <!--      <div class="bottom-car">-->
                                    
                            <!--        <div class="floating-images" style="align-items: center;">-->
                            <!--          <img-->
                            <!--              class="floating-img floating-img-bottom"-->
                            <!--              src="<?php echo BASE; ?>themes/review/assets/images/steps.png"-->
                            <!--              alt=""-->
                            <!--              srcset=""-->
                            <!--            />-->
    
                            <!--        </div>-->
                                    
                            <!--      </div>                      -->
                            <!--      <div class="reviewImgContainer" style="text-align: left;position: relative;">-->
                            <!--        <div class="featureBox">-->
                            <!--          <ul class="featureList">-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>High Quality Reviews</span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>No Password Needed</span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Drop Protection</span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Safe and Easy </span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Instant Delivery Guaranteed </span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Secure Payments </span></li>-->
    
                                        
                            <!--          </ul>-->
                            <!--        </div>-->
        
                
                            <!--      </div>-->
                            <!--      <img class="googleMapImg trustPilot"  src="<?php echo BASE; ?>themes/review/assets/images/TrustPilot.png" alt="" srcset="">-->
    
                                  
                                  
                                  
                            <!--    </div>-->
                            <!--  </a>-->
                            <!--</div>-->
                        
                            <!--<div class="item">-->
                            <!--  <a href="buy-tripadvisor-reviews.html">-->
                            <!--    <div class="col-md-6" style="position: relative;">-->
                            <!--      <p class="buyHeading">BUY TRIPADVISOR REVIEWS FROM NO 1 REVIEWS AGENCY</p>-->
                                           
                            <!--      <div class="bottom-car">-->
                                    
                            <!--        <div class="floating-images" style="align-items: center;">-->
                                      
                            <!--          <img-->
                            <!--          class="floating-img floating-img-bottom"-->
                            <!--          src="<?php echo BASE; ?>themes/review/assets/images/steps.png"-->
                            <!--          alt=""-->
                            <!--          srcset=""-->
                            <!--        />-->
                                      
                    
                                      
                                      
                            <!--        </div>-->
                                    
                            <!--      </div>-->
    
                            <!--      <div class="reviewImgContainer" style="text-align: left;position: relative;">-->
                            <!--        <div class="featureBox">-->
                            <!--          <ul class="featureList">-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>High Quality Reviews</span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>No Password Needed</span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Drop Protection</span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Safe and Easy </span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Instant Delivery Guaranteed </span></li>-->
                            <!--            <li class="featureListItem"><img class="checkmark" src="<?php echo BASE; ?>themes/review/assets/images/whiteCheckMark.png" alt="" srcset=""> <span>Secure Payments </span></li>-->
    
                                        
                            <!--          </ul>-->
                            <!--        </div>-->
                                    <!-- <img class="standingBoy" style="position: absolute;right: 0;bottom: -100px;" src="https://ecab.io/assets/images/standing-boy.png" alt="" srcset=""> -->
        
                
                            <!--      </div>-->
                            <!--      <img class="googleMapImg" src="<?php echo BASE; ?>themes/review/assets/images/tripadvisor.png" alt="" srcset="">-->
    
                                  
                                  
                                  
                            <!--    </div>-->
                            <!--  </a>-->
                            <!--</div>-->
                          </div>
                        
                          <!-- Controls -->
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    
            </div>
        </section>
      </div>
    
    

      <section id="quality_section">
        <div class="container">
          <div class="row">
            <div class="quality_container flexme">
              <div class="col-md-4 mytitle">
                <div class="title_bar pad-left">
                  <h2 style="color: #fff">Why Buy From Us</h2>
                </div>
              </div>
              <div class="col-md-8">
                <div class="row quality_icons_container">
                  <div>
                    <h4 class="qua"><i class="fa-solid fa-headset"></i> 24/7 Client Support</h4>
                  </div>
                  <div >
                    <h4 class="qua"><i class="fa fa-lock"> </i>Safe & Secure</h4>
                  </div>
                  <div >
                    <h4 class="qua"><i class="fa fa-thumbs-up"></i> Quality Reviews</h4>
                  </div>
                  <div >
                    <h4 class="qua"><i class="fa-solid fa-sack-dollar"></i> Discount Prices</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- <section id="testimonials_section">
        <div class="container">
          <div class="row" style="padding: 5px 0">
            <div class="quality_container flexme">
              <div class="col-md-4 mytitle">
                <div class="title_bar" style="padding-left: 50px">
                  <h2 style="color: #fff">TÉMOIGNAGES DE NOS CLIENTS</h2>
                </div>
              </div>
              <div class="col-md-8 testimonials_container">
                <div
                  class="col-md-8 client-testimonial-box client-testimonial-box-1 active"
                  data-value="1"
                >
                  <img src="assets/images/person1.png" alt="" srcset="" />
                  <div class="">
                    <p>
                      Trés bon service, voiture confortable, chauffeur agréable
                      ....je recommande ;)
                    </p>
                    <span><strong>Fabrice P.</strong></span>
                    <img
                      class="stars"
                      src="assets/images/five_star-removebg-preview.png"
                      alt=""
                      srcset=""
                    />
                  </div>
                </div>
                <div
                  class="col-md-8 client-testimonial-box client-testimonial-box-2"
                  data-value="2"
                >
                  <img src="assets/images/person2.png" alt="" srcset="" />
                  <div class="">
                    <p>
                      Support Client trés arrangeant et sympa.....service au
                      top,
                    </p>
                    <span><strong>Lea .S</strong></span>
                    <img
                      class="stars"
                      src="assets/images/five_star-removebg-preview.png"
                      alt=""
                      srcset=""
                    />
                  </div>
                </div>
                <div
                  class="col-md-8 client-testimonial-box client-testimonial-box-3"
                  data-value="3"
                >
                  <img src="assets/images/person3.png" alt="" srcset="" />
                  <div class="">
                    <p>à l'heure, tarif correcte , et chauffeur souriant....</p>
                    <span><strong>Marie L .</strong></span>
                    <img
                      class="stars"
                      src="assets/images/five_star-removebg-preview.png"
                      alt=""
                      srcset=""
                    />
                  </div>
                </div>
                <div
                  class="col-md-8 client-testimonial-box client-testimonial-box-4"
                  data-value="4"
                >
                  <img src="assets/images/person1.png" alt="" srcset="" />
                  <div class="">
                    <p>best shuttle service in paris for disabled person</p>
                    <span><strong>Kevin .G</strong></span>
                    <img
                      class="stars"
                      src="assets/images/five_star-removebg-preview.png"
                      alt=""
                      srcset=""
                    />
                  </div>
                </div>
                <div class="dots">
                  <div class="dot dot-1 active" data-value="1"></div>
                  <div class="dot dot-2" data-value="2"></div>
                  <div class="dot dot-3" data-value="3"></div>
                  <div class="dot dot-4" data-value="4"></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      
      <section class="scroll-section" id="services" style="scroll-margin-top: 110px;">

        <!-- <hr class="lg" /> -->
        <div class="container">
          <!-- <h4 class="yellow">Welcome</h4> -->
          <h2 class="h1" style="margin: 20px 0 !important;font-size: 32px;">Our services</h2>
          <!-- Our Services Welcome-->
          <div class="row service-row">
            
            <?php 
              if (!empty($all_items)) {
                foreach ($all_items as $key => $social_network) {
                    $categories = $social_network->categories;
            ?>
            
            <div class="col-md-4 col-sm-4 col-ms-4 service-box-container">
              <div class="content">
                <div class="ribbon">
                  <span style="display: block">Discount</span>
                </div>
                <div class="ribbon2">
                  <span style="display: block">New</span>
                </div>
                <h5 class="shuttle-heading"><?php echo strip_tags($categories[0]->name)?></h5>

                <div class="service_row">
                  <div class="service_img-container">
                    <img
                    src="<?php echo $categories[0]->image ?>"
                    alt="<?php echo $categories[0]->name ?>"
                    class="service_img"
                    style="object-fit: contain;"
                  />
                  </div>
                  <div class="service_text" style="overflow: hidden;">
                    <p style="text-align: left;">
                      <?php echo strip_tags($categories[0]->content) ?>
                    </p>
                  </div>
                  

                </div>
                <div class="service_bottom" >
                  <div>
                    <a href="<?php echo cn($categories[0]->url_slug) ?>" style="display: block;">
                      <button class="service-btn-green">
                        Know More
                      </button>
                    </a>
                  </div>
                  <div>
                    <a href="#" style="display: block;">
                      <button class="service-btn open-bookings">
                        <span class="pulseAnim">Get Reviews Now</span>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            
            </div>
            
            <?php }} ?>
            
        </div>
        </div>
      </section>   
      
      <div class="container" style="margin-bottom: 20px;">
        <?php echo htmlspecialchars_decode(get_option('home_description', ''), ENT_QUOTES); ?>
      </div>
      

      
      <hr class="lg" />

      <section class="ourAchievements" id="ourAchievements">
        <div class="container">
          <div class="row">
          <h2 class="h1">Our Achievements</h2>
          <div class="col-md-3">
            <img src="https://www.mediamister.com/images/statistics-4.webp" alt="" srcset="">
            <h3>12 Years</h3>
            <p>In Business</p>
          </div>
          <div class="col-md-3 d-flex">
            <img src="https://www.mediamister.com/images/statistics-1.webp" alt="" srcset="">
            <h3>121758</h3>
            <p>Happy Customers
            </p>
          </div>
          <div class="col-md-3 d-flex">
            <img src="https://www.mediamister.com/images/statistics-2.webp" alt="" srcset="">
            <h3>204097</h3>
            <p>Orders Delivered
            </p>
          </div>
          <div class="col-md-3 d-flex">
            <img src="https://www.mediamister.com/images/statistics-3.webp" alt="" srcset="">
            <h3>208</h3>
            <p>Countries Served
            </p>
          </div>
        </div>
        </div>
      </section>

        

      <section class="scroll-section" id="whyBuy">

        <hr class="lg" />
        <div class="container">
          <h2 class="h1" style="margin: 20px 0 !important;font-size: 32px;text-align: center;">Why buy from us?</h2>

          <div class="row">
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th style="background: rgba(235, 244, 255);"></th>
                    <th><img src="<?php echo get_option('website_logo', ''); ?>" width="150px" alt="" srcset=""></th>
                    <th><img src="<?php echo BASE; ?>themes/review/assets/images/useViral.png" width="150px" alt="" srcset=""></th>
                    <th><img src="<?php echo BASE; ?>themes/review/assets/images/sidesmedia.png" width="150px" alt="" srcset=""></th>
                    <th><img src="<?php echo BASE; ?>themes/review/assets/images/realmedia.png" width="150px" alt="" srcset=""></th>
                    <th><img src="<?php echo BASE; ?>themes/review/assets/images/getafollower.png" width="150px" alt="" srcset=""></th>
                    <th><img src="<?php echo BASE; ?>themes/review/assets/images/mediamister.png" width="150px" alt="" srcset=""></th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                      $buyus_decode = json_decode(get_option('home_buyus', ''), true);
                    ?>
                    <tr class="odd">
                      <td class="odd" style="text-wrap: nowrap;"><span class="checkmark fe fe-<?= $buyus_decode[0]['icon'] ?> text-icon" style="margin-right: 5px;"></span><?= $buyus_decode[0]['topic']; ?></td>
                      <td><?= $buyus_decode[0]['topreviewagency']; ?></td>
                      <td><?= $buyus_decode[0]['logo1']; ?></td>
                      <td><?= $buyus_decode[0]['logo2']; ?></td>
                      <td><?= $buyus_decode[0]['logo3']; ?></td>
                      <td><?= $buyus_decode[0]['logo4']; ?></td>
                      <td><?= $buyus_decode[0]['logo5']; ?></td>
                    </tr>
                    
                    <?php
                      if ($buyus_decode) {
                        $i = 0; 
                        foreach ($buyus_decode as $key => $buyus) {
                          $i++;
                          if ($key === 0) {
                            continue;
                          }
                    ?>
                    <tr class="<?php echo ($i%2 == 0) ? 'even' : 'odd'; ?>">
                      <td class="<?php echo ($i%2 == 0) ? 'even' : 'odd'; ?>" style="text-wrap: nowrap;">
                          <span class="checkmark fe fe-<?= $buyus['icon'] ?> text-icon" style="margin-right: 5px;"></span>
                          <?php echo $buyus['topic']; ?>
                      </td>
                      <td>
                          <?php if ($buyus['topreviewagency'] == '1') { ?>
                          ✅
                          <?php } else { ?>
                          <span class="tableCross">
                            <i class="fa-solid fa-xmark"></i>
                          </span>
                          <?php } ?>
                      </td>
                      <td>
                          <?php if ($buyus['logo1'] == '1') { ?>
                          ✅
                          <?php } else { ?>
                          <span class="tableCross">
                            <i class="fa-solid fa-xmark"></i>
                          </span>
                          <?php } ?>
                      </td>
                      <td>
                          <?php if ($buyus['logo2'] == '1') { ?>
                          ✅
                          <?php } else { ?>
                          <span class="tableCross">
                            <i class="fa-solid fa-xmark"></i>
                          </span>
                          <?php } ?>
                      </td>
                      <td>
                          <?php if ($buyus['logo3'] == '1') { ?>
                          ✅
                          <?php } else { ?>
                          <span class="tableCross">
                            <i class="fa-solid fa-xmark"></i>
                          </span>
                          <?php } ?>
                      </td>
                      <td>
                          <?php if ($buyus['logo4'] == '1') { ?>
                          ✅
                          <?php } else { ?>
                          <span class="tableCross">
                            <i class="fa-solid fa-xmark"></i>
                          </span>
                          <?php } ?>
                      </td>
                      <td>
                          <?php if ($buyus['logo5'] == '1') { ?>
                          ✅
                          <?php } else { ?>
                          <span class="tableCross">
                            <i class="fa-solid fa-xmark"></i>
                          </span>
                          <?php } ?>
                      </td>
                    </tr>
                  <?php }} ?>
                  
                  <!--<tr class="odd">-->
                  <!--  <td class="odd">Price for 1 Google Maps Review</td>-->
                  <!--  <td>3$</td>-->
                  <!--  <td>7.5$</td>-->
                  <!--  <td>7.25$</td>-->
                  <!--  <td>25$</td>-->
                  <!--  <td>25$</td>-->
                  <!--  <td>25$</td>-->
                  <!--</tr>-->
                  <!--<tr class="even">-->
                  <!--  <td class="even">100% Payment Safe Reviews</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>     -->
                  <!--    <span class="tableCross">-->
                  <!--      <i class="fa-solid fa-xmark"></i>-->
                  <!--    </span>                 -->
                  <!--  </td>                    -->
                  <!--  <td>-->
                  <!--    <span class="tableCross">-->
                  <!--      <i class="fa-solid fa-xmark"></i>-->
                  <!--    </span>                       </td>                    -->
                  <!--  <td>-->
                  <!--    <span class="tableCross">-->
                  <!--      <i class="fa-solid fa-xmark"></i>-->
                  <!--    </span>   -->
                  <!--  </td>-->
                  <!--  <td>-->
                  <!--    <span class="tableCross">-->
                  <!--      <i class="fa-solid fa-xmark"></i>-->
                  <!--    </span>   -->
                  <!--  </td>-->

                  <!--</tr>-->
                  <!--<tr class="odd">-->
                  <!--  <td class="odd">100% Active and Real Profiles</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="even">-->
                  <!--  <td class="even">Has Fast And Reliable Service</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="odd">-->
                  <!--  <td class="odd">Non-Drop Reviews</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="even">-->
                  <!--  <td class="even">Will Recieve Fast Reviews Within 24 hours</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="odd">-->
                  <!--  <td class="odd">Work with Real People</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="even">-->
                  <!--  <td class="even">Safe And Secure</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="odd">-->
                  <!--  <td class="odd">Great Customer Support</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="even">-->
                  <!--  <td class="even">100% Risk Free</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="odd">-->
                  <!--  <td class="odd">Money back gaurantee</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="even">-->
                  <!--  <td class="even">Great Customer Support</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="odd">-->
                  <!--  <td class="odd">Tiered Pricing System</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="even">-->
                  <!--  <td class="even">Targeted Services</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                  <!--<tr class="odd">-->
                  <!--  <td class="odd">Privacy And Safety</td>-->
                  <!--  <td>-->
                  <!--    ✅-->
                  <!--  </td>-->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                    
                  <!--  <td>✅</td>                    -->
                  <!--  <td>✅</td>-->
                  <!--  <td>✅</td>-->
                  <!--</tr>-->
                </tbody>
              </table>
            </div>
          </div>
          <div class="text-center">
            <a href="checkout.html">
              <button class="book-now-btn btn-lg open-booking">
                <span class="pulseAnim">Get  Reviews now</span>
              </button></a
            >
          </div>
        </div>         
        
          
      </section>
      

      

      <!-- <section class="scroll-section" id="packages" style="margin-top: 0">
        <hr class="lg" />

        <div class="container">
          <h2 class="h1" style="margin: 20px 0 !important;font-size: 32px;text-align: center;"> Our Services
          </h2>

          <div class="swiper-container row" id="services-slider">
            <div class="swiper-wrapper">
              <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-1">
                <div class="packageCard">
                  <h2 class="packageHeader">Business</h2>
                  <div class="packageContent">
                    <div class="packagePriceBox">
                      <span class="newPrice">
                        450$
                      </span>
                      <span class="oldPrice">
                        <s>997$</s>
                      </span>
                      <span class="priceDiscount">
                        -50%
                      </span>
                      
                    </div>
                    <div class="packagePriceBox" style="padding: 10px !important;">
                      <span class="savePrice">
                        Save 450$
                      </span>
                    </div>
                    <button class="packageBtn">
                      Order Now
                    </button>
                    <ul class="packageList">
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 swiper-slide s-slide-2">
                <div class="packageCard">
                  <h2 class="packageHeader">Business</h2>
                  <div class="packageContent">
                    <div class="packagePriceBox">
                      <span class="newPrice">
                        450$
                      </span>
                      <span class="oldPrice">
                        <s>997$</s>
                      </span>
                      <span class="priceDiscount">
                        -50%
                      </span>
                      
                    </div>
                    <div class="packagePriceBox" style="padding: 10px !important;">
                      <span class="savePrice">
                        Save 450$
                      </span>
                    </div>
                    <button class="packageBtn">
                      Order Now
                    </button>
                    <ul class="packageList">
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-3">
                <div class="packageCard">
                  <h2 class="packageHeader">Business</h2>
                  <div class="packageContent">
                    <div class="packagePriceBox">
                      <span class="newPrice">
                        450$
                      </span>
                      <span class="oldPrice">
                        <s>997$</s>
                      </span>
                      <span class="priceDiscount">
                        -50%
                      </span>
                      
                    </div>
                    <div class="packagePriceBox" style="padding: 10px !important;">
                      <span class="savePrice">
                        Save 450$
                      </span>
                    </div>
                    <button class="packageBtn">
                      Order Now
                    </button>
                    <ul class="packageList">
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-4">
                <div class="packageCard">
                  <h2 class="packageHeader">Business</h2>
                  <div class="packageContent">
                    <div class="packagePriceBox">
                      <span class="newPrice">
                        450$
                      </span>
                      <span class="oldPrice">
                        <s>997$</s>
                      </span>
                      <span class="priceDiscount">
                        -50%
                      </span>
                      
                    </div>
                    <div class="packagePriceBox" style="padding: 10px !important;">
                      <span class="savePrice">
                        Save 450$
                      </span>
                    </div>
                    <button class="packageBtn">
                      Order Now
                    </button>
                    <ul class="packageList">
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev arrows"></div>
            <div class="swiper-button-next arrows"></div>

            

            <div class="text-center">
              <a href="#">
                <button class="book-now-btn btn-lg open-booking">
                  <span class="pulseAnim">Get My package now</span>
                </button></a
              >
            </div>
          </div>
        </div>
      </section> -->

      <!-- <section id="testimonials" class="scroll-section" style="margin-top: 0">
        <hr class="lg" />

        <div class="container">
          
         

          <h2 class="h1" style="margin: 20px !important">
            TÉMOIGNAGES CLIENTS
          </h2>
          <div class="swiper-container row" id="testimonials-slider">
            <div class="swiper-wrapper">
              <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-1">
                <div class="packageCard">
                  <h2 class="packageHeader">Business</h2>
                  <div class="packageContent">
                    <div class="packagePriceBox">
                      <span class="newPrice">
                        450$
                      </span>
                      <span class="oldPrice">
                        <s>997$</s>
                      </span>
                      <span class="priceDiscount">
                        -50%
                      </span>
                      
                    </div>
                    <div class="packagePriceBox" style="padding: 10px !important;">
                      <span class="savePrice">
                        Save 450$
                      </span>
                    </div>
                    <button class="packageBtn">
                      Order Now
                    </button>
                    <ul class="packageList">
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 swiper-slide s-slide-2">
                <div class="packageCard">
                  <h2 class="packageHeader">Business</h2>
                  <div class="packageContent">
                    <div class="packagePriceBox">
                      <span class="newPrice">
                        450$
                      </span>
                      <span class="oldPrice">
                        <s>997$</s>
                      </span>
                      <span class="priceDiscount">
                        -50%
                      </span>
                      
                    </div>
                    <div class="packagePriceBox" style="padding: 10px !important;">
                      <span class="savePrice">
                        Save 450$
                      </span>
                    </div>
                    <button class="packageBtn">
                      Order Now
                    </button>
                    <ul class="packageList">
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-3">
                <div class="packageCard">
                  <h2 class="packageHeader">Business</h2>
                  <div class="packageContent">
                    <div class="packagePriceBox">
                      <span class="newPrice">
                        450$
                      </span>
                      <span class="oldPrice">
                        <s>997$</s>
                      </span>
                      <span class="priceDiscount">
                        -50%
                      </span>
                      
                    </div>
                    <div class="packagePriceBox" style="padding: 10px !important;">
                      <span class="savePrice">
                        Save 450$
                      </span>
                    </div>
                    <button class="packageBtn">
                      Order Now
                    </button>
                    <ul class="packageList">
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-4">
                <div class="packageCard">
                  <h2 class="packageHeader">Business</h2>
                  <div class="packageContent">
                    <div class="packagePriceBox">
                      <span class="newPrice">
                        450$
                      </span>
                      <span class="oldPrice">
                        <s>997$</s>
                      </span>
                      <span class="priceDiscount">
                        -50%
                      </span>
                      
                    </div>
                    <div class="packagePriceBox" style="padding: 10px !important;">
                      <span class="savePrice">
                        Save 450$
                      </span>
                    </div>
                    <button class="packageBtn">
                      Order Now
                    </button>
                    <ul class="packageList">
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                      <li class="packageListItem">
                        <span>✅</span> Lorem ipsum dolor sit.
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev arrows"></div>
            <div class="swiper-button-next arrows"></div>

            

            <div class="text-center">
              <a href="#">
                <button class="book-now-btn btn-lg open-booking">
                  <span class="pulseAnim">Get My package now</span>
                </button></a
              >
            </div>
          </div>
        </div>
      </section> -->

      

      

      

      

      <section class="scroll-section" id="servicesWork">

        <hr class="lg" />
        <div class="container">
          <!-- <h4 class="yellow">Welcome</h4> -->
          <h2 class="h1" style="margin: 20px 0 !important;font-size: 32px;text-align: center;">How it works?</h2>
          <!-- Our Services Welcome-->
          <?php echo htmlspecialchars_decode(get_option('home_howitworks', ''), ENT_QUOTES); ?>
          
        </div>

          
      </section>

      <section id="testimonials" class="scroll-section" style="margin-top: 0">
        <hr class="lg" />

        <div class="container">
          
          <!-- <h4 class="yellow" style="margin-top: 50px !important">
            CLIENTS HEUREUX
          </h4> -->

          <h2 class="h1" style="margin: 20px !important">
            What our clients say
          </h2>
          <!-- Testimonials  Happy Client's -->
          <div class="swiper-container row" id="testimonials-slider">
            <div class="swiper-wrapper">
              <?php 
                $testimonials = json_decode(get_option('home_testimonials', ''));
                if(!empty($testimonials)) {
                $i=0;
                foreach($testimonials as $key => $testimonial) {
                $i++;
              ?>
                <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-<?=$i?>">
                  <div
                    class="inner matchHeight textimoniyal-sec"
                    id="testimonial-box"
                    style="position: relative;"
                  >
                    <div class="text">
                      <p><?=$testimonial->content?></p>
                    </div>
                    <img
                      class="goldStars"
                      src="<?php echo BASE; ?>themes/review/assets/images/goldStars.png"
                      alt=""
                    />
                  </div>
                  <!-- <div class="asd">
                    Support Client trés arrangeant et sympa.....service au top,
                    <img src="./assets/images/five_star.png" alt="" />
                  </div> -->
  
                  <div class="quote">
                    <img src="<?php echo BASE; ?>themes/review/assets/images/person<?=($i>3)?1:$i?>.png" alt="Client" />
                    <div class="name">
                      <span><?=$testimonial->title?></span>
                      <p>Gérant de société de Transport VTC</p>
                    </div>
                  </div>
                </div>
              <?php }} ?>
            </div>
            <div class="swiper-button-prev arrows"></div>
            <div class="swiper-button-next arrows"></div>

            <!-- <div class="arrows">
              <a href="#" class="arrow-left fa fa-caret-left"></a>
              <a href="#" class="arrow-right fa fa-caret-right"></a>
            </div> -->

            <div class="text-center">
              <a href="checkout.html">
                <button class="book-now-btn btn-lg open-booking">
                  <span class="pulseAnim">Get  Reviews now</span>
                </button></a
              >
            </div>
          </div>
        </div>
      </section>

      <section class="scroll-section" id="faq">
        <hr class="lg" />
        <!-- <div class="car-right animation-block">
          <img src="assets/images/caddy2.png" alt="Car" width="100%" />
        </div> -->
        <div class="container">
          <h2
            class="h1"
            style="
              text-align: center;
              margin: 20px 0 !important;
              color: #2ba5c9 !important;
              font-size: 32px;

            "
          >
          FAQ
          </h2>
         
          <div class="row" style="padding: 10px">
            <?php
                $faqs = json_decode(get_option('home_faqs', ''));
                if(!empty($faqs)) {
                $i=0;
                foreach($faqs as $faq) {
                $i++;
            ?>
              <div class="col-md-6">
                <div class="question_box ">
                    <div class="question">
                      <h4 class="question_heading question_heading-<?=$i?>" data-value="<?=$i?>" style="margin: 10px;"> <?=$faq->title?> <span class="sign sign-<?=$i?>">+</span></h4>
                    </div>
                    <p class="answer answer-<?=$i?>">
                        <?=$faq->content?>
                    </p>
                </div>
              </div>
            <?php }} ?>
          </div>

          <div class="text-center">
            <a href="checkout.html">
              <button class="book-now-btn btn-lg open-booking">
                <span class="pulseAnim">Get  Reviews Now</span>
              </button></a
            >
          </div>

          
        </div>

        
        
      </section>
        
    </main>
    
    <script>
      $(document).ready(function() {
        console.log('Brooooo')
        $('#reviewType').change(function() {
          if ($(this).val() == 'Custom') {
            console.log('Custom Seleted')
            $('#customReview').show();
          } else {
            console.log('Other Seleted')
    
            $('#customReview').hide();
          }
        });
      });
        
        
        
    
        // contact
        const b_platform = document.querySelector('#platform');
        const b_catrgory = document.querySelector('#category');
        const b_package = document.querySelector('#package');
        const b_link = document.querySelector('#b_link')
        const b_submit_btn = document.querySelector('#submit-checkout-btn');
        if(b_submit_btn) {
        b_submit_btn.addEventListener('click',(e)=>{
        
            if(b_platform.value && b_catrgory.value && b_package.value && b_link.value ) {
        
                window.location.assign('/checkout')
        
                document.querySelector('#b_fail').style.display = 'none';
                document.querySelector('#b_success').style.display = 'block';
            }else{
        
                document.querySelector('#b_success').style.display = 'none';
                document.querySelector('#b_fail').style.display = 'block';
            }
        })
        }
      
        const daysElement = document.querySelector(".flip-countdown-timer__days");
        const hoursElement = document.querySelector(".flip-countdown-timer__hours");
        const minutesElement = document.querySelector(".flip-countdown-timer__minutes");
        const secondsElement = document.querySelector(".flip-countdown-timer__seconds");
    
        const daysElement2 = document.querySelector(".flip-countdown-timer__days2");
        const hoursElement2 = document.querySelector(".flip-countdown-timer__hours2");
        const minutesElement2 = document.querySelector(".flip-countdown-timer__minutes2");
        const secondsElement2 = document.querySelector(".flip-countdown-timer__seconds2");
    
        // Set the end time to 24 hours from now
        const endTime = new Date().getTime() + 24 * 60 * 60 * 1000;
    
        // Update the timer every seconds
        setInterval(() => {
          // Get the current time
          const currentTime = new Date().getTime();
        
          // Calculate the remaining time
          const remainingTime = endTime - currentTime;
        
          // Calculate the number of days, hours, minutes, and seconds
          const days = Math.floor(remainingTime / (24 * 60 * 60 * 1000));
          const hours = Math.floor((remainingTime % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
          const minutes = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));
          const seconds = Math.floor((remainingTime % (60 * 1000)) / 1000);
        
          // Update the timer elements
          daysElement.textContent = days < 10 ? `0${days}` : days;
          hoursElement.textContent = hours < 10 ? `0${hours}` : hours;
          minutesElement.textContent = minutes < 10 ? `0${minutes}` : minutes;
          secondsElement.textContent = seconds < 10 ? `0${seconds}` : seconds;
        
          daysElement2.textContent = days < 10 ? `0${days}` : days;
          hoursElement2.textContent = hours < 10 ? `0${hours}` : hours;
          minutesElement2.textContent = minutes < 10 ? `0${minutes}` : minutes;
          secondsElement2.textContent = seconds < 10 ? `0${seconds}` : seconds;
        
        
        
        
        
          // Check if the timer has reached 00
          if (remainingTime <= 0) {
            daysElement.textContent = "00";
            hoursElement.textContent = "00";
            minutesElement.textContent = "00";
            secondsElement.textContent = "00";
        
            daysElement2.textContent = "00";
            hoursElement2.textContent = "00";
            minutesElement2.textContent = "00";
            secondsElement2.textContent = "00";
        
        
          }
        }, 1000);
    
        function closeContact(){
            document.querySelector('.close_form_btn').addEventListener('click',()=>{
              const contactForm = document.querySelector("#contact_popup_container");
              contactForm.classList.remove('active');
            })
        }
        function openContact(){
            const contactForm = document.querySelector("#contact_popup_container");
            contactForm.classList.add('active');
        }
        // Handle Checking form
        function remvoeActive(){
            const platformSelect = document.querySelectorAll('.categorySelect');
            platformSelect.forEach(item=>{
                item.classList.remove('active');
            })
        }
        const google = document.querySelector('.googleSelect');
        const trustpilot = document.querySelector('.trustpilotSelect');
        const tripadvisor = document.querySelector('.tripadvisorSelect');
    
        const platform = document.getElementById('platform');
        if (platform) {
        // Add event listener for the 'change' event
        platform.addEventListener('change', function() {
          // Log the selected value to the console
          console.log('Selected value:', platform.value);
          if(platform.value == 'google'){
            remvoeActive();
            google.classList.add('active');
          }
          if(platform.value == 'trustpilot'){
            remvoeActive();
            trustpilot.classList.add('active');
          }
          if(platform.value == 'tripadvisor'){
            remvoeActive();
            tripadvisor.classList.add('active');
          }
        });
        }
        // Show price on package slect
        function displayPrice(){
            document.querySelector('#priceRowForm').classList.add('active');
        }
        // const serv = document.querySelector(".dropdownContainer");
        // if(serv) {
        // serv.addEventListener("click", () => {
        //     if (window.innerWidth > 1200) {
        //         document.querySelector(".dropdownMenu").classList.toggle("active");
        //     }
        //     if (window.innerWidth < 1200) {
        //       document.querySelector(".mobile-dropdown")?.classList.toggle("active");
        //     }
        // });
        // }
          
        // Nav item active
        // const navItems = document.querySelectorAll('.navitem');
        // navItems.forEach((item)=>{
        //     item.addEventListener('click',()=>{
        //         navItems.forEach(item=>item.classList.remove('active'));
        //         item.classList.add('active');
        //     })
        // })
    
    
        // contact form handling
        const fname = document.querySelector('#b_firstName');
        const lname = document.querySelector('#b_lastName');
        const cname = document.querySelector('#company');
        const bemail = document.querySelector('#bookemail');
    
    
        const submit_btn = document.querySelector('#submit-booking-btn');
        if(submit_btn) {
        submit_btn.addEventListener('click',(e)=>{
            console.log('bro')
            if(fname.value && lname.value && cname.value && bemail.value) {
              console.log(document.querySelector('#sccess'))
              document.querySelector('#error').style.display = 'none';
        
              document.querySelector('#sccess').style.display = 'block';
            }else{
              console.log(document.querySelector('#error'))
              document.querySelector('#sccess').style.display = 'none';
        
              document.querySelector('#error').style.display = 'block';
            }
        })
        }
      
      
  </script>

    <?php echo Modules::run(get_theme()."/footer_new", false); ?>