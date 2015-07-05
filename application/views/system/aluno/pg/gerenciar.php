<div class="well">

    <legend><strong>Aluno</strong> - Gerenciar</legend>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Detalhes</th>
                <th style="text-align: center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //$dados = $this->crud->crud_select('posts')->result();
            //foreach ($dados as $linha) {
            ?>
            <tr>
                <td><?php //printf('%s', $linha->idposts);           ?> REginaldo José de Lima</td>
                <td style="max-width: 300px">
                    <p><strong>Último Curso</strong><?php //printf('%s', $linha->detalhes)           ?> Informática básica</p>
                    <p><strong>Ano de conclusão:</strong> <?php // printf('%s', $linha->idposts)           ?> 2009</p>
                </td>
                <td>
                    <a href="<?php echo base_url("aluno/ligar"); ?>" class="btn btn-block btn-primary">(5) Ligar</a>
                    <a href="<?php echo base_url("aluno/ligar"); ?>" class="btn btn-block btn-success">(2) Comentar</a>
                    <a href="<?php // echo base_url("doces/excluir/$linha->idposts");           ?>" class="btn btn-block btn-danger">Desativar</a>
                </td>

            </tr> 
            <tr>
                <td><?php //printf('%s', $linha->idposts);           ?> REginaldo José de Lima</td>
                <td style="max-width: 300px">
                    <p><strong>Último Curso</strong><?php //printf('%s', $linha->detalhes)           ?> Informática básica</p>
                    <p><strong>Ano de conclusão:</strong> <?php // printf('%s', $linha->idposts)           ?> 2009</p>
                </td>
                <td>
                    <a href="<?php echo base_url("aluno/ligar"); ?>" class="btn btn-block btn-primary">(5) Ligar</a>
                    <a href="<?php echo base_url("aluno/ligar"); ?>" class="btn btn-block btn-success">(2) Comentar</a>
                    <a href="<?php // echo base_url("doces/excluir/$linha->idposts");           ?>" class="btn btn-block btn-danger">Desativar</a>
                </td>

            </tr> 
            <tr>
                <td><?php //printf('%s', $linha->idposts);           ?> REginaldo José de Lima</td>
                <td style="max-width: 300px">
                    <p><strong>Último Curso</strong><?php //printf('%s', $linha->detalhes)           ?> Informática básica</p>
                    <p><strong>Ano de conclusão:</strong> <?php // printf('%s', $linha->idposts)           ?> 2009</p>
                </td>
                <td>
                    <a href="<?php echo base_url("aluno/ligar"); ?>" class="btn btn-block btn-primary">(5) Ligar</a>
                    <a href="<?php echo base_url("aluno/ligar"); ?>" class="btn btn-block btn-success">(2) Comentar</a>
                    <a href="<?php // echo base_url("doces/excluir/$linha->idposts");           ?>" class="btn btn-block btn-danger">Desativar</a>
                </td>

            </tr> 
            <?php // } ?>
        </tbody>
    </table>

</div>