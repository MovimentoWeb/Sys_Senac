<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        initSystem();

        set_tema('paginas', load_modulo('usuarios_view', 'cadastrar', 'system/usuarios'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function cadastrar() {
        $this->load->model('crud_model', 'crud');
        initSystem();

        $this->form_validation->set_message('matches', 'O campo <strong>%s</strong> está diferente do campo <strong>%s</strong>');
        $this->form_validation->set_rules('nome', '<strong>Nome usuario</strong>', 'trim|required|ucfirst|min_length[5]');
        $this->form_validation->set_rules('email', '<strong>E-mail</strong>', 'trim|required|valid_email|strtolower');
        $this->form_validation->set_rules('senha', '<strong>Senha</strong>', 'trim|required|strtolower|min_length[5]');
        $this->form_validation->set_rules('senha2', '<strong>Repita a senha</strong>', 'trim|required|min_length[4]|strtolower|matches[senha]');
        $this->form_validation->set_rules('tipoUsuario', '<strong>Tipo de usuário</strong>', 'trim|required');
        $this->form_validation->set_rules('detalhes', '<strong>Titulo</strong>', 'trim|required|ucfirst|min_length[5]');

        if ($this->form_validation->run() == TRUE) {
            $dados = elements(array('nome', 'email', 'tipoUsuario', 'detalhes'), $this->input->post());
            $dados['senha'] = md5($this->input->post('senha'));

            echo 'depois de pegar os elementos';
            $this->crud->crud_insert('usuarios', $dados);
        }

        set_tema('paginas', load_modulo('usuarios_view', 'cadastrar', 'system/usuarios'));
        load_template('template');
    }

    public function gerenciar() {
        $this->load->model('crud_model', 'crud');
        initSystem();

        set_tema('paginas', load_modulo('usuarios_view', 'gerenciar', 'system/usuarios'));
        load_template();
    }

    public function editar() {
        $this->load->model('crud_model', 'crud');
        initSystem();

        $this->form_validation->set_rules('nome', '<strong>Nome usuario</strong>', 'trim|required|ucfirst|min_length[5]');
        $this->form_validation->set_rules('tipoUsuario', '<strong>Tipo de usuário</strong>', 'trim|required');
        $this->form_validation->set_rules('detalhes', '<strong>Titulo</strong>', 'trim|required|ucfirst|min_length[5]');

        if ($this->form_validation->run() == TRUE) {
            $dados['nome'] = $this->input->post('nome');
            $dados['tipoUsuario'] = $this->input->post('tipoUsuario');
            $dados['detalhes'] = $this->input->post('detalhes');

            $this->crud->crud_update('usuarios', $dados, $this->input->post('id'), 'usuarios/gerenciar');
        }

        set_tema('paginas', load_modulo('usuarios_view', 'editar', 'system/usuarios'));
        load_template();
    }

    public function excluir() {
        $this->load->model('crud_model', 'crud');
        initSystem();

        $idProduto = $this->uri->segment(3);
        $this->crud->crud_excluir('usuarios', $idProduto, 'usuarios/gerenciar');

        load_template();
    }

    public function alterar_senha() {
        $this->load->model('crud_model', 'crud');
        initSystem();

        $this->form_validation->set_rules('nome', '<strong>Nome usuario</strong>', 'trim|required|ucfirst|min_length[5]');
        $this->form_validation->set_rules('tipoUsuario', '<strong>Tipo de usuário</strong>', 'trim|required');
        $this->form_validation->set_rules('detalhes', '<strong>Titulo</strong>', 'trim|required|ucfirst|min_length[5]');

        if ($this->form_validation->run() == TRUE) {
            $dados['nome'] = $this->input->post('nome');
            $dados['tipoUsuario'] = $this->input->post('tipoUsuario');
            $dados['detalhes'] = $this->input->post('detalhes');

            $this->crud->crud_update('usuarios', $dados, $this->input->post('id'), 'usuarios/gerenciar');
        }
        set_tema('titulo', 'Alterar senha');
        set_tema('paginas', load_modulo('usuarios_view', 'alterar_senha', 'system/usuarios'));
        load_template();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */