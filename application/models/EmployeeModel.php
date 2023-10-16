<?php

class EmployeeModel extends CI_Model
{
    public function insertemployee($data){
        return $this->db->insert('codeigniter_prc', $data);     
    }
    public function getemployee(){
        $query = $this->db->get('codeigniter_prc');    
        return $query->result();
    }

    public function editEmployee($id){
        $query = $this->db->get_where('codeigniter_prc', ['id' => $id]);
        return $query->row();
    }

    //---------------updateEmployee-------
    public function updateEmployee($data, $id){
        return $this->db->update('codeigniter_prc', $data, ['id' => $id]);
    }

    //--------------delete------------------------
    public function deleteEmployee($id){
        return $this->db->delete('codeigniter_prc', ['id' => $id]);  
    }
}

?>