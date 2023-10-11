
    <div class="card content">
      <div class="card-header">
        <h3 class="card-title"><i class="fe fe-help-circle"></i> <?php echo lang("Lists"); ?></h3>
        <div class="card-options align-items-center">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <!--<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>-->
        </div>
      </div>
      <div class="card-body" id="result_ajaxSearch">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-vcenter card-table">
              <thead>
                <tr>
                  <th class="text-center w-1"><?php echo lang("No_"); ?></th>
                  <?php if (!empty($columns)) {
                    foreach ($columns as $key => $row) {
                  ?>
                  <th><?php echo strip_tags($row); ?></th>
                  <?php }}?>
                  
                  <?php
                    if (!get_role("user")) {
                  ?>
                  <th class="text-center"><?php echo lang('Action'); ?></th>
                  <?php }?>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($faqs)) {
                  $i = 0;
                  $currency_symbol = get_option('currency_symbol', '$');
                  foreach ($faqs as $key => $row) {
                  $i++;
                ?>
                <tr class="tr_<?php echo strip_tags($row->ids); ?>">
                  <td><?php echo strip_tags($i); ?></td>
                  <td><?php echo strip_tags($row->sort); ?></td>
                  <td class="w-10"><?php echo convert_timezone($row->created, 'user', '', 'date'); ?></td>
                  <td class="w-10"><?php echo convert_timezone($row->created, 'user', '', 'time'); ?></td>
                  <td class="w-25">
                    <div class="title"><?php echo truncate_string(strip_tags($row->question), 30); ?></div>
                  </td>
                  <td class="text-muted">
                    <?php
                      $answer = html_entity_decode($row->answer, ENT_QUOTES);
                      $answer = strip_tag_css($answer);
                    ?>
                    <?php echo truncate_string($answer, 150); ?>
                  </td>
                  <td class="w-10">
                    <?php if(!empty($row->status) && $row->status == 1){?>
                      <span class="badge badge-info"><?php echo lang("Active"); ?></span>
                      <?php }else{?>
                      <span class="badge badge-warning"><?php echo lang("Deactive"); ?></span>
                    <?php }?>
                  </td> 
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="<?php echo cn($tab."/update/".$row->ids); ?>" class="btn btn-icon btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang("Edit"); ?>"><i class="fe fe-edit"></i></a>
                      <a href="<?php echo cn("$tab/ajax_delete_item/".$row->ids); ?>" class="btn btn-icon btn-outline-danger ajaxDeleteItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang("Delete"); ?>"><i class="fe fe-trash-2"></i></a>
                    </div>
                  </td>
                </tr>
                <?php } }else { ?>
                <tr><td colspan="8" class="text-center">Data not found!</td></tr>
                <?php } ?>
                
              </tbody>
            </table>
        </div>
      </div>
    </div>
