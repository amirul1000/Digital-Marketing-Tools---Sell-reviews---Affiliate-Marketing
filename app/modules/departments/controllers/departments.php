<?php
defined('BASEPATH') or exit('No direct script access allowed');

class departments extends MX_Controller
{
    public $tb_departments;
    public $tb_user_mail_logs;
    public $tb_categories;
    public $tb_transaction_logs;
    public $tb_services;
    public $columns;
    public $module_name;
    public $module_icon;

    public function __construct()
    {
        parent::__construct();

        $this->load->model(get_class($this) . '_model', 'model');
        //Config Module
        $this->tb_categories = CATEGORIES;
        $this->tb_services = SERVICES;
        $this->tb_departments = DEPARTMENTS;
        $this->tb_transaction_logs = TRANSACTION_LOGS;
        $this->tb_user_mail_logs = USER_MAIL_LOGS;
        $this->module_name = 'Departments';
        $this->module_icon = 'fa ft-dropdown-icon';

        $this->columns = [
            'id' => 'ID',
            'date' => lang('Date'),
            'time' => lang('Time'),
            'last_history_ip' => 'Department',
            'name' => lang('Modules'),
            'company' => lang('Users'),
            // 'address' => 'Address',
            // 'total_order' => lang('Total_Orders'),
            // 'total_spent' => lang('Total_Spent'),
            // 			"note"                           => lang('Note'),
            'status' => lang('Statut'),
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
            'total_rows' => $this->model->get_departments_list(true),
            'per_page' => $limit_per_page,
            'use_page_numbers' => true,
            'prev_link' => '<i class="fe fe-chevron-left"></i>',
            'first_link' => '<i class="fe fe-chevrons-left"></i>',
            'next_link' => '<i class="fe fe-chevron-right"></i>',
            'last_link' => '<i class="fe fe-chevrons-right"></i>',
        ];
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        $departments = $this->model->get_departments_list(
            false,
            'all',
            $limit_per_page,
            $page * $limit_per_page
        );
        $data = [
            'module' => get_class($this),
            'columns' => $this->columns,
            'departments' => $departments,
            'pagination' => $pagination,
        ];

        $this->template->build('index', $data);
    }

    public function update($ids = '')
    {
        $user = $this->model->get(
            '*',
            $this->tb_departments,
            "ids = '{$ids}' "
        );
        $data = [
            'module' => get_class($this),
            'user' => $user,
        ];
        $this->load->view('update', $data);
    }

    public function view($ids = '')
    {
        $user = $this->model->get(
            '*',
            $this->tb_departments,
            "ids = '{$ids}' "
        );
        $data = [
            'module' => get_class($this),
            'user' => $user,
        ];
        $this->load->view('view', $data);
    }

    public function mail($ids = '')
    {
        $user = $this->model->get(
            'ids, first_name, last_name, email',
            $this->tb_departments,
            "ids = '{$ids}' "
        );

        $data = [
            'module' => get_class($this),
            'user' => $user,
        ];
        $this->load->view('mail_to_user', $data);
    }

    public function ajax_update($ids = '')
    {
        $description = post('description');
        $civility = post('civility');
        $first_name = post('first_name');
        $last_name = post('last_name');
        $company = post('company');
        $phone = post('phone');
        $address = post('address');
        $address2 = post('address2');
        $postal_code = post('postal_code');
        $city = post('city');
        $country = post('country');
        $total_orders = post('total_orders');
        $total_spent = post('total_spent');

        $description = trim($description);
        $description = stripslashes($description);
        $description = htmlspecialchars($description, ENT_QUOTES);
        $data = [
            'description' => $description,
            'civility' => $civility,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'company' => $company,
            'phone' => $phone,
            'address' => $address,
            'address2' => $address2,
            'postal_code' => $postal_code,
            'city' => $city,
            'country' => $country,
            'total_orders' => $total_orders,
            'total_spent' => $total_spent,
        ];

        if ($ids != '') {
            $checkUser = $this->model->get(
                'id, ids, email',
                $this->tb_departments,
                "`ids` = '{$ids}'"
            );

            if (empty($checkUser)) {
                ms([
                    'status' => 'error',
                    'message' => lang(
                        'There_was_an_error_processing_your_request_Please_try_again_later'
                    ),
                ]);
            }
            if (
                $this->db->update(
                    $this->tb_departments,
                    $data,
                    "ids = '{$ids}'"
                )
            ) {
                ms([
                    'status' => 'success',
                    'message' => lang('Update_successfully'),
                ]);
            }
        }
    }

    public function ajax_send_email()
    {
        $user_email = post('email_to');
        $subject = post('subject');
        $email_content = post('email_content');

        if ($subject == '') {
            ms([
                'status' => 'error',
                'message' => lang('subject_is_required'),
            ]);
        }

        if ($email_content == '') {
            ms([
                'status' => 'error',
                'message' => lang('message_is_required'),
            ]);
        }

        $user = $this->model->get(
            'id, email',
            $this->tb_departments,
            "email = '{$user_email}'"
        );
        if (!empty($user)) {
            $subject = '{{website_name}}' . ' - ' . $subject;
            $template = [
                'subject' => $subject,
                'message' => $email_content,
                'type' => 'default',
            ];

            $check_email_issue = $this->model->send_mail_template(
                $template,
                $user->id
            );
            if ($check_email_issue) {
                ms([
                    'status' => 'error',
                    'message' => $check_email_issue,
                ]);
            }

            if ($this->db->table_exists($this->tb_user_mail_logs)) {
                $data = [
                    'ids' => ids(),
                    'uid' => session('uid'),
                    'received_uid' => $user->id,
                    'subject' => post('subject'),
                    'content' => htmlspecialchars(@$email_content, ENT_QUOTES),
                    'created' => NOW,
                    'changed' => NOW,
                ];
                $this->db->insert($this->tb_user_mail_logs, $data);
            }

            ms([
                'status' => 'success',
                'message' => lang(
                    'your_email_has_been_successfully_sent_to_user'
                ),
            ]);
        } else {
            ms([
                'status' => 'error',
                'message' => lang('the_account_does_not_exists'),
            ]);
        }
    }

    //Search box option
    public function search()
    {
        $k = get('query');
        $k = htmlspecialchars($k);
        $search_type = (int) get('search_type');
        $data_search = ['k' => $k, 'type' => $search_type];
        $page = (int) get('p');
        $page = $page > 0 ? $page - 1 : 0;
        $limit_per_page = get_option('default_limit_per_page', 10);
        $query = ['query' => $k];
        $query_string = '';
        if (!empty($query)) {
            $query_string = '?' . http_build_query($query);
        }
        $config = [
            'base_url' => cn(get_class($this) . '/search' . $query_string),
            'total_rows' => $this->model->get_count_departments_by_search(
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
        $departments = $this->model->search_logs_by_get_method(
            $data_search,
            $limit_per_page,
            $page * $limit_per_page
        );
        $data = [
            'module' => get_class($this),
            'columns' => $this->columns,
            'departments' => $departments,
            'pagination' => $links,
        ];

        $this->template->build('index', $data);
    }

    public function ajax_delete_item($ids = '')
    {
        $this->model->delete($this->tb_departments, $ids, false);
    }
}
