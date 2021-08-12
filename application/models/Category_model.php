<?php

class Category_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    public function get_categories()
    {
        $query = $this->db->get('categories');
        return $query->result();
    }

    public function insert_category()
    {
        $title = $this->input->post('title');
        $slug = url_title($title, '-', true);
        $data = array(
            'title' => $title,
            'slug' => $slug,
        );
        return $this->db->insert('categories', $data);
    }

    public function update_category($id)
    {
        $title = $this->input->post('title');
        $slug = url_title($title, '-', true);
        $data = array(
            'title' => $title,
            'slug' => $slug,
        );
        $this->db->where('id', $id);
        return $this->db->update('categories', $data);
    }
}
