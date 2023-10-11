


    <style>
        .customcheck {
          position: relative;
          text-align: center;
        }
        
        .customcheck input {
          display: none;
        }
        .customcheck input~.checkmark {
          background: #ee0b0b;
          width: 40px;
          display: inline-block;
          position: relative;
          height: 40px;
          border-radius: 2px;
          vertical-align:middle;
          margin-right:10px;
        }
        
        .customcheck input~.checkmark:after,
        .customcheck input~.checkmark:before {
          content: '';
          position: absolute;
          width: 2px;
          height: 25px;
          background: #fff;
          left: 19px;
          top: 8px;
        }
        
        .customcheck input~.checkmark:after {
          transform: rotate(-45deg);
          z-index: 1;
        }
        
        .customcheck input~.checkmark:before {
          transform: rotate(45deg);
          z-index: 1;
        }
        
        .customcheck input:checked~.checkmark {
          background: #3d8a00;
          width: 40px;
          display: inline-block;
          position: relative;
          height: 40px;
          border-radius: 2px;
        }
        
        .customcheck input:checked~.checkmark:after {
          display: none;
        }
        
        .customcheck input:checked~.checkmark:before {
          background: none;
          border: 2px solid #fff;
          width: 10px;
          top: 2px;
          left: 15px;
          border-top: 0;
          border-left: 0;
          height: 25px;
          top: 4px;
        }
    </style>



    <div class="card content">
      <div class="card-header">
        <h3 class="card-title"><i class="fe fe-edit-3"></i> <?php echo ("Sections"); ?></h3>
      </div>
      <div class="card-body">
        <form class="actionForm" action="<?php echo cn("$module/ajax_cms_home_settings"); ?>" method="POST" data-redirect="<?php echo get_current_url(); ?>">
          <div class="row">
            <div class="col-md-12 col-lg-12">
          
              <h5 class="text-info"><i class="fe fe-link"></i> <?php echo ("Content of Description"); ?></h5>
              <div class="form-group">
                <label class="form-label"><?php echo lang("Content"); ?></label>
                <?php
                  $home_description = get_option('home_description', "");
                ?>
                <textarea rows="3" name="home_description" class="form-control textarea-editor">
                  <?php echo html_entity_decode($home_description, ENT_QUOTES); ?>
                </textarea>
              </div>

              <h5 class="text-info"><i class="fe fe-link"></i> <?php echo ("Content of Why Buy From Us?"); ?></h5>
              <div class="form-group-item">
                  <label class="control-label form-label">Why Buy From Us </label>
                  <small class="text-info">(For more Icon Name <a href="https://feathericons.com" target="_blank">click here</a>)</small>
                  <div class="g-items-header bg-3d-gray">
                      <div class="row">
                        <div class="col-md-2">Icon Name</div>
                        <div class="col-md-3">Topic</div>
                        <div class="col-md-1">
                            <img src="<?php echo get_option('website_logo', ''); ?>">
                            <!--<div class="input-group justify-content-center">-->
                            <!--  <span class="input-group-append">-->
                            <!--    <button class="btn btn-info" type="button">-->
                            <!--      <i class="fe fe-image">-->
                            <!--        <input class="form-control" type="file" name="home_buyus_logo_topreviewagency">-->
                            <!--      </i>-->
                            <!--    </button>-->
                            <!--  </span>-->
                            <!--</div>-->
                        </div>
                        <div class="col-md-1">
                            <img src="<?= BASE ?>themes/review/assets/images/useViral.png">
                            <div class="input-group justify-content-center">
                              <span class="input-group-append">
                                <button class="btn btn-info" type="button">
                                  <i class="fe fe-image">
                                    <input class="form-control" type="file" name="home_buyus_logo_1">
                                  </i>
                                </button>
                              </span>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <img src="<?= BASE ?>themes/review/assets/images/sidesmedia.png">
                            <div class="input-group justify-content-center">
                              <span class="input-group-append">
                                <button class="btn btn-info" type="button">
                                  <i class="fe fe-image">
                                    <input class="form-control" type="file" name="home_buyus_logo_2">
                                  </i>
                                </button>
                              </span>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <img src="<?= BASE ?>themes/review/assets/images/realmedia.png">
                            <div class="input-group justify-content-center">
                              <span class="input-group-append">
                                <button class="btn btn-info" type="button">
                                  <i class="fe fe-image">
                                    <input class="form-control" type="file" name="home_buyus_logo_3">
                                  </i>
                                </button>
                              </span>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <img src="<?= BASE ?>themes/review/assets/images/getafollower.png">
                            <div class="input-group justify-content-center">
                              <span class="input-group-append">
                                <button class="btn btn-info" type="button">
                                  <i class="fe fe-image">
                                    <input class="form-control" type="file" name="home_buyus_logo_4">
                                  </i>
                                </button>
                              </span>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <img src="<?= BASE ?>themes/review/assets/images/mediamister.png">
                            <div class="input-group justify-content-center">
                              <span class="input-group-append">
                                <button class="btn btn-info" type="button">
                                  <i class="fe fe-image">
                                    <input class="form-control" type="file" name="home_buyus_logo_5">
                                  </i>
                                </button>
                              </span>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                      </div>
                  </div>
                  <div class="g-items">
                    <?php
                      $home_buyus = json_decode(get_option('home_buyus', ""), true);
                    ?>
                    <div class="item" data-number="0">
                        <div class="row">
                          <div class="col-md-2">
                            <div class="input-group" style="width:unset">
                                <input type="text" name="home_buyus[0][icon]" class="form-control mb-0" value="<?= ($home_buyus[0]['icon']) ? $home_buyus[0]['icon'] : '' ?>">
                                <!--<span class="input-group-append btn-elFinder">-->
                                <!--  <button class="btn btn-info" type="button">-->
                                <!--    <i class="fe fe-image"></i>-->
                                <!--  </button>-->
                                <!--</span>-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <input type="text" name="home_buyus[0][topic]" class="form-control" value="<?= ($home_buyus[0]['topic']) ? $home_buyus[0]['topic'] : 'Price for 1 Google Maps Review' ?>" readonly>
                          </div>
                          <div class="col-md-1">
                            <input type="text" name="home_buyus[0][topreviewagency]" class="form-control" value="<?= ($home_buyus[0]['topreviewagency']) ? $home_buyus[0]['topreviewagency'] : '3$' ?>">
                          </div>
                          <div class="col-md-1">
                            <input type="text" name="home_buyus[0][logo1]" class="form-control" value="<?= ($home_buyus[0]['logo1']) ? $home_buyus[0]['logo1'] : '7.5$' ?>">
                          </div>
                          <div class="col-md-1">
                            <input type="text" name="home_buyus[0][logo2]" class="form-control" value="<?= ($home_buyus[0]['logo2']) ? $home_buyus[0]['logo2'] : '7.25$' ?>">
                          </div>
                          <div class="col-md-1">
                            <input type="text" name="home_buyus[0][logo3]" class="form-control" value="<?= ($home_buyus[0]['logo3']) ? $home_buyus[0]['logo3'] : '25$' ?>">
                          </div>
                          <div class="col-md-1">
                            <input type="text" name="home_buyus[0][logo4]" class="form-control" value="<?= ($home_buyus[0]['logo4']) ? $home_buyus[0]['logo4'] : '25$' ?>">
                          </div>
                          <div class="col-md-1">
                            <input type="text" name="home_buyus[0][logo5]" class="form-control" value="<?= ($home_buyus[0]['logo5']) ? $home_buyus[0]['logo5'] : '25$' ?>">
                          </div>
                          <div class="col-md-1 text-center">
                              <!--<span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>-->
                          </div>
                        </div>
                    </div>
                    
                    <?php
                      if ($home_buyus) {
                        $i = 0; 
                        foreach ($home_buyus as $key => $buyus) {
                          $i++;
                          if ($key === 0) {
                              continue;
                          }
                    ?>
                      <div class="item" data-number="<?php echo $i; ?>">
                        <div class="row">
                          <div class="col-md-2">
                            <div class="input-group" style="width:unset">
                                <input type="text" name="home_buyus[<?php echo $key; ?>][icon]" class="form-control mb-0" value="<?= $buyus['icon']; ?>">
                                <!--<span class="input-group-append btn-elFinder">-->
                                <!--  <button class="btn btn-info" type="button">-->
                                <!--    <i class="fe fe-image"></i>-->
                                <!--  </button>-->
                                <!--</span>-->
                            </div>
                          </div>
                          <div class="col-md-3">
                            <input type="text" name="home_buyus[<?php echo $key; ?>][topic]" class="form-control" placeholder="100% Payment Safe Reviews" value="<?php echo $buyus['topic']; ?>">
                          </div>
                          <div class="col-md-1">
                            <label class="customcheck">
                                <input type="checkbox" name="home_buyus[<?php echo $key; ?>][topreviewagency]" class="form-control" value="1" <?php echo ($buyus['topreviewagency'] == '1') ? 'checked' : ''; ?>>
                                <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="col-md-1">
                            <label class="customcheck">
                                <input type="checkbox" name="home_buyus[<?php echo $key; ?>][logo1]" class="form-control" value="1" <?php echo ($buyus['logo1'] == '1') ? 'checked' : ''; ?>>
                                <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="col-md-1">
                            <label class="customcheck">
                                <input type="checkbox" name="home_buyus[<?php echo $key; ?>][logo2]" class="form-control" value="1" <?php echo ($buyus['logo2'] == '1') ? 'checked' : ''; ?>>
                                <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="col-md-1">
                            <label class="customcheck">
                                <input type="checkbox" name="home_buyus[<?php echo $key; ?>][logo3]" class="form-control" value="1" <?php echo ($buyus['logo3'] == '1') ? 'checked' : ''; ?>>
                                <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="col-md-1">
                            <label class="customcheck">
                                <input type="checkbox" name="home_buyus[<?php echo $key; ?>][logo4]" class="form-control" value="1" <?php echo ($buyus['logo4'] == '1') ? 'checked' : ''; ?>>
                                <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="col-md-1">
                            <label class="customcheck">
                                <input type="checkbox" name="home_buyus[<?php echo $key; ?>][logo5]" class="form-control" value="1" <?php echo ($buyus['logo5'] == '1') ? 'checked' : ''; ?>>
                                <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="col-md-1 text-center">
                              <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                          </div>
                        </div>
                      </div>
                    <?php }} ?>
                  </div>
                  <div class="text-right g-btn-add p-t-10">
                    <span class="btn btn-success btn-sm btn-add-item"><i class="fe fe-plus-circle"></i> Add item</span>
                  </div>
                  <div class="g-more d-none">
                    <div class="item" data-number="__number__">
                      <div class="row">
                        
                        <div class="col-md-2">
                            <div class="input-group" style="width:unset">
                                <input type="text" __name__="home_buyus[__number__][icon]" class="form-control mb-0" value="">
                                <!--<span class="input-group-append btn-elFinder">-->
                                <!--  <button class="btn btn-info" type="button">-->
                                <!--    <i class="fe fe-image"></i>-->
                                <!--  </button>-->
                                <!--</span>-->
                            </div>
                        </div>
                        <div class="col-md-3">
                          <input type="text" __name__="home_buyus[__number__][topic]" class="form-control" placeholder="100% Payment Safe Reviews" value="">
                        </div>
                        <div class="col-md-1">
                          <label class="customcheck">
                            <input type="checkbox" __name__="home_buyus[__number__][topreviewagency]" class="form-control" value="1">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="col-md-1">
                          <label class="customcheck">
                            <input type="checkbox" __name__="home_buyus[__number__][logo1]" class="form-control" value="1">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="col-md-1">
                          <label class="customcheck">
                            <input type="checkbox" __name__="home_buyus[__number__][logo2]" class="form-control" value="1">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="col-md-1">
                          <label class="customcheck">
                            <input type="checkbox" __name__="home_buyus[__number__][logo3]" class="form-control" value="1">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="col-md-1">
                          <label class="customcheck">
                            <input type="checkbox" __name__="home_buyus[__number__][logo4]" class="form-control" value="1">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="col-md-1">
                          <label class="customcheck">
                            <input type="checkbox" __name__="home_buyus[__number__][logo5]" class="form-control" value="1">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="col-md-1 text-center">
                          <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              
              
              <h5 class="text-info"><i class="fe fe-link"></i> <?php echo ("Content of How It Works?"); ?></h5>
              <div class="form-group">
                <label class="form-label"><?php echo lang("Content"); ?></label>
                <?php 
                  $home_howitworks = get_option('home_howitworks', "<p><strong>Lorem Ipsum</strong></p><p>Lorem ipsum dolor sit amet, in eam consetetur consectetuer. Vivendo eleifend postulant ut mei, vero maiestatis cu nam. Qui et facer mandamus, nullam regione lucilius eu has. Mei an vidisse facilis posidonium, eros minim deserunt per ne.</p><p>Duo quando tibique intellegam at. Nec error mucius in, ius in error legendos reformidans. Vidisse dolorum vulputate cu ius. Ei qui stet error consulatu.</p><p>Mei habeo prompta te. Ignota commodo nam ei. Te iudico definitionem sed, placerat oporteat tincidunt eu per, stet clita meliore usu ne. Facer debitis ponderum per no, agam corpora recteque at mel.</p>");
                ?>
                <textarea rows="3" name="home_howitworks" class="form-control textarea-editor">
                  <?php echo html_entity_decode($home_howitworks, ENT_QUOTES); ?>
                </textarea>
              </div>
              
              <h5 class="text-info"><i class="fe fe-link"></i> <?php echo ("Content of Testimonials"); ?></h5>
              <div class="form-group-item">
                <label class="control-label form-label"><?php echo lang("Content"); ?></label>
                <div class="g-items-header bg-3d-gray">
                  <div class="row">
                      <div class="col-md-5">Name</div>
                      <div class="col-md-5">Testimonial</div>
                      <div class="col-md-1"></div>
                  </div>
                </div>
                <div class="g-items">
                <?php 
                  $home_testimonials_decode = json_decode(get_option('home_testimonials', ""));
                  if ($home_testimonials_decode) {
                    $i = 0; 
                    foreach ($home_testimonials_decode as $key => $testimonials) {
                      $i++;
                ?>
                    <div class="item" data-number="<?php echo $i; ?>">
                        <div class="row">
                          <div class="col-md-5">
                            <input type="text" name="home_testimonials[<?php echo $key; ?>][title]" class="form-control" value="<?php echo $testimonials->title; ?>">
                          </div>
                          <div class="col-md-6">
                            <textarea name="home_testimonials[<?php echo $key; ?>][content]" class="form-control full-h"><?php echo $testimonials->content; ?></textarea>
                          </div>
                          <div class="col-md-1 text-center">
                              <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                          </div>
                        </div>
                    </div>
                <?php }} ?>
                </div>
                <div class="text-right g-btn-add">
                    <span class="btn btn-success btn-sm btn-add-item"><i class="fe fe-plus-circle"></i> Add item</span>
                </div>
                <div class="g-more d-none">
                    <div class="item" data-number="__number__">
                      <div class="row">
                        <div class="col-md-5">
                          <input type="text" __name__="home_testimonials[__number__][title]" class="form-control" placeholder="Eg: Sofia Chan">
                        </div>
                        <div class="col-md-6">
                          <textarea __name__="home_testimonials[__number__][content]" class="form-control full-h" placeholder="..."></textarea>
                        </div>
                        <div class="col-md-1 text-center">
                          <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              
              
              <h5 class="text-info"><i class="fe fe-link"></i> <?php echo ("Content of FAQs"); ?></h5>
              <div class="form-group-item">
                <label class="control-label form-label"><?php echo lang("Content"); ?></label>
                <div class="g-items-header bg-3d-gray">
                  <div class="row">
                      <div class="col-md-5">Question</div>
                      <div class="col-md-5">Answer</div>
                      <div class="col-md-1"></div>
                  </div>
                </div>
                <div class="g-items">
                <?php 
                  $home_faqs_decode = json_decode(get_option('home_faqs', ""));
                  if ($home_faqs_decode) {
                    $i = 0; 
                    foreach ($home_faqs_decode as $key => $faqs) {
                      $i++;
                ?>
                    <div class="item" data-number="<?php echo $i; ?>">
                        <div class="row">
                          <div class="col-md-5">
                            <input type="text" name="home_faqs[<?php echo $key; ?>][title]" class="form-control" value="<?php echo $faqs->title; ?>">
                          </div>
                          <div class="col-md-6">
                            <textarea name="home_faqs[<?php echo $key; ?>][content]" class="form-control full-h"><?php echo $faqs->content; ?></textarea>
                          </div>
                          <div class="col-md-1 text-center">
                              <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                          </div>
                        </div>
                    </div>
                <?php }} ?>
                </div>
                <div class="text-right g-btn-add">
                    <span class="btn btn-success btn-sm btn-add-item"><i class="fe fe-plus-circle"></i> Add item</span>
                </div>
                <div class="g-more d-none">
                    <div class="item" data-number="__number__">
                      <div class="row">
                        <div class="col-md-5">
                          <input type="text" __name__="home_faqs[__number__][title]" class="form-control" placeholder="Eg: When I will receive my likes for Instagram?">
                        </div>
                        <div class="col-md-6">
                          <textarea __name__="home_faqs[__number__][content]" class="form-control full-h" placeholder="..."></textarea>
                        </div>
                        <div class="col-md-1 text-center">
                          <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                        </div>
                      </div>
                    </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="form-footer">
                <button class="btn btn-primary btn-min-width btn-lg text-uppercase"><?php echo lang("Save"); ?></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script>
      "use strict";
      $(document).ready(function() {
        plugin_editor('.textarea-editor', {height: 500});
        
        $(document).on('click','.btn-elFinder', function(){
          var _that = $(this);
          getPathMediaByelFinderBrowser(_that);
        });
        
        // add new item
        $(".form-group-item .btn-add-item").click(function() {
          var number = $(this).closest(".form-group-item").find(".g-items .item:last-child").data("number");
          if (number === undefined) number = 0;
          else number++;
          var extra_html = $(this).closest(".form-group-item").find(".g-more").html();
          extra_html = extra_html.replace(/__name__=/gi, "name=");
          extra_html = extra_html.replace(/__number__/gi, number);
          $(this).closest(".form-group-item").find(".g-items").append(extra_html);
        });
    
        // Remove item
        $(".form-group-item").each(function() {
          var container = $(this);
          $(this).on('click', '.btn-remove-item', function() {
              $(this).closest(".item").remove();
          });
          $(this).on('press', 'input,select', function() {
            var value = $(this).val();
            $(this).attr("value", value);
          });
        });
        
      });
    </script>