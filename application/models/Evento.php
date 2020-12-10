<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventosModel
 *
 * @author matheus
 */
class Evento extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function inserir_evento($values)
    {
        $this->db->insert('eventos', $values);
    }
    
    public function pegar_nome($nome)
    {
        $this->db->like('nome', $nome);
        $query = $this->db->get('eventos');
        return $query->result();
    }
    
    public function pegar_limit_offset($limit, $offset)
    {
        $query = $this->db->get('eventos', $limit, $offset);
        return $query->result();
    }
    
    public function pegar_todos_param($array)
    {
        $query = $this->db->get_where('eventos', $array);
        return $query->result();
    }
    
    public function galeria($param = array())
    {
        $query = $this->db->get_where('fotos', $param);
        return $query->result();
    }
    
    public function pegar_cidade($cidade_id)
    {
        $query = $this->db->get_where('cidades', array('id' => $cidade_id));
        return $query->result()[0];
    }
    
    public function pegar_eventos_cidades($cidades) {
        $this->db->where_in('cidade', $cidades);
        $query = $this->db->get('eventos');
        return $query->result();
    }
    
    public function pegar_localidade($param)
    {
        $query = $this->db->get_where('localidades', $param);
        return $query->result();
    }
    
    public function pegar_tipos($param = array())
    {
        $query = $this->db->get_where('tipos', $param);
        return $query->result();
    }

    public function pegar_tipos_disponiveis($cidade)
    {
        $this->db->select('tipo');
        $array = $this->db->get_where('eventos', array('cidade'=> $cidade))->result();
        foreach($array as $element) {
            $eventos[] = $element->tipo;
        }
        $this->db->order_by('id', 'ASC');
        $this->db->where_in('id', $eventos);
        
        $query = $this->db->get('tipos');
        return $query->result();
    }

    public function eventos_regiao($cidade)
    {
        $this->db->select('regiao');
        $regiao = $this->db->get_where('cidades', array('id' => $cidade))->result()[0]->regiao;
        $this->db->select('id');
        $resultado = $this->db->get_where('cidades', array('regiao' => $regiao))->result();
        foreach($resultado as $city)
        {
            $cidades[] = $city->id;
        }

        $this->db->where_in('cidade', $cidades);
        $this->db->limit(1, 7);
        $query = $this->db->get('eventos');
        return $query->result();

    }
    
    
    public function inserir_foto($dados)
    {
        $this->db->insert('fotos', $dados);
    }
    
    public function pegar_fotos_param($param)
    {
        $query = $this->db->get_where('fotos', $param);
        return $query->result();
    }
    
    public function last_insert_id()
    {
        return $this->db->insert_id();
    }
    
}
