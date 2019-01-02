<?php require_once('menu.html') ?>
<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            body{
                min-width: 920px;
            }
            form div h3{
                color:grey; 
                font-size:16px;
            }
        </style>
    </head>
    <body>
        <main role="main">
            <form autocomplete="off">
                <div class="container ml-3 mb-0 p-0">
                    <a href="home.php "class="btn btn-link">Voltar</a>
                    |
                    <input type="submit" class="btn btn-link" value="Salvar" >
                </div>
                <div class="bg-light container border border-darck pb-5 rounded" ><!--contorno e bg do formulario-->
                    <div class="text-secondary p-2">
                        <h4>Nova diario</h4>
		                <hr>
                    </div>
                    <div class="container form-row"><!--primeira linha do formulario-->
                        <div class="col">
                                <label for="escola"><h3>Escola</h3></label>
                                <input type="text" class="form-control " id="escola" placeholder="Escola" name="">
                        </div>
    		            <div class="col-sm-2 form-group">
                            <label><h3>Turno</h3></label>
                            <select name="turno" class="form-control">
                                <option>Selecione</option>
                                <option>1º Manha</option>
                                <option>2º Tarde</option>
                                <option>3º Noite</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="turma"><h3>Turma</h3></label>
                            <input type="text" class="form-control text-uppercase" id="turma" placeholder="Turma" name="">
                        </div>
                        <div class="col">
                            <label for="cmpte_curricular"><h3>Componente curricular</h3></label>
                            <input type="text" class="form-control" id="cmpte_curricular" placeholder="Componente curricular" name="">
                        </div>
                    </div><!--primeira linha do formulario-->
                    <div class="container form-row"><!--segunda linha do formulario-->
        		        <div class="col">
                            <label for="professor"><h3>Professor</h3></label>
        		            <input type="text" class="form-control" id="professor" name="professor" placeholder="Professor" name="professor">
        	            </div>  
        		        <div class="col-sm-2">
                            <label for="serie"><h3>Serie</h3></label>
                            <input type="text" class="form-control" id="serie" placeholder="Serie" name="serie">
        		        </div>
        		        <div class="col-sm-2">
                                <label for="sala"><h3>Sala</h3></label>
                                <input type="number" class="form-control" id="sala" placeholder="Sala" name="sala">
                        </div>
                        <div class="col-dm-2">
                                <label for="aulas-prevista"><h3>Aulas previstas</h3></label>
                                <input type="number" class="form-control" id="aulas-prevista" placeholder="Aulas previstas" name="aulas-prevista">
                        </div>
                    </div><!--segunda linha do formulario-->
                </div><!--contorno e bg do formulario-->
            </form>
        </main><!-- /.container -->
    </body>
</html>
