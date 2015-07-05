<dvi class="container">
    <div class="row-fluid">
        <header id="layout-header">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse">
                                <ul class="nav"> 
                                    <li ><a class="brand" href="<?php echo base_url(); ?>"><strong>Sis-Tel</strong></a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo base_url("usuarios"); ?>"><strong>Usuários</strong></a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo base_url("aluno/gerenciar"); ?>"><strong>Alunos</strong></a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo base_url("cursos"); ?>" ><strong>Cursos</strong></a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo base_url("comentarios"); ?>"><strong>Comentários</strong></a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo base_url("contato"); ?>"><strong>Contato</strong></a></li>
                                    <li class="divider-vertical"></li>
                                </ul>
                                <ul class="nav pull-right navbar">
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo base_url('aluno/gerenciar') ?>" >Ligar</a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="">Minha Conta</a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="">Sair</a></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </header>
</dvi>