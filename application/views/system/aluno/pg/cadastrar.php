<div class="well">
    <legend><strong>Aluno</strong> - cadastrar</legend>
    <div class="row-fluid">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row-fluid">
                <div class="span6">
                    <label for="titulo">Nome aluno
                        <input name="nome" id="titulo" autofocus="" required="" type="text" class="input-block-level"/>
                    </label>


                    <label for="titulo">Ultimo curso que participou
                        <select name="cursos" class="input-block-level" required="">
                            <option>Curso técnico em iformática</option>
                            <option>Manutenção de computadores</option>
                            <option>Informática básica</option>
                            <option></option>
                        </select>
                    </label>


                </div>
                <div class="span6">
                    <label for="">Detalhes
                        <textarea name="detalhes"  rows="5" class="input-block-level"></textarea>
                    </label>
                </div>

            </div>


            <div class="btn-toolbar pull-right">
                <input type="reset" value="Limpar" class="btn btn-large"/>
                <input type="submit" class="btn btn-success btn-large" value="Cadastrar"/>
            </div>
        </form>
    </div>
</div>