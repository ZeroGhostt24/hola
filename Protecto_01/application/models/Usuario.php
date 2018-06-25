<?php

class Usuario  extends CI_Model{
    //put your code here
    
    
    public function login($rut, $clave){
        
        $this->db->where("rut", $rut);
        $this->db->where("clave", $clave);
        return $this->db->get("usuario")->result();
    }
    
    public function perfiles(){
        return $this->db->get("usuario")->result();
    }
    
}
