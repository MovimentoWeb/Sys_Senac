<div class="well">

    <legend><strong>Usuários</strong> - Gerenciar</legend>
    <table class="table table-hover table-striped">
        <thead>
            <tr>

                <th>Dados do usuário</th>
                <th style="text-align: center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dados = $this->crud->crud_select('usuarios')->result();
            foreach ($dados as $linha) {
                ?>
                <tr>
                    <td style="max-width: 300px">

                        <p><strong>Nome: </strong><?php echo $linha->nome; ?></p>
                        <p><strong>Tipo: </strong> <?php echo $linha->tipoUsuario; ?></p>
                        <p><strong>Detalhes: </strong><?php echo $linha->detalhes; ?></p>
                    </td>
                    <td>
                        <a href="<?php echo base_url("usuarios/alterar_senha/$linha->idusuarios "); ?>" class="btn btn-block btn-warning">Alterar senha</a>
                        <a href="<?php echo base_url("usuarios/editar/$linha->idusuarios"); ?>" class="btn btn-block btn-warning">Editar</a>
                        <a href="<?php echo base_url("usuarios/excluir/$linha->idusuarios"); ?>" class="btn btn-block btn-danger">Excluir</a>
                    </td>
                </tr> 
            <?php } ?>
        </tbody>
    </table>

</div>