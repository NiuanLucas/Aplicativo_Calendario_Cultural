<?php

class Usuario extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function procurar_usuario($dados)
    {
        $dados['senha'] = sha1($dados['senha']);
        $query = $this->db->get_where('usuarios', $dados);
        return $query->result();
    }
    
    public function cidade_usuario($id)
    {
        $query = $this->db->get_where('cidades', array('id' => $id));
        return $query->result()[0];
    }
    
    public function salvar_usuario($dados)
    {
        $query = $this->db->insert('usuarios', $dados);
        return $query;
    }
}
