<?php require_once('menu.html') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">	
</head>
    <body>
        <div class="ml-3 mb-0 p-0">
             <a href="novo_diario.php" class="btn btn-link">Novo Diário</a>
	   </div>
	<main role="main" class="navbar pb-5">
            <div class="bg-light container starter bg-info border border-darck rounded" >
                <span class="nav font-weight-bold text-secondary text-left">
                    <h2 class="">Diários</h2>
                </span>
                <hr class="row m-2 w-50 ">
        	<div class=""><!--Viw dos diarios do professor-->
                    <span class="nav font-weight-bold text-secondary">
                        <legend>Esc 01</legend>
                    </span>
                    <ul class="nav nav-tabs ">
                        <li class="nav-item">
                            <a class="nav-link active" href="diarios.php">Manha</a><!--A viw de diario_manha sera na pagina diario--> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="diarios_tarde.php">Tarde</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="diarios_noite.php">Noite</a>
                        </li>                  
                    </ul>
        	</div><!--Viw dos diarios do professor-->
            <!--Diarios propiamente dito-->
            <div class=" container w-100 rounded"><!--Diarios propiamente dito-->
                <div class="row">
                    <a href="frequencia_1b.php" class="col-sm text-white p-2 btn btn-info m-2 w-auto rounded">
                        <h3>Lingua Potuguesa</h3>
                        <h4>Turma 01</h4>
                        <h6>4º aula (s)</h6>
                        <h6>10h a 10:45 h</h6>
                    </a>
                    <a class="col-sm text-white p-2 btn btn-info m-2 w-auto rounded">
                        <h3>Matematica</h3>
                        <h4>Turma 02</h4>
                        <h6>1º e 2º aula (s)</h6>
                        <h6>08h a 9:15h</h6>
                    </a>
                </div>
                <hr>
            </div>
            <div class=""><!--Viw dos diarios do professor-->
                <span class="nav font-weight-bold text-secondary text-left">
                    <legend>Esc 02</legend>
                </span>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="diarios.php">Manha</a><!--A viw de diario_manha sera na pagina diario-->
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="diarios_tarde.php">Tarde</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="diarios_noite.php">Noite</a>
                  </li>                  
                </ul>
          </div><!--Viw dos diarios do professor-->
            <div class=" container w-100 rounded"><!--Diarios propiamente dito-->
                <div class="row">
                    <div class="col-sm text-white p-2 btn btn-info m-2 w-auto rounded">
                        <h3>Lingua Potuguesa</h3>
                        <h4>Turma 01</h4>
                        <h6>4º aula (s)</h6>
                        <h6>10h a 10:45 h</h6>
                    </div>
                    <div class="col-sm text-white p-2 btn btn-info m-2 w-auto rounded">
                        <h3>Matematica</h3>
                        <h4>Turma 02</h4>
                        <h6>1º e 2º aula (s)</h6>
                        <h6>08h a 9:15h</h6>
                    </div>
                </div>
            </div>
        </main><!-- /.container -->
    </body>
</html>
