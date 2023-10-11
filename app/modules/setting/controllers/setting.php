<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class setting extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(get_class($this).'_model', 'model');
		// call other models:
		$this->load->model('language/language_model','language_model');
		$this->load->model('payments/payments_model','payments_model');
		$this->tb_language_list       = LANGUAGE_LIST;
	}

	public function index($tab = ""){
		$path              = APPPATH.'./modules/setting/views/';
		$path_integrations = APPPATH.'./modules/setting/views/integrations/';
		$tabs = array_merge(get_name_of_files_in_dir($path, ['.php']), get_name_of_files_in_dir($path_integrations, ['.php']));
		unset($tabs[array_search('index', $tabs, true)]);
		
		if ($tab == "") {
			$tab = "website_setting";
		}

		if ($tab == 'ajax_general_settings') {
			$this->ajax_general_settings();
		}

		if (!in_array($tab, $tabs)) {
			redirect(cn('setting'));
		}

		$data = array(
			"module"          => get_class($this),
			"tab"             => $tab,
		);
		
		if ($tab == 'language') {
		    if (get_role('user') || get_role('supporter')) {
    			redirect(cn('dashboard'));
    		}
    	    $lancolumns = array(
    	        "date"      => lang("Date"),
    			"time"      => lang("Time"),
    			"name"      => lang("Name"),
    			"code"      => lang("Code"),
    			"icon"      => lang("Icon"),
    			"default"   => lang("Default"),
    			"status"    => lang("Status"),
    	    );
    	    $languages = $this->language_model->fetch("*", $this->tb_language_list);
    	    
    	    $data["languages"] = $languages;
    		$data["columns"]   = $lancolumns;
		}
		
		if ($tab == 'payments') {
		    if (get_role('user') || get_role('supporter')) {
    			redirect(cn('dashboard'));
    		}
    	    $paycolumns = array(
    	        "sort"             => 'Sort',
    			"method"           => lang("method"),
    			"name"             => lang("Name"),
    			"status"           => lang("Status"),
    	    );
    	    $payments = $this->payments_model->get_payment_lists();
    	    
    	    $data["payments"] = $payments;
    		$data["columns"]  = $paycolumns;
		}
		$this->template->build('index', $data);
	}

	private function ajax_general_settings(){
		$data = $this->input->post();
		$default_home_page = $this->input->post("default_home_page");

		if(is_array($data)){
			foreach ($data as $key => $value) {

				if(in_array($key, ['embed_head_javascript', 'embed_javascript', 'terms_content', 'policy_content', 'notification_popup_content'])){
					$value = htmlspecialchars(@$_POST[$key], ENT_QUOTES);
				}

				if ($key == 'coinpayments_acceptance') {
					$value = json_encode($value);
				}
				
				if ($key == 'freekassa_acceptance') {
					$value = json_encode($value);
				}
				
				update_option($key, $value);
			}
		}

		if($default_home_page != ""){
			$theme_file = fopen(APPPATH."../themes/config.json", "w");
			$txt = '{ "theme" : "'.$default_home_page.'" }';
			fwrite($theme_file, $txt);
			fclose($theme_file);
		}

		ms(array(
        	"status"  => "success",
        	"message" => lang('Update_successfully')
        ));
	}
	
}