<div id="main-modal-content">
  <div class="modal-right">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form class="form actionForm" action="<?php echo cn($module."/ajax_send_email"); ?>" data-redirect="<?php echo cn($module); ?>" method="POST">
          <div class="modal-header bg-pantone">
            <h4 class="modal-title"><i class="fe fe-edit"></i> <?php echo ('Reply Ticket') ." ". get_format_id($ticket->created, $ticket->id); ?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
            <div class="form-body">
              <div class="row justify-content-md-center">
                
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="form-group">
                    <label><?php echo ('ID'); ?></label>
                    <input type="text" class="form-control square" name="id" value="<?php echo (!empty($ticket->id) && $ticket->id != "") ? get_format_id($ticket->created, $ticket->id) : ''?>" disabled>
                  </div>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="form-group">
                    <label><?php echo lang('Date'); ?></label>
                    <input type="text" class="form-control square" name="date" value="<?php echo (!empty($ticket->created) && $ticket->created != NULL) ? convert_timezone($ticket->created, "user", '', 'date') : ''?>" disabled>
                  </div>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="form-group">
                    <label><?php echo lang('Time'); ?></label>
                    <input type="text" class="form-control square" name="time" value="<?php echo (!empty($ticket->created) && $ticket->created != NULL) ? convert_timezone($ticket->created, "user", '', 'time') : ''?>" disabled>
                  </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo ('IP Location') ." ". get_ip_flag($ticket->ip); ?></label>
                    <input type="text" class="form-control square" name="ip" value="<?php echo (!empty($ticket->ip) && $ticket->ip != "") ? $ticket->ip ." ". get_ip_location($ticket->ip) : ''?>" disabled>
                  </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label><?php echo ('Full Name'); ?></label>
                    <input type="text" class="form-control square" name="name" value="<?php echo (!empty($ticket->first_name) && $ticket->first_name != "") ? (($ticket->civility) ? $ticket->civility : '') ." ". $ticket->first_name ." ". $ticket->last_name : ''?>" disabled>
                  </div>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="form-group">
                    <label><?php echo lang('Company'); ?></label>
                    <input type="text" class="form-control square" name="company" value="<?php echo (!empty($ticket->company) && $ticket->company != "") ? $ticket->company : ''?>" disabled>
                  </div>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="form-group">
                    <label><?php echo lang('Order ID'); ?></label>
                    <input type="text" class="form-control square" name="order_id" value="<?php echo (!empty($ticket->order_id) && $ticket->order_id != "") ? get_format_id($ticket->order_created, $ticket->order_id) : ''?>" disabled>
                  </div>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="form-group">
                    <label><?php echo lang('Statut'); ?></label>
                    <input type="text" class="form-control square" name="status" value="<?php echo (!empty($ticket->status) && $ticket->status != "") ? ucfirst($ticket->status) : ''?>" disabled>
                  </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label><?php echo lang('Email'); ?></label>
                    <input type="text" class="form-control square" name="email" value="<?php echo (!empty($ticket->email) && $ticket->email != "") ? $ticket->email : ''?>" disabled>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label><?php echo lang('Department'); ?></label>
                    <input type="text" class="form-control square" name="department" value="<?php echo (!empty($ticket->department) && $ticket->department != "") ? $ticket->department : ''?>" disabled>
                  </div>
                </div> 

                <div class="col-md-12">
                  <div class="form-group">
                    <label >Received Message</label>
                    <textarea rows="5" class="form-control square" disabled ><?php echo (!empty($ticket->message))? html_entity_decode($ticket->message, ENT_QUOTES) : ''?></textarea>
                  </div>
                </div>    

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label><?php echo lang('Message'); ?></label>
                    <textarea rows="3" id="editor" class="form-control square" name="email_content"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn round btn-primary btn-min-width mr-1 mb-1"><?php echo lang('Submit'); ?></button>
            <button type="button" class="btn round btn-default btn-min-width mr-1 mb-1" data-dismiss="modal"><?php echo lang('Cancel'); ?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo BASE; ?>assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
  CKEDITOR.replace( 'editor', {
    height: 150
  });
</script>
