<?php
  $module = "affiliate/".$module;
?>
<?php function time2string($timeline)
{
    $periods = ['day' => 86400, 'hour' => 3600, 'minute' => 60, 'second' => 1];

    foreach ($periods as $name => $seconds) {
        $num = floor($timeline / $seconds);
        $timeline -= $num * $seconds;
        $ret .= $num . ' ' . $name . ($num > 1 ? 's' : '') . ' ';
    }

    return trim($ret);
}

?>

<div class="page-header d-md-none">
  <h1 class="page-title">
    <i class="icon-fa fa fa-credit-card" aria-hidden="true"></i> <?php echo lang(
        'Payments'
    ); ?>
  </h1>
</div>

<div class="mb-5">
    <h3 class="topbar d-none d-lg-block">
      <i class="icon-fa fa fa-credit-card" aria-hidden="true"></i> <?php echo lang(
          'Payments'
      ); ?>
    </h3>
</div>

<div class="search-box w-auto flex-fill max-w-md ml-0 mr-auto d-none d-lg-block">
  <?php if (allowed_search_bar(segment(1)) || allowed_search_bar(segment(2))) {
      echo Modules::run('blocks/search_box');
  } ?>
</div>

<div class="row m-t-5" id="result_ajaxSearch">
    
  <?php if (!empty($transactions)) { ?>
  <div class="col-md-12 col-xl-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?php echo lang('Lists'); ?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-bordered table-outline table-vcenter card-table">
          <thead>
            <tr>
              <!--<th class="text-center w-1"><?php echo lang('No_'); ?></th>-->
              <?php if (!empty($columns)) {
                  foreach ($columns as $key => $row) { ?>
              <th><?php echo strip_tags($row); ?></th>
              <?php }
              } ?>
              
              <?php if (get_role('admin')) { ?>
              <th class="text-center"><?php echo lang('Action'); ?></th>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($transactions)) {
                $i = 0;
                foreach ($transactions as $key => $row) {
                    $i++; ?>
            <tr class="tr_<?php echo strip_tags($row->ids); ?>">
              <!--<td><?php echo strip_tags($i); ?></td>-->
              <td><a href="<?php echo cn(
                  "$module/view/" . $row->ids
              ); ?>" class="ajaxModal"><?php echo date(
    'dmY',
    strtotime($row->created)
) . str_pad($row->id, 5, '0', STR_PAD_LEFT); ?></a></td>
              <td><?php echo convert_timezone(
                  $row->created,
                  'admin',
                  '',
                  'date'
              ); ?></td>
              <td><?php echo convert_timezone(
                  $row->created,
                  'admin',
                  '',
                  'time'
              ); ?></td>
              
              
              <td>                
              </td>
              <td>
                
              </td>

              <td>
                
              </td>

               

              <td><?php
              
              echo strip_tags($row->amount);echo " ".get_option('currency_symbol', '');
              ?> </td>
              
              <td>
                <?php if ($row->type == 'free') {
                    echo 'Free payment'; ?>
                <?php
                } else {
                     ?>
                <img class="payment" src="<?php echo BASE; ?>/assets/images/payments/<?php echo strip_tags(
    $row->type
); ?>.png" alt="<?php echo strip_tags($row->type); ?> icon">
                <?php
                } ?>
              </td>
              <td>
                <?php /*switch ($row->transaction_id) {
                    case 'empty':
                        if ($row->type == 'manual') {
                            echo lang($row->transaction_id);
                        } else {
                            echo lang($row->transaction_id) .
                                ' ' .
                                lang('transaction_id_was_sent_to_your_email');
                        }
                        break;

                    default:
                        echo strip_tags($row->transaction_id);
                        break;
                }*/
				
				  echo $row->transaction_id;
				 ?>
              </td>
              <td>
                <?php switch ($row->status) {
                    case 1:
                        echo '<span class="badge badge-success">' .
                            lang('Paid') .
                            '</span>';
                        break;

                    case 0:
                        echo '<span class="badge" style="background:red">' .
                            lang('waiting_for_buyer_funds') .
                            '</span>';
                        break;

                    case -1:
                        echo '<span class="badge badge-danger">' .
                            lang('cancelled_timed_out') .
                            '</span>';
                        break;
                } ?>
              </td>
              <td>
                <?php //echo convert_timezone(
                  //$row->created,
                 // 'admin',
                  //'',
                 // 'date'
             // ); ?>
              
              <?php //echo convert_timezone(
                  //$row->created,
                 // 'admin',
                  //'',
                //  'time'
             // ); ?>
              <?php echo time2string(time() - strtotime($row->created)) . ' ago' ?>
              </td>

              <?php if (get_role('admin')) { ?>
              <td class="text-center">
                <div class="btn-group">
                  <a href="<?php echo cn(
                      "$module/view/" . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-primary ajaxModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'View'
); ?>"><i class="fe fe-eye"></i></a>
                  <a href="<?php echo cn(
                      "$module/ajax_delete_item/" . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-danger ajaxDeleteItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'Delete'
); ?>"><i class="fe fe-trash-2"></i></a>
                </div>
              </td>
              <?php } ?>
            </tr>
            <?php
                }
            } ?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php if ($pagination) {
      echo '<div class="col-md-12"><div class="float-right">' .
          $pagination .
          '</div></div>';
  } ?>
  <?php } else { ?>
    <?php echo Modules::run('blocks/empty_data'); ?>
  <?php } ?>
</div>
