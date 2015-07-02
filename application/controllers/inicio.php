<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Inicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        initSystem();
        set_tema('CSSpagina', '');
        set_tema('JSpagina', '');

        set_tema('paginas', load_modulo('inicio', '', 'system/inicio'));
        load_template('template', 'inicio_view', TRUE);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */