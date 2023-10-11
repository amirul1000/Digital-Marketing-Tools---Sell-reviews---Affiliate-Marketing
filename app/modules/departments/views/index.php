<div class="page-header d-md-none">
  <h1 class="page-title">
    <i class="icon fe fe-departments" aria-hidden="true"></i> <?php echo lang(
        'Departments'
    ); ?>
  </h1>
</div>

<?php if (topbar_tilte_by_module(segment(1))) { ?>
    <div class="col-sm-12 mb-3">
        <h3 class="topbar d-none d-lg-block">
          <i class="icon fe fe-share-2 dropdown-icons" aria-hidden="true"></i> 
          <?php echo lang('Departments'); ?>
        </h3>
    </div>
<?php } ?>
  
<div class="search-box w-auto flex-fill max-w-md ml-0 mr-auto d-none d-lg-block">
  <?php if (allowed_search_bar(segment(1)) || allowed_search_bar(segment(2))) {
      echo Modules::run('blocks/search_box');
  } ?>
</div>

<div class="row m-t-5" id="result_ajaxSearch">
  
  <?php if (!empty($departments)) { ?>
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
            <?php if (!empty($departments)) {
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

                foreach ($departments as $key => $row) {
                    $i++; ?>
            <tr class="tr_<?php echo strip_tags($row->ids); ?>">
              <!--<td><?php echo strip_tags($i); ?></td>-->
              <td><a href="<?php echo cn(
                  $module . '/update/' . $row->ids
              ); ?>" class="ajaxModal"><?php echo date(
    'dmY',
    strtotime($row->created)
) . str_pad($row->id, 5, '0', STR_PAD_LEFT); ?></a></td>
              <td><?php echo convert_timezone(
                  $row->created,
                  'user',
                  '',
                  'date'
              ); ?></td>
              <td><?php echo convert_timezone(
                  $row->created,
                  'user',
                  '',
                  'time'
              ); ?></td>
              <td>
                  <?php echo strip_tags($row->history_ip); ?>
                  <span class="text-nowrap"><?php echo get_ip_location(
                      $row->history_ip
                  ); ?></span>
              </td>
              <td class="text-nowrap">
                <div class="title"><h6><?php echo strip_tags(
                    $row->civility .
                        ' ' .
                        $row->first_name .
                        ' ' .
                        $row->last_name
                ); ?></h6></div>
              </td>
              <td>
                <div class="title"><h6><?php echo strip_tags(
                    $row->company
                ); ?></h6></div>
              </td>
              
              

              <td>
                <?php if ($row->status == 1) {
                    $btn_background = 'btn-success';
                } else {
                    $btn_background = 'btn-danger';
                } ?>
                <span class="btn round btn-sm <?php echo strip_tags(
                    $btn_background
                ); ?>"><?php echo $row->status ? 'Active' : 'Pending'; ?></span>
              </td>
              <td><?php echo time_elapsed_string($row->created, true); ?></td>

              <td class="text-center">
                
                <div class="btn-group">
                  <a href="<?php echo cn(
                      $module . '/view/' . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-primary ajaxModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'View'
); ?>"><i class="fe fe-eye"></i></a>
                  <a href="<?php echo cn(
                      $module . '/update/' . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-info ajaxModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'Edit'
); ?>"><i class="fe fe-edit"></i></a>
                  <a href="<?php echo cn(
                      $module . '/mail/' . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-primary ajaxModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'send_mail'
); ?>"><i class="fe fe-mail"></i></a>
                  <a href="<?php echo cn(
                      "$module/ajax_delete_item/" . $row->ids
                  ); ?>" class="btn btn-icon btn-outline-danger ajaxDeleteItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
    'Delete'
); ?>"><i class="fe fe-trash-2"></i></a>
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
