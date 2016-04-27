<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту'); 

class Template {

    function page_view($data, $name)
    {
        $CI =& get_instance();
        
        $CI->load->view('blocks/header_view', $data);
        $CI->load->view('blocks/menu_view', $data);
        $CI->load->view($name . '_view', $data);
        $CI->load->view('blocks/footer_view');
    }
}
