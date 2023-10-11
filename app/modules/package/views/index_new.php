    <!-- get Header top menu -->
    <?php
      $data_link = (object)array(
        'link'  => cn(strip_tags($category->url_slug)),
        'name'  => strip_tags($category->name)
      );
      $features = (isset($category->features) && $category->features) ? json_decode($category->features): "";
      $testimonials = (isset($category->testimonials) && $category->testimonials) ? json_decode($category->testimonials): "";
      $faqs     = (isset($category->faqs) && $category->faqs) ? json_decode($category->faqs): "";
    ?>
    <?php // echo Modules::run("blocks/user_header_top_new", $data_link); ?>    
    
    
    <main class="mains set_relatives">
      <div class="taxi-form-full" style="position: relative;overflow: hidden;" id="reservation">
        <!-- <img class="standingBoy" style="position: absolute;right: 250px;bottom: 0;" src="https://ecab.io/assets/images/standing-boy.png" alt="" srcset=""> -->

        <section
          class="container form-taxi-short header-container"
        >
          <div class="row hero">
            
            <div class="col-md-6">
              <form
              id="checkoutForm"
              class="form-validate"
              method="post"
              action="mailhandler.php"
            >
              <h4 class="booking-form-heading">
                START GETTING 5 <span style="margin: 0 5px 3px 5px;" class="fa fa-star"></span>GOOGLE MAPS REVIEWS NOW
              </h4>
              <div class="booking-lower-body">
                <div class="message">
                  <div class="send-success" id="b_success">
                    <img class="msgIcon" src="<?php echo BASE; ?>themes/review/assets/images/doneIcon.png" alt="" srcset="">We have received your request, we will get back to you as soon as possible
                  </div>
                </div>
                <div class="message">
                  <div class="send-error" id="b_fail">
                    <img class="msgIcon" src="<?php echo BASE; ?>themes/review/assets/images/dangerIcon.png" alt="" srcset=""> Please fill out all the required fields
                  </div>
                </div>
                <div class="row form-with-labels">
                  <div class="col">
                    <div class="form-group">
                      
                    </div>
                  </div>
                </div>
                <div class="row form-with-labels formRow">
                  
                  <div class="col-md-12">
                    <select
                      name="package"
                      id="package"
                      class="ajaxField required disable-arrow"
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

                    <div class="flip-countdown-timer__wrapper booking" style="color: red !important;">
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
                  type="submit"
                  name="submit"
                  id="submit-checkout-btn"
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
            <div class="col-md-6" style="position: relative;">
                  <p class="buyHeading">BUY <?php echo strip_tags($category->name) ?> FROM N<sup>O</sup> 1 REVIEWS AGENCY</p>
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
                        <?php $features = json_decode($category->features); ?>
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
                  <img class="googleMapImg" style="max-width: 230px;" src="<?php echo $category->image ?>" alt="" srcset="">
                  
                  
                  
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
        
        <div class="container" style="margin-top: 20px;">
          <?php echo htmlspecialchars_decode($category->content, ENT_QUOTES); ?>
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
                      $buyus_decode = json_decode($category->buyus, true);
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
                      <td class="<?php echo ($i%2 == 0) ? 'even' : 'odd'; ?>" style="text-wrap: nowrap;"><span class="checkmark fe fe-<?= $buyus['icon'] ?> text-icon" style="margin-right: 5px;"></span><?php echo $buyus['topic']; ?></td>
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

        

        <section class="scroll-section" id="servicesWork">

          <hr class="lg" />
          <div class="container">
            <h2 class="h1" style="margin: 20px 0 !important;font-size: 32px;text-align: center;">How it works?</h2>
            <?php echo htmlspecialchars_decode($category->howitworks, ENT_QUOTES); ?>
            
          </div>
  
            
        </section>

        <section id="testimonials" class="scroll-section" style="margin-top: 0">
          <hr class="lg" />
  
          <div class="container">
            
            <!-- <h4 class="yellow" style="margin-top: 50px !important">
              CLIENTS HEUREUX
            </h4> -->
  
            <h2 class="h1" style="margin: 20px !important">
              WHAT OUR CLIENTS SAY              
            </h2>
            <!-- Testimonials  Happy Client's -->
            <div class="swiper-container row" id="testimonials-slider">
              <div class="swiper-wrapper">
                <?php if(!empty($testimonials)) {
                    $i=0;
                    foreach($testimonials as $key => $testimonial) {
                    if($i==3) {
                        $i=0;
                    }
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
                <a href="#">
                  <button class="book-now-btn btn-lg open-booking">
                    <span class="pulseAnim">Get Reviews now</span>
                  </button></a
                >
              </div>
            </div>
          </div>
        </section>

        <section class="scroll-section" id="faq">
            <hr class="lg" />
            
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
              QUESTIONS FREQUENTES
              </h2>
             
              <div class="row" style="padding: 10px">
                <?php if(!empty($faqs)) {
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
    <!--            <div class="col-md-6">-->
    <!--              <div class="question_box ">-->
    <!--                <div class="question">-->
    <!--                  <h4 class="question_heading question_heading-1" data-value="1" style="margin: 10px;"> The Benefits of Buying Google Reviews <span class="sign sign-1">+</span></h4>-->
                        
    <!--                </div>-->
    <!--                <p class="answer answer-1">-->
    <!--                  The thing about your business being online is that if you don't have an established reputation, and you don't have positive reviews on Google, then you aren't going to be able to attract even more people to buy your product or service. -->
    
    <!--But the good thing is that there are ways to increase your credibility through Google reviews, whether you are doing this in a natural way, or you are choosing to buy them. -->
    
    <!--Let’s take a look at the benefits of buying reviews, and why it is important to keep up your credibility through Google so that you can guarantee the success of your business for a long time to come.-->
    <!--                </p>-->
    <!--              </div>-->
    <!--              <div class="question_box ">-->
    <!--                <div class="question">-->
    <!--                  <h4 class="question_heading question_heading-2" data-value="2" style="margin: 10px;"> Can You Buy Reviews for Google? <span class="sign sign-2">+</span></h4>-->
                        
    <!--                </div>-->
    <!--                <p class="answer answer-2">-->
    <!--                  So, can you buy reviews, and what does it mean to do so? -->
    
    <!--Well, you pick a provider, and then you add this service to an online shopping cart, and then you provide information related to your Google My Business listings, and then you will own Google reviews with positive feedback and good ratings. -->
    
    <!--The great news is that the industry is vast, which means that there are a lot of options out there for you to buy from, but the downside is that you are definitely going to struggle in terms of finding reputable companies that are going to take care of your needs, while maintaining the safety and security of your personal information, and your brand's reputation. -->
    
    <!--It is all too tempting for companies these days to take shortcuts, and to take advantage of your naivete, especially if you haven't had a lot of experience in the industry of being able to buy Google reviews. -->
    
    <!--So, to answer this question, yes, you can purchase positive Google reviews, but you also need to be really careful when doing so, because there are plenty of companies out there that don't want your business to do well and only want to take your money, and provide you with low quality reviews in return. -->
    
    <!--The more time you spend doing research as far as the right place to buy from goes, the better off you're going to be.-->
    <!--                </p>-->
    <!--              </div>-->
    <!--              <div class="question_box ">-->
    <!--                <div class="question">-->
    <!--                  <h4 class="question_heading question_heading-3" data-value="3" style="margin: 10px;padding-right: 40px;"> Why Your Reputation Matters ? <span class="sign sign-3">+</span></h4>-->
                        
    <!--                </div>-->
    <!--                <p class="answer answer-3">-->
    <!--                  When choosing to purchase Google reviews, you've got to think about why your reputation matters. Useviral is highly trusted and even recommended by popular news publication OutlookIndia.-->
    
    <!--The most significant thing is that content is king, which means that your brand’s online reviews really matter. -->
    
    <!--Now, more than ever, it is really important for businesses to get 5 star Google reviews, because clients and customers want to be able to see how other people have experienced the brand, in order to be able to form trust with that brand. -->
    
    <!--This is going to help them make buying decisions, and become more informed about the customer experience in general. -->
    
    <!--Let's take a look at why your reputation matters, and why being able to buy reviews is beneficial.-->
    <!--              </div>-->
    <!--              <div class="question_box ">-->
    <!--                <div class="question">-->
    <!--                  <h4 class="question_heading question_heading-4" data-value="4" style="margin: 10px;padding-right: 40px;"> Is it Illegal to Buy Google Reviews?-->
    <!--                    <span class="sign sign-4">+</span></h4>-->
                        
    <!--                </div>-->
    <!--                <p class="answer answer-4">-->
    <!--                  The great news is that no, it isn't illegal to buy reviews, again as long as you are going with a company that has a really good reputation. -->
    
    <!--You've got to make sure that the company cares about not only keeping your personal information safe but is making sure that you are getting high-quality Google reviews that come from real profiles and are as authentic as they could possibly be. -->
    
    <!--The last thing that you want to do is just sign up for a company that is claiming to offer great reviews at really good prices, when in all reality they are just trying to sell you low quality reviews that aren't going to add to your reputation at all. -->
    
    <!--There are plenty of companies out there like this, because they are much more interested in just earning a quick buck, and then even disappearing at some point. -->
    
    <!--The bottom line when it comes to legality around Google reviews is that as long as you're working with a company that has a lot of credibility of its own, and a good reputation, then there is nothing wrong with doing so. -->
    <!--              </div>-->
    <!--              <div class="question_box ">-->
    <!--                <div class="question">-->
    <!--                  <h4 class="question_heading question_heading-5" data-value="5" style="margin: 10px;padding-right: 40px;"> Best Place to Purchase 5 Star Google Reviews-->
    <!--                    <span class="sign sign-5">+</span></h4>-->
                        
    <!--                </div>-->
    <!--                <p class="answer answer-5">-->
    <!--                  The best place to buy positive, 5 star Google reviews is UseViral. -->
    
    <!--According to multiple trusted sources such as: Startup Info, Earthweb, Jeffbullas and others Useviral is the only place to buy reliable and high-quality Google reviews-->
    
    <!--One of the best things about our reviews is that you get to choose how many you purchase, so a lot of the control is in your hands. -->
    
    <!--There are a lot of other companies out there that are going to sell you bulk packages, which means that you are going to obtain additional features that you won't even end up using, which is going to be a waste of your time and money. -->
    
    <!--Not only do we offer reasonable pricing, but we offer the opportunity for you to decide how many reviews you need right now. -->
    
    <!--Whether you just need two reviews to boost your brands existing reputation, or you need 50, because you are still on the bottom rung, and you need a really big kickstart, we've got the resources that you require. -->
    
    <!--The best part is that everything about our features is completely secure and safe, so there's no need to worry about our reviews dropping off at any point, and there's also no need to worry about anybody obtaining your personal information. -->
    
    <!--We even offer a 30-day refill, just in case something was to happen to your new reviews in this time.-->
    <!--              </div>-->
                  
    <!--            </div>-->
    <!--            <div class="col-md-6" style="text-align: center">-->
                  
    <!--              <div class="question_box ">-->
    <!--                <div class="question">-->
    <!--                  <h4 class="question_heading question_heading-6" data-value="6" style="margin: 10px;"> It will improve your local search ranking <span class="sign sign-6">+</span></h4>-->
                        
    <!--                </div>-->
    <!--                <p class="answer answer-6">-->
    <!--                  The majority of the younger generation these days trust online reviews as much as they trust recommendations from friends and family. -->
    
    <!--Of course, those reviews have to meet specific criteria, like being in the right industry, having multiple positive reviews, and authenticity. -->
    
    <!--Google is one of the most used, as well as one of the most trusted search engines, which is why people are willing to trust Google reviews when they are looking for the right company to buy from. -->
    
    <!--When you buy Google reviews, you increase the trust and credibility of your brand, and you are able to maintain your reputation through Google.-->
    <!--                </p>-->
    <!--              </div>-->
    <!--              <div class="question_box ">-->
    <!--                <div class="question">-->
    <!--                  <h4 class="question_heading question_heading-7" data-value="7" style="margin: 10px;"> Google reviews can influence purchase decisions <span class="sign sign-7">+</span></h4>-->
                        
    <!--                </div>-->
    <!--                <p class="answer answer-7">-->
    <!--                  What's really great about reviews is that they can help push somebody from considering whether to buy from a company, to purchasing from that company. -->
    
    <!--A lot of the time when clients are reading Google reviews, they are looking for a confirmation that they are making the right choice when it comes to their buying decisions. -->
    
    <!--Positive Google reviews can give customers the validation that they are looking for, helping them to make the right choice. -->
    
    <!--However, the opposite is also relevant as well. If your business has negative Google reviews, then customers will be encouraged to go and check out the competition instead.-->
    <!--                </p>-->
    <!--              </div>-->
    <!--              <div class="question_box ">-->
    <!--                <div class="question">-->
    <!--                  <h4 class="question_heading question_heading-8" data-value="8" style="margin: 10px;"> The Advantages of Google Reviews <span class="sign sign-8">+</span></h4>-->
                        
    <!--                </div>-->
    <!--                <p class="answer answer-8">-->
    <!--                  We recommend that you integrate Google reviews as a big part of your digital marketing strategy. -->
    
    <!--                  They can help to increase your visibility, and they can help you build credibility and trust with your consumers. -->
                      
    <!--                  This way, you can push your consumers through each stage of their buyer’s journey. -->
                      
    <!--                  When you purchase reviews on Google you should see an increase both in traffic to your physical location, and traffic to your website. -->
                      
    <!--                  Google reviews are essential, because they're going to help you rank, especially if you are part of an industry that is extremely competitive, and it is difficult to stand out from the crowd. -->
                      
    <!--                  The best part is the majority of reputable companies that can help you buy more reviews offer great pricing, so you aren't going to have to pay through the roof for your reviews.-->
                      
    <!--                  Another huge advantage is that they are going to be able to help you improve your SEO. -->
                      
    <!--                  The more you focus on improving your SEO, the higher you're going to be able to rank, especially when it comes to local search results. -->
                      
    <!--                  If you are a local business, and you are relying on consumers located in your vicinity to buy your products, this is going to make a massive difference.-->
                      
    <!--                  Google reviews can also help you gain a successful feedback loop, as well as pertinent customer intelligence. -->
                      
    <!--                  A review can be by a male or female and it is going to tell you how you can improve as a business, what your customers are expecting from your product or service, and even what you are doing wrong. -->
                      
    <!--                  Feedback like this is essential to moving forward as a company and making sure that you are providing your consumers with what they are looking for. -->
                      
    <!--                  Google reviews can also improve clickthrough rates. -->
                      
    <!--                  It is important to get customers to click on your link, and if you have a good amount of positive ratings, they are a lot more likely to do this. -->
                      
    <!--                  You're also going to be able to convert more customers when you have 5 star ratings. -->
                      
    <!--                  Obviously, if a consumer comes across a positive review, they are much more likely to want to visit your website and check your brand out.                </p>-->
    <!--              </div>-->
    <!--              <div class="question_box ">-->
    <!--                <div class="question">-->
    <!--                  <h4 class="question_heading question_heading-9" data-value="9" style="margin: 10px;padding-right: 40px;"> Buying Custom Google Reviews-->
    <!--                    <span class="sign sign-9">+</span></h4>-->
                        
    <!--                </div>-->
    <!--                <p class="answer answer-9">-->
    <!--                  As you probably have been able to guess already, the more you can personalize your reviews, the more they are going to be associated with your brand, and the more convincing they will be when it comes to the consumer. -->
    
    <!--The last thing that you want to do is to go with the company that is going to send you generic reviews that have nothing to do with your brand, because this is going to immediately make consumers look twice at your reviews and make them wonder whether your reviews are authentic or not. -->
    
    <!--The best companies in the industry are going to make sure that you can customize your Google reviews, so that you are able to not only tell them what they should say, but you can send them keywords that need to be included. -->
    
    <!--This way, your reviews are going to be closely linked to your brand, and they are going to showcase the benefits of your brand and the reasons why the consumer should try your product.-->
    <!--              </div>-->
                  
                  
    <!--            </div>-->
              </div>
    
              <div class="text-center">
                <a>
                  <button class="book-now-btn btn-lg open-booking">
                    <span class="pulseAnim">Get  Reviews Now</span>
                  </button></a
                >
              </div>
    
              
            </div>
    
            
            
          </section>
        
      
    </main>
