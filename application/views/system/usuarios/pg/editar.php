<legend><strong>Usuarios</strong> - Editar</legend>
<div class="row-fluid">
    <form  method="POST">
        <?php
        erros_validacao();
        $id = $this->uri->segment(3);
        $dados = $this->crud->crud_select('usuarios', $id)->result();
        foreach ($dados as $linha) {
            ?>
            <label for="nome">Nome usuario
                <input name="nome" id="nome" autofocus="" value="<?php echo $linha->nome ?>" required="" type="text" class="input-block-level"/>
            </label>
            <div class="row-fluid">
                <div class="span4">
                    <label for="email">E-mail
                        <input disabled="" value="<?php echo $linha->email; ?>" type="email" class="input-block-level"/>
                    </label>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span7 well well-small">
                    <p><strong>Tipo usuario:</strong></p>
                    <label class="checkbox inline"><input name="tipoUsuario" <?php if ($linha->tipoUsuario == 'Coordenadora') {
            echo 'checked=""';
        } ?> type="radio"  value="Coordenador"> Coordenadora | </label>
                    <label class="checkbox inline"><input name="tipoUsuario" <?php if ($linha->tipoUsuario == 'Secretaria') {
            echo 'checked=""';
        } ?> type="radio"  value="Secretaria"> Secretaria | </label>
                    <label class="checkbox inline"><input name="tipoUsuario" <?php if ($linha->tipoUsuario == 'Professor') {
            echo 'checked=""';
        } ?> type="radio"  value="Professor"> Professsor </label>
                </div>
            </div>
            <label for="">Detalhes
                <textarea name="detalhes"  rows="3" class="input-block-level"><?php echo $linha->detalhes ?></textarea>
            </label>
        <input name="id" type="hidden" value="<?php echo $linha->idusuarios ?>" />
            <div class="btn-toolbar pull-right">
                <input type="reset" value="Limpar" class="btn btn-large"/>
                <input type="submit" class="btn btn-success btn-large" value="Atualizar"/>
            </div>
<?php } ?>
    </form>
</div>