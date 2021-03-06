
<?php
	$utm_campaign = (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : "";
	$utm_source = (isset($_GET['utm_source'])) ? $_GET['utm_source'] : "";
	$utm_medium = (isset($_GET['utm_medium'])) ? $_GET['utm_medium'] : "";
	$utm_content = (isset($_GET['utm_content'])) ? $_GET['utm_content'] : "";
  $utm_term = (isset($_GET['utm_term'])) ? $_GET['utm_term'] : "";
  
  include "session_valide.php";
?>


<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Lore IT - V1.2.2</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    
    <link rel="stylesheet" href="assets_new/css/slick.css">
    <link rel="stylesheet" href="assets_new/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_new/css/default.css">
    <link rel="stylesheet" href="assets_new/css/style.css">
    <link rel="stylesheet" href="assets_new/css/LineIcons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
    <script src="assets_new/js/vendor/jquery-1.12.4.min.js"></script>  
    <script src="assets_new/js/slick.min.js"></script>    
    <script src="assets_new/js/jquery.counterup.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="assets_new/js/jquery.magnific-popup.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
    <script src="https://vincentgarreau.com/particles.js/assets/_build/js/lib/particles.js"></script>
    <script src="assets_new/js/main.js"></script>
    <script src="assets_new/js/bootstrap.min.js"></script>

  <!-- Google Fonts -->
  <link href="css/font-google.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/wizard.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-confirm.min.css">

  <link href='css/font-awesome.css' rel='stylesheet'>       
  <script type='text/javascript' src='js/jquery.min.js'></script>
  <script src="js/jquery-1.11.1.min.js"></script>
  

<!-- CSS E JS CUSTOMIZADOS -->
<script type='text/javascript' src='js/way.js?v=1.21'></script>
<link href='css/way.css' rel='stylesheet'>  
<link href='css/privacy.css' rel='stylesheet'>  
<!-- CSS E JS CUSTOMIZADOS -->


<!-- ESCONDER DIV NA VERS??O MOBILE -->
<style>
 @media only screen and (max-width: 980px){
      .divTableCell3 { display: none; }
  }

  .hide {
    left: -9999px !important;
    position: absolute !important;
    visibility: hidden;
    z-index: -500;
    top: -9999px;
    -webkit-transition: all 1.5s ease;
    -moz-transition: all 1.5s ease;
    -o-transition: all 1.5s ease;
    transition: all 1.5s ease;
}
 
</style>
<!-- ESCONDER DIV NA VERS??O MOBILE -->

<!-- MASCARA DO CEP -->
<script language="JavaScript"> 
  function mascara(t, mask){
  var i = t.value.length;
  var saida = mask.substring(1,0);
  var texto = mask.substring(i)
  if (texto.substring(0,1) != saida){
  t.value += texto.substring(0,1);
  }
  }
</script>  
<!-- MASCARA DO CEP -->

<!-- MASCARA DO CELULAR -->
<script language="JavaScript"> 
function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
  var r = v.replace(/\D/g, "");
  r = r.replace(/^0/, "");
  if (r.length > 10) {
    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (r.length > 5) {
    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
  } else if (r.length > 2) {
    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
  } else {
    r = r.replace(/^(\d*)/, "($1");
  }
  return r;
}
</script>  
<!-- MASCARA DO CELULAR -->
<!-- AUTOCOMPLETE -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<!-- VALIDAR E-MAIL -->
<script language="Javascript">
  function validacaoEmail(field) {
  usuario = field.value.substring(0, field.value.indexOf("@"));
  dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
   
  if ((usuario.length >=1) && 
      (dominio.length >=3) && 
      (usuario.search("@")==-1) && 
      (dominio.search("@")==-1) && 
      (usuario.search(" ")==-1) && 
      (dominio.search(" ")==-1) && 
      (dominio.search(".")!=-1) &&      
      (dominio.indexOf(".") >=1)&& 
      (dominio.lastIndexOf(".") < dominio.length - 1)) {
  document.getElementById("msgemail").innerHTML="E-mail v??lido";
  alert("E-mail valido");
  }
  else{
  document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inv??lido </font>";
  alert("E-mail invalido");
  }
  }
  </script>
<!-- VALIDAR E-MAIL -->

<!-- ESCONDER DIV E HABILITAR -->
<script>
        //divs, mostrar ou nao

        function mostrar_entidade() {
              if(document.getElementById('entidade').style.display=='none') {
                document.getElementById('entidade').style.display='block';
              }
          }

          
          function esconder_apbl() {      
                if(document.getElementById('apbl').style.display=='block') {
                  document.getElementById('apbl').style.display='none';
                }
            }  


            function mostrar_apbl() {
              if(document.getElementById('apbl').style.display=='none') {
                document.getElementById('apbl').style.display='block';
              }
          }

          function mostrar_vinculo() {
            if(document.getElementById('vinculo').style.display=='none') {
              document.getElementById('vinculo').style.display='block';
            }
        }

        function mostrar_email() {
            if(document.getElementById('email').style.display=='none') {
              document.getElementById('email').style.display='block';
            }
        }

</script>

<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

</head>

<header class="header-area">
        
    <?php include("menu_topo.php"); ?>

</header>

<body>

<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

  <!-- modal preenchimento dados iniciais e carregamento-->
  <div class="modal" id="loading" style="display:block" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content" style="border: none;">
            <div class="modal-header" style="background: #fff;border-radius: 30px;border: 2px;border-style: solid;border-color: rgba(0,123,255,.25);">
            <center>
            <h4 class="modal-title">
              <strong>Processando informa????es</strong> 
              <br>
              <img width="100" src="assets/img/carregando1.gif" alt="Carregando..." />
             </h4>
            </center>
            </div>
            <div class="modal-body">
              <br>
            <P class="loading-text">Aguarde enquanto carregamos os dados.</P> 
            </div>
        </div>
      </div>
    </div>


    <!-- Conteiner da ??rea geral central da p??gina-->  
    <div class="div-progressbar">
          <ul id="progressbar">
              <!-- <li class="done" id="account"></li> -->
              <li class="done" id="sigin"></li>
              <li class="done" id="search"></li>
              <li class="done" id="listplans"></li>
              <li class="active" id="dependentes"></li>
              <li class="done" id="personal"></li>
              <li class="done" id="propostas"></li>
              <li class="done" id="finalizado"></li>
              <!--<li class="done" id="user"></li> -->
            </ul>   
        </div>   
    <div class="container-full">
        <div class="area-principal">
              <div class="bar-left">
                  <div class="card mt-3 mb-3" style="padding: 20px">
                      <form id="msform">                              
                          
                            <p class="texto1"><strong>Resumo do Plano Escolhido:</strong></p>
                              <fieldset>	
                                <div class="form-card" id="planos2">
                                  <p class="texto6"><img class="picture-plan" src="assets/img/logo-unimed-natal.png"></p>
                                  <p class="texto0-left"><span class="nomePlan"></span><br>ANS: <span class="ansPlan"></p>
                                  <br>
                                  <p class="texto0"><strong>SUBTOTAL</strong></p>
                                  <p class="texto0-left-sub"><strong>R$ <span class="somaPlanos"></span></strong></p>
                                  <br>
                                  <p class="texto1"></p>
                                  <p class="texto1-left-dep"><strong><span class="qtDepOdontot">0</span> </strong>Odontologia.</p>
                                  <p class="texto1"></p>
                                </div> 
                                <!--<input type="button" id="btnE13" name="next" class="next action-button" value="Avan??ar" disabled>-->
                              </fieldset>
                      </form>
                  </div>
              </div>
              <div class="bar-central">
                  <div class="container-central" style="margin-top: 0;margin-left: 0;width: 100%;">
                            
                                              
                            <div class="incluirBeneficiario" style="width: 70%;margin-left: 20px;">                  
                                              
                                        <form id="msform">
                                                    <fieldset>
                                                    <div >                                                        
                                                        <div class="inner" style="display:none">
                                                        <p class="texto"><strong>VOC?? QUER ADICIONAR PLANO ODONTOL??GICO?</strong></p>
                                                        <p class="texto0-central">Voc?? sabia que pode incluir no seu plano de assist??ncias um Plano Odontol??gico de primeira linha?</p>
                                                        <p class="texto0-central">Aproveite para proteger voc?? e sua fam??lia, e compre o seu plano de Assist??ncias + Plano Odontol??gico por um pre??o muito menor.</p>
                                                        <p class="texto0-central">Seu plano tem cobertura nacional e lhe garente diversas coberturas, com um custo muito acess??vel:  </p>
                                                        <br>
                                                          <p class="texto0" ><strong>Apenas</strong></p>
                                                          <p class="texto0-left-sub"><strong>R$ <span class="valorOdonto">24.90</span></strong></p>
                                                          <p class="texto0" ><strong>por familia</strong></p>
                                                        <br>
                                                        <p class="texto0" ><strong>QUANTOS FAMILIARES VOC?? DESEJA ADICIONAR?</strong></p>
                                                        
                                                        <div style="margin-left:25%;margin-right: 25%">
                                                                <button class="btn btn-primary addodonto" id="addodonto" onclick="localStorage.setItem('qntdOdonto', '1');" type="button">1</button>
                                                                <button class="btn btn-primary addodonto" id="addodonto" onclick="localStorage.setItem('qntdOdonto', '2')" type="button">2</button>
                                                                <button class="btn btn-primary addodonto" id="addodonto" onclick="localStorage.setItem('qntdOdonto', '3')" type="button">3</button>
                                                                <button class="btn btn-primary addodonto" id="addodonto" onclick="localStorage.setItem('qntdOdonto', '4')" type="button">4</button>
                                                                <button class="btn btn-primary addodonto" id="addodonto" onclick="localStorage.setItem('qntdOdonto', '5')" type="button">5</button>
                                                                <button class="btn btn-primary addodonto" id="addodonto" onclick="localStorage.setItem('qntdOdonto', '6')" type="button">6</button>
                                                                <!-- <button id="btnAddDep" type="button" class="btn add_field_button action-button1">Incluir</button> -->
                                                        </div>
                                                        <div class="input_fields_wrap" style="display: none">
                                                            <div class="AddDepTR input-group mb-3 mr-sm-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fa fa-calendar" title="Data de Nascimento"></i></div>
                                                                </div>
                                                                <input type="date" class="form-control" id="data_nasc" placeholder="Data de Nasc." title="Data de Nascimento">
                                                                <div class="input-group-prepend">
                                                                  <button class="btn btn-primary" id="btnAddDep" style="background:#f27b27; border-radius: 30px;width: 35px;height: 35px;color:#fff;margin-left: 10px;" type="button">+</button>
                                                                  <!-- <button id="btnAddDep" type="button" class="btn add_field_button action-button1">Incluir</button> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div style="display: flex;">-->
                                                        <div style="display: none;">
                                                        <table align="left" class="table">
                                                          <thead>
                                                            <tr>
                                                              <th scope="col">Data Nascimento</th>
                                                              <th scope="col">Nome</th>
                                                              <th scope="col">#</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody class="datas_deps">
                                                          </tbody>  
                                                        </table>
                                                        </div>

                                                        <br>
                                                      </div>	

                                                    <div class="form-card-dep" id="planos2">
                                                      <p class="texto6"><img class="picture-plan" src="assets/img/logo-unimed-natal.png" style="width:20%"></p>
                                                      <p class="texto0-central"><span class="nomePlan"></span><br>ANS: <span class="ansPlan"></p>
                                                      <p class="texto0-central resumoPlanos"></p>
                                                      <p class="texto0-central-sub"><strong>Subtotal:</strong></p>
                                                      <p class="texto0-central-plan"><strong>R$ <span class="somaPlanos"></span></strong></p>
                                                      <p class="texto1-central"></p>
                                                      <p class="texto1-central"><strong><span class="qtOdonto">0</span> </strong>Odontologia.</p>
                                                      <p class="texto1-central"></p>                                    
                                                      
                                                    </p>
                                                    </div> 
                                                        <input style="display:none; !IMPORTANT" type="button" name="next" id="btnSemDependente" class="next action-button" value="Avan??ar sem dependentes">
                                                        
                                                        <input style="display:none" type="button" name="next" id="btnEncerraAddDep"  class="next action-button" value="Resumo dos Planos" disabled>
                                                        <input type="button" style="background: #006da8;" name="next" id="btnOrcamento"  class="next action-button" value="Or??amento">
                                                        <input  type="button" name="next" id="btnE4" class="next action-button" value="Continuar" >
                                                        <input  type="button" name="next" id="voltarPlanos" class="next action-button" value="Alterar Plano" >
                                                    <!--<input type="button" name="previous" class="previous action-button-previous" value="Anterior" onClick="parent.location='3_mps.php'">-->
                                                        
                                                    </fieldset>
                                                    <br><br><br>
                                        </form>
                                              
                                              
                                              
                                      </div>     

                                                   
                              
                              <div id="particles-1" class="particles"></div>
                              
                          </div> 
                          
                  </div>
              </div>
              <!-- Fim bar-central-->
        </div>        
    </div> 
      
    
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->  
<script src="assets/js/main.js"></script>
<script src="js/jquery-confirm.min.js"></script>
<script src="js/select2.min.js"></script>
<!--<script type='text/javascript' src='js/way.js?v=1.21'></script>-->
</body>
</html>
