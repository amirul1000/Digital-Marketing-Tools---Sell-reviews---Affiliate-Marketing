<?php
  $module = "client/".$module;
?>

<div class="page-header">
  <h1 class="page-title d-md-none">
    <i class="icon fe fe-shopping-cart" aria-hidden="true"></i> <?php echo lang(
        'Orders'
    ); ?>
  </h1>
  
  <?php if (topbar_tilte_by_module('order')) { ?>
    <div class="col-sm-12 mb-3">
        <h3 class="topbar d-none d-lg-block">
          <i class="icon fe fe-shopping-cart" aria-hidden="true"></i> <?php echo lang(
              'Orders'
          ); ?>
        </h3>
    </div>
  <?php } ?>

  <div class="page-options d-flex ml-0 w-100 justify-content-between align-items-center">
    
    <div class="search-box w-auto flex-fill max-w-md ml-0 mr-2 d-none d-lg-block">
      <?php if (
          allowed_search_bar('order') ||
          allowed_search_bar('order')
      ) {
          echo Modules::run('blocks/search_box');
      } ?>
    </div>  
    
    <ul class="list-inline mb-0 order_btn_group bg-3d-gray">
      <li class="list-inline-item"><a class="nav-link btn <?php echo $order_status ==
      'all'
          ? 'bg-blue-theme-active'
          : ''; ?>" href="<?php echo cn($module . '/all'); ?>"><?php echo lang(
    'All'
); ?></a></li>
      <?php
      $status_array = order_status_array();
      if (!empty($status_array)) {
          foreach ($status_array as $row_status) { ?>
      <li class="list-inline-item">
        <a class="nav-link btn 
        <?php echo $order_status == $row_status
            ? 'bg-blue-theme-active'
            : ''; ?>" href="<?php echo cn(
    $module . '/' . $row_status
); ?>"><?php echo order_status_title($row_status); ?>
        <?php if (in_array($row_status, ['error'])) {
            echo '<span class="badge badge-danger" style="margin-left:0px !important">' .
                $number_error_orders .
                '</span>';
        } else {
            echo '<span class="badge badge-danger" style="margin-left:0px !important">' .
                $number_error_orders .
                '</span>';
        } ?>
        </a>
      </li>
      <?php }
      }
      ?>
    </ul>
  </div>
</div>

<div class="row  m-t-5" id="result_ajaxSearch">
  <?php if (!empty($order_logs)) { ?>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?php echo lang('Lists'); ?></h3>        
        <div class="card-options">
          <a class="btn btn-success" href="<?php echo cn(
    'client/checkout'
); ?>" style="margin-right:10px;">
               <span class="add-new mr-1">
              <i class="fa fa-plus-square text-primary" aria-hidden="true"></i></span>
              NEW ORDER
          </a>
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-bordered table-vcenter card-table">
          <thead>
            <tr>
              <!--<th class="text-center w-1"><?php echo lang('No_'); ?></th>-->
              <?php if (!empty($columns)) {
                  $decimal_places = get_option('currency_decimal', 2);
                  switch (get_option('currency_decimal_separator', 'dot')) {
                      case 'dot':
                          $decimalpoint = '.';
                          break;
                      case 'comma':
                          $decimalpoint = ',';
                          break;
                      default:
                          $decimalpoint = '';
                          break;
                  }

                  switch (get_option('currency_thousand_separator', 'comma')) {
                      case 'dot':
                          $separator = '.';
                          break;
                      case 'comma':
                          $separator = ',';
                          break;
                      case 'space':
                          $separator = ' ';
                          break;
                      default:
                          $separator = '';
                          break;
                  }
                  foreach ($columns as $key => $row) { ?>
              <th><?php echo strip_tags($row); ?></th>
              <?php }
              } ?>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($order_logs)) {
                $currency_symbol = get_option('currency_symbol', '$');
                $i = 0;
                foreach ($order_logs as $key => $row) {
                    $i++; ?>
            <tr class="tr_<?php echo strip_tags($row->ids); ?>">
              <!--<td><?php echo strip_tags($i); ?></td>-->
              <td class="text-center"><a href="<?php echo cn(
                  $module . '/log_view/' . $row->ids
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

              <?php if (get_role('user') || get_role('supporter')) { ?>
              <!--<td class="text-center"><?php echo $row->api_order_id == 0 ||
              $row->api_order_id == -1
                  ? ''
                  : $row->api_order_id; ?></td>-->
              
              <td style="white-space: nowrap;"><?php echo strip_tags(
                  $row->civility .
                      ' ' .
                      $row->first_name .
                      ' ' .
                      $row->last_name
              ); ?></td>
              <td><?php echo strip_tags($row->company); ?></td>
              <td><span> <!--class="text-nowrap"-->
                  <?php echo 'IP: ' . strip_tags($row->ip_address); ?>
                  <?php echo get_ip_location(
                      $row->ip_address
                  )."". get_ip_flag($row->ip_address); ?></span>
              </td>
              <?php } ?>

              <td><?php echo strip_tags(
                  $row->service_name
              ); ?></td>              
              <!--<td>-->
                  <?php
                    //   if (filter_var($row->link, FILTER_VALIDATE_URL)) {
                    //     echo '<a href="https://anon.ws/?'.$row->link.'" target="_blank" style="word-break: break-all;min-width: 50px;display: inline-block;">'.truncate_string($row->link, 60).'</a>';
                    //   } else {
                    //     echo truncate_string($row->link, 60);
                    //   }
                    ?>
              <!--</td>-->
              <td><?php echo strip_tags($row->quantity); ?></td>              
              <td>
                    <span class="text-nowrap">
					<?php echo currency_format(
                        $row->charge,
                        $decimal_places,
                        $decimalpoint,
                        $separator
                    ) .' '. $currency_symbol; ?>
                    <?php
                    //   if ($row->formal_charge != 0) {
                    //     echo '('. $row->formal_charge. ' / <span class="text-info">'. $row->profit .'</span>)';
                    //   }
                    ?>
                    </span>
              </td>              
              <td><?php echo !empty($row->start_counter)
                  ? $row->start_counter
                  : ''; ?></td>              
              <td><?php echo !empty($row->remains)
                  ? $row->remains
                  : ''; ?></td>              
              <td><?php echo !empty($row->api_service_id) &&
              $row->api_service_id != ''
                  ? lang('API') . ' (' . strip_tags($row->api_name) . ')'
                  : lang('Manual'); ?></td>              
              
              <td class="d-none">
                <div class="title">
                  <h6><?php echo strip_tags(
                      $row->service_id . ' - ' . $row->service_name
                  ); ?></h6>
                </div>
                <div style="max-width: 450px;overflow: auto;">
                  <small>
                    <table>
                        <thead>
                            <tr>
                                <th><?php echo lang('Type'); ?></th>
                                <th><?php echo lang('Link'); ?></th>
                                <th><?php echo lang('Quantity'); ?></th>
                                <th><?php echo lang('Charge'); ?></th>
                                <th><?php echo lang('Start_counter'); ?></th>
                                <th><?php echo lang('Remains'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo !empty($row->api_service_id) &&
                                $row->api_service_id != ''
                                    ? lang('API') .
                                        ' (' .
                                        strip_tags($row->api_name) .
                                        ')'
                                    : lang('Manual'); ?></td>
                                <td>
                                    <?php if (
                                        filter_var(
                                            $row->link,
                                            FILTER_VALIDATE_URL
                                        )
                                    ) {
                                        echo '<a href="https://anon.ws/?' .
                                            $row->link .
                                            '" target="_blank" style="word-break: break-all;min-width: 50px;display: inline-block;">' .
                                            truncate_string($row->link, 60) .
                                            '</a>';
                                    } else {
                                        echo truncate_string($row->link, 60);
                                    } ?>
                                </td>
                                <td><?php echo strip_tags(
                                    $row->quantity
                                ); ?></td>
                                <td>
                                    <?php echo $currency_symbol .
                                        currency_format(
                                            $row->charge,
                                            $decimal_places,
                                            $decimalpoint,
                                            $separator
                                        ); ?>
            
                                    <?php if ($row->formal_charge != 0) {
                                        echo '(' .
                                            $row->formal_charge .
                                            ' / <span class="text-info">' .
                                            $row->profit .
                                            '</span>)';
                                    } ?>
                                </td>
                                <td><?php echo !empty($row->start_counter)
                                    ? $row->start_counter
                                    : ''; ?></td>
                                <td><?php echo !empty($row->remains)
                                    ? $row->remains
                                    : ''; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="d-none">
                      <li><?php echo lang('Type'); ?>: <?php echo !empty(
    $row->api_service_id
) && $row->api_service_id != ''
    ? lang('API') . ' (' . strip_tags($row->api_name) . ')'
    : lang('Manual'); ?></li>
                      <li><?php echo lang('Link'); ?>:
                        <?php if (filter_var($row->link, FILTER_VALIDATE_URL)) {
                            echo '<a href="https://anon.ws/?' .
                                $row->link .
                                '" target="_blank">' .
                                truncate_string($row->link, 60) .
                                '</a>';
                        } else {
                            echo truncate_string($row->link, 60);
                        } ?>
                      </li> 
                      <li><?php echo lang(
                          'Quantity'
                      ); ?>: <?php echo strip_tags($row->quantity); ?></li>
                      <li><?= lang('Charge') ?>: 
                        <?php echo $currency_symbol .
                            currency_format(
                                $row->charge,
                                $decimal_places,
                                $decimalpoint,
                                $separator
                            ); ?>

                        <?php if ($row->formal_charge != 0) {
                            echo '(' .
                                $row->formal_charge .
                                ' / <span class="text-info">' .
                                $row->profit .
                                '</span>)';
                        } ?>
                      </li>
                      <li><?php echo lang(
                          'Start_counter'
                      ); ?>: <?php echo !empty($row->start_counter)
    ? $row->start_counter
    : ''; ?></li>
                      <li><?php echo lang('Remains'); ?>: <?php echo !empty(
    $row->remains
)
    ? $row->remains
    : ''; ?></li>
                    </ul>
                  </small>
                </div>
              </td>
              
              <?php if (get_role('user') || get_role('supporter')) { ?>
              <td class="text-center"><?php echo $row->api_order_id == 0 ||
              $row->api_order_id == -1
                  ? ''
                  : $row->api_order_id; ?></td>
              <?php } ?>
              
              <td>
                 
			     <?php if(!empty($row->note)){                 
				 ?>
                 <span class="text-white badge btn btn-danger round btn-sm">
                 <?php
				     echo strip_tags($row->note);
			      ?>
                   </span>
                <?php		  
				  
				 }
				  ?>
                 
              </td>
              <td>
                <?php if (
                    $row->status == 'pending' ||
                    $row->status == 'processing'
                ) {
                    $btn_background = 'btn-info';
                } elseif ($row->status == 'inprogress') {
                    $btn_background = 'btn-orange';
                } elseif ($row->status == 'completed') {
                    $btn_background = 'btn-blue';
                } elseif ($row->status == 'awaiting') {
                    $btn_background = 'btn-lime';
                } else {
                    $btn_background = 'btn-danger';
                } ?>
                <span class="btn round btn-sm <?php echo strip_tags(
                    $btn_background
                ); ?>"><?php echo order_status_title($row->status); ?></span>
              </td>

              <?php $redirect_url = urlencode(get_current_url()); ?>
              <td class="text-center">
                <div class="btn-group">
                  <a href="<?php echo cn(
                      $module . '/log_view/' . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-primary ajaxModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'View'
); ?>"><i class="fe fe-eye"></i></a>
                  <a href="<?php echo cn(
                      $module . '/log_update/' . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-primary ajaxModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'Edit'
); ?>"><i class="fe fe-edit"></i></a>

                  <?php if (
                      $row->status == 'error' &&
                      $row->api_order_id < 0
                  ) { ?>
                  <a href="<?= cn(
                      "$module/change_status/resend_order/" .
                          $row->ids .
                          '?r_url=' .

                          $redirect_url
                  ) ?>" class="btn btn-icon btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="<?php echo 'Resend Order'; ?>"><i class="fe fe-repeat"></i></a>
                  <?php } ?>

                  <!--<a href="<?php echo cn(
                      "$module/ajax_log_delete_item/" . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-danger ajaxDeleteItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'Delete'
); ?>"><i class="fe fe-trash-2"></i></a>-->
                </div>
              </td>

            </tr>  
            <?php
                }
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <!-- Get Pagination -->
  <div class="col-md-12">
    <div class="float-right">
      <?php echo $pagination; ?>
    </div>
  </div>
  <?php } else { ?>
    <?php echo Modules::run('blocks/empty_data'); ?>
  <?php } ?>
</div>




<script>

  "use strict";

  $(document).ready(function(){

    Chart_template.chart_spline('#orders_chart_spline', <?php echo strip_tags(
        $data_orders_log->data_orders_chart_spline
    ); ?>);

    Chart_template.chart_pie('#orders_chart_pie', <?php echo strip_tags(
        $data_orders_log->data_orders_chart_pie
    ); ?>);

  });

</script>




