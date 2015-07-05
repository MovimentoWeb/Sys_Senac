<div class="well">

    <legend><strong>Usuários</strong> - Gerenciar</legend>
    <table class="table table-hover table-striped">
        <thead>
            <tr>

                <th>Dados</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //$dados = $this->crud->crud_select('posts')->result();
            //foreach ($dados as $linha) {
            ?>
            <tr>
                <td style="max-width: 300px">

                    <p><strong>Nome: </strong><?php //printf('%s', $linha->detalhes)       ?>Reginaldo josé de Lima</p>
                    <p><strong>Tipo: </strong> <?php // printf('%s', $linha->idposts)       ?>Professor </p>
                    <p><strong>Detalhes: </strong><?php // printf('%s', $linha->idposts)       ?>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </td>
                <td>
                    <a href="<?php echo base_url("usuarios/editar/"); ?>" class="btn btn-block btn-warning">Alterar senha</a>
                    <a href="<?php echo base_url("usuarios/editar/"); ?>" class="btn btn-block btn-warning">Editar</a>
                    <a href="<?php // echo base_url("doces/excluir/$linha->idposts");       ?>" class="btn btn-block btn-danger">Excluir</a>
                </td>
            </tr> 
            <?php // } ?>
        </tbody>
    </table>

</div>