<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {

    public function get_pages()
    {
        $query = $this->db->get('pages');
        return $query->result_array();
    }

    public function get_pages_info($title)
    {
        $this->db->where('title_url', $title);
        $query = $this->db->get('pages');
        return $query->row_array();
    }
    
    public function get_recipes()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('recipes');
        return $query->result_array();
    }
    
        public function get_ingrediets()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('ingredients');
        return $query->result_array();
    }
    
    public function view_data($title)
    {
        $this->db->where('title_url', $title);
        $query = $this->db->get('recipes');
        return $query->row_array();
    }
    
    public function add_data($page, $add)
    {
        if ($page == 'add_recipe') {
            $this->db->insert('recipes', $add);
        }
        else {
            $this->db->insert('ingredients', $add);
        }
    }
}
