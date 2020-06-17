<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tour_guide_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tour_guide by id_tourguide
     */
    function get_tour_guide($id_tourguide)
    {
        return $this->db->get_where('tour_guide',array('id_tourguide'=>$id_tourguide))->row();
    }

    
    function get_tour_guid($id)
    {
        return $this->db->get_where('tour_guide',array('status'=>1))->row();
    }
    function get_where($table = null, $where = null)
    {
        $this->db->from($table);
        $this->db->where($where);

        return $this->db->get();
    }
      function get_count()
    {
        return $this->db->count_all('tour_guide');
    }   
    /*
     * Get all tour_guide
     */
    function get_all_tour_guide()
    {
        $this->db->order_by('id_tourguide', 'desc');
        return $this->db->get('tour_guide')->result_array();
    }
        
    /*
     * function to add new tour_guide
     */
    function add_tour_guide($params)
    {
        $this->db->insert('tour_guide',$params);
        return $this->db->insert_id();
    }
    
    function upload(){
        $config['upload_path'] = 'resources/upload/tour_guide/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
    
        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
        }

        function save($upload){
        $data = array(
            // 'deskripsi'=>$this->input->post('input_deskripsi'),
            'gambar' => $upload['gambar']['file_name']
            // 'ukuran_file' => $upload['file']['file_size'],
            // 'tipe_file' => $upload['file']['file_type']
        );
        
        $this->db->insert('tour_guide', $data);
    }
    /*
     * function to update tour_guide
     */
    function update_tour_guide($id_tourguide,$params)
    {
        $this->db->where('id_tourguide',$id_tourguide);
        return $this->db->update('tour_guide',$params);
    }
    
    /*
     * function to delete tour_guide
     */
    function delete_tour_guide($id_tourguide)
    {
        return $this->db->delete('tour_guide',array('id_tourguide'=>$id_tourguide));
    }

     function cari($keyword){
      $this->db->like('nama_tourguide', $keyword); //mencari data yang serupa dengan keyword
      return $this->db->get('tour_guide')->result();
    }

    function cariguide($keyword){
      $this->db->like('bahasa', $keyword); //mencari data yang serupa dengan keyword
      return $this->db->get('tour_guide')->result();
    }

    function ambil_data($perpage, $offset){
        $this->db->order_by('id_tourguide', 'desc');
        return $this->db->get("tour_guide", $perpage, $offset)->result();
        
    }

    function tanggal_en($tanggal){
        $tanggal2 = substr($tanggal,3,2);
        $bulan = substr($tanggal,0,2);
        $tahun = substr($tanggal,6,4);
        return $tahun.'-'.$bulan.'-'.$tanggal2;         
    }

    function getBulan_en($bln){
        switch ($bln){
            case 1: 
                return "January";
                break;
            case 2:
                return "February";
                break;
            case 3:
                return "March";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "May";
                break;
            case 6:
                return "June";
                break;
            case 7:
                return "July";
                break;
            case 8:
                return "August";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "October";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "December";
                break;
        }
    }
}
