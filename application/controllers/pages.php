<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index()
    {
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->pages_model->get_pages_info('recipes');
        $data['recipes'] = $this->pages_model->get_recipes();
        $name = 'recipes';
        $this->template->page_view($data, $name);
    }
    
    public function ingredients()
    {
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->pages_model->get_pages_info('ingredients');
        /*$data['recipes'] = $this->pages_model->get_recipes();*/
        $name = 'ingredients';
        $this->template->page_view($data, $name);
    }
    
    public function view($title)
    {
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->pages_model->view_recipe($title);
       /* $data['recipes'] = $this->pages_model->get_recipes();*/
        $name = 'recipe';
        $this->template->page_view($data, $name);
    }
}
