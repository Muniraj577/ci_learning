<?php
defined('BASEPATH') or exit("No direct script access allowed");

class MyUnique
{
    public function edit_unique($value, $params)
    {
        $CI = &get_instance();
        $CI->load->database();

        $CI->form_validation->set_message('edit_unique', "Sorry, that %s is already being used.");

        list($table, $field, $current_id) = explode(".", $params);

        $query = $CI->db->select()->from($table)->where($field, $value)->limit(1)->get();

        if ($query->row() && $query->row()->id != $current_id) {
            return false;
        } else {
            return true;
        }
    }

}
