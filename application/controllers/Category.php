<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public $category;

    private function render_view($view, $datas = null)
    {
        $this->load->view('includes/header');
        $this->load->view($view, $datas);
        $this->load->view('includes/footer');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Category_model');
        $this->category = new Category_model;
    }

    public function index()
    {
        $data['data'] = $this->category->get_categories();
        $this->render_view('category/index', $data);
        // $this->load->view('includes/header');
        // $this->load->view('category/index', $data);
        // $this->load->view('includes/footer');
    }

    public function create()
    {
        $this->render_view('category/create');
        // $this->load->view('includes/header');
        // $this->load->view('category/create');
        // $this->load->view('includes/footer');

    }

    public function store()
    {
        $this->form_validation->set_error_delimiters('<span class="alert-danger"><p>', '</p></span>');
        $this->form_validation->set_rules('title', 'Title', array('required', 'is_unique[categories.title]'));
        if ($this->form_validation->run() == false) {
            $this->create();
        } else {
            $this->category->insert_category();
            redirect(base_url('category/index'));
        }
    }

    public function edit($id)
    {
        $category = $this->db->get_where('categories', array('id' => $id))->row();
        $this->render_view('category/edit', array('category' => $category));
    }

    public function update($id)
    {
        $this->form_validation->set_error_delimiters('<span class="alert-danger"><p>', '</p></span>');
        $this->form_validation->set_rules('title', 'Title', array('required', 'edit_unique[categories.title.'.$id.']'));
        if ($this->form_validation->run() == false) {
            $this->edit($id);
        } else {
            $this->category->update_category($id);
            redirect(base_url('category/index'));
        }

    }
}
