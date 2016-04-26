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
}
