<?php

class MainModel extends CI_Model{
    
    public function getIgraci(){
        $query = $this->db->get('ucenik');
        return $query->result();
    }
    
    public function resursi(){
        $this->db->select('trenutnoZnanje, kolZnanje, trenutnoZdravlje, kolZdravlje, trenutnoEnergija, kolEnergija');
        $this->db->where('id_ucenik', $_SESSION['id_ucenik']);
        $query2 = $this->db->get('ucenik');
        return $query2->result();

    }
}

?>