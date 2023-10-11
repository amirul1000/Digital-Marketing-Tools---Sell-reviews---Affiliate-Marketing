<?php
  $module = "client/".$module;
?>
<div id="main-modal-content">
  <div class="modal-right">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
              <i class="fa fa-credit-card"></i>
            <?php echo lang('Payments') .
                ' ' .
                date('dmY', strtotime($order->created)) .
                str_pad($order->id, 5, '0', STR_PAD_LEFT); ?>
            
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <div class="form-body">
            <div class="row justify-content-md-center">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group row">
                  <b class="col-3">Order ID</b> : <span class="col-8"><?= $order->order_id ?></span>
                </div>
                <div class="form-group row">
                  <b class="col-3">Date</b> : <span class="col-8"><?php echo convert_timezone(
                      $order->created,
                      'user',
                      '',
                      'date'
                  ); ?></span>
                </div>
                <div class="form-group row">
                  <b class="col-3">Time</b> : <span class="col-8"><?php echo convert_timezone(
                      $order->created,
                      'user',
                      '',
                      'time'
                  ); ?></span>
                </div>
                <div class="form-group row d-none">
                  <b class="col-3">Customer</b> : <span class="col-8"><?php echo strip_tags(
                      $order->first_name . ' ' . $order->last_name
                  ); ?></span>
                </div>
                <div class="form-group row">
                  <b class="col-3">Transaction ID</b> : 
                  <span class="col-8">
                      <?php switch ($order->transaction_id) {
                          case 'empty':
                              if ($order->type == 'manual') {
                                  echo lang($order->transaction_id);
                              } else {
                                  echo lang($order->transaction_id) .
                                      ' ' .
                                      lang(
                                          'transaction_id_was_sent_to_your_email'
                                      );
                              }
                              break;

                          default:
                              echo strip_tags($order->transaction_id);
                              break;
                      } ?>
                  </span>
                </div>
                <div class="form-group row">
                  <b class="col-3">Payment Methods</b> : 
                  <span class="col-8">
                      <?php if ($order->type == 'free') {
                          echo 'Free payment'; ?>
                        <?php
                      } else {
                           ?>
                        <img class="payment" src="<?php echo BASE; ?>/assets/images/payments/<?php echo strip_tags(
    $order->type
); ?>.png" alt="<?php echo strip_tags($order->type); ?> icon">
                      <?php
                      } ?>
                  </span>
                </div>
                <div class="form-group row">
                  <b class="col-3">Amount (Includes Fee)</b> : <span class="col-8"><?php
                  echo get_option('currency_symbol', '');
                  echo strip_tags($order->amount);
                  ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn round bg-blue-theme-active mr-1 mb-1" data-dismiss="modal"><?= lang(
              'Close'
          ) ?></button>
        </div>
      </div>
    </div>
  </div>
</div>
