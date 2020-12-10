<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegioesModel
 *
 * @author matheus
 */
class RegioesModel extends CI_Model
{
    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function pegar_todas($params = array())
    {
        $query = $this->db->get_where('regioes', $params);
        return $query->result();
    }
    
    public function pegar_cidades_regiao($regiao_id)
    {
        $query = $this->db->get_where('cidades', array('regiao' => $regiao_id));
        return $query->result();
    }
    
    public function pegar_cidades()
    {
        $this->db->order_by('nome', 'ASC');
        $query = $this->db->get('cidades');
        return $query->result();
    }
    
    public function pegar_cidades_like($array)
    {
        $this->db->order_by('nome', 'ASC');
        $this->db->like($array);
        $query = $this->db->get('cidades');
        return $query->result();
    }
}
