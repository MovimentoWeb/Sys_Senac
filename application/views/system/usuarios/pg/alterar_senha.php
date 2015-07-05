<div class="well">
    <legend><strong>Usuarios</strong> - Alterar senha</legend>
    <div class="row-fluid">
        <form action="" method="post">

            <p>Nome usuario: 
                <strong>Nome usuário</strong>
            </p>
            <p>E-mail: 
                <strong>E-mail usuário</strong>
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
        </form>
    </div>
</div>