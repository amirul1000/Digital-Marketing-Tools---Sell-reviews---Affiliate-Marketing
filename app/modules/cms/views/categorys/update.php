<?php
  $ids = (!empty($category->ids))? $category->ids: '';
  if ($ids != "") {
    $url = cn($module."/ajax_update/$ids");
  }else{
    $url = cn($module."/ajax_update");
  }
?>
<style>
  .c-update-form .nav-tabs .nav-link.active{
    border-bottom: 2px solid #0f78f2;
    color: #0f78f2;
  }
  .c-update-form .nav-tabs .nav-link{
    padding: 10px 8px;
  }

</style>

<div class="page-header">
  <h1>
    Edit: <?php echo $category->name; ?>
  </h1>
</div>
<div class="row c-update-form">
  <div class="col-md-10">
    <form class="form actionForm" action="<?php echo strip_tags($url); ?>" method="POST" data-redirect="<?php echo get_current_url(); ?>">
      <div class="card">
        <input type="hidden" name="lang_code" value="<?php echo(get('lang')) ? get('lang') : 'en'; ?>">
        <input type="hidden" name="parent_id" value="<?php echo ($category->parent_id != '') ? $category->parent_id: $category->id; ?>">
        <div class="card-body">
          <div class="form-body">
            <div class="row justify-content-md-center">
              <div class="col-md-12">
                <h4 class="text-left"><i class="fe fe-link-2"></i> Basic informations</h4>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label ><?php echo lang('Name'); ?> <span class="form-required">*</span></label>
                  <input type="text" class="form-control square"  name="name" value="<?php echo (!empty($category->name)) ? strip_tags($category->name) : ''; ?>" placeholder="Instagram Followers (Must be be greater than 2 words)">
                </div>
              </div>

              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label ><?php echo lang("name_of_required_field"); ?> 
                    <span class="form-required">*</span>
                    <i class="fa fa-question-circle" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Display the name of required field on Check out form page" data-title="Details"></i> 
                  </label>
                  <input type="text" class="form-control square"  name="required_field" value="<?php echo (!empty($category->required_field))? strip_tags($category->required_field) : 'link'?>">
                </div>
              </div>
              
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label><?php echo lang("social_network_service"); ?></label>
                  <select  name="social_network" class="form-control square">
                    <?php if(!empty($social_networks)){
                      foreach ($social_networks as $key => $social_network) {
                    ?>
                    <option value="<?php echo strip_tags($social_network->id); ?>" <?php if(!empty($category->ids) && $social_network->id == $category->sncate_id) echo 'selected'; echo ''; ?> ><?php echo strip_tags($social_network->name); ?></option>
                   <?php }}?>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="eventRegInput1"><?php echo lang("Default_sorting_number"); ?> <span class="form-required">*</span></label>
                  <input type="number" class="form-control square" name="sort"  value="<?php if(!empty($category->sort)) echo strip_tags($category->sort); echo ''; ?>">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label><?php echo lang("Status"); ?> <span class="form-required">*</span></label>
                  <select name="status" class="form-control square">
                    <option value="1" <?php echo (!empty($category->status) && $category->status == 1) ? 'selected' : ''?>><?php echo lang("Active"); ?></option>
                    <option value="0" <?php echo (isset($category->status) && $category->status != 1) ? 'selected' : ''?>><?php echo lang("Deactive"); ?></option>
                  </select>
                </div>
              </div> 
              <div class="col-md-12">
                <h4 class="text-left"><i class="fe fe-link-2"></i> Page SEO informations</h4>
              </div>
              <?php
                $url_slug = '';
                if (!empty($category->url_slug)) {
                  $url_slug = $category->url_slug;
                }
              ?>
              <div class="col-md-12">
                <div class="form-group">
                  <label>URL Slug
                    <span class="form-required">*</span>
                    <i class="fa fa-question-circle" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="A Url slug with this name must be greater than 2 words. Ex: buy-instagram-like" data-title="Details"></i>
                  </label>
                  <div class="input-group">
                    <span class="input-group-prepend" id="basic-addon3">
                      <span class="input-group-text text-muted"><?php echo BASE; ?></span>
                    </span>
                    <input type="text" name="url_slug" class="form-control" value="<?php echo strip_tags($url_slug); ?>" placeholder="buy-instagram-followers">
                  </div>
                  <small class="text-info">Ex: buy-instagram-followers, facebook-likes-buy etc</small>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>Page Title</label>
                  <input  class="form-control square" type="text" name="page_title" value="<?php echo (!empty($category->page_title)) ? strip_tags($category->page_title) : ''; ?>">
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Meta Keywords</label>
                  <textarea rows="3" class="form-control square" name="meta_keywords"><?php echo (!empty($category->meta_keywords)) ? strip_tags($category->meta_keywords) : ''; ?></textarea>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Meta description</label>
                  <textarea rows="3" class="form-control square" name="meta_description"><?php echo (!empty($category->meta_description)) ? strip_tags($category->meta_description) : ''; ?></textarea>
                </div>
              </div>
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label> Image icon path
                    <span class="form-required">*</span>
                    <i class="fa fa-question-circle" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Display the image icon of category on home page. Use format 255px * 255px. You can insert the third party url" data-title="Details"></i> 
                  </label>
                  <div class="input-group">
                    <input type="text" name="icon_path" class="form-control" value="<?=(!empty($category->image))? $category->image: ''?>">
                    <span class="input-group-append btn-elFinder">
                      <button class="btn btn-info" type="button">
                        <i class="fe fe-image">
                        </i>
                      </button>
                    </span>
                  </div>
                </div> 
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="bloginput8"><?php echo lang('article_description'); ?> </label>
                  <textarea id="editor" rows="2" class="form-control square" name="content" placeholder="Write conetnt in here"><?php echo (!empty($category->content)) ? $category->content : ''; ?></textarea>
                </div>
              </div>

              <!-- Features -->
              <div class="col-md-12">
                <div class="form-group-item">
                  <label class="control-label form-label">Features </label>
                  <small class="text-info">(For more Icon Name <a href="https://feathericons.com" target="_blank">click here</a>)</small>
                  <div class="g-items-header">
                      <div class="row">
                        <div class="col-md-5"> Icon name</div>
                        <div class="col-md-6">Content</div>
                        <div class="col-md-1"></div>
                      </div>
                  </div>
                  <div class="g-items">
                    <?php
                      $features = json_decode($category->features);
                      if ($features) {
                        $i = 0; 
                        foreach ($features as $key => $feature) {
                          $i++;
                    ?>
                      <div class="item" data-number="<?php echo $i; ?>">
                        <div class="row">
                          <div class="col-md-5">
                            <input type="text" name="features[<?php echo $key; ?>][icon]" class="form-control" placeholder="unlock" value="<?php echo $feature->icon; ?>">
                          </div>
                          <div class="col-md-6">
                            <textarea name="features[<?php echo $key; ?>][content]" class="form-control full-h"><?php echo (isset($feature->content)) ? $feature->content : ''; ?></textarea>
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

                        <div class="col-md-5">
                          <textarea __name__="features[__number__][icon]" class="form-control full-h" placeholder="Eg: star"></textarea>
                        </div>
                        <div class="col-md-6">
                          <textarea __name__="features[__number__][content]" class="form-control full-h" placeholder="..."></textarea>
                        </div>
                        <div class="col-md-1 text-center">
                          <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- FAQS per each Category -->
              <div class="col-md-12">
                <div class="form-group-item">
                  <label class="control-label form-label">FAQs</label>
                  <div class="g-items-header">
                      <div class="row">
                          <div class="col-md-5">Title</div>
                          <div class="col-md-5">Content</div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>
                  <div class="g-items">
                    <?php
                      $faqs_decode = json_decode($category->faqs);
                      if ($faqs_decode) {
                        $i = 0; 
                        foreach ($faqs_decode as $key => $faqs) {
                          $i++;
                    ?>
                      <div class="item" data-number="<?php echo $i; ?>">
                        <div class="row">
                          <div class="col-md-5">
                            <input type="text" name="faqs[<?php echo $key; ?>][title]" class="form-control" value="<?php echo $faqs->title; ?>">
                          </div>
                          <div class="col-md-6">
                            <textarea name="faqs[<?php echo $key; ?>][content]" class="form-control full-h"><?php echo $faqs->content; ?></textarea>
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
                          <input type="text" __name__="faqs[__number__][title]" class="form-control" placeholder="Eg: When I will receive my likes for Instagram?">
                        </div>
                        <div class="col-md-6">
                          <textarea __name__="faqs[__number__][content]" class="form-control full-h" placeholder="..."></textarea>
                        </div>
                        <div class="col-md-1 text-center">
                          <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Why Buy From Us -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="bloginput9" class="form-label"><?php echo ('Why Buy From Us'); ?> </label>
                  <textarea id="editor1" rows="2" class="form-control square" name="buyus" placeholder="Write content in here"><?php echo (!empty($category->buyus)) ? $category->buyus : ''; ?></textarea>
                </div>
              </div>
              
              <!-- How It Works -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="bloginput10" class="form-label"><?php echo ('How It Works'); ?> </label>
                  <textarea id="editor2" rows="2" class="form-control square" name="howitworks" placeholder="Write content in here"><?php echo (!empty($category->howitworks)) ? $category->howitworks : ''; ?></textarea>
                </div>
              </div>
              
              <!-- Testimonials -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="bloginput11" class="form-label"><?php echo ('Testimonials'); ?> </label>
                  <textarea id="editor3" rows="2" class="form-control square" name="testimonials" placeholder="Write content in here"><?php echo (!empty($category->testimonials)) ? $category->testimonials : ''; ?></textarea>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="card-footer m-t-20">
          <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1"><?php echo lang('Save'); ?></button>
        </div>
      </div>
      </form>
  </div>
</div>

<script>
  "use strict";
  $(document).ready(function() {
    plugin_editor('#editor', {append_plugins: 'image  media code', height: 300});
    plugin_editor('#editor1', {append_plugins: 'image  media code', height: 300});
    plugin_editor('#editor2', {append_plugins: 'image  media code', height: 300});
    plugin_editor('#editor3', {append_plugins: 'image  media code', height: 300});

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

<script>

  //Convert to Url Slug
  $(document).on("keyup","input[type=text][name=name]", function(){
    _that  = $(this);
    _value = _that.val();
    _value = convertToSlug(_value);
    $("#edit_category input[name=url_slug]").val(_value);  
  });

  function convertToSlug(Text) {
    return Text
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'')
        ;
  }

</script>