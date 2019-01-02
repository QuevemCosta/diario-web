<?php require_once('menu.html') ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<link rel="stylesheet" type="text/css" href="css/tb_chamada.css">
  	<style type="text/css">
  	.borda-3{

    	border-top:0;
    	border-left: 1px;
    	border-bottom: 1px;
    	border-right: 1px;
    	border-style: solid;
     	border-color: #A4A4A4;
    }
    input[type=number]::-webkit-inner-spin-button { 
	    -webkit-appearance: none;
	    cursor:pointer;
	    display:block;
	    width:8px;
	    color: #333;
	    text-align:center;
	    position:relative;
	}
   input[type=number] { 
	   	-moz-appearance: textfield;
	   	appearance: textfield;
	   	margin: 0;
	}

  	</style>
  </head>
  <body>
  	<form autocomplete="off">
  		<div class="navbar ml-3 mb-0 p-0">
  			<div>
	  			<a href="home.php " class="btn btn-link">Voltar</a>
	  			|
	  			<button type="submit" class="btn btn-link">Salvar</button>
	  			|
	  			<button class="btn btn-link">Importar Aluno</button>
	  			|
	  			<button class="btn btn-link">Imprimir</button>
	  		</div>
  			<ul class="nav nav-tabs" style="background-color: #ebedef;" >
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
  		<main roler="main" class="container-fluide">  		
    		<div class="starter-template pt-2" ><!--cabeçalho do diario-->
        		<div class="borda-3 bg-white rounded">
	            	<div class="font-weight-bold text-secondary text-left" style="background-color: #ebedef;">
		                <ul class="nav nav-tabs ">
		                  <li class="nav-item">
		                    <a class="nav-link active" href="frequencia_1b.php">Frequência</a>                   
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="registro_conteudo_1b.php">Registro Do Conteúdo e Atividades</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="mapa_avaliacao_1b.php">Mapa de Avaliação</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="canhoto_1b.php">Canhoto</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="diagnostico_inicial_1b.php">Diagnóstico inicial</a>
		                  </li>
		                                   
		                </ul>
	            	</div>
	            	<div class="container-fluide pt-2 bg-ligth">
		            	<div class="row ml-0 p-0">
		        			<div class="col-sm-2 text-secondary"><h6>Nome da Escola</h6></div>
		        			<div class="col-sm-2 text-secondary"><h6>Ano/Fase:<output class="ml-2">5º</output></h6></div>
		        			<div class="col-sm-2 text-secondary"><h6>Turno:<output class="ml-2">1</output></h6></div>
		        			<div class="col-sm-2 text-secondary"><h6>Turma:<output class="ml-2">F4M901</output></h6></div>
		        			<div class="col-sm-4 text-secondary"><h6>Componente Curricular:<output class="ml-2">Matematica</output></h6></div>
	            		</div><!--cabeçalho do diario-->
	            		<hr class="m-1">
	            		<div class="row ml-0 p-0">
		        			<div class="col-sm-3 text-secondary"><h6>Professor:<output class="ml-2">Nome do Professor</output></h6></div>
		        			<div class="col text-secondary"><h6>Mês:<output class="ml-2">2</output></h6></div>
		        			<div class="col text-secondary"><h6>Bimestre:<output class="ml-2">Primeiro</output></h6></div>
		        			<div class="col text-secondary"><h6>Ano:<output class="ml-2">2018</output></h6></div>
	            		</div>
	            	</div>
	            	<div class="nav navbar p-2" ><!--Tabela de Frequencia-->
	        	 		<table class="table-round-corner mt-0">
	        	 		   <tr class="bg-primary text-white">
		        	 		<th rowspan="2">Nº</th>
		        	 		<th rowspan="2" class="aluno">Aluno</th>
		        	 		<th rowspan="1">Data</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>

		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		<th>
		        	 			<input type="number" class="text-white"  name="a" max="31">
		        	 		</th>
		        	 		
		        	 		<th rowspan="2">P</th>
		        	 		<th rowspan="2">F</th>
	        	 		</tr>
	        	 		<tr class="bg-secondary text-white"">
	        	 			<th>N° Aulas</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>
		        	 		<th>02</th>

	        	 		</tr>
	        	 		<tr class="borda-2 ">
	        	 			<td>01</td>
	        	 			<td colspan="2">Marcio ferreira valente da silva maciel ferreira</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>

	        	 			<td class="bg-info">
	        	 				<input class="bg-info border-0 text-white font-weight-bold" type="text" name="" value="10" disabled>
	        	 			</td>
	        	 			<td class="bg-info">
	        	 				<input class="bg-info border-0 text-white font-weight-bold" type="text" name="" value="11" disabled>
	        	 			</td>

	        	 		</tr>
	        	 		<tr class="borda-2 ">
	        	 			<td>01</td>
	        	 			<td colspan="2">Marcio ferreira valente ferreira</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>
	        	 			<td >
	        	 				<input type="text"  name="" maxlength="2">
	        	 			</td>

	        	 			<td class="bg-info">
	        	 				<input class="bg-info border-0 text-white font-weight-bold" type="text" name="" value="10" disabled>
	        	 			</td>
	        	 			<td class="bg-info">
	        	 				<input class="bg-info border-0 text-white font-weight-bold" type="text" name="" value="11" disabled>
	        	 			</td>
	        	 		</tr>
	        		 	</table>
        			</div><!--Tabela de Frequencia-->
            	   </div>
        		</div>
    	  	</div><!--.starter-template-->
  			
    	</main><!-- /.container --> 
    </form> 
  </body>
  </html>