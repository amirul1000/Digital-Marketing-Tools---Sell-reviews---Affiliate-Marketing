<div id="main-modal-content">
  <div class="modal-right">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form class="form actionForm" action="<?php echo strip_tags(cn($module."/ajax_add")); ?>" data-redirect="<?php echo cn($module); ?>" method="POST">
        <div class="modal-header bg-pantone">
            <h4 class="modal-title"><i class="fe fe-edit"></i> <?php echo ('Add Ticket'); ?></h4>
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
                        <option value="Mr" <?php echo (!empty($ticket->civility) && $ticket->civility == "Mr") ? 'selected' : '' ?>>Mr</option>
                        <option value="Mrs" <?php echo (!empty($ticket->civility) && $ticket->civility == "Mrs") ? 'selected' : '' ?>>Mrs</option>
                        <option value="Miss" <?php echo (!empty($ticket->civility) && $ticket->civility == "Miss") ? 'selected' : '' ?>>Miss</option>
                    </select>
                  </div>
                </div>
                
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <div class="form-group">
                    <label><?php echo ('First Name'); ?></label>
                    <input type="text" class="form-control square" name="first_name" value="<?php echo (!empty($ticket->first_name) && $ticket->first_name != "") ? $ticket->first_name : ''?>">
                  </div>
                </div>
                
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <div class="form-group">
                    <label><?php echo ('Last Name'); ?></label>
                    <input type="text" class="form-control square" name="last_name" value="<?php echo (!empty($ticket->last_name) && $ticket->last_name != "") ? $ticket->last_name : ''?>">
                  </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo lang('Company_Name'); ?></label>
                    <input type="text" class="form-control square" name="company" value="<?php echo (!empty($ticket->company) && $ticket->company != "") ? $ticket->company : ''?>">
                  </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo lang('Phone'); ?></label>
                    <input type="number" class="form-control square" name="phone" value="<?php echo (!empty($ticket->phone) && $ticket->phone != "") ? $ticket->phone : ''?>">
                  </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label><?php echo lang('Email'); ?></label>
                    <input type="text" class="form-control square" name="email" value="<?php echo (!empty($ticket->email) && $ticket->email != "") ? $ticket->email : ''?>">
                  </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo lang('Order ID'); ?></label>
                    <input type="text" class="form-control square" name="order_id" value="<?php echo (!empty($ticket->order_id) && $ticket->order_id != "") ? $ticket->order_id : ''?>">
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo lang('Department'); ?></label>
                    <select name="department" id="department" class="form-control square">
                      <option id="option1" value="Presale">Presale</option>
                      <option id="option2" value="Billing">Billing</option>
                      <option selected id="option3" value="Client">Client</option>
                    </select>
                  </div>
                </div> 

                <div class="col-md-12">
                  <div class="form-group">
                    <label >Message</label>
                    <textarea rows="5" class="form-control square" name="message"><?php echo (!empty($ticket->message))? html_entity_decode($ticket->message, ENT_QUOTES) : ''?></textarea>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn round btn-primary btn-min-width mr-1 mb-1"><?php echo lang("Submit"); ?></button>
          <button type="button" class="btn round btn-secondary btn-min-width mr-1 mb-1" data-dismiss="modal"><?=lang("Close")?></button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
