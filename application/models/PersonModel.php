<?php
class PersonModel extends CI_Model{
    public function __construct(){
        parent:: __construct();
        $this->load->database();
    }

    public function getall(){
        return $this->db->get('belida')->result();
    }

    public function insert($data){
        return $this->db->insert('belida', $data);
    }

    public function getPerson($id){
        return $this->db->get_where('belida', array('id' => $id))->row();
    }

    public function update($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('belida', $data);
    }

    public function delete($id){
        $this->db->delete('belida', array('id' => $id));
    }
}
?>