<?php
  $module = "client/".$module;
?>

<div class="page-header">
  <h1 class="page-title">
    <span><i class="icon fe fe-user"></i></span> <?php echo lang('Your_account'); ?>
  </h1>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?php echo lang("basic_information"); ?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="icon fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="icon fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body">
        <form class="form actionForm" action="<?php echo cn($module."/ajax_update"); ?>" data-redirect="<?php echo cn($module); ?>" method="POST" autocomplete="off">
          <div class="form-body">
            <div class="row">

              <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="form-group">
                  <label for="civility"><?php echo lang('Civility'); ?></label>
                    <select name="civility" id="civility" class="form-control square">
                        <option value="Mr" <?php echo (!empty($user->civility) && $user->civility == "Mr") ? 'selected' : '' ?>>Mr</option>
                        <option value="Mrs" <?php echo (!empty($user->civility) && $user->civility == "Mrs") ? 'selected' : '' ?>>Mrs</option>
                        <option value="Miss" <?php echo (!empty($user->civility) && $user->civility == "Miss") ? 'selected' : '' ?>>Miss</option>
                    </select>
                </div>
              </div>
              
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label for="first_name"><?php echo lang("first_name"); ?> *</label>
                  <input class="form-control square" name="first_name" type="text" value="<?php if(!empty($user->first_name)) echo strip_tags($user->first_name); else echo ''; ?>" required>
                </div>
              </div>

              <div class="col-md-3 col-sm-3 col-xs-3">
                  <div class="form-group">
                    <label for="last_name"><?php echo lang("last_name"); ?>  *</label>
                    <input class="form-control square" name="last_name" type="text" value="<?php if(!empty($user->last_name)) echo strip_tags($user->last_name); else echo ''; ?>" required>
                  </div>
              </div>
              
              <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="form-group">
                    <label for="company"><?php echo lang("Company"); ?></label>
                    <input class="form-control square" name="company" type="text" value="<?php if(!empty($user->company)) echo strip_tags($user->company); else echo ''; ?>">
                  </div>
              </div>
              
              
              
              
              
              <div class="col-md-12">
                  <div class="form-group">
                    <label for="address"><?php echo lang('Address'); ?>  *</label>
                    <input class="form-control square" name="address" type="text" value="<?php echo (!empty($user->address)) ? $user->address : ''; ?>" required>
                  </div>
              </div>
                
              <div class="col-md-12">
                  <div class="form-group">
                    <label for="address2"><?php echo lang('Address 2'); ?></label>
                    <input class="form-control square" name="address2" type="text" value="<?php echo (!empty($user->address2)) ? $user->address2 : ''; ?>">
                  </div>
              </div>
                
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="postal_code"><?php echo ('Zip Code'); ?>  *</label>
                    <input class="form-control square" name="postal_code" type="number" value="<?php echo (!empty($user->postal_code)) ? $user->postal_code : ''; ?>" required>
                  </div>
              </div>
                
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="city"><?php echo lang('City'); ?>  *</label>
                    <input class="form-control square" name="city" type="text" value="<?php echo (!empty($user->city)) ? $user->city : ''; ?>" required>
                  </div>
              </div>
                
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="country"><?php echo lang('Country'); ?>  *</label>
                    <input class="form-control square" name="country" type="text" value="<?php echo (!empty($user->country)) ? $user->country : ''; ?>" required>
                  </div>
              </div>
              
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="fax"><?php echo lang('Fax'); ?></label>
                    <input class="form-control square" name="fax" type="text" value="<?php echo (!empty($user->fax)) ? $user->fax : ''; ?>">
                  </div>
              </div>
                
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone"><?php echo lang('Phone'); ?></label>
                    <input class="form-control square" name="phone" type="text" value="<?php echo (!empty($user->phone)) ? $user->phone : ''; ?>">
                  </div>
              </div>
              
              
              
              

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="email"><?php echo lang('Email'); ?>  *</label>
                  <input class="form-control square" name="email" type="email" value="<?php if(!empty($user->email)) echo strip_tags($user->email); else echo ''; ?>" required>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="timezone"><?php echo lang('Timezone'); ?></label>
                  <select  name="timezone" class="form-control square">
                    <?php $time_zones = tz_list();
                      if (!empty($time_zones)) {
                        foreach ($time_zones as $key => $time_zone) {
                    ?>
                    <option value="<?php echo strip_tags($time_zone['zone'])?>" <?php if(!empty($user->timezone) && $user->timezone == $time_zone["zone"]) echo 'selected'; else echo '';?>><?php echo strip_tags($time_zone['time'])?></option>
                    <?php }}?>
                  </select>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="password"><?php echo lang('Password'); ?></label>
                  <input class="form-control square" name="password" id="password"  type="password" autocomplete="off">
                  <span style=" display: flex;
  align-items: center;
  position: absolute;
  height: 100%;
  top: 0;
  right: 0;
  padding-right: 20px;" onClick="passwordToggle('password')">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </span>
                      
                </div>
              </div> 

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="re_password"><?php echo lang('Confirm_password'); ?>  *</label>
                  <input class="form-control square" name="re_password" id="re_password" type="password">
                  <span style=" display: flex;
  align-items: center;
  position: absolute;
  height: 100%;
  top: 0;
  right: 0;
  padding-right: 20px;"  onClick="passwordToggle('re_password')">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <small class="text-primary"><?php echo lang("note_if_you_dont_want_to_change_password_then_leave_these_password_fields_empty"); ?></small>
              </div>
              
              <div class="col-md-12 col-sm-12 col-xs-12 form-actions">
                <div class="p-l-10">
                  <button type="submit" class="btn round btn-primary btn-min-width mr-1 mb-1"><?php echo lang('Save'); ?></button>
                </div>
              </div>
            </div>
          </div>
          <div class="">
          </div>
        </form>
      </div>
    </div>
  </div> 
</div>

<script language="javascript">
  function passwordToggle(id) {
  var x = document.getElementById(id);
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

