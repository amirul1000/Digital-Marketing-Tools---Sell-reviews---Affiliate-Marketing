<?php
  $module = "client/".$module;
?>

<div id="main-modal-content">
  <div class="modal-right">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <?php
          $ids = (!empty($order->ids))? $order->ids: '';
        ?>
        <form class="form actionForm" action="<?php echo cn($module."/ajax_logs_update/$ids"); ?>" data-redirect="<?php echo cn($module); ?>" method="POST">
          <div class="modal-header bg-pantone">
            <?php if ($type == 'edit') { ?>
            <h4 class="modal-title"><i class="fa fa-edit"></i> <?php echo lang("Edit_Order") ." ". date("dmY", strtotime($order->created)) . str_pad($order->id, 5, '0', STR_PAD_LEFT); ?></h4>
            <?php } else { ?>
            <h4 class="modal-title"><i class="fa fa-eye"></i> <?php echo ("View Order") ." ". date("dmY", strtotime($order->created)) . str_pad($order->id, 5, '0', STR_PAD_LEFT); ?></h4>
            <?php } ?>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
            <div class="form-body">
              <div class="row justify-content-md-center">
                
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label ><?php echo lang("order_id"); ?></label>
                    <input type="text" class="form-control square"  disabled value="<?php echo (!empty($order->id))? $order->id: ''?>">
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label ><?php echo lang("api_orderid"); ?></label>
                    <input type="text" class="form-control square"  disabled value="<?php echo (!empty($order->api_order_id) && $order->api_order_id > 0)? $order->api_order_id: ''?>">
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label ><?php echo ("IP Location"); ?></label>
                    <input type="text" class="form-control square"  disabled value="<?php echo (!empty($order->ip_address))? $order->ip_address: ''?>">
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo lang("Type"); ?></label>
                    <input type="text" class="form-control square"  disabled value="<?php echo (!empty($order->api_order_id) && $order->api_order_id != 0 )? lang("API"): lang("Manual"); ?>">
                  </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-2">
                  <div class="form-group">
                    <label for="civility"><?php echo lang('Civility'); ?></label>
                    <select name="civility" id="civility" class="form-control square" disabled>
                        <option value="Mr" <?php echo (!empty($order->civility) && $order->civility == "Mr") ? 'selected' : '' ?>>Mr</option>
                        <option value="Mrs" <?php echo (!empty($order->civility) && $order->civility == "Mrs") ? 'selected' : '' ?>>Mrs</option>
                        <option value="Miss" <?php echo (!empty($order->civility) && $order->civility == "Miss") ? 'selected' : '' ?>>Miss</option>
                    </select>
                  </div>
                </div>
                
                <div class="col-md-5 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label ><?php echo lang("User"); ?></label>
                    <input type="text" class="form-control square" name="user_id" disabled value="<?php echo (!empty($order->uid))? get_field(USERS, ["id" => $order->uid], 'first_name'). ' ' .get_field(USERS, ["id" => $order->uid], 'last_name') : ''?>">
                  </div>
                </div>
                
                <div class="col-md-5 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label ><?php echo lang("Company Name"); ?></label>
                    <input type="text" class="form-control square" name="company" disabled value="<?php echo (!empty($order->uid))? get_field(USERS, ["id" => $order->uid], 'company'): ''?>">
                  </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label ><?php echo lang("Service"); ?></label>
                    <input type="text" class="form-control square" name="service_id" disabled value="<?php echo (!empty($order->service_id))? get_field(SERVICES, ["id" => $order->service_id], 'name'): ''?>">
                  </div>
                </div>  
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label ><?php echo lang("Quantity"); ?></label>
                    <input type="text" class="form-control square" name="quantity" disabled value="<?php echo (!empty($order->quantity))? $order->quantity : ''?>">
                  </div>
                </div>    

                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label ><?php echo lang("Price"); ?></label>
                    <input type="text" class="form-control square" name="charge" disabled value="<?php echo (!empty($order->charge))? $order->charge : ''?>">
                  </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo lang("Start_counter"); ?></label>
                    <input type="number" class="form-control square" name="start_counter" <?php echo (isset($type) && $type == 'view') ? 'disabled' : '' ?> value="<?php echo (!empty($order->start_counter))? $order->start_counter : ''?>">
                  </div>
                </div>    
                            
                <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo lang("Remains"); ?></label>
                    <input type="number" class="form-control square" name="remains" <?php echo (isset($type) && $type == 'view') ? 'disabled' : '' ?> value="<?php echo (!empty($order->remains))? $order->remains : ''?>">
                  </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo lang("Statut"); ?></label>
                    <select  name="status" class="form-control square" <?php echo (isset($type) && $type == 'view') ? 'disabled' : '' ?>>
                      <?php 
                        $order_status_array = order_status_array();
                        if(!empty($order_status_array)){
                        foreach ($order_status_array as $status) {
                      ?>
                      <option value="<?php echo strip_tags($status)?>" <?php echo (!empty($order->status) && $status == $order->status)? 'selected': ''?> ><?php echo order_status_title($status); ?></option>
                     <?php }}?>
                    </select>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label ><?php echo lang("Link"); ?></label>
                    <input type="text" class="form-control square" name="link" <?php echo (isset($type) && $type == 'view') ? 'disabled' : '' ?> value="<?php echo (!empty($order->link))? $order->link : ''?>">
                  </div>
                </div> 

              </div>
            </div>
          </div>
          <div class="modal-footer">
            <?php if ($type == 'edit') { ?>
            <button type="submit" class="btn round btn-primary btn-min-width mr-1 mb-1"><?php echo lang("Submit"); ?></button>
            <button type="button" class="btn round btn-default btn-min-width mr-1 mb-1" data-dismiss="modal"><?php echo lang("Cancel"); ?></button>
            <?php } else { ?>
            <button type="button" class="btn round bg-blue-theme-active btn-min-width mr-1 mb-1" data-dismiss="modal"><?php echo lang("Close"); ?></button>
            <?php } ?>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
