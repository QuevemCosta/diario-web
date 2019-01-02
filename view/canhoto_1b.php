<?php require_once('menu.html') ?>
<head>
	<style type="text/css">
		body{
			min-width: 1024px;
		}
	</style>
</head>
<body>
	<form autocomplete="off">
			<div class="navbar ml-3 mb-0 p-0">
	  			<span>
		  			<a href="home.php " class="btn btn-link">Voltar</a>
		  			|
		  			<button type="submit" class="btn btn-link">Salvar</button>
		  			|
	  				<button class="btn btn-link">Imprimir</button>
		  		</span>
	  			<ul class="bg-ligth nav nav-tabs" >
	                  <li class="nav-item">
	                    <a class="nav-link active" href="#">1º Bimestre</a>                    
	                  </li>
	                  <li class="nav-item">
	                    <a class="nav-link" href="">2º Bimestre</a>
	                  </li>
	                  <li class="nav-item">
	                    <a class="nav-link" href="">3º Bimestre</a>
	                  </li>
	                  <li class="nav-item">
	                    <a class="nav-link" href="">4º Bimestre</a>
	                  </li>                  
	                </ul>
	  		</div>
			<main role="main" class="container mb-5">   	
        		<div class="border bg-light mt-3 rounded">
	            	<div class="font-weight-bold text-secondary text-left bg-light">
		                <ul class="nav nav-tabs ">
		                 	<li class="nav-item">
		                    	<a class="nav-link " href="frequencia_1b.php">Frequência</a>                   
		                  	</li>
		                  	<li class="nav-item">
		                    	<a class="nav-link" href="registro_conteudo_1b.php">Registro Do Conteúdo e Atividades</a>
		                  	</li>
		                  	<li class="nav-item">
		                    	<a class="nav-link" href="mapa_avaliacao_1b.php">Mapa de Avaliação</a>
		                  	</li>
		                  	<li class="nav-item">
		                   		<a class="nav-link active" href="canhoto_1b.php">Canhoto</a>
		                  	</li>
		                  	<li class="nav-item">
		                    	<a class="nav-link" href="diagnostico_inicial_1b.php">Diagnóstico inicial</a>
		                  	</li>               
		                </ul>
	            	</div>
	            	<div class="form-row bg-light text-secondary ml-2 pt-1 rounded">
	            			<div class="col-sm p-2 mr-1">
	            				<h5>Componente curricular:<span class="ml-1">Matematica</span></h5>
	            			</div>
	            			<div class="col-sm p-2 mr-1">
	            				<h5>Bimestre:<span class="ml-1">1</span></h5>
	            			</div>
	            			<div class="col-sm p-2 mr-1">
	            				<h5>Turma:<span class="ml-1">M9323</span></h5>
	            			</div>            			
		            	</div>
	            	<div class="form-row bg-secondary text-white text-whiegth-bold pt-1 rounded">
            			<div class="col-dm-1">
            				<h5>Nº</h5>
            			</div>
            			<div class="col-sm-5 text-center">
            				<h5>Aluno</h5>
            			</div><div class="col-sm-3">
            				<h5>Nota Final</h5>
            			</div><div class="col-sm-3 ">
            				<h5>Faltas</h5>
            			</div>
	            	</div>
	            	<div class="form-row pt-1 ml-1 rounded">
            			<div class="col-dm-1 text-secondary bg-light border pt-1 mr-1 rounded">
            				<h5>01</h5>
            			</div>
            			<div class="col-sm-5 col-cm-1 text-secondary bg-light border pt-1 mr-1 rounded">
            				<p>Raimundo nogueira silva figueiredo cunha lima</p>
            			</div><div class="col-sm-3 text-secondary bg-light border pt-1 mr-1 rounded">
            				<p>90</p>
            			</div><div class="col-sm-3 text-secondary bg-light border pt-1 mr-1 rounded">
            				<p>10</p>
            			</div>
	            	</div>
	            	<hr class=" mb-1">
	            	<div class="container">
		            	<div class="form-row bg-light text-secondary pt-1 w-75 rounded">
	            			<div class="col p-2 mr-1">
	            				<h5>Aulas previstas</h5>
	            				<input type="number" class="form-control" name="">
	            			</div>
	            			<div class="col p-2 mr-1">
	            				<h5>Aulas dadas</h5>
	            				<input type="number" class="form-control" name="">
	            			</div>
	            			<div class="col p-2 mr-1">
	            				<h5>Data de entrega</h5>
	            				<input type="date" class="form-control" name="">
	            			</div> 
	            			<div class="col-sm-4 p-2 mr-1">
	            				<h5>Assinatura do professor:</h5>
	            				<span class="w-25 bg-info mt-3 border rounded"></span>
	            			</div>           			
		            	</div>
		            </div>
	            </div>
	        </main>
	    </form>
</body>