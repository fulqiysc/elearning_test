<?php
class User_model extends CI_Model
{
    public function listing()

    {
        $this->db->select('*');
        $this->db->from('euser');
        $this->db->order_by('id_user');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function detail($id_user)
    {
        $this->db->select('*');
        $this->db->from('euser');
        $this->db->where('id_user', $id_user);
        $this->db->order_by('id_user');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function tambah($data)
    {
        $this->db->insert('euser', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('euser', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete('euser', $data);
    }
}
