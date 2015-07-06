<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/* * *********************************************
 *             FUNÇÕES INICIO           	**
 * ********************************************* */

function initSystem() {
    $CI = &get_instance();
 

    set_tema('CSSpagina', '');
    set_tema('JSpagina', '');

    set_tema('CSSglobal', load_css(array('bootstrap', 'bootstrap-responsive')), FALSE);
    set_tema('CSSglobal', load_css(array('style')), FALSE); //Este arquivo tem que ficar sozinho e nesta posição
    set_tema('JSglobal', load_js(array('jquery', 'bootstrap')), FALSE); //Este arquivo tem que ficar sozinho e nesta posição

    set_tema('titulo_padrao', 'Sistema Senac');
    set_tema('header', load_modulo('header', '', 'includes'));

    set_tema('footer', load_modulo('footer', '', 'includes'));
    set_tema('template', 'inicio_view');
}
