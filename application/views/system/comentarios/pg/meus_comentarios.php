<div class="well">

    <legend><strong>Meus comentarios</strong></legend>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Cod</th>
                <th>Titulo</th>
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
                <td>5</td>
                <td><?php //printf('%s', $linha->idposts);                ?>nome aluno</td>
                <td style="max-width: 300px">
                    <p><strong>Detalhes</strong><?php //printf('%s', $linha->detalhes)  ?></p>
                    <p><strong>Postado por:</strong> <?php // printf('%s', $linha->idposts)  ?> </p>
                    <p><strong>Data postagem</strong><?php // printf('%s', $linha->idposts)  ?></p>
                </td>

                <td>
                    <a href="<?php echo base_url("comentarios/desativados"); ?>" class="btn btn-block btn-danger">Desativar</a>
                </td>
            </tr> 
            <?php // } ?>
        </tbody>
    </table>

</div>