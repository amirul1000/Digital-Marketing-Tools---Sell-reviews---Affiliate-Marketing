
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

<section id="block-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 col-ms-6" style="padding: 9px">
        <a class="logo-footer" href="<?php echo cn(); ?>">
            <div class="imgFooterContainer">
                <img src="<?php echo get_option('website_logo_white', BASE."themes/review/assets/images/logoWhite.png"); ?>" alt="Smart Store" class="footerLogo" />
            </div>
        </a>
        <a id="copyright" href="<?php echo cn(); ?>">
          <span> <?php echo get_option('copy_right_content',"Copyright &copy; 2023 - SmartStore"); ?></span>
        </a>
        <h4 class="adout-h4">
          <img src="<?php echo BASE; ?>themes/review/assets/images/img-lock.png" alt="Secure Payment" srcset="" />
          Secure payment
        </h4>
        <p style="text-align: center;">
          We use an encrypted SSL security system to ensure that
          your credit card information is protected
          100 %.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 hidden-md hidden-sm hidden-xs hidden-ms">
        <div class="row">
          <div class="col-md-5">
            <h4>Useful Links</h4>
            <ul class="nav navbar-nav">
              <li>
                <a href="<?php echo cn(); ?>">Home</a>
              </li>
              <li><a href="#services">Our Services</a></li>
              <li>
                <a href="#whyBuy">Why Buy From Us</a>
                
              </li>
              <li>
                <a href="#servicesWork">How it works</a>
                
              </li>
              <li>
                <a href="#testimonials">Testimonials </a>
              </li>
              <li>
                <a href="/client/signin">Client Login</a>
                
              </li>
              <li>
                <a href="/client/signup">Client SignUp</a>
                
              </li>
              <li>
                <a onclick="openContact()" href="javascript:void(0)">Contact Us </a>
              </li>
              
              <!-- <li><a href="zones.html">Zones D'Intervention</a></li>
              <li><a href="temoignages.html">Temoignages</a></li>

              <li><a href="faq.html">FAQ</a></li>
              <li><a href="contact.html">Contact</a></li> -->

            </ul>
          </div>
          <div class="col-md-5">
            <h4>Our services</h4>
            <ul class="nav navbar-nav footer-services">
              <?php 
                if (!empty($all_items)) {
                  foreach ($all_items as $key => $social_network) {
              ?>
              <li><a href="<?php echo cn($social_network[0]->url_slug) ?>"><?php echo strip_tags($social_network[0]->name)?> </a></li>
              <?php }} ?>
              
              <li>
                <a href="javascript:void();" onClick="openContact();">Support</a>
                
              </li>
              <li>
                <a href="#faq">FAQ</a>
                
              </li>
              <li>
                <a href="/affiliate/signin">Affiliate Login</a>
                
              </li>
              <li>
                <a href="/affiliate/signup">Affiliate SignUp</a>
                
              </li>
              <!--<li><a href="buy-google-reviews.html">Google Maps Reviews </a></li>-->
              <!--<li><a href="buy-trustpilot-reviews.html">Trustpilot Reviews</a></li>-->
              <!--<li><a href="buy-tripadvisor-reviews.html">Tripadvisor Reviews</a></li>-->
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-ms-6">
        <h4>About Us</h4>
        <ul class="address">
          <li style="color: #fff">
            <img style="margin-right: 8px" height="20px" width="20px"
              src="<?php echo BASE; ?>themes/review/assets/images/icons8-fax-50.png" alt="" srcset=""
            />
            <?php echo get_option('contact_tel',"+12345678"); ?>
          </li>
          <li style="color: #fff">
            <span class="fa fa-envelope" style="font-size: 16px; margin-right: 15px"></span>
            <?php echo get_option('contact_email',"do-not-reply@smartpanel.com"); ?>
          </li>
          <li style="color: #fff">
            <span class="fa fa-clock-o" style="font-size: 16px; margin-right: 15px"></span>
            <?php echo get_option('contact_work_hour',"Mon - Sat 09 am - 10 pm"); ?>
          </li>
          <p style="color: #fff">
            <span class="yellow" style="color: #fff;">
                <strong><i class="fa fa-location-dot" style="color: #fff;"></i> Address:</strong>
            </span>
            <?php echo get_option('company_address', "2915 Ogletown Road #2557 Newark DE 19713 U.S.A"); ?>
          </p>
          <a href="https://digitals.fr/">
            <img class="footerLogoRight" src="<?php echo get_option('company_logo', BASE."themes/review/assets/images/digitalsFooterLogo.png"); ?>" alt="" srcset="" />
          </a>
          <!-- <img
            class="footerBottomImg"
            src="assets/images/AVIS GARANTIS (1).png"
            alt=""
            srcset=""
          /> -->
          <!-- <li><span class="fa fa-skype"></span>gettaxipark</li> -->
        </ul>
      </div>
    </div>
  </div>
  <a href="#" class="go-top hidden-xs hidden-ms">
    <span style="position: absolute;bottom: -80px;right:0;height: 70px;width: 70px;border-radius: 70px;background: #000;display: flex;justify-content: center;align-items: center;border: 1px solid #fff;">
      <i class="fa fa-arrow-up" style="font-size: 40px;color: #fff;"></i>
    </span>
  </a>
  
</section>

<footer>
  <div class="container">
    <div class="row" style="overflow: hidden">
      <div class="col-md-2">
        <span class="copyright">
          <img src="<?php echo BASE; ?>themes/review/assets/images/footer-visa.png" alt="" />
        </span>
      </div>
      <div class="col-md-7">
        <div class="text-center footer-poli">
          <a href="<?php echo cn('terms'); ?>">Terms of Service</a>
          <span class="divider"></span>
          <a href="<?php echo cn('acceptable_usage'); ?>">Acceptable Usage Policy</a>
          <span class="divider"></span>
          <a href="<?php echo cn('privacy'); ?>">Privacy Policy</a>
          <span class="divider"></span>
          <a href="<?php echo cn('refund'); ?>">Refund Policy</a>
        </div>
      </div>
      <div class="col-md-3 social-container">
        <div class="social-small social-yellow">
          <!--<?php if (get_option('social_facebook_link','') != '') { ?>-->
          <!--<?php } ?>-->
          <!--<?php if (get_option('social_twitter_link','') != '') { ?>-->
          <!--<?php } ?>-->
          <!--<?php if (get_option('social_instagram_link','') != '') { ?>-->
          <!--<?php } ?>-->
          <!--<?php if (get_option('social_pinterest_link','') != '') { ?>-->
          <!--<?php } ?>-->
            <a href="<?php echo cn(get_option('social_facebook_link','#')); ?>" target="_blank" class="fa fa-facebook"></a>
            <a href="<?php echo cn(get_option('social_twitter_link','#')); ?>" target="_blank" class="fa fa-twitter"></a>
            <a href="<?php echo cn(get_option('social_instagram_link','#')); ?>" target="_blank" class="fa fa-instagram"></a>
            <a href="<?php echo cn(get_option('social_pinterest_link','#')); ?>" target="_blank" class="fa fa-pinterest"></a>
            <a href="<?php echo cn(get_option('social_youtube_link','#')); ?>" target="_blank" class="fa fa-youtube"></a>
          <!--<?php if (get_option('social_youtube_link','') != '') { ?>-->
          <!--<?php } ?>-->
          <?php if (get_option('social_tumblr_link','') != '') { ?>
            <a href="<?php echo cn(get_option('social_tumblr_link','#')); ?>" target="_blank" class="fa fa-tumblr"></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</footer>