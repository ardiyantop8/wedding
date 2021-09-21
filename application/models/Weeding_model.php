<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Weeding_model extends CI_Model
{

    public function all_resepsi()
    {
        $this->db->select('*');
        $result = $this->db->from('resepsi')->get()->result_array();

        return $result;
    }
    public function showAllResepsi()
    {
        $this->db->select('*');
        $result = $this->db->from('resepsi')->get()->result_array();

        return $result;
    }
    public function all_sambutan()
    {
        $this->db->select('*');
        $result = $this->db->from('sambutan')->get()->result_array();

        return $result;
    }
    public function all_cerita()
    {
        $this->db->select('*');
        $result = $this->db->from('cerita')->get()->result_array();

        return $result;
    }
    public function all_adat()
    {
        $this->db->select('*');
        $result = $this->db->from('adat')->get()->result_array();

        return $result;
    }
    public function all_galery()
    {
        $this->db->select('*');
        $this->db->limit(6);
        $result = $this->db->from('galery')->get()->result_array();

        return $result;
    }
    public function all_sosmed()
    {
        $this->db->select('*');
        $result = $this->db->from('sosmed')->get()->result_array();

        return $result;
    }
    public function get_link($data_get_url)
    {
        $this->db->select('*');
        $this->db->like('nama', $data_get_url);
        $result = $this->db->from('tamuundangan')->get()->result_array();
        // echo $this->db->last_query($result);
        // die;
        return $result;
    }
}
