<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Crud_model extends CI_Model {

//inserindo dados em tabelas
    public function crud_insert($tabela, $dados = NULL, $redirecionar = FALSE) {
        echo 'entrou no crud insert - ';
        if ($dados != null) {
            $this->db->insert($tabela, $dados);
            if ($redirecionar) {
                redirect($redirecionar);
            } else {
                redirect(current_url());
            }
        }
    }

    public function crud_select($tabela, $id = NULL) {
        if ($id != null) {
            $this->db->where("id" . $tabela, $id);
            return $this->db->get($tabela, 1);
        } else {
            return $this->db->get($tabela);
        }
    }

    public function crud_update($tabela, $dados, $id = NULL, $redirecionar = FALSE) {
        //echo 'entrou no crud update - ';

        if ($id != NULL) {
            $this->db->where("id" . $tabela, $id);
            $this->db->update($tabela, $dados);
            if ($redirecionar) {
                redirect($redirecionar);
            } else {
                redirect(current_url());
            }
        } else {
            echo 'Tabela ou identificador não especificado';
            if ($redirecionar) {
                redirect($redirecionar);
            } else {
                redirect(current_url());
            }
        }
    }

    public function crud_excluir($tabela, $id = null, $redirecionar = '') {
        if ($id != NULL) {

            $this->db->where('id'.$tabela, $id);
            $this->db->delete($tabela);
            if ($redirecionar) {
                redirect($redirecionar);
            }
        } else {
            $this->db->delete($tabela);
            if ($redirecionar) {
                redirect($redirecionar);
            }
        }
    }

}
