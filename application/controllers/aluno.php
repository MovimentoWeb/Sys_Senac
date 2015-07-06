<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Aluno extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        initSystem();

        set_tema('paginas', load_modulo('aluno_view', 'cadastrar', 'system/aluno'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function cadastrar() {
        initSystem();

        if ($this->form_validation->rum() == TRUE) {
            echo 'já está validando';
        }

        set_tema('titulo', 'Cadastrar');
        set_tema('paginas', load_modulo('aluno_view', 'cadastrar', 'system/aluno'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function gerenciar() {
        initSystem();

        set_tema('titulo', 'Gerenciar');
        set_tema('paginas', load_modulo('aluno_view', 'gerenciar', 'system/aluno'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function editar() {
        initSystem();
        set_tema('titulo', 'Editar');
        set_tema('paginas', load_modulo('aluno_view', 'editar', 'system/aluno'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function desativados() {
        initSystem();
        set_tema('titulo', 'Alunos desativados');
        set_tema('paginas', load_modulo('aluno_view', 'desativados', 'system/aluno'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function ligar() {
        initSystem();
        set_tema('titulo', 'Ligar');
        set_tema('paginas', load_modulo('aluno_view', 'ligar', 'system/aluno'));
        load_template('template', 'inicio_view', TRUE);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */