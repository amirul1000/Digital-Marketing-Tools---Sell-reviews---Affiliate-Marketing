<?php
//   if (!session('uid')) {
    $data_link = (object)array(
      'link'  => cn('refunds'),
      'name'  => lang("Refund_Policy")
    );
?>
  <?php echo Modules::run("blocks/user_header_top_new", $data_link); ?>
<?php //}?>


<section id="main-body">
    <div class="container">
        <?php echo html_entity_decode(get_option("refund_content", ""), ENT_QUOTES); ?>
    </div>
</section>
