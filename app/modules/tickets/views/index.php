<div class="page-header mb-0">
  <h1 class="page-title d-md-none">
    <i class="icon fe fe-shopping-cart" aria-hidden="true"></i> <?php echo ("Support Tickets"); ?>
  </h1>

</div>

<?php
  if (topbar_tilte_by_module(segment(1))) {
?>
    <div class="mb-5">
        <h3 class="topbar d-none d-lg-block">
          <i class="icon fe fe-mail" aria-hidden="true"></i> <?php echo ("Support Tickets"); ?>
        </h3>
    </div>
<?php } ?>

<div class="d-flex">
    <div class="search-box w-auto flex-fill max-w-md ml-0 mr-auto d-none d-lg-block">
      <?php
        if ( allowed_search_bar(segment(1)) || allowed_search_bar(segment(2)) ) {
          echo Modules::run("blocks/search_box");
        }
      ?>
    </div>
    
    <div class="dropdown d-flex">
      <div class="page-title d-none d-lg-block mr-3">
          <a class="ajaxModal btn-add-new" href="<?=cn($module.'/add')?>">
            <span class="add-new mr-1"><i class="fa fa-plus-square text-primary" aria-hidden="true"></i></span>
            <?php echo lang("add_new"); ?>
          </a>
      </div>
      <button type="button" class="btn btn-secondary dropdown-toggle text-dark bg-white" data-toggle="dropdown">
        <i class="fe fe-menu mr-2"></i>
        Actions
      </button>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item ajaxActionOptions" href="<?=cn($module.'/ajax_actions_option')?>" data-type="closed"><i class="dropdown-icon fe fe-clock"></i> Marks as Close </a>
        <a class="dropdown-item ajaxActionOptions text-danger" href="<?=cn($module.'/ajax_actions_option')?>" data-type="clear_all"><i class="dropdown-icon fe fe-alert-triangle text-danger"></i> Delete All</a>  
      </div>
    </div>
</div>

<form class="actionForm"  method="POST" data-redirect="<?php echo cn($module); ?>">
  <div class="row  m-t-5" id="result_ajaxSearch">
    
    <?php if(!empty($tickets)){
    ?>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo lang("Lists"); ?></h3>
          <div class="card-options">
              <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
              <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-hover table-bordered table-vcenter card-table">
            <thead>
              <tr>
                <th class="text-center w-1">
                  <div class="custom-controls-stacked">
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input check-all" data-name="chk_1">
                      <span class="custom-control-label"></span>
                    </label>
                  </div>
                </th>
                <!--<th class="text-center w-1"><?php echo lang('No_'); ?></th>-->
                <?php
                  foreach ($columns as $key => $row) {
                ?>
                <th><?php echo strip_tags($row); ?></th>
                <?php }?>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($tickets)) {
                $currency_symbol = get_option("currency_symbol", "$");
                $i = 0;
                foreach ($tickets as $key => $row) {
                $i++;
              ?>
              <tr class="tr_<?php echo strip_tags($row->ids); ?>">

                <td class="text-center w-1">
                  <div class="custom-controls-stacked">
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input chk_1"  name="ids[]" value="<?=$row->ids?>">
                      <span class="custom-control-label"></span>
                    </label>
                  </div>
                </td>
                <!--<td><?php echo strip_tags($i); ?></td>-->
                <td><a href="<?php echo cn($module."/view/".$row->ids); ?>" class="ajaxModal"><?php echo get_format_id($row->created, $row->id); ?></a></td>
                <td><?php echo convert_timezone($row->created, "user", '', 'date'); ?></td>
                <td><?php echo convert_timezone($row->created, "user", '', 'time'); ?></td>
                <td>
                    <?php echo strip_tags($row->ip); ?>
                    <?php if (!empty($row->ip)) { ?>
                    <!--<span class="text-nowrap">--><?php echo get_ip_location($row->ip) ." ". get_ip_flag($row->ip); ?><!--</span>-->
                    <?php } ?>
                </td>
                <td class="text-nowrap"><?php echo (($row->civility) ? $row->civility : '') . ' ' . strip_tags($row->first_name) . ' ' . strip_tags($row->last_name); ?></td>
                <td><?php echo strip_tags($row->company); ?></td>
                <td><a href="<?php echo cn("order/log_view/".$row->order_ids); ?>" class="ajaxModal"><?php echo get_format_id($row->order_created, $row->order_id); ?></a></td>
                <td><?php echo strip_tags($row->department); ?></td>
                <td>
                  <?php
                    if ($row->status == "pending" || $row->status == "new") {
                      $btn_background = "btn-info";
                    }elseif($row->status == "completed"){
                      $btn_background = "btn-blue";
                    }elseif($row->status == "closed"){
                      $btn_background = "btn-dark";
                    }else{
                      $btn_background = "btn-danger";
                    }
                  ?>
                  <span class="btn round btn-sm <?php echo strip_tags($btn_background) ;?>"><?php echo ticket_status_title($row->status); ?></span>
                </td>
                <td><?php echo time_elapsed_string($row->created, true); ?></td>
                
                <td class="text-center">
                  <div class="btn-group">
                    <a href="<?php echo cn($module."/view/".$row->ids); ?>" class="btn btn-icon btn-outline-primary ajaxModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo 'Detail'; ?>"><i class="fe fe-eye"></i></a>

                    <a href="<?php echo cn($module."/reply/".$row->ids); ?>" class="btn btn-icon btn-outline-primary ajaxModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo 'Reply'; ?>"><i class="fe fe-mail"></i></a>

                    <a href="<?php echo cn("$module/ajax_delete_item/".$row->ids); ?>" class="btn btn-icon btn-outline-danger ajaxDeleteItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang("Delete"); ?>"><i class="fe fe-trash-2"></i></a>
                  </div>
                </td>

              </tr>  
              <?php }}?>
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
    <?php }else{?>
      <?php echo Modules::run("blocks/empty_data"); ?>
    <?php }?>
  </div>
</form>
