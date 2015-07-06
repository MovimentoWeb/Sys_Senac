<div class="well">
    <legend><strong>Usuarios</strong> - Alterar senha</legend>
    <div class="row-fluid">
        <form method="post">
            <?php
            $id = $this->uri->segment(3);
            $dados = $this->crud->crud_select('usuarios', $id)->result();
            foreach ($dados as $linha) {
                ?>
                <p>Nome usuario: 
                    <strong><?php echo $linha->nome ?> </strong>
                </p>
                <p>E-mail: 
                    <strong><?php echo $linha->email ?></strong>
                </p>
                <hr />
                <div class="row-fluid">
                    <label for="titulo" class="span6">Senha Atual
                        <input name="nome" required="" id="titulo" type="text" class="input-block-level"/>
                    </label>
                </div>
                <div class="row-fluid">
                    <label for="titulo" class="span6">Nova senha 
                        <input name="nome" id="titulo" required="" type="password" class="input-block-level"/>
                    </label>
                </div>
                <div class="row-fluid">
                    <label for="titulo" class="span6">Repita a nova senha
                        <input name="nome" id="titulo" required="" type="password" class="input-block-level"/>
                    </label>
                </div>
                <div class="form-actions">
                    <div class="pull-right">
                        <a href="<?php echo base_url('usuarios/gerenciar') ?>" class="btn btn-large"/>Cancelar</a>
                        <input type="submit" class="btn btn-success btn-large" value="Atualizar"/>
                    </div>
                </div>
            <?php } ?>
        </form>
    </div>
</div>