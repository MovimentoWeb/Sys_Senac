<div class="container aluno">
    <div class="row-fluid">
        <div class="span3">
            <ul class="nav nav-tabs nav-stacked">
                <li class="alert alert-danger"><strong>Painel Usuários</strong></li>
                <li><a  href="<?php echo base_url("usuarios/cadastrar"); ?>">Cadastrar</a></li>
                <li><a  href="<?php echo base_url("usuarios/gerenciar"); ?>">Gerenciar</a></li>
                <li><a  href="<?php echo base_url("usuarios/alterar_senha"); ?>">Alterar senha</a></li>
            </ul>
        </div>
        <div class="span9">
            <?php
            switch ($tela) {
                case 'cadastrar':
                    include_once 'pg/cadastrar.php';
                    break;

                case 'gerenciar':
                    include_once 'pg/gerenciar.php';
                    break;

                case 'editar':
                    include_once 'pg/editar.php';
                    break;
                case 'alterar_senha':
                    include_once 'pg/alterar_senha.php';
                    break;

                case 'excluidos':
                    include_once 'pg/excluidos.php';
                    break;

                default:
                    echo 'Página não ertfhncontrada';
                    break;
            }
            ?>
        </div>
    </div>
</div>