
<?php
  $ids = (!empty($user->ids))? $user->ids: '';
  if ($ids != "") {
    $url = cn("/ajax_update/$ids");
  }else{
    $url = cn("/ajax_update");
  }
?>

<div id="main-modal-content">
  <div class="modal-right">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form class="form actionForm" action="<?php echo strip_tags($url); ?>" data-redirect="<?php echo cn($module); ?>" method="POST">
          <div class="modal-header bg-pantone">
            <h4 class="modal-title"><i class="fa fa-edit"></i> <?php echo ('Add Customer') . " " . date("dmY", strtotime($user->created)) . str_pad($user->id, 5, '0', STR_PAD_LEFT); ?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
            <div class="form-body">
              <div class="row justify-content-md-center">

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="civility"><?php echo lang('Civility'); ?></label>
                    <select name="civility" id="civility" class="form-control square">
                        <option value="Mr" <?php echo (!empty($user->civility) && $user->civility == "Mr") ? 'selected' : '' ?>>Mr</option>
                        <option value="Mrs" <?php echo (!empty($user->civility) && $user->civility == "Mrs") ? 'selected' : '' ?>>Mrs</option>
                        <option value="Miss" <?php echo (!empty($user->civility) && $user->civility == "Miss") ? 'selected' : '' ?>>Miss</option>
                    </select>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('First Name'); ?></label>
                    <input class="form-control square" name="first_name" type="text" value="<?php echo (!empty($user->first_name)) ? $user->first_name : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Last Name'); ?></label>
                    <input class="form-control square" name="last_name" type="text" value="<?php echo (!empty($user->last_name)) ? $user->last_name : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Company'); ?></label>
                    <input class="form-control square" name="company" type="text" value="<?php echo (!empty($user->company)) ? $user->company : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Email'); ?></label>
                    <input class="form-control square" name="email" type="email" <?php echo (!empty($user->email))? 'disabled': ''?> value="<?php echo (!empty($user->email)) ? $user->email : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Phone'); ?></label>
                    <input class="form-control square" name="phone" type="text" value="<?php echo (!empty($user->phone)) ? $user->phone : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Address'); ?></label>
                    <input class="form-control square" name="address" type="text" value="<?php echo (!empty($user->address)) ? $user->address : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Address 2'); ?></label>
                    <input class="form-control square" name="address2" type="text" value="<?php echo (!empty($user->address2)) ? $user->address2 : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Zip Code'); ?></label>
                    <input class="form-control square" name="postal_code" type="number" value="<?php echo (!empty($user->postal_code)) ? $user->postal_code : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('City'); ?></label>
                    <input class="form-control square" name="city" type="text" value="<?php echo (!empty($user->city)) ? $user->city : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Country'); ?></label>
                    <input class="form-control square" name="country" type="text" value="<?php echo (!empty($user->country)) ? $user->country : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Total_orders'); ?></label>
                    <input class="form-control square" name="total_orders" type="text" value="<?php echo (!empty($user->total_orders)) ? strip_tags($user->total_orders) : ''; ?>">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo lang('Total_spent'); ?></label>
                    <input class="form-control square" name="total_spent" type="text" value="<?php echo (!empty($user->total_spent)) ? $user->total_spent : '0'; ?>">
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="projectinput5"><?php echo ('IP Location'); ?></label>
                    <input class="form-control square" name="history_ip" type="text" disabled value="<?php echo (!empty($user->history_ip)) ? $user->history_ip : ''; ?>">
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label><?php echo lang('Note'); ?></label>
                    <textarea rows="3" id="editor" class="form-control square" name="description" placeholder="About Project"><?php echo (!empty($user->description))? html_entity_decode($user->description, ENT_QUOTES): ''?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn round btn-primary btn-min-width mr-1 mb-1"><?php echo lang("Submit"); ?></button>
            <button type="button" class="btn round btn-default btn-min-width mr-1 mb-1" data-dismiss="modal"><?php echo lang("Cancel"); ?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo BASE; ?>assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
  CKEDITOR.replace( 'editor', {
    height: 100
  });
</script>
