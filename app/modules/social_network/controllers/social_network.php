<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class social_network extends MX_Controller {
	public $tb_users;
	public $tb_social_network;
	public $tb_services;
	public $columns;
	public $module_name;
	public $module_icon;

	public function __construct(){
		parent::__construct();
		$this->load->model(get_class($this).'_model', 'model');

		//Config Module
		$this->tb_categories     = CATEGORIES;
		$this->tb_services       = SERVICES;
		$this->tb_social_network = SOCIAL_NETWORK_CATEGORIES;
		$this->module_name       = 'Category';
		$this->module_icon       = "fa ft-users";
		$this->columns = array(
			"id"               => ("ID"),
			"sort"             => lang("Sorting"),
			"name"             => lang("Name"),
			"desc"             => lang("Description"),
			"status"           => lang("Status"),
		);
	}

	public function index(){
		$page        = (int)get("p");
		$page        = ($page > 0) ? ($page - 1) : 0;
		$limit_per_page = get_option("default_limit_per_page", 10);
		$query = array();
		$query_string = "";
		if(!empty($query)){
			$query_string = "?".http_build_query($query);
		}
		$config = array(
			'base_url'           => cn(get_class($this).$query_string),
			'total_rows'         => $this->model->get_category_lists(true),
			'per_page'           => $limit_per_page,
			'use_page_numbers'   => true,
			'prev_link'          => '<i class="fe fe-chevron-left"></i>',
			'first_link'         => '<i class="fe fe-chevrons-left"></i>',
			'next_link'          => '<i class="fe fe-chevron-right"></i>',
			'last_link'          => '<i class="fe fe-chevrons-right"></i>',
		);
		$this->pagination->initialize($config);
		$pagination = $this->pagination->create_links();

		$categories = $this->model->get_category_lists(false, "all", $limit_per_page, $page * $limit_per_page);

		$data = array(
			"module"     => get_class($this),
			"columns"    => $this->columns,
			"categories" => $categories,
			"from"       => $page * $limit_per_page,
			"pagination" => $pagination,
		);

		$this->template->build('index', $data);
	}

	public function update($ids = ""){

		$category = $this->model->get("*", $this->tb_social_network, "ids = '{$ids}'");

		$data = array(
			"module"   => get_class($this),
			"category" => $category,
		);
		$this->template->build('update', $data);
	}

	public function ajax_update($ids = ""){
		$name 		= post("name");
		$image	    = post("image");
		$sort 		= (int)post("sort");
		$status 	= (int)post("status");
// 		$icon_path  = post("icon_path");
		$desc 		= $this->input->post('desc', false);
		if($name == ""){
			ms(array(
				"status"  => "error",
				"message" => lang("name_is_required")
			));
		}
		if($sort == "" || $sort <= 0){
			ms(array(
				"status"  => "error",
				"message" => lang("sort_number_must_to_be_greater_than_zero")
			));
		}
		// Check image icon path
// 		if( !$icon_path){
// 			ms(array(
// 				"status"  => "error",
// 				"message" => 'The image icon field is required'
// 			));
// 		}
		//
		$data = array(
			"uid"             => session('uid'),
			"name"            => $name,
			"desc"            => $desc,
// 			"image"           => $icon_path,
			"status"          => $status,
			"sort"            => $sort,
		);

		$check_item = $this->model->get("id, ids", $this->tb_social_network, "ids = '{$ids}'");
		
		if(empty($check_item)){

			$data["ids"]     = ids();
			$data["changed"] = NOW;
			$data["created"] = NOW;

			$this->db->insert($this->tb_social_network, $data);
		}else{
			$data["changed"] = NOW;
			$this->db->update($this->tb_social_network, $data, array("ids" => $check_item->ids));
			if ($status != 1 ) {
				$this->db->update($this->tb_services, ["status" => 0], ["cate_id" => $check_item->id]);
			}
		}
		
		ms(array(
			"status"  => "success",
			"message" => lang("Update_successfully")
		));
	}
	
	public function ajax_search(){
		$k = post("k");
		$categories = $this->model->get_category_lists_by_search($k);
		$data = array(
			"module"     => get_class($this),
			"columns"    => $this->columns,
			"categories" => $categories,
		);
		$this->load->view("ajax_search", $data);
	}
	
	public function ajax_delete_item($ids = ""){
		$this->model->delete($this->tb_social_network, $ids, false);
	}

	public function ajax_actions_option(){
		$type = post("type");
		$idss = post("ids");
		if ($type == '') {
			ms(array(
				"status"  => "error",
				"message" => lang('There_was_an_error_processing_your_request_Please_try_again_later')
			));
		}

		if (in_array($type, ['delete', 'deactive', 'active']) && empty($idss)) {
			ms(array(
				"status"  => "error",
				"message" => lang("please_choose_at_least_one_item")
			));
		}
		switch ($type) {
			case 'delete':
				foreach ($idss as $key => $ids) {
					/*----------  delete all related services  ----------*/
					$item = $this->model->get("id, ids", $this->tb_social_network, ['ids' => $ids]);
					if (!empty($item)) {
						$this->db->delete($this->tb_services, ["cate_id" => $item->id]);
					}
					$this->db->delete($this->tb_social_network, ['ids' => $ids]);
				}
				ms(array(
					"status"  => "success",
					"message" => lang("Deleted_successfully")
				));
				break;
			case 'deactive':
				foreach ($idss as $key => $ids) {
					/*----------  deactive all related services  ----------*/
					$item = $this->model->get("id, ids", $this->tb_social_network, ['ids' => $ids]);
					if (!empty($item)) {
						$this->db->update($this->tb_services, ['status' => 0], ["cate_id" => $item->id]);
					}

					$this->db->update($this->tb_social_network, ['status' => 0], ['ids' => $ids]);
				}
				ms(array(
					"status"  => "success",
					"message" => lang("Updated_successfully")
				));
				break;

			case 'active':
				foreach ($idss as $key => $ids) {
					/*----------  active all related services  ----------*/
					$item = $this->model->get("id, ids", $this->tb_social_network, ['ids' => $ids]);
					if (!empty($item)) {
						$this->db->update($this->tb_services, ['status' => 1], ["cate_id" => $item->id]);
					}

					$this->db->update($this->tb_social_network, ['status' => 1], ['ids' => $ids]);
				}
				ms(array(
					"status"  => "success",
					"message" => lang("Updated_successfully")
				));
				break;


			case 'all_deactive':
				$categories = $this->model->fetch("id, ids", $this->tb_social_network, ['status' => 0]);
				if (empty($categories)) {
					ms(array(
						"status"  => "error",
						"message" => lang("failed_to_delete_there_are_no_deactivate_category_now")
					));
				}

				/*----------  delete all related services  ----------*/
				foreach ($categories as $key => $row) {
					$item = $this->model->get("id, ids", $this->tb_social_network, ['ids' => $row->ids]);
					if (!empty($item)) {
						$this->db->delete($this->tb_services, ["cate_id" => $item->id, 'status' => 0]);
					}
				}

				$this->db->delete($this->tb_social_network, ['status' => 0]);
				ms(array(
					"status"  => "success",
					"message" => lang("Deleted_successfully")
				));

				break;
			
			default:
				ms(array(
					"status"  => "error",
					"message" => lang('There_was_an_error_processing_your_request_Please_try_again_later')
				));
				break;
		}

	}
}