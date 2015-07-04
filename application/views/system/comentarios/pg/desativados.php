<div class="well alert alert-danger">

    <legend><strong>Alunos</strong> - desativados</legend>
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
                <td style="min-width: 10em "><?php // printf('%s', $linha->nome) ?> Nome do aluno</td>
                <td>
                    <span class="label label-important">Último Curso :</span><span> Informática básica</span>
                    <br />
                    <span class="label label-important">Pretende fazer o curso:</span><span> Redes de computadores</span>
                    <br />
                    <span class="label label-important">Comentarios:</span> <a class="label label-info" href="<?php echo base_url('comentarios') ?>">5 comentários</a>
                </td>


                <td style="max-width: 20px">
                    <a href="<?php echo base_url("aluno/reativar/"); ?>" class="btn  btn-block btn-success">Reativar</a>
                    <a href="<?php // echo base_url("doces/excluir/$linha->idposts");  ?>" class="btn  btn-block btn-danger">Excluir</a>
                </td>
            </tr> 
            <?php // } ?>
        </tbody>
    </table>

</div>