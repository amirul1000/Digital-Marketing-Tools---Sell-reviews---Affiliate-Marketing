
<div class="card content">
  <div class="card-header">
    <h3 class="card-title"><i class="fe fe-life-buoy"></i> <?php echo lang("website_logo"); ?></h3>
  </div>
  <div class="card-body">
    <form class="actionForm" action="<?php echo cn("$module/ajax_general_settings"); ?>" method="POST" data-redirect="<?php echo get_current_url(); ?>">
      <div class="row">
        <div class="col-md-12 col-lg-12">

          <div class="form-group">
            <label class="form-label"><?php echo lang("website_favicon"); ?></label>
            <div class="input-group">
              <input type="text" name="website_favicon" class="form-control" value="<?php echo get_option('website_favicon', BASE."assets/images/favicon.png"); ?>">
              <span class="input-group-append">
                <button class="btn btn-info" type="button">
                  <i class="fe fe-image">
                    <input class="settings_fileupload" type="file" name="files[]" multiple="">
                  </i>
                </button>
              </span>
            </div>
          </div>  
          
          <div class="form-group">
            <label class="form-label"><?php echo lang("Header Logo"); ?></label>
            <div class="input-group">
              <input type="text" name="website_logo" class="form-control" value="<?php echo get_option('website_logo', BASE."assets/images/logo.png"); ?>">
              <span class="input-group-append">
                <button class="btn btn-info" type="button">
                  <i class="fe fe-image">
                    <input class="settings_fileupload" type="file" name="files[]" multiple="">
                  </i>
                </button>
              </span>
            </div>
          </div> 

          <div class="form-group">
            <label class="form-label"><?php echo lang("Footer Logo"); ?></label>
            <div class="input-group">
              <input type="text" name="website_logo_white" class="form-control" value="<?php echo get_option('website_logo_white', BASE."assets/images/logo-white.png"); ?>">
              <span class="input-group-append">
                <button class="btn btn-info" type="button">
                  <i class="fe fe-image">
                    <input class="settings_fileupload" type="file" name="files[]" multiple="">
                  </i>
                </button>
              </span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="form-label"><?php echo lang("Invoices Logo"); ?></label>
            <div class="input-group">
              <input type="text" name="invoice_logo" class="form-control" value="<?php echo get_option('invoice_logo', BASE."assets/images/logo-white.png"); ?>">
              <span class="input-group-append">
                <button class="btn btn-info" type="button">
                  <i class="fe fe-image">
                    <input class="settings_fileupload" type="file" name="files[]" multiple="">
                  </i>
                </button>
              </span>
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
