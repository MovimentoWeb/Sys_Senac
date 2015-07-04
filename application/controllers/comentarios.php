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
        set_tema('paginas', load_modulo('comentarios_view', 'gerenciar', 'system/comentarios'));
        load_template('template', 'inicio_view', TRUE);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */