<div class="well">
    <legend><strong>Cursos</strong> - cadastrar</legend>
    <div class="row-fluid">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row-fluid">
                <div class="span2">
                    <label for="titulo">PA
                        <input name="pa" id="pa" autofocus="" required="" type="text" class="input-block-level"/>
                    </label>
                </div>
                <div class="span10">
                    <label for="titulo">Nome do curso
                        <input name="nome" id="titulo" required="" type="text" class="input-block-level"/>
                    </label>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3">
                    <label for="titulo">Cara horária total
                        <input name="nome" id="titulo" required="" type="email" class="input-block-level"/>
                    </label>
                </div>
                <div class="span3">
                    <label for="titulo">Cara horária diária
                        <input name="nome" id="titulo" required="" type="email" class="input-block-level"/>
                    </label>
                </div>
                <div class="span3">  
                    <label for="titulo">Previsão de início
                        <input name="nome" id="titulo" required="" type="text" class="input-block-level"/>
                    </label>
                </div>
                <div class="span3">  
                    <label for="titulo">Turno
                        <select name="turno" class="input-block-level">
                            <option>Manhã</option>
                            <option>Tarde </option>
                            <option>Noite</option>
                        </select>
                    </label>
                </div>
            </div>


            <label for="">Detalhes do curso
                <textarea placeholder="Cole aqui toda a ementa do curso" name="detalhes"  rows="5" class="input-block-level"></textarea>
            </label>
            <div class="btn-toolbar pull-right">
                <input type="reset" value="Limpar" class="btn btn-large"/>
                <input type="submit" class="btn btn-success btn-large" value="Cadastrar"/>
            </div>
        </form>
    </div>
</div>