<div class="container aluno">
    <div class="row-fluid">
        <div class="span3">
            <ul class="nav nav-tabs nav-stacked">
                <li class="alert alert-danger"><strong>Painel Comentários</strong></li>
                <li><a  href="<?php echo base_url("comentarios"); ?>">Gerenciar</a></li>
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

                case 'desativados':
                    include_once 'pg/desativados.php';
                    break;

                default:
                    echo 'Página não ertfhncontrada';
                    break;
            }
            ?>
        </div>
    </div>
</div>