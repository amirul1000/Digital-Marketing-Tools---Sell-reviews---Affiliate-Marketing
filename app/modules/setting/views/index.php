<div class="page-header d-md-none">
  <h1 class="page-title">
    <i class="fe fe-settings"></i> <?php echo lang("Settings"); ?>
  </h1>
</div>

<div class="row settings justify-content-center">
    
  <?php
    if (topbar_tilte_by_module(segment(1))) {
  ?>
    <div class="col-sm-12 mb-3">
        <h3 class="topbar d-none d-lg-block">
          <i class="icon fe fe-settings"></i>
          <?php echo topbar_tilte_by_module(segment(1)); ?>
        </h3>
    </div>
  <?php } ?>
  <div class="col-md-12 col-lg-12">
    <div class="row">
      <div class="col-lg-2 mb-4">
        <?php
          $data = array(
            "module" => "setting",
          );
          $this->load->view('sidebar', $data);
        ?>
      </div>

      <div class="col-lg-10">
        <?php

          $data = array(
            "module" => "setting",
          );

          $payments_method = get_payments_method();
          if ($tab != "") {
            if (in_array($tab, $payments_method) && payment_method_exists($tab)) {
              $this->load->view('integrations/'.$tab, $data);
            }else{
              $this->load->view($tab, $data);
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>