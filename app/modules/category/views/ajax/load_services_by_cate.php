<?php if (!empty($categories)) {
?>
<table class="table table-hover table-bordered table-outline table-vcenter card-table">
  <thead>
    <tr>
      <?php
        if (get_role("admin")) {
      ?>
      <th class="text-center w-1">
        <label class="form-check">
          <input class="form-check-input  check-all" type="checkbox" data-name="chk_<?php echo strip_tags($cate_id); ?>">
          <span class="form-check-label"></span>
        </label>
      </th>
      <?php }?>
      <?php if (!empty($columns)) {
        foreach ($columns as $key => $row) {
      ?>
      <th><?php echo strip_tags($row); ?></th>
      <?php }}?>
      
      <?php
        if (get_role("admin") || get_role("supporter")) {
      ?>
      <th><?php echo lang("Action"); ?></th>
      <?php }?>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($categories)) {
      $i = 0;
      foreach ($categories as $key => $row) {
      $i++;
    ?>
    <tr class="tr_<?php echo strip_tags($row->ids); ?>">
      <?php
        if (get_role("admin")) {
      ?>
      <th class="text-center w-1">
        <label class="form-check">
          <input class="form-check-input  chk_<?php echo strip_tags($cate_id); ?>" type="checkbox" name="ids[]" value="<?php echo strip_tags($row->ids); ?>">
          <span class="form-check-label"></span>
        </label>
      </th>
      <?php }?>

      <td class="w-1"><?php echo strip_tags($row->sort); ?></td>
      <td>
        <div class="title"><?php echo strip_tags($row->name); ?></div>
      </td>
      <td><?php echo strip_tags($row->url_slug); ?></td>
      <td class="w-10">
        <?php if(!empty($row->status) && $row->status == 1){?>
          <span class="badge badge-info"><?php echo lang("Active"); ?></span>
          <?php }else{?>
          <span class="badge badge-warning"><?php echo lang("Deactive"); ?></span>
        <?php }?>
      </td>  

      <?php
        if (get_role("admin") || get_role("supporter")) {
      ?>

      <td class="text-center w-10">
        <div class="btn-group">
          <a href="<?php echo cn($module."/edit/".$row->id); ?>" class="btn btn-icon btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang("Edit"); ?>"><i class="fe fe-edit"></i></a>
          <a href="<?php echo cn($module."/duplicate/".$row->id); ?>" class="btn btn-icon btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Duplicate"><i class="fe fe-copy"></i></a>
          <a href="<?php echo cn(strip_tags($row->url_slug)); ?>" target="_blank" class="btn btn-icon btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang("View"); ?>"><i class="fe fe-link"></i></a>
          <a href="<?php echo cn("$module/ajax_delete_item/".$row->ids); ?>" class="btn btn-icon btn-outline-danger ajaxDeleteItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang("Delete"); ?>"><i class="fe fe-trash-2"></i></a>
        </div>
      </td>
      <?php }?>

    </tr>
    <?php }}?>
    
  </tbody>
</table>
<?php } ?>
