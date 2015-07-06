<legend><strong>Usuarios</strong> - cadastrar</legend>
<div class="row-fluid">
    <form  method="POST" action="<?php echo base_url('usuarios/cadastrar') ?>">
        <?php
        if (validation_errors()) {
            echo '<div class="alert alert-danger">' . validation_errors() . '</div>';
        }
        ?>
        <?php erros_validacao() ?>
        <label for="nome">Nome usuario
            <input name="nome" id="nome" autofocus="" required="" type="text" class="input-block-level"/>
        </label>
        <div class="row-fluid">
            <div class="span4">
                <label for="email">E-mail
                    <input name="email" id="email" required="" type="email" class="input-block-level"/>
                </label>
            </div>
            <div class="span4">  
                <label for="senha">Senha
                    <input name="senha" id="senha" required="" type="password" class="input-block-level"/>
                </label>
            </div>
            <div class="span4">  
                <label for="senha2">Repita a senha
                    <input name="senha2" id="senha2" required="" type="password" class="input-block-level"/>
                </label>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span7 well well-small">
                <p><strong>Tipo usuario:</strong></p>
                <label class="checkbox inline"><input name="tipoUsuario" type="radio"  value="Coordenadora"> Coordenadora | </label>
                <label class="checkbox inline"><input name="tipoUsuario" type="radio"  value="Secretaria"> Secretaria | </label>
                <label class="checkbox inline"><input name="tipoUsuario" type="radio"  value="Professor"> Professsor </label>
            </div>
        </div>
        <label for="">Detalhes
            <textarea name="detalhes"  rows="3" class="input-block-level"></textarea>
        </label>
        <div class="btn-toolbar pull-right">
            <input type="reset" value="Limpar" class="btn btn-large"/>
            <input type="submit" class="btn btn-success btn-large" value="Cadastrar"/>
        </div>
    </form>
</div>