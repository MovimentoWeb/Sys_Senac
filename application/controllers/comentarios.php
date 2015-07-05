<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Comentarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        initSystem();

        set_tema('titulo', 'Comentarios');
        set_tema('paginas', load_modulo('comentarios_view', 'meus_comentarios', 'system/comentarios'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function novo_comentario() {
        initSystem();

        set_tema('titulo', 'Comentarios');
        set_tema('paginas', load_modulo('comentarios_view', 'novo_comentario', 'system/comentarios'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function meus_comentarios() {
        initSystem();

        set_tema('titulo', 'Comentarios');
        set_tema('paginas', load_modulo('comentarios_view', 'meus_comentarios', 'system/comentarios'));
        load_template('template', 'inicio_view', TRUE);
    }

    public function desativados() {
        initSystem();

        set_tema('titulo', 'Desativados');
        set_tema('paginas', load_modulo('comentarios_view', 'desativados', 'system/comentarios'));
        load_template('template', 'inicio_view', TRUE);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */