<?php

class Product_model extends CI_Model
{

    public function getdata()
    {
        $query = $this->db->get('productdetail');
        if ($query) {
            return $query->result();
        }
    }
    public function insertdata($data)
    {
        return $this->db->insert('productdetail', $data);        
    }
    public function getupdateproduct($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('productdetail');
        
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return array();
        }
    }
    public function updatedata($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('productdetail', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function removedata($id)
    {

        $query = $this->db->where(['id' => $id])->Delete('productdetail');
        if($query){
            return true;            
        }else{
            return false;
        }
       

    }
}

?>