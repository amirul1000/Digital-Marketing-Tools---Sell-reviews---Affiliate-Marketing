<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class cms extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(get_class($this).'_model', 'model');
	}

	public function index($tab = ""){
		$path              = APPPATH.'./modules/cms/views/';
		$path_integrations = APPPATH.'./modules/cms/views/integrations/';
		$tabs = array_merge(get_name_of_files_in_dir($path, ['.php']), get_name_of_files_in_dir($path_integrations, ['.php']));
		unset($tabs[array_search('index', $tabs, true)]);
		
		if ($tab == "") {
			$tab = "terms_policy";
		}

		if ($tab == 'ajax_general_settings') {
			$this->ajax_general_settings();
		}

		if (!in_array($tab, $tabs)) {
			redirect(cn('cms'));
		}

		$data = array(
			"module"          => get_class($this),
			"tab"             => $tab,
		);
		
		$this->template->build('index', $data);
	}
	
	public function terms_policy() {
	    $data = array(
			"module"          => get_class($this),
			"tab"             => 'terms_policy',
		);
		$this->template->build('index', $data);
	}
	
	public function faqs() {
		$this->load->model('faqs/faqs_model','faqs_model');
	    $faqs = $this->faqs_model->get_faqs();
	    $columns = array(
			"sort"       => 'Sort',
			"date"       => 'Date',
			"time"       => 'Time',
			"question"   => 'Section Name',
			"answer"     => 'Description',
			"status"     => 'Status',
		);
		
	    $data = array(
			"module"          => get_class($this),
			"tab"             => 'faqs',
			"faqs"            => $faqs,
			"columns"         => $columns,
		);
		$this->template->build('index', $data);
	}
	
	public function home_page() {
	    $data = array(
			"module"          => get_class($this),
			"tab"             => 'home_page',
		);
		$this->template->build('index', $data);
	}
	
	public function blogs() {
		$this->load->model('blogs/blogs_model','blogs_model');
	    $blogs = $this->blogs_model->get_blogs_list();
	    $columns = array(
			"sort"                           => lang('Sort'),
			"date"                           => lang("Date"),
			"time"                           => lang("Time"),
			"category"                       => lang('Category'),
			"title"                          => lang('Title'),
			"image_thumbnail"                => lang('Image_thumbnail'),
			"status"                         => lang('Status'),
		);
		
	    $data = array(
			"module"          => get_class($this),
			"tab"             => 'blogs',
			"blogs"           => $blogs,
			"columns"         => $columns,
		);
		$this->template->build('index', $data);
	}
	
	public function categorys() {
		$this->load->model('category/category_model','category_model');
	    $categorys = $this->category_model->get_category_lists_by_cms();
	    $columns = array(
			"sort"                           => lang('Sort'),
			"date"                           => lang("Date"),
			"time"                           => lang("Time"),
			"category"                       => lang('Category'),
			"title"                          => lang('Title'),
			"image_thumbnail"                => lang('Image_thumbnail'),
			"status"                         => lang('Statut'),
		);
		
	    $data = array(
			"module"          => get_class($this),
			"tab"             => 'categorys',
			"categorys"       => $categorys,
			"columns"         => $columns,
		);
		$this->template->build('index', $data);
	}

	public function ajax_general_settings(){
		$data = $this->input->post();
		$default_home_page = $this->input->post("default_home_page");

		if(is_array($data)){
			foreach ($data as $key => $value) {

				if(in_array($key, ['embed_head_javascript', 'embed_javascript', 'terms_content', 'policy_content', 'cookies_content', 'refund_content', 'notification_popup_content'])){
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
	
	public function ajax_cms_home_settings(){
		$data = $this->input->post();
		
// 		print_r(json_encode($data['home_buyus'], JSON_PARTIAL_OUTPUT_ON_ERROR));
// 		print_r($data['home_buyus']);
// 		die();
        
		if (is_array($data)) {
			foreach ($data as $key => $value) {

				if ($key == 'home_buyus' || $key == 'home_testimonials' || $key == 'home_faqs') {
					$value = json_encode($value);
				}
				
				if (in_array($key, ['home_description', 'home_howitworks'])) {
					$value = htmlspecialchars(@$_POST[$key], ENT_QUOTES);
				}
				
				update_option($key, $value);
			}
		}

		ms(array(
        	"status"  => "success",
        	"message" => lang('Update_successfully')
        ));
	}
	
}