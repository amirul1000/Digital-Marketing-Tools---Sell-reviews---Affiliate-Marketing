
  <!--  <link href="https://topreviews.agency/themes/review/assets/css/bootstrap-grid.css" rel="stylesheet" />-->
    <!-- jQuery -->
   <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

    <!-- Bootstrap JS -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

    <!-- flag icon -->
 <!--   <link href="https://topreviews.agency/assets/plugins/flags/css/docs.css" rel="stylesheet">
    <link href="https://topreviews.agency/assets/plugins/flags/css/flag-icon.css" rel="stylesheet">
-->    
  <link rel="stylesheet" href="https://topreviews.agency/themes/review/assets/webfont/fontawesome-free-6.1.1-web/css/all.css" />
    <link rel="stylesheet" href="https://topreviews.agency/themes/review/assets/css/font-awesome.min.css" />
    <link href="https://topreviews.agency/themes/review/assets/css/swiper.css" rel="stylesheet" />
   <link href="https://topreviews.agency/themes/review/assets/css/swipebox.css" rel="stylesheet" />
    <link href="https://topreviews.agency/themes/review/assets/css/zoomslider.css" rel="stylesheet" />
     <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css" />
    <link href="https://topreviews.agency/themes/review/assets/css/style_client_checkout_remove.css" rel="stylesheet" />
    <link href="https://topreviews.agency/assets/css/feather.css" rel="stylesheet" />

   <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:700,800%7COpen+Sans:400,600,700" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script type="text/javascript" src="https://topreviews.agency/themes/review/assets/js/modernizr-2.6.2.min.js"></script>
    <script src="https://kit.fontawesome.com/82677f8dbc.js" crossorigin="anonymous"></script>
 
    <script type="text/javascript">
      var token = '8d11790ddc9f55d0b69f6fd0cf7394aa',
          PATH  = 'https://topreviews.agency/',
          BASE  = 'https://topreviews.agency/';
      var    deleteItem = 'Are you sure you want to delete this item?';
      var    deleteItems = 'Are you sure you want to delete all items?';
    </script>
        
    <style>
        .disable-arrow::-ms-expand {
          display: none;
        }

        .disable-arrow {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          background-image: none;
          background-color: white;
          padding-right: 20px; 
          border: 1px solid #0091d1;
        }
        .wrapper {
       
          display: grid;
          place-items: left;
        }

        .typing-demo {
          width: 23ch;
          animation: typing 2s steps(22), blink .5s step-end infinite alternate;
          white-space: nowrap;
          overflow: hidden;
          border-right: 3px solid;
          color: #fff;
          text-transform: uppercase;
          font-weight: bold;
          font-size: 20px;
        }

        @keyframes typing {
          from {
            width: 0
          }
        }
            
        @keyframes blink {
          50% {
            border-color: transparent
          }
        }
        
        .wrapper2 {
        
          display: grid;
          place-items: left;
        }
        
        .typing-demo2 {
          width: 23ch;
          animation: typing 2s steps(22), blink .5s step-end infinite alternate;
          white-space: nowrap;
          overflow: hidden;
          border-right: 3px solid;
          color: #fff;
          text-transform: uppercase;
          font-weight: bold;
          font-size: 20px;
        }
        
        /* @keyframes typing {
          from {
            width: 0
          }
        }
            
        @keyframes blink {
          50% {
            border-color: transparent
          }
        } */
		
		
		.page-header {
			display: -ms-flexbox;
			display: flex !important;
			-ms-flex-align: center;
			align-items: center;
			margin: 0 !important;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
		}
		
		.booking-lower-body{
		  padding:40px !important;
		  text-align:center;
		}

		.cartExpire{
			background-color:#FFFF00 !important;
		}
    </style>



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
<div class="page-header">
    <!--<div class="page-header d-md-none">
      <h1 class="page-title">
        <i class="icon-fa fa fa-gear" aria-hidden="true"></i> <?php echo lang(
            'Services'
        ); ?>
      </h1>
    </div>-->
    
    <div class="mb-5">
        <h3 class="topbar d-none d-lg-block">
          <i class="icon-fa fa fa-gear" aria-hidden="true"></i> <?php echo lang(
              'Services'
          ); ?>
        </h3>
    </div>
</div>


<section class="checkoutSection">
    <?php //echo Modules::run("blocks/user_header_top_new", $data_link); ?>
    
    <div class="container">      
    
         
    
       
          
        <div class="col-md-12 checkoutWrapper">
          <div>
            <div style="text-align: center;">
              <h4 class="booking-form-heading">
                ORDER A NEW SERVICE
              </h4>
             
              
            </div>
            
            
            
            
            
            
            
            <form
              id="checkoutForm"
              class="form-validate"
              method="post"
              action="mailhandler.php"
              style="max-width: 100% !important;border-top: none !important;"
            >
            
            
            <div class="row hero">
                
                 
                  <div class="booking-lower-body">
                   
                    <div class="message">
                      <div class="send-success" id="sccess">
                        <img class="msgIcon" src="<?php echo BASE; ?>themes/review/assets/images/doneIcon.png" alt="" srcset=""> Nous avons bien re�u votre demande de r�servation, nous
                        reviendrons vers vous d�s que possible
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
                    
                    <!--<div class="row form-with-labels">
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
                    </div>-->
                    <input
                      type="hidden"
                      id="type"
                      name="type"
                      value="2"
                      class="ajaxField"
                    />
                  </div>
                  
                  
            </div>
            
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
    
              
                
              
                
                <div class="signUpBox">
                    <div class="signUpBoxWrapper" style="border: 1px solid #0091d1;overflow: unset;">
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo ('Payment Method'); ?> :</label>
                                    <select name="payment_id" id="select-payments" class="form-control custom-select" onChange="setPaymentOption(this.value)">
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
                
                <div style="padding: 10px;" id="paypal">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
                    <!-- Identify your business so that you can collect the payments. --> 
                    <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">
                     <!-- Specify a Buy Now button. --> 
                     <input type="hidden" name="cmd" value="_xclick"> 
                     <!-- Specify details about the item that buyers will purchase. --> 
                     <input type="hidden" name="item_name" value="Hot Sauce-12oz. Bottle"> 
                     <input type="hidden" name="amount" value="5.95"> <input type="hidden" name="currency_code" value="USD"> 
                     <!-- Display the payment button. --> 
                     <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="Buy Now"> 
                     <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                      </form>
                </div> 
              
                <div style="padding: 10px; display:none;" id="card">
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

                    
                       <div class="row" style="text-align: center;display:block !important;">
                    <!-- <img
                      src="assets/images/securePayments-removebg-preview.png"
                      alt="Secure Payment"
                      srcset=""
                      style="width: 90px;"
                    /> -->
                    <img width="250px" src="<?php echo BASE ?>themes/review/assets/images/creditCardIcons.png" alt="" />
                    
                  </div>
                    
                    
                    <input
                    type="submit"
                    name="submit"
                    id="submit-booking-btn"
                    value="Order Now"
                    class="btn btn-lg btn-black btn-white aligncenter btn-booking"
                    style="width: 120px;border: 1px solid #fff !important;"
                  />
               
                  </div>
                </div>
                
                <script>
                   function setPaymentOption(payment_type){
					 if(payment_type==13){
					    $("#paypal").show();
						$("#card").hide();
					 }else{
						 $("#card").show();
						 $("#paypal").hide();
					 }
				   }
                </script>
    
                
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