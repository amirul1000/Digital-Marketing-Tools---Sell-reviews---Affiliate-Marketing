<style>
  .navbar-dark .navbar-nav .show > .nav-link, .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .nav-link.active {
    border-top: 1px solid white !important;
}
</style>
<aside class="navbar navbar-side navbar-fixed js-sidebar" id="aside">

  <div class="mobile-logo">

    <a href="<?php echo cn('dashboard'); ?>" class="navbar-brand text-inherit">

      <img src="<?php echo BASE; ?>assets/images/logoNewWhite.png" alt="Website Logo" class="hide-navbar-folded navbar-brand-logo">

      <img src="<?php echo BASE; ?>assets/images/favicon.png" alt="Website Logo" class="hide-navbar-expanded navbar-brand-logo">

    </a>

  </div>

  <div class="flex-fill scroll-bar">

    <ul class="navbar-nav mb-md-4" id="menu">

      <!--<h6 class="navbar-heading first">-->

      <!--  <span class="text"><?php
// echo lang('General');
?></span>-->

      <!--</h6>-->

      <li class="nav-item">

        <a class="nav-link text-white <?php if (segment(1) == 'dashboard') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'dashboard'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Dashboard'
); ?>">

          <span class="nav-icon">

            <i class="icon-fa fa fa-bar-chart"></i>

          </span>

          <span class="nav-text">

            <?php echo lang('Dashboard'); ?>

          </span>

        </a>

      </li>

      

      <li class="nav-item">

        <a class="nav-link text-white <?php if (segment(1) == 'users') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'users'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Customers'
); ?>">

          <span class="nav-icon">

            <i class="icon fe fe-users"></i>

          </span>

          <span class="nav-text">

            <?php echo lang('Customers'); ?>


          </span>

        </a>

      </li>

      

      <!--<h6 class="navbar-heading">-->

      <!--  <span class="text"><?php
// echo lang('Service_Area');
?></span>-->

      <!--</h6>-->

      <li class="nav-item">

        <a class="nav-link text-white <?php if (segment(1) == 'order') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'order'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'orders'
); ?>">

          <span class="nav-icon">

            <i class="icon fe fe-shopping-cart"></i>

          </span>

          <span class="nav-text">

            <?php echo lang('orders'); ?>


          </span>

        </a>

      </li>



      <li class="nav-item">

        <a class="nav-link text-white <?php if (segment(1) == 'transactions') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'transactions'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Payments'
); ?>">

          <span class="nav-icon">

            <i class="icon-fa fa fa-credit-card"></i>

          </span>

          <span class="nav-text">

            <?php echo lang('Payments'); ?>


          </span>

        </a>

      </li>

      

      <li class="nav-item">

        <a class="nav-link text-white" <?php if (segment(1) == 'invoices') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'invoices'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Invoices'
); ?>">

          <span class="nav-icon">

            <i class="icon-fa fa fa-file-text-o"></i>

          </span>

          <span class="nav-text">

            <?php echo lang('Invoices'); ?>


          </span>

        </a>

      </li>

      <script>
         function showhide(){
            $("#menu2").toggleClass('show');
              var up = document.getElementById("up");
              var down = document.getElementById("down");             
              if (down.style.display === "none") {
                 up.style.display = "none";
                 down.style.display = "block";
              } else {
                down.style.display = "none";
                 up.style.display = "block";
              }
         }
         <?php
		     if (segment(1) == 'affiliate_users' || segment(1) == 'traffic' ||
			 segment(1) == 'sales' || segment(1) == 'commissions' ||
			 segment(1) == 'affiliatepayments'  ) {
			?>	 
				$( document ).ready(function() {
 
	               $("#menu2").show();
              });

          <?php	
			 }
		 ?>
      </script>    
      <li class="nav-item treeview">

        <a  class="nav-link text-white collapse" onClick="showhide();" href="javascript:void();" aria-controls="menu2" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
				'Affiliation'
			); ?>">

          <span class="nav-icon">

            <i class="icon fe fe-mail"></i>

          </span>

          <span class="nav-text">

            <?php echo 'Affiliation '; ?> &nbsp;&nbsp;

              <i id="up" class="fa fa-angle-up" style="display:none;"></i>
              
              <i id="down" class="fa fa-angle-down"  style="display:block;"></i>


          </span>

        </a>
             <ul class="navbar-nav collapse hide" id="menu2" >
                 <li class="nav-item">
                   
                       <a class="nav-link text-white <?php if (segment(1) == 'affiliate_users') {
								echo 'active';
							} else {
								echo '';
							} ?>" href="<?php echo cn(
						'affiliate_users'
					); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
						'Affiliate'
					); ?>">
					
							  <span class="nav-icon">					
								<i class="icon-fa fa fa-file-text-o"></i>					
							  </span>
					
							  <span class="nav-text">					
								<?php echo lang('Affiliate'); ?>
							  </span>
                        </a>
                 
                 
                 
                 </li>
                 <li class="nav-item">
                    <a class="nav-link text-white <?php if (segment(1) == 'traffic') {
								echo 'active';
							} else {
								echo '';
							} ?>" href="<?php echo cn(
						'traffic'
					); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
						'Traffic'
					); ?>">
					
							  <span class="nav-icon">					
								<i class="icon-fa fa fa-file-text-o"></i>					
							  </span>
					
							  <span class="nav-text">					
								<?php echo lang('Traffic'); ?>
							  </span>
                        </a> 
                 </li>
                 <li class="nav-item">
                    <a class="nav-link text-white <?php if (segment(1) == 'sales') {
								echo 'active';
							} else {
								echo '';
							} ?>" href="<?php echo cn(
						'sales'
					); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
						'Sales'
					); ?>">
					
							  <span class="nav-icon">					
								<i class="icon-fa fa fa-file-text-o"></i>					
							  </span>
					
							  <span class="nav-text">					
								<?php echo lang('Sales'); ?>
							  </span>
                        </a> 
                 </li>
                 <li class="nav-item">
                   <a class="nav-link text-white <?php if (segment(1) == 'commissions') {
								echo 'active';
							} else {
								echo '';
							} ?>" href="<?php echo cn(
						'commissions'
					); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
						'Commissions'
					); ?>">
					
							  <span class="nav-icon">					
								<i class="icon-fa fa fa-file-text-o"></i>					
							  </span>
					
							  <span class="nav-text">					
								<?php echo lang('Commissions'); ?>
							  </span>
                        </a> 
                 </li> 
                 <li class="nav-item">
                   <a class="nav-link text-white <?php if (segment(1) == 'affiliatepayments') {
								echo 'active';
							} else {
								echo '';
							} ?>" href="<?php echo cn(
						'affiliatepayments'
					); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
						'Payments'
					); ?>">
					
							  <span class="nav-icon">					
								<i class="icon-fa fa fa-file-text-o"></i>					
							  </span>
					
							  <span class="nav-text">					
								<?php echo lang('Payments'); ?>
							  </span>
                        </a> 
                 </li> 
             </ul>
      </li>
      
      <li class="nav-item">

        <a class="nav-link text-white <?php if (segment(1) == 'tickets') {
            echo 'active';
        } else {
            echo '';
        } ?>" href="<?php echo cn(
    'tickets'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Support Tickets'
); ?>">

          <span class="nav-icon">

            <i class="icon fe fe-mail"></i>

          </span>

          <span class="nav-text">

            <?php echo 'Support Tickets'; ?>


          </span>

        </a>

      </li>



      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (
          segment(1) == 'social_network'
      ) {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'social_network'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'social_networks'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon-fa fa fa-th-large"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo 'Social Networks'; ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'category') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'category'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Categories'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon-fa fa fa-table"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('Categorys'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->

      

      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'services') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'services'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Services'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon-fa fa fa-list-ul"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('Services'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<h6 class="navbar-heading">-->

      <!--  <span class="text"><?php
// echo lang('Apps_Setting');
?></span>-->

      <!--</h6>-->



      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'setting') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'setting/website_setting'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Settings'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-settings"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('Settings'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'payments') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'payments'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Payments'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-dollar-sign"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('Payments'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->

      

      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'cms') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'cms/terms_policy'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'CMS'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-settings"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo 'CMS'; ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'blogs') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'blogs'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Blog'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-edit"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('Blog'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'faqs') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'faqs'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'FAQ'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-help-circle"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('FAQ'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'provider') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'provider'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Provider'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-share-2"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('Provider'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<h6 class="navbar-heading">-->

      <!--  <span class="text"><?php echo lang('Other'); ?></span>-->

      <!--</h6>-->

      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'language') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'language'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Language'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon-fa fa fa-language"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('Language'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white <?php if (segment(1) == 'module') {
          echo 'active';
      } else {
          echo '';
      } ?>" href="<?php echo cn(
    'module'
); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Module'
); ?>">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-layers"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('Module'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
          'Theme_Customizers'
      ); ?>">-->

      <!--  <a class="nav-link text-white" href="#customize" data-toggle="modal" >-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-sliders"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo 'Theme Customizers'; ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



      <!--<li class="nav-item">-->

      <!--  <a class="nav-link text-white" href="https://smartpanelsmm.com/docs/" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
          'Documentations'
      ); ?>" target="_blank">-->

      <!--    <span class="nav-icon">-->

      <!--      <i class="icon fe fe-book"></i>-->

      <!--    </span>-->

      <!--    <span class="nav-text">-->

      <!--      <?php echo lang('Documentations'); ?>-->

      <!--    </span>-->

      <!--  </a>-->

      <!--</li>-->



    </ul>

  </div>

  <!--<ul class="navbar-nav">-->

  <!--  <li class="nav-item">-->

  <!--    <a href="<?php echo cn(
      'auth/logout'
  ); ?>" class="nav-link" data-toggle="tooltip" data-placement="right" title="<?php echo lang(
    'Logout'
); ?>">-->

  <!--      <span class="nav-icon"><i class="icon fe fe-power"></i>-->

  <!--      </span>-->

  <!--      <span class="nav-text"><?php echo lang('Logout'); ?></span>-->

  <!--    </a>-->

  <!--  </li>-->

  <!--</ul>-->

</aside>