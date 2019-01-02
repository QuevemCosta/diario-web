<?php require_once('menu.html') ?>
<!doctype html>
<html>
  <head>
    	<meta charset="utf-8">
  		<link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <body onload="initDoc();">
		<div class="navbar ml-3 mb-0 p-0">
  			<span>
	  			<a href="home.php " class="btn btn-link">Voltar</a>
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

  	<div class="container">
  		<div>
	  		<div class="borda-3 bg-white mt-3 rounded">
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
		               		<a class="nav-link" href="canhoto_1b.php">Canhoto</a>
		              	</li>
		              	<li class="nav-item">
		                	<a class="nav-link active" href="diagnostico_inicial_1b.php">Diagnóstico inicial</a>
		              	</li>               
		            </ul>
		    	</div>
		    	<!--Entrada de texto e seus devidos menus-->
		    <form name="compForm"  method="get" action="#" onsubmit="if(validateMode()){this.myDoc.value=oDoc.innerHTML;return true;}return false;">
		      <input type="hidden" name="myDoc">
			    <div class="container-fluid w-75">
			        <div id="toolBar1" class="bg-secondary rounded mt-2 pl-5">
			          <select class="btn ml-3" onchange="formatDoc('formatblock',this[this.selectedIndex].value);this.selectedIndex=0;">
			            <option >- formato -</option>
			            <option value="h1">Titulo 1 &lt;h1&gt;</option>
			            <option value="h2">Titulo 2 &lt;h2&gt;</option>
			            <option value="h3">Titulo 3 &lt;h3&gt;</option>
			            <option value="h4">Titulo 4 &lt;h4&gt;</option>
			            <option value="h5">Titulo 5 &lt;h5&gt;</option>
			            <option value="h6">Subtitulo &lt;h6&gt;</option>
			            <option value="p">Paragrafo &lt;p&gt;</option>
			            <option value="pre">Pré formatado &lt;pre&gt;</option>
			          </select>
			          <select class="btn" onchange="formatDoc('fontname',this[this.selectedIndex].value);this.selectedIndex=0;">
			            <option class="heading" selected>- fonte -</option>
			            <option>Arial</option>
			            <option>Arial Black</option>
			            <option>Courier New</option>
			            <option>Times New Roman</option>
			          </select>
			          <select class="btn" onchange="formatDoc('fontsize',this[this.selectedIndex].value);this.selectedIndex=0;">
			            <option class="heading" selected>- tamnaho -</option>
			            <option value="1">Muito pequena</option>
			            <option value="2">Um pouco pequena</option>
			            <option value="3">Normal</option>
			            <option value="4">Médio</option>
			            <option value="5">Grande</option>
			            <option value="6">Muito grande</option>
			            <option value="7">Maximo</option>
			          </select>
			          <select class="btn" onchange="formatDoc('forecolor',this[this.selectedIndex].value);this.selectedIndex=0;">
			            <option class="heading" selected>- colr -</option>
			            <option value="red">Vermelho</option>
			            <option value="blue">Azul</option>
			            <option value="green">Verde</option>
			            <option value="black">Preto</option>
			          </select>
			          <select class="btn" onchange="formatDoc('backcolor',this[this.selectedIndex].value);this.selectedIndex=0;">
			            <option class="heading" selected>- cor de fundo -</option>
			            <option value="red">Vermelho</option>
			            <option value="green">Verde</option>
			            <option value="black">Preto</option>
			          </select>
			        </div>
			        
			        <div id="toolBar2" class="pl-5">			            
			            <button type="submit" class="btn btn-link ml-4"><img title="Salvar"value="Send" class="intLink btn" src="icons/salvar.png"></button>

			            <img class="intLink btn" title="Imprimir" onclick="printDoc();" src="icons/imprimir.png">
			            
			            <img class="intLink btn" title="Desfazer" onclick="formatDoc('undo');" src="icons/desfaz.png" />
			            
			            <img class="intLink btn" title="Refazer" onclick="formatDoc('redo');" src="icons/refaz.png" />
			            
			            <img class="intLink btn" title="Bold" onclick="formatDoc('bold');" src="icons/negrito.png"/>
			            
			            <img class="intLink btn"title="Italic" onclick="formatDoc('italic');" src="icons/italico.png" />
			            
			            <img class="intLink btn" title="Underline" onclick="formatDoc('underline');" src="icons/sublinhado.png" />
			            
			            <img class="intLink btn" title="Left align" onclick="formatDoc('justifyleft');" src="icons/esquerda.png"/></button>
			            
			            <img class="intLink btn" title="Center align" onclick="formatDoc('justifycenter');" src="icons/centralizar.png" />
			            
			            <img class="intLink btn" title="Right align" onclick="formatDoc('justifyright');" src="icons/direita.png" />
			        </div>
			    </div>
			        <hr>
			    </div>
	        
	        <!--CAMPO DE TEXTO-->
	        <div class="container ml-3 pl-5 pb-5">
	          <div id="textBox" contenteditable="true"></div>
	        </div>
	        <!--CAMPO DE TEXTO-->

	        <p style="display: none;" id="editMode"><input type="checkbox" name="switchMode" id="switchBox" onchange="setDocMode(this.checked);" /> <label for="switchBox">Show HTML</label></p>
	    </form>
	    <hr>
	</div>
	<!--Script do editor de texto-->
    <script type="text/javascript" src="scripts/text-editor.js"></script>
  </body>
</html>