<form class="actionForm"  method="POST">

  <div class="page-header">
    
    <?php
        if (topbar_tilte_by_module(segment(1))) {
    ?>
        <div class="">
            <h3 class="topbar d-none d-lg-block">
              <i class="icon-fa fa fa-list-ul" aria-hidden="true"></i> <?php echo lang("Services"); ?>
            </h3>
        </div>
    <?php } ?>

    <div class="page-options d-flex">
        
      <?php 
        if(get_role("admin")  || get_role("supporter")) {
      ?>
        <h1 class="page-title d-none d-lg-block mr-2">
          <a class="ajaxModal btn-add-new" href="<?php echo cn("$module/update"); ?>">
            <span class="add-new"><i class="fa fa-plus-square text-primary" aria-hidden="true"></i></span>
            <?php echo lang("add_new"); ?>
          </a>
        </h1>
    
        <h1 class="page-title d-md-none mr-2">
          <a class="ajaxModal" href="<?php echo cn("$module/update"); ?>">
            <span class="add-new" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo lang("add_new"); ?>"><i class="fa fa-plus-square text-primary" aria-hidden="true"></i></span>
          </a>
          <?php echo lang("Services"); ?>
        </h1>
      <?php }?>
      
      <div class="mr-2">
        <select  name="status" class="form-control order_by ajaxChange h-7" data-url="<?php echo cn($module."/ajax_service_sort_by_cate/"); ?>">
          <option value="all"> <?php echo lang("sort_by"); ?></option>
          <?php if(!empty($categories_by_social_network)){
            foreach ($categories_by_social_network as $key => $social_network) {
          ?>
          <optgroup label="<?php echo strip_tags($social_network->name); ?>"><?php echo strip_tags($social_network->name); ?>
            <?php if(!empty($social_network->categories)){
              foreach ($social_network->categories as $key => $category) {
            ?>
            <option value="<?php echo strip_tags($category->id); ?>" <?php if(!empty($service->ids) && $category->id == $service->cate_id) echo 'selected'; else echo '';?> ><?php echo strip_tags($category->name); ?></option>
            <?php }}?>
          </optgroup>
          <?php }}?>
        </select>
      </div>

      <div>
        <div class="item-action dropdown action-options">
          <button type="button" class="btn btn-secondary dropdown-toggle text-dark bg-white" data-toggle="dropdown">
             <i class="fe fe-menu mr-2"></i> <?php echo lang("Action"); ?>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item ajaxActionOptions" href="<?php echo cn($module.'/ajax_actions_option'); ?>" data-type="delete"><i class="fe fe-trash-2 text-danger mr-2"></i> <?php echo lang("Delele"); ?></a>
            <a class="dropdown-item ajaxActionOptions" href="<?php echo cn($module.'/ajax_actions_option'); ?>" data-type="all_deactive"><i class="fe fe-trash-2 text-danger mr-2"></i> <?php echo lang("all_deactivated_services"); ?></a>
            <a class="dropdown-item ajaxActionOptions" href="<?php echo cn($module.'/ajax_actions_option'); ?>" data-type="deactive"><i class="fe fe-x-square text-danger mr-2"></i> <?php echo lang("Deactive"); ?></a>   
            <a class="dropdown-item ajaxActionOptions" href="<?php echo cn($module.'/ajax_actions_option'); ?>" data-type="active"><i class="fe fe-check-square text-success mr-2"></i> <?php echo lang("Active"); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row m-t-5" id="result_ajaxSearch">
    <?php if(!empty($all_services)){
      foreach ($all_services as $key => $category) {
    ?>
    <div class="col-md-12 col-xl-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo strip_tags($key); ?></h3>
          <div class="card-options">
            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
          </div>
        </div>
        <div class="table-responsive">
          <?php
            $data = array(
              "module"     => $module,
              "columns"    => $columns,
              "services"   => $category,
              "cate_id"    => $category[0]->main_cate_id,
            );
            $this->load->view("ajax/load_services_by_cate", $data);
          ?>
        </div>
      </div>
    </div>
    <?php }}else{?>
      <?php echo Modules::run("blocks/empty_data"); ?>
    <?php } ?>
  </div>
</form>