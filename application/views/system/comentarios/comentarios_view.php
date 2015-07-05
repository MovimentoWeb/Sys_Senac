<div class="container aluno">
    <div class="row-fluid">
        <div class="span3">
            <ul class="nav nav-tabs nav-stacked">
                <li class="alert alert-danger"><strong>Painel Comentários</strong></li>
                <li><a  href="<?php echo base_url("aluno/gerenciar"); ?>">Novo Comentário</a></li>
                <li><a  href="<?php echo base_url("comentarios/meus_comentarios"); ?>">Meus comentários</a></li>
                <li><a  href="<?php echo base_url("comentarios/desativados"); ?>">Comentarios desativados</a></li>
            </ul>
        </div>
        <div class="span9">
            <?php
            switch ($tela) {

                case 'meus_comentarios':
                    include_once 'pg/meus_comentarios.php';
                    break;

                case 'editar':
                    include_once 'pg/editar.php';
                    break;

                case 'desativados':
                    include_once 'pg/desativados.php';
                    break;

                default:
                    echo '<div class="alert alert-danger">Página não Encontrada</div>';
                    break;
            }
            ?>
        </div>
    </div>
</div>