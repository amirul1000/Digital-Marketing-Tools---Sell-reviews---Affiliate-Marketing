
    <div class="card content">
      <div class="card-header">
        <h3 class="card-title"><i class="fe fe-edit-3"></i> <?php echo lang("terms__policy"); ?></h3>
      </div>
      <div class="card-body">
        <form class="actionForm" action="<?php echo cn("$module/ajax_general_settings"); ?>" method="POST" data-redirect="<?php echo get_current_url(); ?>">
          <div class="row">
            <div class="col-md-12 col-lg-12">
          
              <h5 class="text-info"><i class="fe fe-link"></i> <?php echo lang("content_of_terms"); ?></h5 class="text-info">
              <div class="form-group">
                <label class="form-label"><?php echo lang("Content"); ?></label>
                <?php
                  $terms_content = get_option('terms_content', "<p><strong>Lorem Ipsum</strong></p><p>Lorem ipsum dolor sit amet, in eam consetetur consectetuer. Vivendo eleifend postulant ut mei, vero maiestatis cu nam. Qui et facer mandamus, nullam regione lucilius eu has. Mei an vidisse facilis posidonium, eros minim deserunt per ne.</p><p>Duo quando tibique intellegam at. Nec error mucius in, ius in error legendos reformidans. Vidisse dolorum vulputate cu ius. Ei qui stet error consulatu.</p><p>Mei habeo prompta te. Ignota commodo nam ei. Te iudico definitionem sed, placerat oporteat tincidunt eu per, stet clita meliore usu ne. Facer debitis ponderum per no, agam corpora recteque at mel.</p>");
                ?>
                <textarea rows="3" name="terms_content" class="form-control textarea-editor">
                  <?php echo html_entity_decode($terms_content, ENT_QUOTES); ?>
                </textarea>
              </div>

              <h5 class="text-info"><i class="fe fe-link"></i> <?php echo lang("content_of_policy"); ?></h5 class="text-info">
              <div class="form-group">
                <label class="form-label"><?php echo lang("Content"); ?></label>
                <?php 
                  $policy_content = get_option('policy_content', "<p><strong>Lorem Ipsum</strong></p><p>Lorem ipsum dolor sit amet, in eam consetetur consectetuer. Vivendo eleifend postulant ut mei, vero maiestatis cu nam. Qui et facer mandamus, nullam regione lucilius eu has. Mei an vidisse facilis posidonium, eros minim deserunt per ne.</p><p>Duo quando tibique intellegam at. Nec error mucius in, ius in error legendos reformidans. Vidisse dolorum vulputate cu ius. Ei qui stet error consulatu.</p><p>Mei habeo prompta te. Ignota commodo nam ei. Te iudico definitionem sed, placerat oporteat tincidunt eu per, stet clita meliore usu ne. Facer debitis ponderum per no, agam corpora recteque at mel.</p>");
                ?>
                <textarea rows="3" name="policy_content" class="form-control textarea-editor">
                  <?php echo html_entity_decode($policy_content, ENT_QUOTES); ?>
                </textarea>
              </div>
              
              <h5 class="text-info"><i class="fe fe-link"></i> <?php echo ("Acceptable Usage Policy"); ?></h5 class="text-info">
              <div class="form-group">
                <label class="form-label"><?php echo lang("Content"); ?></label>
                <?php 
                  $acceptable_usage_content = get_option('acceptable_usage_content', "<p><strong>Lorem Ipsum</strong></p><p>Lorem ipsum dolor sit amet, in eam consetetur consectetuer. Vivendo eleifend postulant ut mei, vero maiestatis cu nam. Qui et facer mandamus, nullam regione lucilius eu has. Mei an vidisse facilis posidonium, eros minim deserunt per ne.</p><p>Duo quando tibique intellegam at. Nec error mucius in, ius in error legendos reformidans. Vidisse dolorum vulputate cu ius. Ei qui stet error consulatu.</p><p>Mei habeo prompta te. Ignota commodo nam ei. Te iudico definitionem sed, placerat oporteat tincidunt eu per, stet clita meliore usu ne. Facer debitis ponderum per no, agam corpora recteque at mel.</p>");
                ?>
                <textarea rows="3" name="acceptable_usage_content" class="form-control textarea-editor">
                  <?php echo html_entity_decode($acceptable_usage_content, ENT_QUOTES); ?>
                </textarea>
              </div>
              
              <h5 class="text-info"><i class="fe fe-link"></i> <?php echo ("Refund Policy"); ?></h5 class="text-info">
              <div class="form-group">
                <label class="form-label"><?php echo lang("Content"); ?></label>
                <?php 
                  $refund_content = get_option('refund_content', "<p><strong>Lorem Ipsum</strong></p><p>Lorem ipsum dolor sit amet, in eam consetetur consectetuer. Vivendo eleifend postulant ut mei, vero maiestatis cu nam. Qui et facer mandamus, nullam regione lucilius eu has. Mei an vidisse facilis posidonium, eros minim deserunt per ne.</p><p>Duo quando tibique intellegam at. Nec error mucius in, ius in error legendos reformidans. Vidisse dolorum vulputate cu ius. Ei qui stet error consulatu.</p><p>Mei habeo prompta te. Ignota commodo nam ei. Te iudico definitionem sed, placerat oporteat tincidunt eu per, stet clita meliore usu ne. Facer debitis ponderum per no, agam corpora recteque at mel.</p>");
                ?>
                <textarea rows="3" name="refund_content" class="form-control textarea-editor">
                  <?php echo html_entity_decode($refund_content, ENT_QUOTES); ?>
                </textarea>
              </div>

            </div>
            <div class="col-md-8">
              <div class="form-footer">
                <button class="btn btn-primary btn-min-width btn-lg text-uppercase"><?php echo lang("Save"); ?></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script>
      $(document).ready(function() {
        plugin_editor('.textarea-editor', {height: 500});
      });
    </script>
