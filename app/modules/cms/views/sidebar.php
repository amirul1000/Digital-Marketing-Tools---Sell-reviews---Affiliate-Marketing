    <div class="sidebar">
        <div class="item mt-2">
          <ul class="list-unstyled list-group list-group-transparent mb-0">

            <li><a href="<?php echo cn($module."/terms_policy"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'terms_policy') ? 'active' : ''?>"><?php echo ("Legal Pages"); ?></a></li>
            
            <li><a href="<?php echo cn($module."/home_page"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'home_page') ? 'active' : ''?>"><?php echo ("Home Page"); ?></a></li>
            
            <li><a href="<?php echo cn($module."/categorys"); ?>" class="list-group-item list-group-item-action <?php echo (segment(2) == 'categorys') ? 'active' : ''?>"><?php echo ("Categorys Pages"); ?></a></li>
            

          </ul>
        </div>
    </div>