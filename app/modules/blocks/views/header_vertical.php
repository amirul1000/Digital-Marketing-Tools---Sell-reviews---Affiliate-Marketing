<style>

  .search-box div.form-group{

    margin-bottom: 0px !important;

  }

  .search-box .form-control {

    height: auto !important;

  }
.badge {    
    margin-left: -5px !important;
}
.mt-n2 {
     margin-top: 0rem !important; 
}
</style>



<header class="navbar navbar-expand-lg js-header bg-dark text-white">

  <div class="header-wrap">



    <a class="navbar-toggler mobile-menu">

      <span class="navbar-toggler-icon"><i class="icon fe fe-menu"></i></span>

    </a>

    

   <!-- <div class="d-flex">

    <h5 class="topbar d-none d-lg-block">

        <span id="clock"><?php echo date('l d M Y H:i:s'); ?></span>

    </h5>

    

    <h5 class="topbar d-none d-lg-block ml-4">

        <?php
        $ip = $_SERVER['REMOTE_ADDR'];

        echo 'IP: ' . $ip . '  ' . get_ip_location($ip);
        ?>

    </h5>

    </div>-->



    <a href="<?php echo cn(); ?>" class="navbar-brand text-inherit mr-md-3">

      <img src="<?php echo BASE; ?>assets/images/logo.png" alt="Website Logo" class="d-md-none navbar-brand-logo">

    </a>

    

    <?php
//   if(topbar_tilte_by_module(segment(1))){
?>

    <!--<h2 class="topbar module-name d-none d-lg-block">-->

    <!--  <?php
//echo topbar_tilte_by_module(segment(1));
?>-->

    <!--</h2>-->

    <?php
//}
?>

    <div class="search-box w-auto flex-fill max-w-md ml-0 ml-md-6 mr-auto d-none d-lg-blocks">

      <?php if (
          allowed_search_bar(segment(1)) ||
          allowed_search_bar(segment(2))
      ) {
          echo Modules::run('blocks/search_box');
      } ?>

    </div>



    <ul class="nav navbar-menu align-items-center order-1 order-lg-2">

      <?php $redirect =
          (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
              ? 'https'
              : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
              
              
              
              
              
        <li class="nav-item dropdown">       
      <span class="topbar d-none d-lg-block">

        <span id="clock"><?php echo date('l d M Y H:i:s'); ?></span>

    </span>
    </li>

    
    <li class="nav-item dropdown">
    <span class="topbar d-none d-lg-block ml-4">

        <?php
        $ip = $_SERVER['REMOTE_ADDR'];

        echo  'IP:'.$ip . ' ' . get_ip_location($ip)." ". get_ip_flag($ip);
	   
        ?>

    </span>
    </li>   
    <li class="nav-item dropdown">
         
        <a class=" float-left  text-white <?php if (segment(2) == 'tickets') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
			'client/tickets'
		); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
			'Support Chat'
		); ?>">

          <span class="mx-2 d-none d-lg-block leading-none">
                        <i class="fa fa-comment"></i>
            <span>
              <?php echo lang('Support Chat'); ?>
          </span>    
          </span>
        </a>
            <span class="badge badge-danger  float-left mt-n2 "><?= $openTickets ?></span>        
      </li>


      <!--<li class="nav-item d-none d-lg-block">-->

      <!--  <a class="" href="#customize" data-toggle="modal" >-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-sliders" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(
          'Theme_Customizer'
      ); ?>"></i>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->
        
      <li class="nav-item dropdown">

        <a class=" float-left  text-white <?php if (segment(1) == 'tickets') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'tickets'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Support Tickets'
); ?>">

          <span class="mx-2 d-none d-lg-block leading-none">
                        <i class="icon fe fe-mail"></i>
            <span>
              <?php echo lang('Support Tickets'); ?>
          </span>    
          </span>
        </a>
            <span class="badge badge-danger  float-left mt-n2 "><?= $openTickets ?></span>        
      </li>

      <li class="nav-item dropdown">

        <a class=" float-left  text-white" href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
            'Invoices'
        ); ?>">

          <span class="mx-2 d-none d-lg-block leading-none">
            <i class="icon-fa fa fa-file-text-o"></i>
            <span>
              <?php echo lang('Invoices'); ?>
          </span>          

          </span>
        </a>
            <span class="badge badge-danger float-left  mt-n2">0</span>        
      </li>

      <li class="nav-item dropdown">

        <a class="  float-left   text-white <?php if (
            segment(1) == 'transactions'
        ) {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'transactions'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Payments'
); ?>">

          <span class="mx-2 d-none d-lg-block leading-none">
            <i class="icon-fa fa fa-credit-card"></i>
            <span>
              <?php echo lang('Payments'); ?>
          </span>          

          </span>
        </a>
            <span class="badge badge-danger float-left  mt-n2"><?= $totalPayments ?></span>        
      </li>

      <li class="nav-item dropdown">

        <a class="  float-left  text-white <?php if (segment(1) == 'order') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'order'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'orders'
); ?>">

          <span class="mx-2 d-none d-lg-block leading-none">
            <i class="icon fe fe-shopping-cart"></i>
            <span>
              <?php echo lang('orders'); ?>
          </span>          

          </span>

        </a>
            <span class="badge badge-danger float-left  mt-n2"><?= $totalOrders ?></span>        
      </li>

      <li class="nav-item dropdown  mr-3">

        <a <?php if (segment(1) == 'users') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'users'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Customers'
); ?>" data-toggle="dropdown" class="nav-link float-left  d-flex align-items-center py-0 px-lg-0 px-2 text-color">

          <span class="mx-2 d-none d-lg-block leading-none">
            <i class="icon fe fe-users"></i>
            <span>
              <?php echo lang('Customers'); ?>
          </span>          

          </span>

        </a>
            <span class="badge badge-danger float-left  mt-n2"><?= $totalUsers ?></span>

        
      </li>

      
      


      <li class="nav-item dropdown-lang dropdown mr-3">

        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

          <span class="fe fe-dollar-sign">USD</span> 

        </a>

        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

          <a class="dropdown-item ajaxChangeCurrency" href="javascript:void(0)" data-url="" data-redirect="<?php echo strip_tags(
              $redirect
          ); ?>" data-ids="1"><i class="fe fe-dollar-sign"></i>USD

          </a>

        </div>

      </li>

      

      <li class="nav-item dropdown-lang dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

          <span class="flag-icon flag-icon-<?php echo strtolower(
              $lang_current->country_code
          ); ?>"></span> 

        </a>

        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

          <?php foreach ($languages as $key => $row) { ?>

          <a class="dropdown-item ajaxChangeLanguageSecond" href="javascript:void(0)" data-url="<?php echo cn(
              'language/set_language/'
          ); ?>" data-redirect="<?php echo strip_tags(
    $redirect
); ?>" data-ids="<?php echo strip_tags(
    $row->ids
); ?>"><i class="flag-icon flag-icon-<?php echo strtolower(
    $row->country_code
); ?>"></i> <?php echo language_codes($row->code); ?>

          </a>

          <?php } ?>

        </div>

      </li>

      

      <!-- Added Greetings -->

      <?php
      date_default_timezone_set('Europe/Paris');

      $Hour = date('G');

      if ($Hour >= 5 && $Hour <= 11) {
          $greetings = 'Good Morning';
      } elseif ($Hour >= 12 && $Hour <= 18) {
          $greetings = 'Good Afternoon';
      } elseif ($Hour >= 19 || $Hour <= 4) {
          $greetings = 'Good Evening';
      }
	  $greetings ='';
      ?>



      <li class="nav-item dropdown">

        <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center py-0 px-lg-0 px-2 text-color ml-2">

          <span class="mx-2 d-none d-lg-block leading-none">

            <span><?php echo $greetings; ?> Mr <?php echo get_field(
     USERS,
     ['id' => session('uid')],
     'first_name'
 ) .
     ' ' .
     get_field(USERS, ['id' => session('uid')], 'last_name'); ?>! </span>

            <!--<span class="text-muted d-block mt-1 text-h6"><?php echo lang(
                'Administrator'
            ); ?></span>-->

          </span>

          <span class="avatar admin-profile"></span>

        </a>

        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

          <a class="dropdown-item" href="<?php echo cn('profile'); ?>">

            <i class="icon fe fe-user dropdown-icon"></i>

            <?php echo lang('Profile'); ?>

          </a>

          <a class="dropdown-item" href="<?php echo cn('users'); ?>">

            <i class="icon fe fe-users users dropdown-icon"></i>

            <?php echo lang('Users'); ?>

          </a>

          <a class="dropdown-item" href="<?php echo cn('departments'); ?>">

            <i class="icon fe fe-share-2 dropdown-icon"></i>

            <?php echo lang('Departments'); ?>

          </a>

          <a class="dropdown-item" href="<?php echo cn('setting'); ?>">

            <i class="icon fe fe-settings dropdown-icon"></i>

            <?php echo lang('Settings'); ?>

          </a>

          <a class="dropdown-item" href="<?php echo cn('social_network'); ?>">

            <i class="icon-fa fa fa-th-large dropdown-icon"></i>

            <?php echo 'Social Networks'; ?>

          </a>

          <a class="dropdown-item" href="<?php echo cn('category'); ?>">

            <i class="icon-fa fa fa-table dropdown-icon"></i>

            <?php echo lang('Categorys'); ?>

          </a>

          <a class="dropdown-item" href="<?php echo cn('services'); ?>">

            <i class="icon-fa fa fa-list-ul dropdown-icon"></i>

            <?php echo lang('Services'); ?>

          </a>

          <a class="dropdown-item" href="<?php echo cn('cms/terms_policy'); ?>">

            <i class="icon fe fe-settings dropdown-icon"></i>

            <?php echo 'CMS'; ?>

          </a>

          

          <!--<a class="dropdown-item" href="<?php echo cn('faqs'); ?>">-->

          <!--  <i class="icon fe fe-help-circle dropdown-icon"></i>-->

          <!--  <?php echo lang('FAQs'); ?>-->

          <!--</a>-->

          <a class="dropdown-item" href="<?php echo cn('replies'); ?>">

            <i class="icon fe fe-message-circle dropdown-icon"></i>

            <?php echo lang('Quick Replys'); ?>

          </a>

          <a class="dropdown-item" href="<?php echo cn('rights'); ?>">

            <i class="icon fe fe-align-right dropdown-icon"></i>

            <?php echo lang('Rights'); ?>

          </a>

          <a class="dropdown-item" href="<?php echo cn('ressources '); ?>">

            <i class="icon fe fe-share-2 dropdown-icon"></i>

            <?php echo lang('Ressources '); ?>

          </a>

          <!--<a class="dropdown-item" href="<?php echo cn('language'); ?>">-->

          <!--  <i class="icon-fa fa fa-language dropdown-icon"></i>-->

          <!--  <?php echo lang('Languages'); ?>-->

          <!--</a>-->

          <!--<a class="dropdown-item" href="<?php echo cn('module'); ?>">-->

          <!--  <i class="icon fe fe-layers dropdown-icon"></i>-->

          <!--  <?php echo lang('Modules'); ?>-->

          <!--</a>-->

          <!--<a class="dropdown-item" href="#customize" data-toggle="modal">-->

          <!--  <i class="icon fe fe-sliders dropdown-icon"></i>-->

          <!--  <?php echo 'Theme Customizers'; ?>-->

          <!--</a>-->

          <!--<a class="dropdown-item" href="https://smartpanelsmm.com/docs/" target="_blank">-->

          <!--  <i class="icon fe fe-book dropdown-icon"></i>-->

          <!--  <?php echo lang('Documentations'); ?>-->

          <!--</a>-->

          

          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="<?php echo cn('auth/logout'); ?>">

            <i class="icon fe fe-log-out dropdown-icon"></i>

            <?php echo lang('Logout'); ?>

          </a>

        </div>

      </li>

    </ul>

  </div>

</header>





<script>

    function updateClock() {

      var now = new Date();

      

      var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

      var day = daysOfWeek[now.getDay()];



      var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

      var month = months[now.getMonth()];



      var date = now.getDate();

      var year = now.getFullYear();



      var hours = now.getHours();

      var minutes = now.getMinutes();

      var seconds = now.getSeconds();



      var time = hours.toString().padStart(2, '0') + ':' + minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0');

      

      var dateTime = day + ' ' + date + ' ' + month + ' ' + year + ' ' + time;

      document.getElementById("clock").textContent = dateTime;

    }

    

    setInterval(updateClock, 1000);

</script>