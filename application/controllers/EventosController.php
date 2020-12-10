<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventosController
 *
 * @author mathe
 */
class EventosController extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('eventosmodel');
        $this->load->model('regioesmodel');
        $this->load->library('session');
    }
    
    public function mostrar_regioes()
    {
        $data['regioes'] = $this->regioesmodel->pegar_todas();
        $data['prefix'] = 'cadastro/formulario/';
        $this->load->view('header');
        $this->load->view('menu_regioes', $data);
        $this->load->view('footer');
    }
    
    
    public function formulario_evento()
    {
        if(isset($this->session->userdata('usuario')->id))
        {
            $data['tipos'] = $this->eventosmodel->pegar_tipos();
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
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1500;
        $config['max_width']            = 1400;
        $config['max_height']           = 800;
        $config['encrypt_name']         = true;

        $this->load->library('upload', $config);
        
        $this->upload->do_upload('foto1');
        $data[0] = array('upload_data' => $this->upload->data());
        $this->upload->do_upload('foto2');
        $data[1] = array('upload_data' => $this->upload->data());
        $this->upload->do_upload('foto3');
        $data[2] = array('upload_data' => $this->upload->data());
        
        
        $values['nome'] = $this->input->post('nome');
        $values['cidade'] = $this->input->post('cidade');
        $values['tipo'] = $this->input->post('tipo');
        $values['periodo'] = $this->input->post('periodo');
        $values['site'] = $this->input->post('site');
        $values['importancia'] = $this->input->post('importancia');
        $values['entrada'] = $this->input->post('entrada');
        $values['localidade'] = $this->input->post('localidade');
        $values['descricao'] = $this->input->post('descricao');
        //$values['foto'] = $data['upload_data']['file_name'];
        $values['cidade'] = $this->session->userdata('usuario')->cidade->id;
        //$values['cidade'] = $this->input->post('cidade');
        $values['edicao'] = $this->input->post('edicao');
        $values['apoio'] = 0;
        $this->eventosmodel->inserir_evento($values);
        
        $dados['evento'] = $this->eventosmodel->last_insert_id();
        
        for($i = 0; $i < 3; $i++)
        {
            $dados['arquivo'] = $data[$i]['upload_data']['file_name'];
            $this->eventosmodel->inserir_foto($dados);
        }
        
        /*echo "<pre>";
        print_r($data);
        print_r($dados);*/
        
        header("Location: ".base_url());
        //$this->load->view('upload_success', $data);
    }
    
    
    public function evento($id)
    {
        $data['evt'] = $this->eventosmodel->pegar_todos_param(array('id' => $id))[0];
        $data['fotos'] = $this->eventosmodel->galeria(array('evento' => $id));
        $this->load->view('header');
        $this->load->view('evento', $data);        
        $this->load->view('footer');
    }
    
    public function tipos()
    {
        $data["tipos"] = $this->eventosmodel->pegar_tipos();
        
        $this->load->view('header');
        $this->load->view('menu_tipos', $data);        
        $this->load->view('footer');
    }
    
    public function eventos_tipo($tipo)
    {
        $data["eventos"] = $this->eventosmodel->pegar_todos_param(array('tipo' => $tipo));
        foreach($data['eventos'] as $obj)
        {
            $obj->cidade = $this->eventosmodel->pegar_cidade($obj->cidade);
        }
        $this->load->view('header');
        $this->load->view('menu_eventos', $data);        
        $this->load->view('footer');
        
    }
    
    
}
