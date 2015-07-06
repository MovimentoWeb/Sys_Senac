<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Acesso extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        initSystem();

        set_tema('pag inas', load_modulo('acesso_view', 'cadastrar', 'system/usuarios'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function cadastrar() {

        initSystem();

        $this->form_validation->set_message('matches', 'O campo %s está diferente do campo %s');
        $this->form_validation->set_rules('nome', 'Nome usuario', 'trim|required|ucfirst|min_length[5]');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|strtolower');
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required|strtolower|min_length[5]');
        $this->form_validation->set_rules('senha2', 'Repita a senha', 'trim|required|min_length[4]|strtolower|matches[senha]');
        //$this->form_validation->set_rules('tipoUsuario', 'Tipo de usuário', 'trim|required|ucfirst|min_length[5]');
        $this->form_validation->set_rules('detalhes', 'Titulo', 'trim|required|ucfirst|min_length[5]');

        if ($this->form_validation->run() == TRUE) {
            echo 'antes de pegar os elementos';
            echo '<br/>';
            echo '<br/>';
            echo 'Nome :' . $this->input->post('nome');
            echo '<br/>';
            echo 'Email :' . $this->input->post('email');
            echo '<br/>';
            echo 'Senha :' . $this->input->post('senha');
            echo '<br/>';
            echo 'Senha2 :' . $this->input->post('senha2');
            echo '<br/>';
            echo 'Detalhes :' . $this->input->post('detalhes');
            echo '<br/>';
            $dados = elements(array('nome', 'email', 'detalhes'), $this->input->post());

// $dados['senha'] = md5($this->input->post('senha'));

            echo 'depois de pegar os elementos';
            //$this->crud->crud_insert('usuarios', $dados, 'usuarios/gerenciar');
        } else {
            echo 'não está validando';
        }

        set_tema('paginas', load_modulo('usuarios_view', 'cadastrar', 'system/usuarios'));
        load_template('template');
    }

    public function gerenciar() {
        initSystem();

        set_tema('paginas', load_modulo('usuarios_view', 'gerenciar', 'system/usuarios'));
        load_template();
    }

    public function editar() {
        initSystem();

        set_tema('paginas', load_modulo('usuarios_view', 'editar', 'system/usuarios'));
        load_template();
    }

    public function excluir() {
        initSystem();

        load_template();
    }

    public function alterar_senha() {
        initSystem();
        set_tema('titulo', 'Alterar senha');
        set_tema('paginas', load_modulo('usuarios_view', 'alterar_senha', 'system/usuarios'));
        load_template();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */