<div class="well">
    <legend><strong>Usuarios</strong> - editar</legend>
    <div class="row-fluid">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="titulo">Nome usuario
                <input name="nome" id="titulo" autofocus="" required="" type="text" class="input-block-level"/>
            </label>
            <div class="row-fluid">
                <div class="span4">
                    <label for="titulo">E-mail
                        <input disabled="" type="text" class="input-block-level"/>
                    </label>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span7 well well-small">
                    <p><strong>Tipo usuario:</strong></p>
                    <label class="checkbox inline"><input name="1" type="radio"  value="2"> Coordenador |</label>
                    <label class="checkbox inline"><input name="1" type="radio"  value="4"> Professsor |</label>
                    <label class="checkbox inline"><input name="1" type="radio"  value="3"> Secretaria</label>
                </div>

                <div class="span5 ">
                    <p><strong>Imagens para exibição (tamanho grande)</strong></p>
                    <input name="img1" class="input-block-level" type="file" />    
                </div>
            </div>
            <label for="">Detalhes
                <textarea name="detalhes" placeholder="Você ainda não adicionou nenhum detalhe sobre este usuario, adicione agora!"  rows="3" class="input-block-level"></textarea>
            </label>
            <div class="btn-toolbar pull-right">
                <input type="reset" value="Limpar" class="btn btn-large"/>
                <input type="submit" class="btn btn-success btn-large" value="Cadastrar"/>
            </div>
        </form>
    </div>
</div>