<?php
	if(!isset($_GET["deal_id"]) or empty($_GET["deal_id"]) or !isset($_GET["access_token"]) or empty($_GET["access_token"]))
	{
		echo '<script>alert("Parâmetros inválidos. Verifique e tente novamente.");</script>';
		exit;
	}
	
	if(isset($_GET["embed"]) and isset($_GET["params"]))
	{
		$params = json_decode($_GET["params"], true);
	}else{
		echo '<script>alert("Parâmetros Fluxo inválidos. Verifique e tente novamente.");</script>';
		exit;
	}
?>
<!doctype html>	
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="dsStyles.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Declaração de Saúde</title>
	<style>
	/* reset de margens */
	* {
		margin: 0;
		padding:0;
	}
	
	.error-opcao {
		border-color: red;
		border-left-style: solid;
	}

	/* para garantir que estes elementos ocuparão toda a tela */
	body, html {
		width: 100%;
		height: 100%;
		font-family: 'Open Sans', sans-serif;
		font-size: 16px;
	}

	body {
		background: #fff;
		
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	#site {
		width: 560px;
		padding: 20px;
		margin: 40px auto;
		background: #FFF; /* fundo branco para navegadores que não suportam rgba */
		background: rgba(255,255,255,0.8); /* fundo branco com um pouco de transparência */
	}

	p {
		margin-bottom: 1.5em;
	}

	.scroll-hdsd
	{
		overflow-y: scroll;
	}
	
	.error{display: block; }

	::-webkit-scrollbar-track
	{
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		background-color: #F5F5F5;
	}

	::-webkit-scrollbar
	{
		width: 8px;
		background-color: #F5F5F5;
	}

	::-webkit-scrollbar-thumb
	{
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		background-color: #555;
	}

	</style>
    
  </head>
  <body>
<br>
<center><img src="lg.png"></center>
<br>



        <table border="0" width="100%">
            <tr>
                <td align="center">
                    
                    <div class="col-md-9">
          <!-- Horizontal Form -->
          <div class="alert alert-info alert-dismissible">
              
		<div class="container">
		<div class="row">
			<h3 class="pt-4 pb-2">Declaração de Saúde</h3>
		</div>
		<div  class="row">
			<p>A finalidade desta Declaração de Saúde é registrar &nbsp;todos os dados sobres as doenças ou lesões que o proponente titular e/ou seus(s) dependente(s) saiba(m) ser portador(es) ou sofredor(es), seja por diagnóstico feito ou conhecido, e das quais tenha(m) conhecimento no momento da assinatura da proposta acima referida.<br/><br/>
			   Para preenchimento desta Declaração de Saúde, o proponente titular tem a alternativa de ser instruído por um médico apontado pela operadora, sem ônus financeiro para o proponente, ou por médico de sua livre escolha, caso em que as despesas com os honorários serão totalmente de sua responsabilidade.</p>
		</div>
		<br>
		<div class="row">
			<p>Sua solicitação de contratação se dá na modalidade on-line, de acordo com a RN 413/2016 da ANS, o acesso através de login e senha com confirmação no site equivale a sua assinatura presencial, inclusive para movimentações cadastrais.</p>
		</div>
	</div>

	<form id="dsEnvia" method="post" action="enviaDeclaracao2.php">
    <div class="container" style="margin-top:20px">
		<div class="row" align="justify" style="display:none">
			<h3>Dados Titular</h3>
		</div>
		<div class="row" align="justify" style="display:none">
			<div class="col-md-12">
				  <div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome" readonly value="<?php echo $params["nome"] ?>" required>
				  </div>
				  <div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" readonly value="<?php echo $params["email"] ?>" required>
				  </div>
				  <div class="form-group">
					<label for="fone">Fone</label>
					<input type="text" class="form-control" name="fone" id="fone" readonly value="<?php echo $params["telefone"] ?>" required>
				  </div>
				  <div class="form-group">
					<label for="dependentes">Dependentes</label>
					<select class="form-control" name="dependentes" readonly id="dependentes" required>
						<option selected>0</option>	
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				  </div>
			</div>
		</div>
		<br>
		<div class="row">			
			<h5><i>Em relação aos quesitos abaixo solicitamos que informe se sofre ou já sofreu de alguma doença relacionada, respondendo (SIM) ou (NÃO). Em caso de resposta afirmativa em qualquer questionamento, especificar o motivo.</i></h5>
		</div>
		<br>
		<div class="row">
			
		</div>
		<div class="row perguntas" align="justify">
		</div>
		<div class="row">
			<h3>Dados Complementares</h3>
			<br><br>
		</div>
		<div class="row" align="justify">
			<div class="col-md-12">
				<table class="table" style="width:100%">
				  <thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Altura (M)</th>
					  <th scope="col">Peso (Kg)</th>
					</tr>
				  </thead>
				  <tbody class="PesoAltura">
					<tr class="peso_altura_tit">
					  <td>Titular</td>
					  <td><input type="text" class="form-control mask-altura" placeholder="Altura" required name="altura_tit" min="0" value="" size="30" required></td>
					  <td><input type="text" class="form-control mask-peso" placeholder="Peso" required name="peso_tit" min="0" value="" size="30" required></td>
					</tr>
				  </tbody>
				</table>
			</div>
		</div>

		<br>

		<div class="row">
			
			<div>
				<label><h3>OPÇÃO DE ORIENTAÇÃO MÉDICA:</h3></label>
			</div>

			<div align="justify" id="opcaoOrientacao" class="col-md-12">
				<span style="color:red" class="invalid-msg" data-for="opcao1"></span>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="opcao1" id="exampleRadios1" value="1086" style="width: auto;">
				  <label class="form-check-label" for="exampleRadios1">Declaro que fui orientado por médico referenciado da operadora no Preenchimento da Declaração de Saúde acima.</label>
				</div>
				<br>
				<br>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="opcao1" id="exampleRadios2" value="1088" style="width: auto;">
				  <label class="form-check-label" for="exampleRadios2">Declaro que fui orientado pelo meu médico Particular no Preenchimento da Declaração de Saúde acima.</label>
				</div>
				<br>
				<br>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="opcao1" id="exampleRadios3" value="1090" style="width: auto;">
				  <label class="form-check-label" for="exampleRadios3">Declaro ter conhecimento de todas as perguntas da Declaração de Saúde acima e que dispensei orientação médica para responder às mesmas assumindo total responsabilidade pelas informações por mim prestadas.</label>
				</div>
				<br>
			</div>
			
			<div id="agreementForm" class="col-md-12" align="justify">
				<br>
				<label id="licence_show_button">
					<span style="color:red" class="error-accept"></span>
					<span><input id="licence_accept" name="ciencia_dados" type="checkbox" value="Y"><i></i></span>
						<a>Ao clicar no botão de envio,  atesto que preenchi a minha Declaração de Saúde e de todos os meus dependentes neste ato e que estou ciente das informações preenchidas.</a>
				</label>
			</div>
			
			<div class="col-md-12">
			    <br>
				<button data-bx-webform-submit-btn="" id="enviar" type="submit" class="btn btn-block btn-primary btn-lg"> ENVIAR DADOS </button>
			</div>
			<input type="hidden" name="access_token" value="<?php echo $_GET["access_token"]; ?>" />
			<input type="hidden" name="deal_id" value="<?php echo $_GET["deal_id"]; ?>" />
			<input type="hidden" name="numq" value="27" />
			<input type="hidden" name="name_form" value="Declaração de Saúde AACL" />
			<input type="hidden" name="id_form" value="ds" />
			</form>
		</div>
			<br>
			<br>
		<div class="row">
		<div class="modal" id="modal_aceite" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title">Termos do Contrato</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body scroll-hdsd" style="height:350px !important;" align="justify">
				<p>Declaro para os devidos fins e efeitos que:
				<br>
				<br>
				(I) - Autorizo a Operadora a solicitar, a qualquer tempo, a médicos, hospitais, clínicas, laboratórios ou a mim, exames, prontuários e outras informações necessárias a quaisquer esclarecimentos relacionados a esta Declaração de Saúde; 
				<br>
				<br>
				(II) - Tenho ciência de que a omissão de informação sobre doença ou lesão preexistente da qual eu e/ou meu(s) dependente(s) saiba(mos) ser portador(es) na data da assinatura desta Proposta, seja por diagnóstico feito ou conhecido desde que seja comprovada na ANS, poderá acarretar a suspensão ou cancelamento do benefício. Nesse caso, como beneficiário, serei responsável pelo pagamento de eventuais despesas realizadas com o tratamento da doença ou lesão omitida, a partir da data em que eu tiver recebido comunicado ou notificação, por parte da Operadora, sobre a existência de doença ou lesão não declarada;
				<br>
				<br>
				(III) - Preenchi minha Declaração de Saúde e de todos os meus dependentes neste ato e que, sendo meus dependentes maiores de 15(quinze) anos - esposo(a) ou companheiro(a), filho(a) Solteiro(a), comprometo-me a investigar as informações com eles e, havendo necessidade de alteração(ões), eu a(s) apresentarei por escrito, no prazo de 7 (sete) dias contados a partir da data de assinatura desta declaração, sob pena de não atendimento ou de exclusão do(s) beneficiário(s) dependente(s) com informações inadequadas e, até mesmo. rescisão, caso apurada a omissão;
				</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" id="btnAceita" class="btn btn-primary">Eu Aceito</button>
				<button type="button" id="btnRecusa" class="btn btn-secondary" data-dismiss="modal">Eu Recuso</button>
			  </div>
			</div>
		  </div>
		</div>
		</div>
	</div>
	
	
	</div>
	</div>
                    
                </td>
            </tr>
        </table>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
   
	<!-- funções JavaScript -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('form#dsEnvia').on('submit', function(e){
				e.preventDefault();
				var numchecked = $('input[name="opcao1"]:checked').length;
				var agreement = $('input[name=""]:checked').length;
				var envia = false;
				var checkbox = $("#licence_accept");
				console.log("inicia envio");
                if ( !checkbox.is( ":checked" ) )
                {
					$(".error-accept").html("<h6>Esta ação é requerida.</h6>");
					envia = false;
                }else{
					$(".error-accept").html("");
					envia = true;
				}
				
				if(numchecked == 0)
				{
					$("#opcaoOrientacao .invalid-msg").html("<h6>Você deve escolher uma das opções abaixo.</h6>");
					$("#opcaoOrientacao").addClass("error-opcao");
					envia = false;
				}else{
					$("#opcaoOrientacao .invalid-msg").html("");
					$("#opcaoOrientacao").removeClass("error-opcao");
					envia = true;
				}
				
				if(envia && checkbox.is( ":checked" )) {
					this.submit();
				}
				
			});
			
			$('.mask-peso').mask('##Z,00', {
				translation: {
				  'Z': {
					pattern: /[0-9]/, optional: true
				  }
				}
			});
			$('.mask-altura').mask("0,00");
			
			//onload perguntas
			$.getJSON("perguntas.json", function(data) {
				var question = "";
				$.each( data[0], function( key, val ) {
					question = '<div class="row">'
									+'<div class=item>'
									+'<div class="col-md-12">'
										+'<h5>'+key+' - '+val+'</h5>'
									+'</div>'
									+'<div class="col-md-12 respostas">'
										+'<ul id="question_'+key+'" style="margin-left: 15px !IMPORTANT">'
											+'<li class="li_tit_'+key+'">'
											+'<div class="titulo">'
												+'Titular: '
												+'</div>'
												//+'<div class="form-check form-check-inline" style="margin-left: 57px;">'
												  //+'<input class="form-check-input" type="radio" name="radio_tit_'+key+'" id="radio_tit_'+key+'_sim" value="sim" required>'
												  //+'<label class="form-check-label" for="radio_tit_'+key+'_sim">Sim</label>'
												//+'</div>'
											//	+'<div class="form-check form-check-inline">'
											//	  +'<input class="form-check-input" type="radio" name="radio_tit_'+key+'" id="radio_tit_'+key+'_nao" value="nao" required>'
											//	  +'<label class="form-check-label" for="radio_tit_'+key+'_nao">Não</label>'
											//	+'</div>'
												+'<div class="form-checkbox form-check-inline">'
												  +'<input class="switch switch--shadow" type="checkbox" name="radio_tit_'+key+'" id="radio_tit_'+key+'_nao" value="nao">'
												  +'<label id="lb_radio_tit_'+key+'_nao" class="switch--shadow" for="radio_tit_'+key+'_nao"> Não</label>'
												+'</div>'
											+'</li>'
										+'</ul>'
									+'</div>'
									+'</div>'
								+'</div>';
					$(".perguntas").append(question);
				});
				
				setTimeout(() => {
					$('#dependentes').trigger('click');
					$('[data-toggle="tooltip"]').tooltip();
				}, 1000);
			});
			
			
			$("#dependentes").click(function(){
				var qtdeps = <?php echo $params["qtdep"]; ?>;
				if(qtdeps == 0){
					$('[class^=li_dep]').remove();
					$('[class^=peso_altura_dep]').remove();
				}else{
				
					var data_dep = JSON.parse('<?php echo $_GET["params"]; ?>');
					
					//remove tudo
					$('[class^=li_dep]').remove();
					$('[class^=peso_altura_dep]').remove();
					//cria com quantidade escolhida
					var perguntas = 27;
					var element = "";
					
					//adiciona campos perguntas
					for (var i = 1; i <= perguntas; i++) {
						
						for (var j = 1; j <= qtdeps; j++) {
						
							element = '<li class="li_dep_'+i+'_'+j+'">'
										+'<div class="titulo">'
										+'<span style="cursor:pointer;color:blue;text-decoration:underline;" data-toggle="tooltip" data-placement="left" title="'+data_dep.dep[j]+'">Dependente '+j+': </span>'
										+'</div>'
										//+'<div class="form-check form-check-inline">'
										 // +'<input class="form-check-input" type="radio" name="radio_dep_'+i+'_'+j+'" id="radio_dep_'+i+'_'+j+'_sim" value="sim" required>'
										 // +'<label class="form-check-label" for="radio_dep_'+i+'_'+j+'_sim">Sim</label>'
										//+'</div>'
										//+'<div class="form-check form-check-inline">'
										//  +'<input class="form-check-input" type="radio" name="radio_dep_'+i+'_'+j+'" id="radio_dep_'+i+'_'+j+'_nao" value="nao" required>'
										//  +'<label class="form-check-label" for="radio_dep_'+i+'_'+j+'_nao">Não</label>'
										//+'</div>'
										+'<div class="form-checkbox form-check-inline">'
												  +'<input class="switch switch--shadow" type="checkbox" name="radio_dep_'+i+'_'+j+'" id="radio_dep_'+i+'_'+j+'_nao" value="nao">'
												  +'<label id="lb_radio_dep_'+i+'_'+j+'_nao" class="switch--shadow" for="radio_dep_'+i+'_'+j+'_nao"> Não</label>'
										+'</div>'
									+'</li>';
							$("ul#question_"+i).append(element);
						}
					}
					
					//adiciona campos peso altura
					for (var j = 1; j <= qtdeps; j++) {
						element = '<tr class="peso_altura_dep_'+j+'">'
								  +'<td style="cursor:pointer;color:blue;text-decoration:underline;" data-toggle="tooltip" data-placement="left" title="'+data_dep.dep[j]+'">Dependente '+j+'</td>'
								  +'<td><input type="text" class="form-control mask-altura" placeholder="Altura" required name="altura_dep_'+j+'" value="" required></td>'
								  +'<td><input type="text" class="form-control mask-peso" placeholder="Peso" required name="peso_dep_'+j+'" value="" required></td>'
								+'</tr>';
						$("table .PesoAltura").append(element);
						
						$('.mask-peso').mask('##Z,00', {
							translation: {
							  'Z': {
								pattern: /[0-9]/, optional: true
							  }
							}
						});
						$('.mask-altura').mask("0,00");
					}
				}
			});
			
			//input obs se clicar sim
			$('.perguntas').on("change","input[type=checkbox]",function(){
				var radio_escolhido = $(this).attr("name").split('_');
				var nome_radio="lb_"+$(this).attr("name")+"_nao";
				if(this.checked){
					$(this).val('sim');
					document.getElementById(nome_radio).innerHTML= "  Sim";
					console.log($(nome_radio).val());
				}else{
					$(this).val('nao');
					document.getElementById(nome_radio).innerHTML= "  Não";
				}
				console.log(this.checked);
				console.log($(this).val());

				//alert(radio_escolhido[0] + " - " + radio_escolhido[1])
				var opcao = $(this).val();
				
				if(opcao == 'nao'){
					if(radio_escolhido[1] == 'tit')
					{
						//alert('obs_tit_'+radio_escolhido[2]);
						$('.obs_tit_'+radio_escolhido[2]).remove();
					}else{
						$('.obs_dep_'+radio_escolhido[2]+'_'+radio_escolhido[3]).remove();
					}
				}else{
				
					if(radio_escolhido[1] == 'tit')
					{
						element = 
							'<div class="form-check form-check-inline obs_'+radio_escolhido[1]+'_'+radio_escolhido[2]+'">'
								+'<div class="form-group obs_'+radio_escolhido[1]+'_'+radio_escolhido[2]+'">'
									+'<label class="form-check-label">Obs Titular</label>'
									+'<input type="text" class="form-check-input" name="obs_'+radio_escolhido[1]+'_'+radio_escolhido[2]+'" id="obs_'+radio_escolhido[1]+'_'+radio_escolhido[2]+'" required>'
								+'</div>'
							+'</div>';
						$(".li_tit_"+radio_escolhido[2]).append(element);
					}else{
						element = 
							'<div class="form-check form-check-inline obs_'+radio_escolhido[1]+'_'+radio_escolhido[2]+'_'+radio_escolhido[3]+'">'
								+'<div class="form-group obs_'+radio_escolhido[1]+'_'+radio_escolhido[2]+'_'+radio_escolhido[3]+'">'
									+'<label class="form-check-label">Obs Dependente '+radio_escolhido[3]+'</label>'
									+'<input type="text" class="form-check-input" name="obs_'+radio_escolhido[1]+'_'+radio_escolhido[2]+'_'+radio_escolhido[3]+'" id="obs_'+radio_escolhido[1]+'_'+radio_escolhido[2]+'_'+radio_escolhido[3]+'" required>'
								+'</div>'
							+'</div>';
						$(".li_dep_"+radio_escolhido[2]+"_"+radio_escolhido[3]).append(element);
					}
					//alert(radio_escolhido[1]);
					//$(".obs_q"+radio_escolhido[2]).append(element);
				}
			});
			
			$("#licence_accept").on('click', function(){
				var checkbox = $("#licence_accept");
                if ( checkbox.is( ":checked" ) )
                {
                    $("#modal_aceite").modal();
                }
			});
			
			$("#btnAceita").click(function(){
				$("#modal_aceite").modal('hide');
				$("#licence_accept").prop("checked", true);
			});
			
			$("#modal_aceite").on("hidden.bs.modal", function () {
				$("#licence_accept").prop("checked", false);
			});
					
					
					/*'<div class="form-group col-md-3 obs_tit_1">'
						+'<label>Obs Titular</label>'
						+'<input type="text" class="form-control" name="obs_tit_1" id="obs_tit_1">'
					+'</div>';*/

			var dep = <?php echo $params["qtdep"]; ?>;
			$('[name=dependentes] option').filter(function() { 
				return ($(this).text() == dep); //To select Blue
			}).prop('selected', true).trigger("change");
			
		});
	</script>
  </body>
</html>