<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pelanggan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pelanggan by id_pelanggan
     */
    function get_pelanggan($id_pelanggan)
    {
        return $this->db->get_where('pelanggan',array('id_pelanggan'=>$id_pelanggan))->row();
    }
        
    /*
     * Get all pelanggan
     */
    function get_all_pelanggan()
    {
        $this->db->order_by('id_pelanggan', 'desc');
        return $this->db->get('pelanggan')->result_array();
    }
        
    /*
     * function to add new pelanggan
     */
    function add_pelanggan($params)
    {
        $this->db->insert('pelanggan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pelanggan
     */
    function update_pelanggan($id_pelanggan,$params)
    {
        $this->db->where('id_pelanggan',$id_pelanggan);
        return $this->db->update('pelanggan',$params);
    }
    
    /*
     * function to delete pelanggan
     */
    function delete_pelanggan($id_pelanggan)
    {
        return $this->db->delete('pelanggan',array('id_pelanggan'=>$id_pelanggan));
    }
}
