<?php
if (!function_exists('time_elapsed_string')) {
    function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime();
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->weeks = intval($diff->days / 7);
        $diff->days -= $diff->weeks * 7;
        $diff->hours = intval($diff->minutes / 60);
        $diff->minutes -= $diff->hours * 60;

        $string = [
            'y' => 'Year',
            'm' => 'Month',
            'w' => 'Week',
            'd' => 'Day',
            'h' => 'Hour',
            'i' => 'Minute',
        ];
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) {
            $string = array_slice($string, 0, 1);
        }
        return implode(' ', $string) . ' ago';
    }
}

if (!function_exists('get_ip_location')) {
    function get_ip_location($ip)
    {
        $query = @unserialize(
            file_get_contents('http://ip-api.com/php/' . $ip)
        );
        if ($query && $query['status'] == 'success') {
            return $query['city'] .
                ', ' .
                $query['country'] .
                '<img src="https://ipdata.co/flags/' .
                strtolower(
                    $query['countryCode'] .
                        '.png" alt="Flag" width="' .
                        $width .
                        'px">'
                );
        } else {
            return '';
        }
    }
}

if (!function_exists('get_ip_flag')) {
    function get_ip_flag($ip, $width = '20')
    {
        $query = @unserialize(
            file_get_contents('http://ip-api.com/php/' . $ip)
        );
        if ($query && $query['status'] == 'success') {
            return '<img src="https://ipdata.co/flags/' .
                strtolower(
                    $query['countryCode'] .
                        '.png" alt="Flag" width="' .
                        $width .
                        'px">'
                );
        } else {
            return '';
        }
    }
}

if (!function_exists('get_format_id')) {
    function get_format_id($date, $id)
    {
        return date('dmY', strtotime($date)) .
            str_pad($id, 5, '0', STR_PAD_LEFT);
    }
}

if (!function_exists('post_get')) {
    function post_get($name = '')
    {
        $CI = &get_instance();
        if ($name != '') {
            return $CI->input->post_get(trim($name));
        } else {
            return $CI->input->post_get();
        }
    }
}

if (!function_exists('post')) {
    function post($name = '')
    {
        $CI = &get_instance();
        if ($name != '') {
            $post = $CI->input->post(trim($name));
            if (is_string($post)) {
                $result = addslashes($CI->input->post(trim($name)));
                $result = strip_tags($result);
            } else {
                $result = $post;
            }
            return $result;
        } else {
            return $CI->input->post();
        }
    }
}

if (!function_exists('get')) {
    function get($name = '')
    {
        $CI = &get_instance();
        $result = $CI->input->get(trim($name));
        $result = strip_tags($result);
        $result = html_entity_decode($result);
        $result = urldecode($result);
        $result = addslashes($result);
        return $result;
    }
}

if (!function_exists('get_value')) {
    function get_value($data, $key, $parseArray = false, $return = false)
    {
        if (is_string($data)) {
            $data = json_decode($data);
        }

        if (is_object($data)) {
            if (isset($data->$key)) {
                if ($parseArray) {
                    return (array) $data->$key;
                } else {
                    return $data->$key;
                }
            }
        } elseif (is_array($data)) {
            if (isset($data[$key])) {
                return $data[$key];
            }
        } else {
            return $data;
        }

        return $return;
    }
}

if (!function_exists('get_secure')) {
    function get_secure($name = '')
    {
        $CI = &get_instance();
        return filter_input_xss($CI->input->get(trim($name)));
    }
}

if (!function_exists('remove_empty_value')) {
    function remove_empty_value($data)
    {
        if (!empty($data)) {
            return array_filter($data, function ($value) {
                return $value !== null && $value !== false && $value !== '';
            });
        } else {
            return false;
        }
    }
}

if (!function_exists('get_random_value')) {
    function get_random_value($data)
    {
        if (is_array($data) && !empty($data)) {
            $index = array_rand($data);
            return $data[$index];
        } else {
            return false;
        }
    }
}

if (!function_exists('get_random_values')) {
    function get_random_values($data, $limit)
    {
        if (is_array($data) && !empty($data)) {
            shuffle($data);
            if (count($data) < $limit) {
                $limit = count($data);
            }

            return array_slice($data, 0, $limit);
        } else {
            return false;
        }
    }
}

if (!function_exists('specialchar_decode')) {
    function specialchar_decode($input)
    {
        $input = str_replace("\\'", "'", $input);
        $input = str_replace('\"', '"', $input);
        $input = htmlspecialchars_decode($input, ENT_QUOTES);
        return $input;
    }
}

if (!function_exists('filter_input_xss')) {
    function filter_input_xss($input)
    {
        $input = htmlspecialchars($input, ENT_QUOTES);
        return $input;
    }
}

if (!function_exists('ms')) {
    function ms($array)
    {
        print_r(json_encode($array));
        exit(0);
    }
}

if (!function_exists('get_json_content')) {
    function get_json_content($path, $data = [])
    {
        if ($data) {
            $arrContextOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ];
            return json_decode(
                file_get_contents(
                    $path . '?' . http_build_query($data),
                    false,
                    stream_context_create($arrContextOptions)
                )
            );
        } else {
            if (file_exists($path)) {
                return json_decode(file_get_contents($path));
            } else {
                return false;
            }
        }
    }
}

if (!function_exists('file_get_contents_ssl')) {
    function file_get_contents_ssl($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3000); // 3 sec.
        curl_setopt($ch, CURLOPT_TIMEOUT, 10000); // 10 sec.
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}

if (!function_exists('ids')) {
    function ids()
    {
        $CI = &get_instance();
        return md5($CI->encryption->encrypt(time()));
    }
}

if (!function_exists('session')) {
    function session($input)
    {
        $CI = &get_instance();

        if ($input == 'uid' && session('uid_tmp')) {
            return session('uid_tmp');
        }

        return $CI->session->userdata($input);
    }
}

if (!function_exists('set_session')) {
    function set_session($name, $input)
    {
        $CI = &get_instance();
        return $CI->session->set_userdata($name, $input);
    }
}

if (!function_exists('unset_session')) {
    function unset_session($name)
    {
        $CI = &get_instance();
        return $CI->session->unset_userdata($name);
    }
}

if (!function_exists('encrypt_encode')) {
    function encrypt_encode($text)
    {
        $CI = &get_instance();
        return $CI->encryption->encrypt($text);
    }
}

if (!function_exists('encrypt_decode')) {
    function encrypt_decode($key)
    {
        $CI = &get_instance();
        return $CI->encryption->decrypt($key);
    }
}

if (!function_exists('segment')) {
    function segment($index)
    {
        $CI = &get_instance();
        return $CI->uri->segment($index);
    }
}

if (!function_exists('ini_params')) {
    function ini_params($type)
    {
        switch ($type) {
            case '1':
                return [
                    'type' => base64_decode('aW5zdGFsbA=='),
                    'main' => 1,
                    base64_decode('ZG9tYWlu') => urlencode(base_url()),
                ];
                break;
            case '2':
                return [
                    'type' => 'upgrade',
                    base64_decode('ZG9tYWlu') => urlencode(base_url()),
                ];
                break;
            case '3':
                return [
                    'type' => base64_decode('aW5zdGFsbA=='),
                    'main' => 0,
                    base64_decode('ZG9tYWlu') => urlencode(base_url()),
                ];
                break;
        }
    }
}

function __curl($url, $zipPath = '')
{
    $zipResource = fopen($zipPath, 'w');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FILE, $zipResource);
    $page = curl_exec($ch);
    if (!$page) {
        ms([
            'status' => 'error',
            'message' => 'Error :- ' . curl_error($ch),
        ]);
    }
    curl_close($ch);
}

if (!function_exists('__inst')) {
    function _inst($result)
    {
        if (empty($result)) {
            ms([
                'status' => 'error',
                'message' =>
                    'There was an error processing your request. Please contact author to get a support',
            ]);
        }
        if (isset($result->status) && $result->status == 'error') {
            ms([
                'status' => 'error',
                'message' => $result->message,
            ]);
        }
        if (isset($result->status) && ($result->status = 'success')) {
            $result_object = explode('{|}', $result->response);
            $file_path = 'files.zip';
            __curl(base64_decode($result_object[2]), $file_path);
            if (filesize($file_path) <= 1) {
                ms([
                    'status' => 'error',
                    'message' =>
                        'There was an error processing your request. Please contact author to get a support',
                ]);
            }
            $zip = new ZipArchive();
            if ($zip->open($file_path) != true) {
                ms([
                    'status' => 'error',
                    'message' => 'Error :- Unable to open the Zip File',
                ]);
            }
            $zip->extractTo('./');
            $zip->close();
            @unlink($file_path);
            return $result_object;
        }
    }
}

function extract_zip_file($output_filename)
{
    $zip = new ZipArchive();
    $extractPath = $output_filename;
    if ($zip->open($zipFile) != 'true') {
        ms([
            'status' => 'error',
            'message' => 'Error :- Unable to open the Zip File',
        ]);
    }
    $zip->extractTo($extractPath);
    $zip->close();
}

if (!function_exists('cn')) {
    function cn($module = '')
    {
        return PATH . $module;
    }
}

if (!function_exists('load_404')) {
    function load_404()
    {
        $CI = &get_instance();
        return $CI->load->view('layouts/404.php');
    }
}

if (!function_exists('time_elapsed_string')) {
    function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime();
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = [
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        ];
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . lang($v . ($diff->$k > 1 ? 's' : ''));
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) {
            $string = array_slice($string, 0, 1);
        }
        return $string
            ? implode(', ', $string) . ' ' . lang('ago')
            : lang('just_now');
    }
}

if (!function_exists('ajax_page')) {
    function ajax_page()
    {
        $CI = &get_instance();
        if (!post()) {
            $CI = &get_instance();
            $CI->load->view('layouts/404.php');
            return false;
        } else {
            return true;
        }
    }
}

if (!function_exists('require_all')) {
    function require_all($dir = '', $depth = 0)
    {
        if ($dir == '') {
            $segment = segment(1);
            $dir = APPPATH . '../public/' . $segment . '/config/constants/';
        }

        // require all php files
        $scan = glob("$dir/*");
        foreach ($scan as $path) {
            if (preg_match('/\.php$/', $path)) {
                require_once $path;
            } elseif (is_dir($path)) {
                require_all($path, $depth + 1);
            }
        }
    }
}

if (!function_exists('get_all_file_from_folder')) {
    function get_all_file_from_folder($dir = '')
    {
        $data = [];
        if ($dir == '') {
            $segment = segment(1);
            $dir = APPPATH . '../public/' . $segment . '/config/constants/';
        }

        // require all php files
        $scan = glob("$dir/*");
        foreach ($scan as $path) {
            if (preg_match('/\.php$/', $path)) {
                $data[] = $path;
            }
        }

        return $data;
    }
}

if (!function_exists('get_path_module')) {
    function get_path_module()
    {
        $CI = &get_instance();
        return APPPATH . 'modules/' . $CI->router->fetch_module() . '/';
    }
}

if (!function_exists('folder_size')) {
    function folder_size($dir)
    {
        $size = 0;
        foreach (glob(rtrim($dir, '/') . '/*', GLOB_NOSORT) as $each) {
            $size += is_file($each) ? filesize($each) : folderSize($each);
        }
        return $size;
    }
}

if (!function_exists('pr')) {
    function pr($data, $type = 0)
    {
        print '<pre>';
        print_r($data);
        print '</pre>';
        if ($type != 0) {
            exit();
        }
    }
}

if (!function_exists('pr_sql')) {
    function pr_sql($type = 0)
    {
        $CI = &get_instance();
        $sql = $CI->db->last_query();
        pr($sql, $type);
    }
}

if (!function_exists('export_csv')) {
    function export_csv($table_name)
    {
        $CI = &get_instance();
        $CI->load->dbutil();
        $CI->load->helper('file');
        $CI->load->helper('download');
        $delimiter = ',';
        $newline = "\r\n";
        $query = $CI->db->query('SELECT * FROM ' . $table_name);
        $filename = $table_name . date('-d-m-Y', strtotime(NOW)) . '.csv';
        $data = $CI->dbutil->csv_from_result($query, $delimiter, $newline);
        force_download($filename, "\xEF\xBB\xBF" . $data);
    }
}

if (!function_exists('convert_datetime')) {
    function convert_datetime($datetime)
    {
        return date('h:iA M d, Y', strtotime($datetime));
    }
}

if (!function_exists('convert_date')) {
    function convert_date($date)
    {
        return date('M d, Y', strtotime($date));
    }
}

if (!function_exists('convert_datetime_sql')) {
    function convert_datetime_sql($datetime)
    {
        return date('Y-m-d H:i:s', get_to_time($datetime));
    }
}

if (!function_exists('convert_date_sql')) {
    function convert_date_sql($date)
    {
        return date('Y-m-d', get_to_time($date));
    }
}

if (!function_exists('validateDate')) {
    function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}

if (!function_exists('get_to_time')) {
    function get_to_time($date)
    {
        if (is_numeric($date)) {
            return $date;
        } else {
            return strtotime(str_replace('/', '-', $date));
        }
    }
}

if (!function_exists('get_to_day')) {
    function get_to_day($date, $fulltime = true)
    {
        $strtime = strtotime(str_replace('/', '-', $date));
        if ($fulltime) {
            return date('Y-m-d H:i:s', $strtime);
        } else {
            return date('Y-m-d', $strtime);
        }
    }
}

if (!function_exists('row')) {
    function row($data, $field)
    {
        if (is_object($data)) {
            if (isset($data->$field)) {
                return $data->$field;
            } else {
                return '';
            }
        }

        if (is_array($data)) {
            if (isset($data[$field])) {
                return $data[$field];
            } else {
                return '';
            }
        }
    }
}

if (!function_exists('tz_convert')) {
    function tz_convert($timezone)
    {
        date_default_timezone_set($timezone);
        $zones_array = [];
        $timestamp = time();
        foreach (timezone_identifiers_list() as $key => $zone) {
            if ($zone == $timezone) {
                return date('P', $timestamp);
            }
        }

        return false;
    }
}

if (!function_exists('get_line_with_string')) {
    function get_line_with_string($fileName, $str)
    {
        if (is_file($fileName)) {
            $lines = file($fileName);
            foreach ($lines as $lineNumber => $line) {
                if (strpos($line, $str) !== false) {
                    return trim(
                        str_replace('/*', '', str_replace('*/', '', $line))
                    );
                }
            }
        } else {
            $lines = $fileName;
        }

        return false;
    }
}

if (!function_exists('get_timezone_user')) {
    function get_timezone_user($datetime, $convert = false, $uid = 0)
    {
        $datetime = get_to_time($datetime);
        $datetime = is_numeric($datetime)
            ? date('Y-m-d H:i:s', $datetime)
            : $datetime;

        $uid = session('uid') ? session('uid') : $uid;
        $CI = &get_instance();

        if (empty($CI->help_model)) {
            $CI->load->model('model', 'help_model');
        }

        $user = $CI->help_model->get('timezone', USERS, "id = '" . $uid . "'");
        if (!empty($user)) {
            $date = new DateTime($datetime, new DateTimeZone(TIMEZONE));
            $date->setTimezone(new DateTimeZone($user->timezone));
            $result = $date->format('Y-m-d H:i:s');
            return $convert ? convert_datetime($result) : $result;
        } else {
            return $convert ? convert_datetime($datetime) : $result;
        }
    }
}

if (!function_exists('get_timezone_system')) {
    function get_timezone_system($datetime, $convert = false, $uid = 0)
    {
        $datetime = get_to_time($datetime);
        $datetime = is_numeric($datetime)
            ? date('Y-m-d H:i:s', $datetime)
            : $datetime;

        $uid = session('uid') ? session('uid') : $uid;
        $CI = &get_instance();

        if (empty($CI->help_model)) {
            $CI->load->model('model', 'help_model');
        }

        $user = $CI->help_model->get('timezone', USERS, "id = '" . $uid . "'");
        if (!empty($user)) {
            $date = new DateTime($datetime, new DateTimeZone($user->timezone));
            $date->setTimezone(new DateTimeZone(TIMEZONE));
            $result = $date->format('Y-m-d H:i:s');
            return $convert ? convert_datetime($result) : $result;
        } else {
            return $convert ? convert_datetime($datetime) : $result;
        }
    }
}

if (!function_exists('delete_option')) {
    function delete_option($key)
    {
        $CI = &get_instance();
        $CI->db->delete(OPTIONS, ['name' => $key]);
    }
}

if (!function_exists('get_payment')) {
    function get_payment()
    {
        if (is_dir(APPPATH . 'modules/payment')) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('get_client_ip')) {
    function get_client_ip()
    {
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');

            if (strstr($ip, ',')) {
                $tmp = explode(',', $ip);
                $ip = trim($tmp[0]);
            }
        } else {
            $ip = getenv('REMOTE_ADDR');
        }

        return $ip;
    }
}

function get_location_info_by_ip($ip_address)
{
    $result = (object) [];
    $ip_data = @json_decode(
        file_get_contents('http://www.geoplugin.net/json.gp?ip=' . $ip_address)
    );
    if ($ip_data && $ip_data->geoplugin_countryName != null) {
        $result->country = $ip_data->geoplugin_countryName;
        $result->timezone = $ip_data->geoplugin_timezone;
        $result->city = $ip_data->geoplugin_city;
    } else {
        $result->country = 'Unknown';
        $result->timezone = 'Unknown';
        $result->city = 'Unknown';
    }
    return $result;
}

if (!function_exists('get_curl')) {
    function get_curl($url)
    {
        $user_agent =
            'Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420.1 (KHTML, like Gecko) Version/3.0 Mobile/3B48b Safari/419.3';

        $headers = [
            'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: en-US,fr;q=0.8;q=0.6,en;q=0.4,ar;q=0.2',
            'Accept-Encoding: gzip,deflate',
            'Accept-Charset: utf-8;q=0.7,*;q=0.7',
            'cookie:datr=; locale=en_US; sb=; pl=n; lu=gA; c_user=; xs=; act=; presence=',
        ];

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_REFERER, base_url());

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}

if (!function_exists('get_js')) {
    function get_js($js_files = [])
    {
        $core = APPPATH . '../assets/js/core.js';

        if (!file_exists($core)) {
            $minifier = new MatthiasMullie\Minify\JS();
            foreach ($js_files as $file) {
                $minifier->add(APPPATH . '../' . $file);
            }

            $minifier->minify($core);
            $minifier->add($core);
        } else {
            $mod_date = date('F d Y H:i:s.', filemtime($core));
            $date = strtotime(date('Y-m-d', strtotime(NOW)));
            $mod_date = strtotime(date('Y-m-d', strtotime($mod_date)));

            if ($mod_date < $date) {
                $minifier = new MatthiasMullie\Minify\JS();
                foreach ($js_files as $file) {
                    $minifier->add(APPPATH . '../' . $file);
                }

                $minifier->minify($core);
                $minifier->add($core);
            }
        }
        echo BASE . 'assets/js/core.js';
    }
}

if (!function_exists('get_css')) {
    function get_css($css_files = [])
    {
        $core = APPPATH . '../assets/css/core.css';

        if (!file_exists($core)) {
            $minifier = new MatthiasMullie\Minify\CSS();
            foreach ($css_files as $file) {
                $minifier->add(APPPATH . '../' . $file);
            }
            $minifier->minify($core);
            $minifier->add($core);
        } else {
            $mod_date = date('F d Y H:i:s.', filemtime($core));
            $date = strtotime(date('Y-m-d', strtotime(NOW)));
            $mod_date = strtotime(date('Y-m-d', strtotime($mod_date)));

            if ($mod_date < $date) {
                $minifier = new MatthiasMullie\Minify\CSS();
                foreach ($css_files as $file) {
                    $minifier->add(APPPATH . '../' . $file);
                }

                $minifier->minify($core);
                $minifier->add($core);
            }
        }
        echo BASE . 'assets/css/core.css';
    }
}

class Spintax
{
    public function process($text)
    {
        $text = specialchar_decode($text);
        return preg_replace_callback(
            '/\{(((?>[^\{\}]+)|(?R))*)\}/x',
            [$this, 'replace'],
            $text
        );
    }

    public function replace($text)
    {
        $text = $this->process($text[1]);
        $parts = explode('|', $text);
        return $parts[array_rand($parts)];
    }
}

/*=================================================
=            edit and add new function            =
=================================================*/

if (!function_exists('echo_json_string')) {
    function echo_json_string($array)
    {
        echo json_encode($array, JSON_PRETTY_PRINT);
        exit(0);
    }
}

if (!function_exists('create_random_api_key')) {
    function create_random_string_key($length = '')
    {
        if ($length == '') {
            $length = 32;
        }
        $characters =
            '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if (!function_exists('get_current_user_data')) {
    function get_current_user_data($id = '')
    {
        if ($id == '') {
            $id = session('uid');
        }
        $CI = &get_instance();
        if (empty($CI->help_model)) {
            $CI->load->model('model', 'help_model');
        }
        $user = $CI->help_model->get('*', USERS, "id = '{$id}'");
        if (!empty($user)) {
            return $user;
        } else {
            return false;
        }
    }
}

if (!function_exists('get_role')) {
    function get_role($role_type = '', $id = '')
    {
        if (
            isset($_SESSION['user_current_info']['role']) &&
            $_SESSION['user_current_info']['role'] != ''
        ) {
            $role = $_SESSION['user_current_info']['role'];
        } else {
            $user = get_current_user_data($id);
            if (!empty($user)) {
                $data_session = [
                    'role' => $user->role,
                    'email' => $user->email,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'timezone' => $user->timezone,
                ];
                set_session('user_current_info', $data_session);
                $role = $user->role;
            } else {
                return false;
            }
        }

        if ($role != '' && $role == $role_type) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('get_controller_role')) {
    function get_controller_role()
    {
        if (!get_role()) {
            redirect(cn());
        }
    }
}

if (!function_exists('table_column')) {
    function table_column($data, $table_column_name)
    {
        if (is_object($data) && property_exists($data, $table_column_name)) {
            $value = $data->$table_column_name;
            switch ($table_column_name) {
                case 'api_order_id':
                    $value = $value == 0 || $value == -1 ? '' : $value;
                    break;

                case 'api_service_id':
                    $value =
                        !empty($value) && $value > 0
                            ? lang('API')
                            : lang('Manual');
                    break;

                case 'link':
                    $value =
                        '<a href="' .
                        $value .
                        '" target="_blank">' .
                        $value .
                        '</a>';
                    break;

                case 'created':
                    $value = convert_timezone($value, 'user');
                    break;

                case 'charge':
                    $value = currency_format($value, 4);
                    break;

                case 'service_id':
                    $value = get_field(
                        SERVICES,
                        ['id' => $data->service_id],
                        'name'
                    );
                    break;

                case 'uid':
                    $value = get_field(USERS, ['id' => $data->uid], 'email');
                    break;

                default:
                    # code...
                    break;
            }
            return $value;
        }
    }
}

if (!function_exists('get_field')) {
    function get_field($table, $where = [], $field)
    {
        $CI = &get_instance();

        if (empty($CI->help_model)) {
            $CI->load->model('model', 'help_model');
        }
        $item = $CI->help_model->get('*', $table, $where);

        if (!empty($item) && isset($item->$field)) {
            return $item->$field;
        } else {
            return false;
        }
    }
}

if (!function_exists('order_status_array')) {
    function order_status_array()
    {
        $data = [
            'awaiting',
            'pending',
            'processing',
            'inprogress',
            'completed',
            'partial',
            'canceled',
            'error',
            'refunded',
        ];
        return $data;
    }
}

if (!function_exists('order_subscriptions_status_array')) {
    function order_subscriptions_status_array()
    {
        $data = ['Active', 'Paused', 'Completed', 'Expired', 'Canceled'];
        return $data;
    }
}

if (!function_exists('order_dripfeed_status_array')) {
    function order_dripfeed_status_array()
    {
        $data = ['inprogress', 'completed', 'canceled'];
        return $data;
    }
}

if (!function_exists('ticket_status_array')) {
    function ticket_status_array()
    {
        $data = ['new', 'pending', 'closed'];
        return $data;
    }
}

if (!function_exists('ticket_status_title')) {
    function ticket_status_title($key)
    {
        switch ($key) {
            case 'new':
                return lang('New');
                break;
            case 'pending':
                return lang('Pending');
                break;
            case 'closed':
                return lang('Closed');
                break;
        }
    }
}

if (!function_exists('order_status_title')) {
    function order_status_title($key)
    {
        switch ($key) {
            case 'completed':
                return lang('Completed');
                break;
            case 'processing':
                return lang('Processing');
                break;
            case 'inprogress':
                return lang('In_progress');
                break;
            case 'pending':
                return lang('Pending');
                break;
            case 'partial':
                return lang('Partial');
                break;
            case 'canceled':
                return lang('Canceled');
                break;

            case 'refunded':
                return lang('Refunded');
                break;

            case 'active':
                return lang('Active');
                break;

            case 'awaiting':
                return lang('Awaiting');
                break;

            case 'error':
                return lang('Error');
                break;

            /*----------  subscriptions  ----------*/

            case 'Active':
                return lang('Active');
                break;

            case 'Completed':
                return lang('Completed');
                break;

            case 'Paused':
                return lang('Paused');
                break;

            case 'Expired':
                return lang('Expired');
                break;

            case 'Canceled':
                return lang('Canceled');
                break;
        }
    }
}

/**
 *
 * Get option and update option
 *
 */

if (!function_exists('get_option')) {
    function get_option($key, $value = '')
    {
        $CI = &get_instance();

        if (empty($CI->help_model)) {
            $CI->load->model('model', 'help_model');
        }
        $option = $CI->help_model->get('value', OPTIONS, "name = '{$key}'");
        if (empty($option)) {
            $CI->db->insert(OPTIONS, ['name' => $key, 'value' => $value]);
            return $value;
        } else {
            return $option->value;
        }
    }
}

if (!function_exists('update_option')) {
    function update_option($key, $value)
    {
        $CI = &get_instance();

        if (empty($CI->help_model)) {
            $CI->load->model('model', 'help_model');
        }

        $option = $CI->help_model->get('value', OPTIONS, "name = '{$key}'");
        if (empty($option)) {
            $CI->db->insert(OPTIONS, ['name' => $key, 'value' => $value]);
        } else {
            $CI->db->update(OPTIONS, ['value' => $value], ['name' => $key]);
        }
    }
}

if (!function_exists('get_setting_number_format')) {
    function get_setting_number_format()
    {
        $decimal_places = get_option('currency_decimal', 2);
        switch (get_option('currency_decimal_separator', 'dot')) {
            case 'dot':
                $decimal_separator = '.';
                break;
            case 'comma':
                $decimal_separator = ',';
                break;
            default:
                $decimal_separator = '';
                break;
        }

        switch (get_option('currency_thousand_separator', 'comma')) {
            case 'dot':
                $thousand_separator = '.';
                break;
            case 'comma':
                $thousand_separator = ',';
                break;
            case 'space':
                $thousand_separator = ' ';
                break;
            default:
                $thousand_separator = '';
                break;
        }

        $result = (object) [
            'decimal_places' => $decimal_places,
            'decimal_separator' => $decimal_separator,
            'thousand_separator' => $thousand_separator,
        ];

        return $result;
    }
}

if (!function_exists('user_allowed_controllers')) {
    function user_allowed_controllers($role)
    {
        switch ($role) {
            case 'supporter':
                $result = [
                    'setting',
                    'module',
                    'api_provider',
                    'user_block_ip',
                    'user_logs',
                ];
                break;
            case 'user':
                $result = [
                    'users',
                    'setting',
                    'module',
                    'api_provider',
                    'category',
                    'user_mail_logs',
                    'user_block_ip',
                    'user_logs',
                ];
                break;
            default:
                $result = [];
                break;
        }
        return $result;
    }
}

/**
 * Return an array of timezones
 *
 * @return array
 */
function tz_list()
{
    $timezoneIdentifiers = DateTimeZone::listIdentifiers();
    $utcTime = new DateTime('now', new DateTimeZone('UTC'));

    $tempTimezones = [];
    foreach ($timezoneIdentifiers as $timezoneIdentifier) {
        $currentTimezone = new DateTimeZone($timezoneIdentifier);

        $tempTimezones[] = [
            'offset' => (int) $currentTimezone->getOffset($utcTime),
            'identifier' => $timezoneIdentifier,
        ];
    }

    // Sort the array by offset, identifier ascending
    usort($tempTimezones, function ($a, $b) {
        return $a['offset'] == $b['offset']
            ? strcmp($a['identifier'], $b['identifier'])
            : $a['offset'] - $b['offset'];
    });

    $timezoneList = [];
    foreach ($tempTimezones as $key => $tz) {
        $sign = $tz['offset'] > 0 ? '+' : '-';
        $offset = gmdate('H:i', abs($tz['offset']));
        $timezoneList[$key]['time'] =
            '(UTC ' . $sign . $offset . ') ' . $tz['identifier'];
        $timezoneList[$key]['zone'] = $tz['identifier'];
    }
    return $timezoneList;
}

// Convert time zone for user.
if (!function_exists('convert_timezone')) {
    function convert_timezone($datetime, $case, $uid = '', $type = '')
    {
        $zonesystem = date_default_timezone_get();

        if ($uid != '') {
            $zoneuser = get_user_timezone($uid);
        } else {
            if (
                isset($_SESSION['user_current_info']['timezone']) &&
                $_SESSION['user_current_info']['timezone'] != ''
            ) {
                $zoneuser = $_SESSION['user_current_info']['timezone'];
            } else {
                $zoneuser = get_user_timezone(session('uid'));
            }
        }

        switch ($case) {
            case 'user':
                $currentTZ = new DateTimeZone($zonesystem);
                $newTZ = new DateTimeZone($zoneuser);
                break;

            case 'system':
                $currentTZ = new DateTimeZone($zoneuser);
                $newTZ = new DateTimeZone($zonesystem);
                break;
        }

        $date = new DateTime($datetime, $currentTZ);
        $date->setTimezone($newTZ);
        // 		return $date->format('Y-m-d H:i:s');
        if ($type == 'date') {
            return $date->format('d/m/Y');
        } elseif ($type == 'time') {
            return $date->format('H:i');
        } else {
            return $date->format('d/m/Y H:i');
        }
    }
}

//Get User's timezone, return zone
if (!function_exists('get_user_timezone')) {
    function get_user_timezone($uid = null)
    {
        if (!empty($uid)) {
            $userZone = get_field(USERS, ['id' => $uid], 'timezone');
            if (!empty($userZone)) {
                return $userZone;
            }
        }
        return false;
    }
}

if (!function_exists('get_array_diff_object')) {
    function get_array_diff_object($array_a, $array_b)
    {
        $diff = array_udiff($array_a, $array_b, function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return 1;
        });
        return $diff;
    }
}

/**
 * Getting the names of all files in a directory
 * @return a Array
 *
 */
if (!function_exists('get_name_of_files_in_dir')) {
    function get_name_of_files_in_dir($path, $file_types = [''])
    {
        if (empty($file_types)) {
            $file_types = ['.php'];
        }
        $name_of_files = [];
        if ($path != '' && is_dir($path)) {
            $dir = new DirectoryIterator($path);
            foreach ($dir as $fileinfo) {
                if (!$fileinfo->isDot()) {
                    foreach ($file_types as $key => $row) {
                        if (strrpos($fileinfo->getFilename(), $row)) {
                            $name_of_files[] = basename(
                                $fileinfo->getFilename(),
                                $row
                            );
                        }
                    }
                }
            }
        }
        return $name_of_files;
    }
}

/**
 *
 * Check ticket is_read or not
 *
 */
if (!function_exists('check_unread_ticket')) {
    function check_unread_ticket($ticket_id)
    {
        $CI = &get_instance();
        if (empty($CI->help_model)) {
            $CI->load->model('model', 'help_model');
        }
        $ticket_content = $CI->help_model->get(
            '*',
            TICKET_MESSAGES,
            ['ticket_id' => $ticket_id],
            'id',
            'DESC'
        );
        if (get_role('user')) {
            if (
                !empty($ticket_content) &&
                $ticket_content->uid != session('uid') &&
                $ticket_content->is_read == 1
            ) {
                return true;
            }
        } else {
            if (!empty($ticket_content) && $ticket_content->is_read == 1) {
                return true;
            }
        }
        return false;
    }
}

if (!function_exists('get_payments_method')) {
    function get_payments_method()
    {
        $path = APPPATH . './modules/checkout/controllers/';
        $payment_methods = [];
        if ($path != '') {
            $dir = new DirectoryIterator($path);
            foreach ($dir as $fileinfo) {
                if (!$fileinfo->isDot()) {
                    if (
                        !in_array($fileinfo->getFilename(), [
                            'checkout.php',
                            'orders.php',
                        ])
                    ) {
                        $payment_methods[] = basename(
                            $fileinfo->getFilename(),
                            '.php'
                        );
                    }
                }
            }
            return $payment_methods;
        }
    }
}

if (!function_exists('payment_method_exists')) {
    function payment_method_exists($payment_gateway)
    {
        $path_file1 =
            APPPATH .
            './modules/setting/views/integrations/' .
            $payment_gateway .
            '.php';
        $path_file2 =
            APPPATH .
            './modules/checkout/controllers/' .
            $payment_gateway .
            '.php';
        if (file_exists($path_file1) && file_exists($path_file2)) {
            return true;
        }
        return false;
    }
}

if (!function_exists('payment_method_title')) {
    function payment_method_title($method)
    {
        switch ($method) {
            case 'empty':
                return $result = lang('empty');
                break;

            default:
                return lang($method);
                break;
        }
    }
}

if (!function_exists('truncate_string')) {
    function truncate_string(
        $string = '',
        $max_length = 50,
        $ellipsis = '...',
        $trim = true
    ) {
        $max_length = (int) $max_length;
        if ($max_length < 1) {
            $max_length = 50;
        }

        if (!is_string($string)) {
            $string = '';
        }

        if ($trim) {
            $string = trim($string);
        }

        if (!is_string($ellipsis)) {
            $ellipsis = '...';
        }

        $string_length = mb_strlen($string);
        $ellipsis_length = mb_strlen($ellipsis);
        if ($string_length > $max_length) {
            if ($ellipsis_length >= $max_length) {
                $string = mb_substr($ellipsis, 0, $max_length);
            } else {
                $string =
                    mb_substr($string, 0, $max_length - $ellipsis_length) .
                    $ellipsis;
            }
        }

        return $string;
    }
}

if (!function_exists('connect_api')) {
    function connect_api($url, $post = [''])
    {
        $_post = [];
        if (is_array($post)) {
            foreach ($post as $name => $value) {
                $_post[] = $name . '=' . urlencode($value);
            }
        }
        if (is_array($post)) {
            $url_complete = join('&', $_post);
        }
        $url = $url . '?' . $url_complete;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt(
            $ch,
            CURLOPT_USERAGENT,
            'API (compatible; MSIE 5.01; Windows NT 5.0)'
        );
        $result = curl_exec($ch);
        if (curl_errno($ch) != 0 && empty($result)) {
            $result = false;
        }

        curl_close($ch);
        return $result;
    }
}

if (!function_exists('get_random_time')) {
    function get_random_time($type = '')
    {
        $rand_time = rand(600, 3600);
        if ($type == 'api') {
            $rand_time = rand(14400, 28000);
        }
        return $rand_time;
    }
}

if (!function_exists('get_theme')) {
    function get_theme()
    {
        $theme_config = APPPATH . '../themes/config.json';
        $theme = 'regular';
        if (file_exists($theme_config)) {
            $config = file_get_contents($theme_config);
            $config = json_decode($config);
            if (is_object($config) && isset($config->theme)) {
                $theme = $config->theme;
            }
        }
        return $theme;
    }
}

if (!function_exists('strip_tag_css')) {
    function strip_tag_css($text)
    {
        $text = strip_tags($text, '<style>');
        $substring = substr(
            $text,
            strpos($text, '<style'),
            strpos($text, '</style>')
        );
        $text = str_replace($substring, '', $text);
        $text = str_replace(["\t", "\r", "\n"], '', $text);
        $text = trim($text);
        return $text;
    }
}

if (!function_exists('get_current_url')) {
    function get_current_url()
    {
        $url =
            (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
                ? 'https'
                : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if ($url == '') {
            $url = segment(1);
        }
        return $url;
    }
}

if (!function_exists('topbar_tilte_by_module')) {
    function topbar_tilte_by_module($segment)
    {
        switch ($segment) {
            case 'blogs':
                return lang('Blogs');
                break;
            case 'order':
                return lang('order_logs');
                break;
            case 'provider':
                return lang('Provider');
                break;
            case 'category':
                return lang('Category');
                break;
            case 'faqs':
                return lang('FAQ');
                break;
            case 'language':
                return lang('Language');
                break;
            case 'module':
                return lang('Module');
                break;
            case 'profile':
                return lang('Profile');
                break;
            case 'services':
                return lang('Services');
                break;
            case 'setting':
                return lang('Settings');
                break;
            case 'social_network':
                return lang('social_network');
                break;
            case 'statistics':
                return lang('Statistics');
                break;
            case 'transactions':
                return lang('Transaction_logs');
                break;
            case 'users':
                return lang('Customers');
                break;
            default:
                return ucfirst($segment);
                break;
        }
    }
}

if (!function_exists('get_category_services_class_css')) {
    function get_category_services_class_css($url)
    {
        $category_class = 'default';

        if (strpos($url, 'instagram') !== false) {
            $category_class = 'instagram-category';
        }
        if (strpos($url, 'facebook') !== false) {
            $category_class = 'facebook-category';
        }
        if (strpos($url, 'youtube') !== false) {
            $category_class = 'youtube-category';
        }
        if (strpos($url, 'twitter') !== false) {
            $category_class = 'twitter-category';
        }
        if (strpos($url, 'soundcloud') !== false) {
            $category_class = 'soundcloud-category';
        }
        if (strpos($url, 'twitch') !== false) {
            $category_class = 'twitch-category';
        }
        if (strpos($url, 'spotify') !== false) {
            $category_class = 'spotify-category';
        }
        return $category_class;
    }
}

// Get default Features per each category
if (!function_exists('get_default_category_features')) {
    function get_default_category_features()
    {
        $features = '[
		  {
		    "icon": "star",
		    "content": "<strong>High Quality</strong>"
		  },
		  {
		    "icon": "unlock",
		    "content": "<strong>No Password</strong> Needed"
		  },
		  {
		    "icon": "thumbs-up",
		    "content": "Drop <strong>Protection</strong>"
		  },
		  {
		    "icon": "shield",
		    "content": "<strong>Safe</strong> and <strong>Easy</strong>"
		  },
		  {
		    "icon": "message-circle",
		    "content": "<strong>Instant Delivery</strong> Guaranteed"
		  },
		  {
		    "icon": "check",
		    "content": "Secure Payments"
		  }
		]';
        return $features;
    }
}

// check is_ajax_request or not
if (!function_exists('_is_ajax')) {
    function _is_ajax($module_request = '')
    {
        $CI = &get_instance();
        if (!$CI->input->is_ajax_request()) {
            if ($module_request != '') {
                redirect(cn($module_request));
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}

/**
 * @param string $status error/success
 * @param string $message
 * @return Print Message
 */
if (!function_exists('_validation')) {
    function _validation($status, $ms)
    {
        ms(['status' => $status, 'message' => $ms]);
    }
}

/**
 * @param array $data_sign
 * @param string $symbol : , | ,
 * @return md5 with symbol
 */
if (!function_exists('generate_sign_md5')) {
    function generate_sign_md5($data_sign = '', $symbol)
    {
        if ($data_sign) {
            return md5(join($symbol, $data_sign));
        }
        return false;
    }
}

// get search box option
if (!function_exists('allowed_search_bar')) {
    function allowed_search_bar($module = '')
    {
        $allowed_search = [
            'user_block_ip',
            'user_logs',
            'user_mail_logs',
            'users',
            'departments',
            'invoices',
            'faqs',
            'order',
            'tickets',
            'transactions',
        ];
        if (in_array($module, $allowed_search)) {
            return true;
        }
        return false;
    }
}

if (!function_exists('orders_id_filter')) {
    function orders_id_filter($str)
    {
        $str = rtrim($str, ',');
        $str = ltrim($str, ',');
        $str = array_map('intval', explode(',', $str));
        return $str;
    }
}
