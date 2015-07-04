<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cursos extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        initSystem();
        set_tema('titulo', 'Cursos');
        set_tema('paginas', load_modulo('cursos_view', 'cadastrar', 'system/cursos'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function cadastrar() {
        initSystem();

        set_tema('titulo', 'Cadastrar');
        set_tema('paginas', load_modulo('cursos_view', 'cadastrar', 'system/cursos'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function gerenciar() {
        initSystem();

        set_tema('titulo', 'Gerenciar');
        set_tema('paginas', load_modulo('cursos_view', 'gerenciar', 'system/cursos'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function editar() {
        initSystem();
        set_tema('titulo', 'Editar');
        set_tema('paginas', load_modulo('cursos_view', 'editar', 'system/cursos'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function desativados() {
        initSystem();
        set_tema('titulo', 'Desativados');
        set_tema('paginas', load_modulo('cursos_view', 'desativados', 'system/cursos'));
        load_template('template', 'inicio_view', TRUE);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */