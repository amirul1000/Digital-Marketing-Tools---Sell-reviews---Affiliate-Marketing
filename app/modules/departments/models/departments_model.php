<?php
defined('BASEPATH') or exit('No direct script access allowed');

class departments_model extends MY_Model
{
    public $tb_departments;
    public $tb_categories;
    public $tb_services;

    public function __construct()
    {
        $this->tb_categories = CATEGORIES;
        $this->tb_services = SERVICES;
        $this->tb_departments = DEPARTMENTS;
        parent::__construct();
    }

    function get_departments_list(
        $total_rows = false,
        $status = '',
        $limit = '',
        $start = ''
    ) {
        $data = [];
        if ($limit != '' && $start >= 0) {
            $this->db->limit($limit, $start);
        }
        $this->db->select('*');
        $this->db->from($this->tb_departments);
        $this->db->where('role !=', 'admin');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();

        if ($total_rows) {
            $result = $query->num_rows();
            return $result;
        } else {
            $result = $query->result();
            return $result;
        }
        return false;
    }

    function get_departments_by_search($k)
    {
        $k = trim(htmlspecialchars($k));
        $this->db->select('*');
        $this->db->from($this->tb_departments);
        if ($k != '' && strlen($k) >= 2) {
            $this->db->where(
                "(`history_ip` LIKE '%" .
                    $k .
                    "%' ESCAPE '!' OR `description` LIKE '%" .
                    $k .
                    "%' ESCAPE '!' OR `email` LIKE '%" .
                    $k .
                    "%' ESCAPE '!')"
            );
        }
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    // Get Count of orders by Search query
    public function get_count_departments_by_search($search = [])
    {
        $k = trim($search['k']);

        $where_like =
            "(`email` LIKE '%" .
            $k .
            "%' ESCAPE '!' OR `history_ip` LIKE '%" .
            $k .
            "%' ESCAPE '!')";

        $this->db->select('*');
        $this->db->from($this->tb_departments);
        if ($where_like) {
            $this->db->where($where_like);
        }
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $number_row = $query->num_rows();
        return $number_row;
    }

    // Search Logs by keywork and search type
    public function search_logs_by_get_method($search, $limit = '', $start = '')
    {
        $k = trim($search['k']);
        $where_like =
            "(`email` LIKE '%" .
            $k .
            "%' ESCAPE '!' OR `history_ip` LIKE '%" .
            $k .
            "%' ESCAPE '!')";

        $this->db->select('*');
        $this->db->from($this->tb_departments);
        if ($where_like) {
            $this->db->where($where_like);
        }
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}
