<form class="<?php echo $requests['class']; ?>" method="<?php echo $requests['method']; ?>" action="<?php echo $requests['action']; ?>">
	<div class="form-group">
	  <div class="input-group">
	    <input type="text" class="form-control" name="query" id="search-item" placeholder="<?=lang("Search_for_")?>" value="<?php echo get('query'); ?>">
	    <div class="input-group-append">
	     	<?php
	     		if ($data_search) {
	     	?>
	      	<select class="form-control" name="search_type">
	      		<?php
	      			foreach ($data_search as $key => $row) {
	      		?>
		        <option value="<?php echo $key; ?>" <?php if(get('search_type') == $key) echo "selected"; ?>><?php echo $row; ?></option>
		        <?php }; ?>
	      	</select>
	        <?php }; ?>
	      	<button class="btn btn-secondary btn-searchItem bg-blue-theme-active"  type="submit"><i class="fe fe-search text-white"></i></button>
	    </div>
	  </div>
	</div>
</form>
