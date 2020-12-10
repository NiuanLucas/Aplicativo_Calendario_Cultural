<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroController
 *
 * @author mathe
 */
class Usuarios extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('evento');
        $this->load->model('regioes');
        $this->load->model('usuario');
        $this->load->library('session');
        $this->load->helper('form');
    }
    
    
    public function cadastro()
    {
        $this->load->view('header');
        $this->load->view('cadastro');
        $this->load->view('footer');
    }
    
    public function login()
    {
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }
    
    
    public function entrar()
    {
        $dados['senha'] = $this->input->post('senha');
        $dados['email'] = $this->input->post('email');
        $usuario = $this->usuario->procurar_usuario($dados)[0];
        $usuario->cidade = $this->usuario->cidade_usuario($usuario->cidade);        
        
        if(isset($usuario->id))
        {
            $this->session->set_userdata('usuario', $usuario);
            //print_r($_SESSION["usuario"]);
            header("Location: ".base_url());
        }else{
            header("Location: ".base_url('login'));
        }
    }
    
    public function logoff()
    {
        unset($_SESSION['usuario']);
        header("Location: ".base_url());

    }
    
    public function mostrar_cidades($id)
    {
        $data['cidades'] = $this->regioes->pegar_cidades_regiao($id);
        $this->load->view('header');
        $this->load->view('form_cidades', $data);
        $this->load->view('footer');
    }
    
    public function cadastrar()
    {
        $values['nome'] = $this->input->post('nome').' '.$this->input->post('sobrenome');
        $values['email'] = $this->input->post('email');
        $values['nascimento'] = $this->input->post('nascimento');
        $values['genero'] = $this->input->post('genero');
        $values['senha'] = sha1($this->input->post('senha'));
        $values['cidade'] = 93;
        $bool = $this->usuario->salvar_usuario($values);
        
        if($bool)
        {
            header("Location: ".base_url('login'));
        }else
        {
            header("Location: ".base_url('cadastro'));
        }
    }
    
    
}
