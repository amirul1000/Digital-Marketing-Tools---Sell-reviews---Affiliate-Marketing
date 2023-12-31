    <div class="sidebar">
        <div class="item mt-2">
          <div class="title"><?php echo lang("general_settings"); ?></div>
          <ul class="list-unstyled list-group list-group-transparent mb-0">
            <li><a href="<?php echo cn($module."/website_setting"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'website_setting') ? 'active' : ''?>"><?php echo lang("website_settings"); ?></a></li>

            <li><a href="<?php echo cn($module."/website_logo"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'website_logo') ? 'active' : ''?>"><?php echo ("Website Logos"); ?></a></li>

            <!--<li><a href="<?php echo cn($module."/terms_policy"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'terms_policy') ? 'active' : ''?>"><?php echo lang("terms__policy_page"); ?></a></li>-->

            <li><a href="<?php echo cn($module."/default_setting"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'default_setting') ? 'active' : ''?>"><?php echo ("Default Settings"); ?></a></li>
            
            <li><a href="<?php echo cn($module."/currency"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'currency') ? 'active' : ''?>"><?php echo ("Currency Settings"); ?></a></li>
            

            <li><a href="<?php echo cn($module."/language"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'language') ? 'active' : ''?>"><?php echo ("Language Settings"); ?></a></li>
            
            <li><a href="<?php echo cn($module."/payments"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'payments') ? 'active' : ''?>"><?php echo ("Payment Methods"); ?></a></li>

            <li><a href="<?php echo cn($module."/other"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'other') ? 'active' : ''?>"><?php echo lang("Other"); ?></a></li>
          </ul>
        </div>

        <div class="item mt-2">
          <div class="title"><?php echo lang("Email"); ?></div>
          <ul class="list-unstyled list-group list-group-transparent mb-0">
            <li><a href="<?php echo cn($module."/email_setting"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'email_setting') ? 'active' : ''?>"><?php echo ("Email Settings"); ?></a></li>
            <li><a href="<?php echo cn($module."/email_template"); ?>"  class="list-group-item list-group-item-action <?php echo (segment(2) == 'email_template') ? 'active' : ''?>"><?php echo ("Email Templates"); ?></a></li>
          </ul>
        </div>
    </div>