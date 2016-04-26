<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту'); 

class Template {

    function page_view($data)
    {
        $CI =& get_instance();
        
        $CI->load->view('blocks/header_view', $data);
        $CI->load->view('blocks/menu_view', $data);
        $CI->load->view('blocks/content_view');
        $CI->load->view('blocks/footer_view');
    }
}
