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
        initSystem();

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