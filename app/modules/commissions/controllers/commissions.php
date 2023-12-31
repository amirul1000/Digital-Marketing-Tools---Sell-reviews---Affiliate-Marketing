<?php
defined('BASEPATH') or exit('No direct script access allowed');

class commissions extends MX_Controller
{
    public $tb_users;
    public $tb_categories;
    public $tb_services;
    public $tb_transaction_logs;
    public $columns;

    public function __construct()
    {
        parent::__construct();
        $this->load->model(get_class($this) . '_model', 'model');
        //Config Module
        $this->tb_categories = CATEGORIES;
        $this->tb_services = SERVICES;
        $this->tb_transaction_logs = TRANSACTION_LOGS;
        $this->columns = [
            'id' => 'ID',
            'uid' => lang('Customer'),
			'Company' => lang('Company'),
            'order_id' => lang('order_id'),
            'Service' => lang('Service'),
			'Amount' => lang('Amount'),
            'Invoice' => lang('Invoice'),
            'payment' => lang('Payment_method'),
            'status' => lang('Statut'),
			'Payment' => lang('Payment Transaction ID'),
            'since' => lang('Since'),
        ];
    }

    public function index()
    {
        $page = (int) get('p');
        $page = $page > 0 ? $page - 1 : 0;
        $limit_per_page = get_option('default_limit_per_page', 10);
        $query = [];
        $query_string = '';
        if (!empty($query)) {
            $query_string = '?' . http_build_query($query);
        }
        $config = [
            'base_url' => cn(get_class($this) . $query_string),
            'total_rows' => $this->model->get_transaction_list(true),
            'per_page' => $limit_per_page,
            'use_page_numbers' => true,
            'prev_link' => '<i class="fe fe-chevron-left"></i>',
            'first_link' => '<i class="fe fe-chevrons-left"></i>',
            'next_link' => '<i class="fe fe-chevron-right"></i>',
            'last_link' => '<i class="fe fe-chevrons-right"></i>',
        ];
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        $transactions = $this->model->get_transaction_list(
            false,
            'all',
            $limit_per_page,
            $page * $limit_per_page
        );
        $data = [
            'module' => get_class($this),
            'columns' => $this->columns,
            'transactions' => $transactions,
            'pagination' => $pagination,
        ];

        $this->template->build('index', $data);
    }

    public function ajax_delete_item($ids = '')
    {
        $this->model->delete($this->tb_transaction_logs, $ids, false);
    }

    public function view($ids = '')
    {
        $order = $this->model->get('*', $this->tb_transaction_logs, [
            'ids' => $ids,
        ]);
        $data = [
            'module' => get_class($this),
            'order' => $order,
        ];
        $this->load->view('view', $data);
    }

    //Search
    public function search()
    {
        $k = get('query');
        $k = htmlspecialchars($k);
        $search_type = (int) get('search_type');
        $data_search = ['k' => $k, 'type' => $search_type];
        $page = (int) get('p');
        $page = $page > 0 ? $page - 1 : 0;
        $limit_per_page = get_option('default_limit_per_page', 10);
        $query = ['query' => $k, 'search_type' => $search_type];
        $query_string = '';
        if (!empty($query)) {
            $query_string = '?' . http_build_query($query);
        }
        $config = [
            'base_url' => cn(get_class($this) . '/search' . $query_string),
            'total_rows' => $this->model->get_count_items_by_search(
                $data_search
            ),
            'per_page' => $limit_per_page,
            'use_page_numbers' => true,
            'prev_link' => '<i class="fe fe-chevron-left"></i>',
            'first_link' => '<i class="fe fe-chevrons-left"></i>',
            'next_link' => '<i class="fe fe-chevron-right"></i>',
            'last_link' => '<i class="fe fe-chevrons-right"></i>',
        ];
        $this->pagination->initialize($config);
        $links = $this->pagination->create_links();
        $transactions = $this->model->search_items_by_get_method(
            $data_search,
            $limit_per_page,
            $page * $limit_per_page
        );
        $data = [
            'module' => get_class($this),
            'columns' => $this->columns,
            'transactions' => $transactions,
            'pagination' => $links,
        ];

        $this->template->build('invoices/index', $data);
    }
}
