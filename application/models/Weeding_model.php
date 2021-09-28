<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Weeding_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

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

    // public function get_data_tamu_undangan($limit, $page)
    // {

    //     $this->db->select('*');
    //     $this->db->limit($limit, $page);
    //     $query = $this->db->from('tamuundangan')->get()->result_array();

    //     return $query;
    // }

    // Fetch records
    public function getData($rowno, $rowperpage)
    {

        $this->db->select('*');
        $this->db->from('tamuundangan');
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get()->result_array();

        return $query;
    }

    // Select total records
    public function getrecordCount()
    {

        $this->db->select('count(*) as allcount');
        $this->db->from('tamuundangan');
        $query = $this->db->get();
        $result = $query->result_array();

        return $result[0]['allcount'];
    }
}
