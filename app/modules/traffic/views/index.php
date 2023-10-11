
<!-- Option 1: Include in HTML -->
<div class="page-header d-md-none">
  <h1 class="page-title">
    <i class="icon-fa fa-file-text-o" aria-hidden="true"></i> <?php echo lang(
        'Traffic'
    ); ?>
  </h1>
</div>

<div class="mb-5">
    <h3 class="topbar d-none d-lg-block">
      <i class="icon-fa fa  fa-file-text-o" aria-hidden="true"></i> <?php echo lang(
          'Traffic'
      ); ?>
    </h3>
</div>

<div class="search-box w-auto flex-fill max-w-md ml-0 mr-auto d-none d-lg-block">
  <?php //if (allowed_search_bar(segment('invoices')) || allowed_search_bar(segment('invoices'))) {
      echo Modules::run('blocks/search_box');
  //} ?>
</div>

<div class="row m-t-5" id="result_ajaxSearch">
  
  <?php if (!empty($users)) { ?>
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
        <table class="table table-hover table-bordered table-vcenter card-table">
          <thead>
            <tr>
              <!--<th class="text-center w-1"><?php echo lang('No_'); ?></th>-->
              <?php if (!empty($columns)) {
                  foreach ($columns as $key => $row) { ?>
              <th><?php echo strip_tags($row); ?></th>
              <?php }
              } ?>
              
              <?php if (!get_role('user')) { ?>
              <th class="text-center"><?php echo lang('Action'); ?></th>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($users)) {
                $i = 0;
                $currency_symbol = get_option('currency_symbol', '$');

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

                foreach ($users as $key => $row) {
                    $i++; ?>
            <tr class="tr_<?php echo strip_tags($row->ids); ?>">
              <!--<td><?php echo strip_tags($i); ?></td>-->
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
              <td><span> <!--class="text-nowrap"-->
                  <?php echo 'IP: ' . strip_tags($row->ip_address); ?>
                  <?php echo get_ip_location(
                      $row->ip_address
                  )."". get_ip_flag($row->ip_address); ?></span>
              </td>
              <td class="text-nowrap">
                https://topreviews.agency/affiliate/traffic
              </td>
              <td>
                https://topreviews.agency/affiliate/traffic
              </td>
              <td>10</td>
              <td class="text-center"><span style="white-space:nowrap">3.0 $</span></td>
             
              
              <td><?php echo time_elapsed_string($row->created, true); ?></td>

              <td class="text-center">
                
                <div class="btn-group">
                  <a href="<?php echo cn(
                      $module . '/view/' . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-primary ajaxModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'View'
); ?>"><i class="fe fe-eye"></i></a>
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
  <div class="col-md-12">
    <div class="float-right">
      <?php echo $pagination; ?>
    </div>
  </div>
  <?php } else { ?>
    <?php echo Modules::run('blocks/empty_data'); ?>
  <?php } ?>
</div>
