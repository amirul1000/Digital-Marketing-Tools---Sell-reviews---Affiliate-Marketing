
    <div class="card content">
      <div class="card-header">
        <h3 class="card-title"><i class="fa fa-language"></i> <?php echo lang("Lists"); ?></h3>
        <div class="card-options align-items-center">
            
          <?php 
          if(get_role("admin")  || get_role("supporter")) {
          ?>
          <h1 class="page-title d-none d-lg-block mr-5">
            <a href="<?php echo cn("$tab/update"); ?>" class="btn-add-new">
              <span class="add-new"><i class="fa fa-plus-square text-primary" aria-hidden="true"></i></span>
              <?php echo lang("add_new"); ?>
            </a>
          </h1>
        
          <h1 class="page-title d-md-none mr-5">
            <a href="<?php echo cn("$tab/update"); ?>">
              <span class="add-new" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo lang("add_new"); ?>"><i class="fa fa-plus-square text-primary" aria-hidden="true"></i></span>
              <?php echo lang("Languages"); ?>
            </a>
          </h1>
          <?php }?>
          
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body" id="result_ajaxSearch">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-vcenter text-nowrap card-table">
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
                <?php if (!empty($languages)) {
                  $i = 0;
                  foreach ($languages as $key => $row) {
                  $i++;
                ?>
                <tr class="tr_<?=$row->ids?>">
                  <td><?=$i?></td>
                  <td class="w-10"><?php echo convert_timezone($row->created, 'user', '', 'date'); ?></td>
                  <td class="w-10"><?php echo convert_timezone($row->created, 'user', '', 'time'); ?></td>
                  <td>
                    <div class="title"><h6><?=language_codes($row->code)?></h6></div>
                  </td>
                  <td class="text-uppercase"><?=$row->code?></td>
                  <td><span class="flag-icon flag-icon-<?=strtolower($row->country_code)?>"></span></td>
                  <td><?=($row->is_default==1)? lang('Yes') : lang('No') ?></td>
                  <!--<td><?=$row->created?></td>-->
                  <td>
                    <?php if(!empty($row->status) && $row->status == 1){?>
                      <span class="btn round btn-info btn-sm"><?=lang("Active")?></span>
                      <?php }else{?>
                      <span class="btn round btn-warning btn-sm"><?=lang("Deactive")?></span>
                    <?php }?>
                  </td>
                  <td class="text-center">
                    <div class="item-action dropdown">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                      <div class="dropdown-menu">
                        <a href="<?=cn("$tab/update/".$row->ids)?>" class="dropdown-item"><i class="dropdown-icon fe fe-edit"></i> <?=lang('Edit')?> </a>
                        <?php
                          if (get_role('admin')) {
                        ?>
                        <a href="<?=cn("$tab/ajax_delete_item/".$row->ids)?>" class="dropdown-item ajaxDeleteItem">  <i class="dropdown-icon fe fe-trash"></i> <?=lang('Delete')?> 
                        </a>
                        <?php }?>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php }}?>
                
              </tbody>
            </table>
        </div>
      </div>
    </div>
