<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resources_model extends MY_Model {
	public $tb_users;
	public $tb_categories;
	public $tb_services;
	public $tb_transaction_logs;
	public $tb_order;

	public function __construct(){
		$this->tb_users 		     = USERS;
		$this->tb_categories 		 = CATEGORIES;
		$this->tb_services   		 = SERVICES;
		$this->tb_transaction_logs   = TRANSACTION_LOGS;
		$this->tb_order              = ORDER;
		parent::__construct();
	}

	function get_transaction_list($total_rows = false, $status = "", $limit = "", $start = ""){
		$data  = array();

		if ($limit != "" && $start >= 0) {
			$this->db->limit($limit, $start);
		}
		$this->db->select("tl.*, u.email, u.first_name,u.last_name, u.civility");
		$this->db->from($this->tb_transaction_logs." tl");
		$this->db->join($this->tb_users." u", "u.id = tl.uid", 'left');
		$this->db->order_by("id", 'DESC');
		$query = $this->db->get();
		
		if ($total_rows) {
			$result = $query->num_rows();
			return $result;
		}else{
			$result = $query->result();
			return $result;
		}
		return false;
	}

	// Get Count of orders by Search query
	public function get_count_items_by_search($search = []){
		$k = trim($search['k']);
		$where_like = "";
		switch ($search['type']) {
			case 1:
				#User Email
				$where_like = "`u`.`email` LIKE '%".$k."%' ESCAPE '!'";
				break;
			case 2:
				# Transaction ID
				$where_like = "`tl`.`transaction_id` LIKE '%".$k."%' ESCAPE '!'";
				break;
		}

		$this->db->select("tl.*, u.email");
		$this->db->from($this->tb_transaction_logs." tl");
		$this->db->join($this->tb_users." u", "u.id = tl.uid", 'left');

		if ($where_like) $this->db->where($where_like);
		$this->db->order_by("tl.id", 'DESC');
		$query = $this->db->get();
		$number_row = $query->num_rows();
		return $number_row;
	}

	// Search Logs by keywork and search type
	public function search_items_by_get_method($search, $limit = "", $start = ""){
		$k = trim($search['k']);
		$where_like = "";
		switch ($search['type']) {
			case 1:
				#User Email
				$where_like = "`u`.`email` LIKE '%".$k."%' ESCAPE '!'";
				break;
			case 2:
				# Transaction ID
				$where_like = "`tl`.`transaction_id` LIKE '%".$k."%' ESCAPE '!'";
				break;
		}

		$this->db->select("tl.*, u.email");
		$this->db->from($this->tb_transaction_logs." tl");
		$this->db->join($this->tb_users." u", "u.id = tl.uid", 'left');

		if ($where_like) $this->db->where($where_like);
		
		$this->db->order_by("tl.id", 'DESC');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
}
