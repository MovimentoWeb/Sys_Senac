<div class="well">

    <legend><strong>Doces</strong> - Gerenciar</legend>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Cod</th>
                <th>Título</th>
                <th>Detalhes</th>
                <th>Categorias</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //$dados = $this->crud->crud_select('posts')->result();
            //foreach ($dados as $linha) {
            ?>
            <tr>
                <td><?php //printf('%s', $linha->idposts);   ?></td>
                <td style="min-width: 100px "><?php // printf('%s', $linha->nome)   ?></td>
                <td style="max-width: 300px">
                    <p><strong>Detalhes</strong><?php //printf('%s', $linha->detalhes)   ?></p>
                    <p><strong>Postado por:</strong> <?php // printf('%s', $linha->idposts)   ?> </p>
                    <p><strong>Data postagem</strong><?php // printf('%s', $linha->idposts)   ?></p>
                </td>
                <td style="max-width: 200px;">
                    Categorias1; Categorias1; Categorias1; Categorias1; Categorias1; Categorias1; 
                </td>

                <td>
                    <a href="<?php // echo base_url("doces/ativo/$linha->idposts");   ?>" class="btn btn-mini btn-block"><?php // $linha->idposts == 50 ? printf('Ativar') : printf('Desativar');   ?></a>
                    <a href="<?php echo base_url("usuarios/editar/"); ?>" class="btn btn-mini btn-block btn-warning">Editar</a>
                    <a href="<?php // echo base_url("doces/excluir/$linha->idposts");   ?>" class="btn btn-mini btn-block btn-danger">Excluir</a>
                </td>
            </tr> 
            <?php // } ?>
        </tbody>
    </table>

</div>