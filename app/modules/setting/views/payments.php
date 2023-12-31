
    <div class="card content">
      <div class="card-header">
        <h3 class="card-title"><i class="fe fe-credit-card"></i> <?php echo lang("Lists"); ?></h3>
        <div class="card-options align-items-center">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body" id="result_ajaxSearch">
        <div class="table-responsive">
            <table class="table table-hover table-vcenter card-table">
              <thead>
                <tr>
                  <th class="text-center w-1"><?=lang("No_")?></th>
                  <?php if (!empty($columns)) {
                    foreach ($columns as $key => $row) {
                  ?>
                  <th><?=$row?></th>
                  <?php }}?>
                  <th class="text-center"><?=lang("Action")?></th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($payments)) {
                  $i = 0;
                  foreach ($payments as $key => $row) {
                  $i++;
                ?>
                <tr class="tr_<?=$row->id?>">
                  <td class="text-center"><?php echo$i; ?></td>
                  <td><strong><?php echo $row->sort; ?></strong></td>
                  <td class="text-muted"> <?php echo $row->type?></td>
                  <td><strong><?php echo $row->name?></strong></td>
                  <td>
                    <label class="custom-switch">
                      <input type="checkbox" name="item_status" data-id="<?php echo $row->id; ?>" data-action="<?php echo cn($module.'/ajax_toggle_item_status/'); ?>" class="custom-switch-input ajaxToggleItemStatus" <?php if(!empty($row->status) && $row->status == 1) echo 'checked'; ?>>
                      <span class="custom-switch-indicator"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="<?=cn("$tab/update/".$row->id)?>" class="btn btn-icon ajaxModal" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fe fe-edit"></i></a>
                    </div>
                  </td>
                </tr>
                <?php }}?>
                
              </tbody>
            </table>
        </div>
      </div>
    </div>
    
    <div class="row m-t-30" id="result_notification">

    </div>
