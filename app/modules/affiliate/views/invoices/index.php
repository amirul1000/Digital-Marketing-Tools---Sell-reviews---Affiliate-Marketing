<?php
  $module = "client/".$module;
?>
<style>
.btn3d  {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 400;
  color: #000;
  background-color: #EDEDED;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;  
  transform: translateY(-7px);
  }

.btn3d:hover {
  background-color: #2EE59D;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}
</style>

<!-- Option 1: Include in HTML -->
<div class="page-header d-md-none">
  <h1 class="page-title">
    <i class="icon-fa fa-file-text-o" aria-hidden="true"></i> <?php echo lang(
        'Commissions'
    ); ?>
  </h1>
</div>

<div class="mb-5">
    <h3 class="topbar d-none d-lg-block">
      <i class="icon-fa fa  fa-file-text-o" aria-hidden="true"></i> <?php echo lang(
          'Commissions'
      ); ?>
    </h3>
</div>

<div class="search-box w-auto flex-fill max-w-md ml-0 mr-auto d-none d-lg-block">
  <?php //if (allowed_search_bar(segment('invoices')) || allowed_search_bar(segment('invoices'))) {
      echo Modules::run('blocks/search_box');
  //} ?>
</div>

<div class="row m-t-5" id="result_ajaxSearch">
    
  <?php if (!empty($transactions)) { ?>
  <div class="col-md-12 col-xl-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?php echo lang('Lists'); ?></h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-bordered table-outline table-vcenter card-table">
          <thead>
            <tr>
              <!--<th class="text-center w-1"><?php echo lang('No_'); ?></th>-->
              <?php if (!empty($columns)) {
                  foreach ($columns as $key => $row) { ?>
              <th><?php echo strip_tags($row); ?></th>
              <?php }
              } ?>
              
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($transactions)) {
                $i = 0;
                foreach ($transactions as $key => $row) {
                    $i++; ?>
            <tr class="tr_<?php echo strip_tags($row->ids); ?>">
              <!--<td><?php echo strip_tags($i); ?></td>-->
              <td><a href="<?php echo cn(
                  "$module/view/" . $row->ids
              ); ?>" class="ajaxModal"><?php echo date(
    'dmY',
    strtotime($row->created)
) . str_pad($row->id, 5, '0', STR_PAD_LEFT); ?></a></td>

              <td>
                <!--<div class="title"><?php echo strip_tags($row->uid); ?></div>-->
                 <div class="title"><?php echo 
                   $row->civility . ' ' . $row->first_name . ' ' . $row->last_name
                ; ?></div>
              </td>
              <td> <?php echo strip_tags($row->company); ?>           </td>
              <td>
			  
			     <a href="" style="color:#0000FF !important;">
                    <?php echo get_format_id($row->created, $row->id); ?>
			        <?php //echo $row->order_id; ?>                 
                 </a>
              
              
              </td>

              <td>
                <div class="title">
				
				<?php //echo strip_tags($row->transaction_id); ?>
                
                   <?php
					    
					    $this->db->select('services.*');
						$this->db->from("services");
						$this->db->join("orders", "services.id = orders.service_id", 'left');
						$this->db->where("orders.id='".$row->order_id."'");
						$query = $this->db->get();
						$result = $query->result();
						echo $result[0]->name.'-'.$result[0]->quantity;
					 ?>
                
                </div>
              </td>
               <td><?php
              
              echo strip_tags($row->amount);echo " ".get_option('currency_symbol', '');
              ?> </td>


              <td>
                <a href="">
                   <i class="fa fa-file-pdf-o" style="color:red;"></i>
                </a>
              
              <!--<?php echo strip_tags('PDF URL'); ?>--> </td>
              
              <td>
                <?php if ($row->type == 'free') {
                    echo 'Free payment'; ?>
                <?php
                } else {
                     ?>
                <img class="payment" src="<?php echo BASE; ?>/assets/images/payments/<?php echo strip_tags(
    $row->type
); ?>.png" alt="<?php echo strip_tags($row->type); ?> icon">
                <?php
                } ?>
              </td>
              
              <td>
                <?php switch ($row->status) {
                    case 1:
                        echo '<span class="badge badge-success">' .
                            lang('Paid') .
                            '</span>';
                        break;

                    case 0:
                       /* echo '<span class="badge badge-warning">' .
                            lang('waiting_for_buyer_funds') .
                            '</span>';
                        break;*/
						
						 echo '<span class="badge badge" style="background:red">' .
                            lang('Pending') .
                            '</span>
							';
                        break;

                    case -1:
                        echo '<span class="badge badge-danger">' .
                            lang('cancelled_timed_out') .
                            '</span>';
                        break;
                } ?>
              </td>
              <td>
              
                     <?php switch ($row->status) {
                  
                    case 0:                        
						 echo '
							 <br><br><button class="btn btn-default btn-sm btn3d">
										Pay Now
									</button>
							 ';
                        break;
					  default:
					     echo strip_tags($row->transaction_id); 	
						

                   
                } ?>
              
              
              </td>
              <td>
                <?= time2string(time() - strtotime($row->created)) . ' ago' ?>
              </td>
              

            </tr>
            <?php
                }
            } ?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php if ($pagination) {
      echo '<div class="col-md-12"><div class="float-right">' .
          $pagination .
          '</div></div>';
  } ?>
  <?php } else { ?>
    <?php echo Modules::run('blocks/empty_data'); ?>
  <?php } ?>
</div>

<?php function time2string($timeline)
{
    $periods = ['day' => 86400, 'hour' => 3600, 'minute' => 60, 'second' => 1];

    foreach ($periods as $name => $seconds) {
        $num = floor($timeline / $seconds);
        $timeline -= $num * $seconds;
        $ret .= $num . ' ' . $name . ($num > 1 ? 's' : '') . ' ';
    }

    return trim($ret);
}

?>
