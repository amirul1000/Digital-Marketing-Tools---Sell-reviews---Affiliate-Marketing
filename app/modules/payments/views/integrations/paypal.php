
<div id="main-modal-content">
  <div class="modal-right">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <?php
          $id = (!empty($payment->id))? $payment->id: '';
          if ($id != "") {
            $url = cn($module."/ajax_update/$id");
          }else{
            $url = cn($module."/ajax_update");
          }
        ?>
        <form class="form actionForm" action="<?php echo $url?>" data-redirect="<?php echo cn($module); ?>" method="POST">
          <div class="modal-header bg-pantone">
            <h4 class="modal-title"><i class="fa fa-edit"></i> <?php echo $payment->name; ?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
            <div class="form-body">
              <div class="row justify-content-md-center">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="form-label" ><?php echo lang("method_name"); ?></label>
                    <input type="hidden" class="form-control square" name="payment_params[type]" value="<?php echo $payment->type; ?>">
                    <input type="text" class="form-control square" name="payment_params[name]" value="<?php echo (!empty($payment->name))? $payment->name : '' ; ?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" >Sort</label>
                    <input type="number" class="form-control square" name="payment_params[sort]" value="<?php echo (!empty($payment->sort))? $payment->sort : 1 ; ?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label"><?php echo lang("Status"); ?></label>
                    <select name="payment_params[status]" class="form-control square">
                      <option value="1" <?php echo (!empty($payment->status) && $payment->status == 1) ? 'selected' : '' ; ?>><?php echo lang("Active")?></option>
                      <option value="0" <?php echo (isset($payment->status) && $payment->status != 1) ? 'selected' : '' ; ?>><?php echo lang("Deactive")?></option>
                    </select>
                  </div>
                </div>

                <?php
                  $payment_params = json_decode($payment->params);
                  $option = $payment_params->option;
                ?>
                
                <div class="col-md-12">
                  <hr>
                  <div class="form-group">
                    <label class="form-label"><?php echo lang("Environment")?></label>
                    <select name="payment_params[option][environment]" class="form-control square">
                      <option value="sandbox" <?php echo (isset($option->environment) && $option->environment == 'sandbox') ? 'selected' : ''; ?>><?php echo lang("sandbox_test"); ?></option>
                      <option value="live" <?php echo (isset($option->environment) && $option->environment == 'live') ? 'selected' : ''; ?>><?php echo lang("Live"); ?></option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="form-label">Paypal Client ID<span class="form-required">*</span></label>
                    <input type="text" class="form-control" name="payment_params[option][client_id]" value="<?php echo (isset($option->client_id)) ? $option->client_id : ''; ?>">
                  </div>

                  <div class="form-group">
                    <label class="form-label">Paypal Client Secret<span class="form-required">*</span></label>
                    <input type="text" class="form-control"  name="payment_params[option][secret_key]" value="<?php echo (isset($option->secret_key)) ? $option->secret_key : ''; ?>">
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <button type="submit" class="btn round btn-primary btn-min-width mr-1 mb-1"><?php echo lang("Submit")?></button>
            <button type="button" class="btn round btn-default btn-min-width mr-1 mb-1" data-dismiss="modal"><?php echo lang("Cancel")?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
