<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class affiliate extends MX_Controller {
	public $tb_users;
	public $tb_order;
	public $tb_categories;
	public $tb_services;
	public $module_name;
	public $module_icon;
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model(get_class($this).'_model', 'model');

		//Config Module
		$this->tb_users               = USERS;
		$this->tb_order               = ORDER;
		$this->tb_categories          = CATEGORIES;
		$this->tb_services            = SERVICES;
		$this->module_name            = 'Order';
		$this->module_icon            = "fa ft-users";
		//new
		$this->tb_user_logs   		= USER_LOGS;
		$this->tb_user_block_ip   	= USER_BLOCK_IP;
		//new
	}


	/**
	 *
	 * Form get client id
	 *
	 */
	public function index(){
		$k = get('query');
		$k = $email = htmlspecialchars(trim($k));
		$error = false;
		if ($email == "") {
			$error 		= true;
			$error_ms 	= lang('please_enter_a_valid_email_address');
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error 		= true;
			$error_ms 	= lang('please_enter_a_valid_email_address');
	    }
		
		if($error){
			$data = array(
				"module"   	=> get_class($this),
				"error"   	=> $error,
				"error_ms"  => $error_ms,
			);
			$this->template->set_layout('user');
			$this->template->build("index", $data);
		}else{
			$page        = (int)get("p");
			$page        = ($page > 0) ? ($page - 1) : 0;
			$limit_per_page = get_option("default_limit_per_page", 10);
			$query = array('query' => $k);
			$query_string = "";
			if(!empty($query)){
				$query_string = "?".http_build_query($query);
			}
			$config = array(
				'base_url'           => cn(get_class($this).'/orders/'.$query_string),
				'total_rows'         => $this->model->get_count_orders_per_client($email),
				'per_page'           => $limit_per_page,
				'use_page_numbers'   => true,
				'prev_link'          => '<i class="fe fe-chevron-left"></i>',
				'first_link'         => '<i class="fe fe-chevrons-left"></i>',
				'next_link'          => '<i class="fe fe-chevron-right"></i>',
				'last_link'          => '<i class="fe fe-chevrons-right"></i>',
			);
			$this->pagination->initialize($config);
			$links = $this->pagination->create_links();
			$orders = $this->model->get_client_orders_by($email, $limit_per_page, $page * $limit_per_page);
			$data = array(
				"module"     => get_class($this),
				"orders"     => $orders,
				"pagination" => $links,
			);
			$this->template->set_layout('user');
			$this->template->build('orders_log', $data);
		}

	}

	public function signin(){
		
		$data = array(
		   'lang_current' => get_lang_code_defaut(),
           'languages'    => $this->model->fetch('*', LANGUAGE_LIST,'status = 1'),
		);
		
		$this->template->set_layout('auth_new');
		$this->template->build("auth/signin", $data);
	}
	
	public function signup(){
		$data = array(
		    'lang_current' => get_lang_code_defaut(),
        	'languages'    => $this->model->fetch('*', LANGUAGE_LIST,'status = 1'),
		);
		$this->template->set_layout('auth_new');
		$this->template->build("auth/signup", $data);
	}
	
	public function forgotpassword(){
		$data = array(
		    'lang_current' => get_lang_code_defaut(),
        	'languages'    => $this->model->fetch('*', LANGUAGE_LIST,'status = 1'),
		);
		$this->template->set_layout('auth_new');
		$this->template->build("auth/forgotpassword", $data);
	}
	
	public function terms(){
		$data = array();
		$this->template->set_layout('user_new');
		$this->template->build("terms/index_new", $data);
	}
	
	public function privacy(){
		$data = array();
		$this->template->set_layout('user_new');
		$this->template->build("terms/privacy", $data);
	}
	
	public function acceptable_usage(){
		$data = array();
		$this->template->set_layout('user_new');
		$this->template->build("terms/acceptable_usage", $data);
	}
	
	public function refund(){
		$data = array();
		$this->template->set_layout('user_new');
		$this->template->build("terms/refund", $data);
	}

	public function faq(){
		$this->load->model('faqs/faqs_model', 'faqs_model');
		$faqs = $this->faqs_model->get_faqs();
		$data = array(
			"module"     => get_class($this),
			"faqs"       => $faqs,
		);
		$this->template->set_layout('user');
		$this->template->build("faq/index", $data);
	}
	
	
	//new
	public function ajax_sign_in(){
		$email    = get("email");
		$password = get("password");

		if($email == ""){
			ms(array(
				"status"  => "error",
				"message" => lang("email_is_required")
			));
		}

		if($password == ""){
			ms(array(
				"status"  => "error",
				"message" => lang("Password_is_required")
			));
		}
		

		$user = $this->model->get("id, status, ids, email, password, role, first_name, last_name, timezone", $this->tb_users, ['email' => $email]);
		$error = false;
		if (!$user) {
			$error = true;
		}else{
			
			if($user->role != 'affiliate'){
				ms(array(
					"status"  => "error",
					"message" => lang("You are not registered as  Affiliate")
				));
			}
			
			// check the first with old hash password method
			if ($user->password == md5(get("password"))) {
				// update new password_hash
				$this->db->update($this->tb_users, ['password' => $this->model->app_password_hash(get("password"))] , ['id' => $user->id]);
				$error = false;
			}else{
				// check the last hash password
				if ($this->model->app_password_verify(get("password"), $user->password)) {
					$error = false;
				}else{
					$error = true;
				}
			}
		}
		
		if(!$error){
			if($user->status != 1){
				ms(array(
					"status"  => "error",
					"message" => lang("your_account_has_not_been_activated")
				));
			}
			set_session("uid", $user->id);
			$data_session = array(
				'role'       => $user->role,
				'email'      => $user->email,
				'first_name' => $user->first_name,
				'last_name'  => $user->last_name,
				'timezone'   => $user->timezone,
			);
			set_session('user_current_info', $data_session);
			$this->model->history_ip($user->id);
			
			/*----------  Insert User logs  ----------*/
			$this->insert_user_activity_logs();

			ms(array(
				"status"  => "success",
				"message" => lang("Login_successfully")
			));
		}else{
			ms(array(
				"status"  => "error",
				"message" => lang("email_address_and_password_that_you_entered_doesnt_match_any_account_please_check_your_account_again")
			));
		}
}


  function ajax_sign_up(){
	    $fname    = get("fname");
		$lname = get("lname");
	    $email    = get("email");
		$phone = get("phone");
		$address    = get("address");
		$address2 = get("address2");
		$country    = get("country");
		$region = get("region");
		$password    = get("password");
		
		
		
		$where = "email='".$email."'";// AND password='".md5(get("password"))."'";
		$this->db->where($where);
		$result = $this->db->get('general_users')->result_array();
		$db_error = $this->db->error();
		
		if (! empty($db_error['code'])) {
		echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
		exit();
		}
		if(count((array)$result)>0){
			ms(array(
					"status"  => "error",
					"message" => 'User already exists'
				));
		}
		
		$params = array(
					'ids'=>rand(00000000,99999999999),
					'role'=>'affiliate',					
					'first_name'=>$fname,
					'last_name'=>$lname,
					'email'=>$email,
					'phone'=>$phone,
					'password'=>md5($password),		
					'address'=>$address,
					'address2'=>$address2,					
					'country'=>$country,					
					'created'=>date("Y-m-d H:i:s")
					);
					
		$this->db->insert('general_users', $params);
        $id = $this->db->insert_id();
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }			
		if($id>0){
			ms(array(
					"status"  => "success",
					"message" => 'You are registered successfully'
				));
		}	
  }

/*
 $this->db->order_by('id', 'desc');
        $result = $this->db->get('transfercredit')->result_array();
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
 $this->db->insert('transfercredit', $params);
        $id = $this->db->insert_id();
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $id;

   $this->db->where('id', $id);
        $status = $this->db->update('transfercredit', $params);
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $status;

$status = $this->db->delete('transfercredit', array(
            'id' => $id
        ));
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $status;
*/

	public function ajax_forgot_password(){
		$email = post("email");

		if($email == ""){
			ms(array(
				"status"  => "error",
				"message" => lang("email_is_required")
			));
		}

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		  	ms(array(
				"status"  => "error",
				"message" => lang("invalid_email_format")
			));
		}

		if (isset($_POST['g-recaptcha-response']) && get_option("enable_goolge_recapcha", '')  &&  get_option('google_capcha_site_key') != "" && get_option('google_capcha_secret_key') != "") {
			$resp = $this->recaptcha->setExpectedHostname($_SERVER['SERVER_NAME'])
                      ->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
            if (!$resp->isSuccess()) {
            	ms(array(
					'status'  => 'error',
					'message' => lang("please_verify_recaptcha"),
				));
            }
		}

		$user = $this->model->get("*", USERS, "email = '{$email}'");
		if(!empty($user)){
			$email_error = $this->model->send_email(get_option("email_password_recovery_subject", ""), get_option("email_password_recovery_content", ""), $user->id);

			if($email_error){
				ms(array(
					"status"  => "error",
					"message" => $email_error
				));
			}

			ms(array(
				"status"  => "success",
				"message" => lang("we_have_send_you_a_link_to_reset_password_and_get_back_into_your_account_please_check_your_email"),
			));
		}else{
			ms(array(
				"status" => "error",
				"message" => lang("the_account_does_not_exists")
			));
		}
	}

	public function ajax_reset_password($reset_key = ""){
		$user = $this->model->get("id, ids, email", $this->tb_users, "reset_key = '{$reset_key}'");
		$password           = post('password');
		$re_password        = post('re_password');

		if($password == '' || $re_password == ''){
			ms(array(
				'status'  => 'error',
				'message' => lang("please_fill_in_the_required_fields"),
			));
		}

		if($password != ''){
			if(strlen($password) < 6){
				ms(array(
					'status'  => 'error',
					'message' => lang("Password_must_be_at_least_6_characters_long"),
				));
			}

			if($re_password != $password){
				ms(array(
					'status'  => 'error',
					'message' => lang("Password_must_be_at_least_6_characters_long"),
				));
			}
		}

		if (!empty($user)) {
			$data = array(
				"password"  => $this->model->app_password_hash($password),
				"reset_key" => ids(),
				"changed"	=> NOW,
			);

			$this->db->update($this->tb_users, $data, "id = '".$user->id."'");
			if ($this->db->affected_rows() > 0) {
				ms(array(
					"status"   => "success",
					"message"  => lang("your_password_has_been_successfully_changed"),
				));
			}else{
				ms(array(
					"status"  => "Failed",
					"message" => lang("There_was_an_error_processing_your_request_Please_try_again_later")
				));
			}
		}else{
			ms(array(
				"status"  => "error",
				"message" => lang("There_was_an_error_processing_your_request_Please_try_again_later")
			));
		}
	}

	private function insert_user_activity_logs($type = ''){
		if (!$this->db->table_exists($this->tb_user_logs)) {
			return false;
		}
		if (session('uid')) {
			$ip_address = get_client_ip();
			$data_user_logs = array(
				"ids"		=> ids(),
				"uid"		=> session('uid'),
				"ip"		=> $ip_address,
				"type"		=> ($type == 'logout') ? 0 : 1,
				"created"   => NOW,
			);
			$location = get_location_info_by_ip($ip_address);
			if ($location->country != 'Unknown' && $location->country != '') {
				$data_user_logs['country'] = $location->country;
			}else{
				$data_user_logs['country'] = 'Unknown';
			}
			$this->db->insert($this->tb_user_logs, $data_user_logs);
		}
	}

	private function is_banned_ip_address(){
		if (!$this->db->table_exists($this->tb_user_block_ip)) {
			return false;
		}
		$ip_address = get_client_ip();
		$check_item = $this->model->get('ip', $this->tb_user_block_ip, ["ip" => $ip_address]);
		if (!empty($check_item)) {
			return true;
		}
		return false;
	}
	
	
	
	//new
	
	
	
}