<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eventoController
 *
 * @author mathe
 */
class Eventos extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('evento');
        $this->load->model('regioes');
        $this->load->library('session');
    }
    
    public function mostrar_regioes()
    {
        $data['regioes'] = $this->regioes->pegar_todas();
        $data['prefix'] = 'cadastro/formulario/';
        $this->load->view('header');
        $this->load->view('menu_regioes', $data);
        $this->load->view('footer');
    }
    
    
    public function formulario_evento()
    {
        if(isset($this->session->userdata('usuario')->id))
        {
            $data['tipos'] = $this->evento->pegar_tipos();
            $data['cidades'] = $this->regioes->pegar_todas_cidades();
            $this->load->view('header');
            $this->load->view('form_evento', $data);
            $this->load->view('footer');
        }else{
            header("Location: ".base_url());
        }
    }
    
    public function cadastrar_evento()
    {
        $config['upload_path']          = './fotos/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1080;
        $config['max_height']           = 900;
        $config['encrypt_name']         = true;

        $this->load->library('upload', $config);
        
        $this->upload->do_upload('foto1');
        $data[0] = array('upload_data' => $this->upload->data());

        $this->upload->do_upload('foto2');        
        
        $data[1] = array('upload_data' => $this->upload->data());

        $this->upload->do_upload('foto3');
        $data[2] = array('upload_data' => $this->upload->data());
        
        echo "<script>console.log(".print_r($data).")</script>";


        
        $values['nome'] = $this->input->post('nome');
        $values['cidade'] = $this->input->post('cidade');
        $values['tipo'] = $this->input->post('tipo');
        $values['periodo'] = $this->input->post('periodo');
        $values['site'] = $this->input->post('site');
        $values['importancia'] = $this->input->post('importancia');
        $values['entrada'] = $this->input->post('entrada');
        $value['frequencia'] = $this->input->post('frequencia');
        $values['localidade'] = $this->input->post('localidade');
        $values['descricao'] = $this->input->post('descricao');
        //$values['foto'] = $data['upload_data']['file_name'];
        $values['cidade'] = $this->input->post('cidade'); //$this->session->userdata('usuario')->cidade->id;
        //$values['cidade'] = $this->input->post('cidade');
        $values['edicao'] = $this->input->post('edicao');
        $values['apoio'] = 0;
        $this->evento->inserir_evento($values);
        
        $dados['evento'] = $this->evento->last_insert_id();
        
        for($i = 0; $i < 3; $i++)
        {
            $dados['arquivo'] = $data[$i]['upload_data']['file_name'];
            $this->evento->inserir_foto($dados);
        }
        
        //print_r($values);
        header("Location: ".base_url());
        //print_r($values);
        //$this->load->view('upload_success', $data);
    }
    
    
    public function evento($id)
    {
        $data['evt'] = $this->evento->pegar_todos_param(array('id' => $id))[0];
        $data['fotos'] = $this->evento->galeria(array('evento' => $id));
        $this->load->view('header');
        $this->load->view('evento', $data);        
        $this->load->view('footer');
    }

    public function tipos()
    {
        $data["tipos"] = $this->evento->pegar_tipos();
        
        $this->load->view('header');
        $this->load->view('menu_tipos', $data);        
        $this->load->view('footer');
    }
    
    public function eventos_tipo($tipo)
    {
        $data["eventos"] = $this->evento->pegar_todos_param(array('tipo' => $tipo));
        foreach($data['eventos'] as $obj)
        {
            $obj->cidade = $this->evento->pegar_cidade($obj->cidade);
            $fotos = $this->evento->galeria(array('evento' => $obj->id));
            if(count($fotos) > 0)
            {
                $obj->foto = $fotos[1]->arquivo;
            }
        }

        

        $this->load->view('header');
        $this->load->view('menu_eventos', $data);        
        $this->load->view('footer');
        
    }
    
    
}
