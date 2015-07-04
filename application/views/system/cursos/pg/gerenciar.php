<div class="well">

    <legend><strong>Cursos</strong> - Gerenciar</legend>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Detalhes do curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //$dados = $this->crud->crud_select('posts')->result();
            //foreach ($dados as $linha) {
            ?>
            <tr>
                <td>
                    <p><strong>PA: </strong><?php //printf('%s', $linha->detalhes)           ?></p>
                    <p><strong>Nome Curso</strong><?php //printf('%s', $linha->detalhes)           ?></p>
                    <p><strong>Carga horária total: </strong> <?php // printf('%s', $linha->idposts)           ?> </p>
                    <p><strong>Carga horária Diária: </strong> <?php // printf('%s', $linha->idposts)           ?> </p>

                </td>
                <td>
                    <p><strong>Previsão de início</strong></p>
                    <p><strong>Turno: </strong> <?php // printf('%s', $linha->idposts)           ?> </p>
                    <p><strong>Cadastrado por: </strong><?php // printf('%s', $linha->idposts)            ?></p>
                    <p><strong>Atualizado por: </strong><?php // printf('%s', $linha->idposts)           ?></p>
                </td>
                <td></td>
                <td>
                    <a href="<?php echo base_url("cursos/editar"); ?>" class="btn btn-block btn-warning">Editar</a>
                    <a href="<?php echo base_url("cursos/desativados"); ?>" class="btn btn-block btn-danger">Desativar</a>
                </td>
            </tr> 
            <?php // } ?>
        </tbody>
    </table>

</div>