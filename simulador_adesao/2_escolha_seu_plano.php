
<?php
	$utm_campaign = (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : "";
	$utm_source = (isset($_GET['utm_source'])) ? $_GET['utm_source'] : "";
	$utm_medium = (isset($_GET['utm_medium'])) ? $_GET['utm_medium'] : "";
	$utm_content = (isset($_GET['utm_content'])) ? $_GET['utm_content'] : "";
  $utm_term = (isset($_GET['utm_term'])) ? $_GET['utm_term'] : "";
  
  include "session_valide.php";
?>


<!doctype html>
<!--<html class="no-js" lang="pt-br">-->
<html lang="pt-br">

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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    <script type="text/javascript">
      var $jq = jQuery.noConflict();
      $jq(window).on('load', function (event) {
        $jq('.customer-logos').slick({
          dots: true,
          infinite: false,
          slidesToShow: 4,
          slidesToScroll: 4,
          autoplay: false,
          autoplaySpeed: 500,
          speed: 1500,
          arrows: true,
          pauseOnHover: false,
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 4
            }
          }, {
            breakpoint: 520,
            settings: {
              slidesToShow: 3
            }
          }]
        });
      });
    </script>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="css/select2.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/wizard.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-confirm.min.css">

  <link href='css/font-awesome.css' rel='stylesheet'>       
  <script type='text/javascript' src='js/jquery.min.js'></script>
  <script src="js/jquery-1.11.1.min.js"></script>


<!-- CSS E JS CUSTOMIZADOS -->
<link href='css/way.css' rel='stylesheet'>  
<link href='css/privacy.css' rel='stylesheet'>  
<!-- CSS E JS CUSTOMIZADOS -->

<!-- CSS E JS CUSTOMIZADOS -->
<link href='css/way.css' rel='stylesheet'>  
<link href='css/privacy.css' rel='stylesheet'>  
<!-- CSS E JS CUSTOMIZADOS -->


<!-- ESCONDER DIV NA VERS??O MOBILE -->
<style>
 @media only screen and (max-width: 980px){
      .divTableCell3 { display: none; }
  }

  .jconfirm{
    z-index: 100000 !important;
}

.select2-container--open {
    z-index: 9999999 !important;
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

.dropdown-item {
    cursor:pointer;
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
<script>
$( function() {
  // var availableTags = [
  //   "Administrador","Advogado","Aeronauta","Aerovi??rio","Agronomo","Arquiteto","Arquivista","Artista","Assistente Social","Atleta Profissional","Atu??rio","Aut??nomo","Auxiliar de Enfermagem","Bacharel em Letras","Bibliotec??rio","Bi??logo","Biom??dico","Contabilista","Corretor de Im??veis","Corretor de Seguros","Desenhista Industrial","Designer","Despachante aduaneiro","Economista","Educador Fisico","Enfermeiro","Engenheiro","Estat??stico","Estudante","Farmac??utico","Fil??sofo","F??sico","Fisioterapeuta","Fonoaudi??logo","Fot??grafo","Funcion??rio do com??rcio","Gastr??nomo","Ge??logo","Historiador","Hotelaria","Jornalista","Marketeiro","Matem??tico","M??dico","M??dico Veterin??rio","M??sico","Nutricionista","Odont??logo","Pedagogo","Professor","Profissional de Finan??as","Profissional de Inform??tica","Profissional de Log??stica","Profissional de Recursos Humanos","Profissional de Seguran??a do Trabalho","Profissional de seguran??a privada","Profissional de Tecnologia da Informa????o","Psic??logo","Publicit??rio","Qu??mico","Radialista","Radiologista","Rela????es P??blicas e Internacionais","Representante Comercial","Secret??rio","Servidor P??blico Estadual","Servidor p??blico Federal","Servidor P??blico Municipal","Soci??logo","t??cnico de enfermangem","T??cnico em contabilidade","T??cnico Industrial","Te??logo","Tradutor","Turism??logo","Vendedor"
  // ];
  // $( "#profissao" ).autocomplete({
  //   source: availableTags
  // });
} );
</script>
<!-- AUTOCOMPLETE -->


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

//planos 1
  function esconder() {      
        if(document.getElementById('planos').style.display=='block') {
          document.getElementById('planos').style.display='none';
        }
    }  

  function mostrar() {
      if(document.getElementById('planos').style.display=='none') {
        document.getElementById('planos').style.display='block';
      }
  }

//planos 2

  function mostrar2() {
      if(document.getElementById('planos2').style.display=='none') {
        document.getElementById('planos2').style.display='block';
      }
  }


  </script>

<!-- ESCONDER DIV E HABILITAR -->

<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

</head>
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
    
    <header class="header-area">
        
    <?php include("menu_topo.php"); ?>





        <!-- LOADING -->
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


          <!-- modal preenchimento dados iniciais -->
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: #e6f1f7;">
                <h4 class="modal-title"><img src="assets/img/favicon.png" width="40">&nbsp;<strong>Por que preencher esses dados?</strong></h4>
                </div>
                <div class="modal-body">
                <P><strong>Dados de contato:</strong> Com os seus dados, podemos entrar em contato, entender melhor a sua necessidade e lhe oferecer o plano mais adequado.</P> 
                <p><strong>CEP:</strong> A disponibilidade e as condi????es do plano variam conforme o local em que voc?? reside.</p>
                <p><strong>Profiss??o:</strong> Oferecemos planos para categorias profissionais por meio das entidades de classe que os representam.</p>
                </div>
                <div class="modal-footer" style="background: #e6f1f7;">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                </div>
            </div>
            </div>
          </div>
          <!-- modal preenchimento dados iniciais fim --> 
          <div class="div-progressbar">
            <ul id="progressbar">
                <!-- <li class="done" id="account"></li> -->
                <li class="done" id="sigin"></li>
                <li class="done" id="search"></li>
                <li class="active" id="listplans"></li>
                <li class="done" id="dependentes"></li>
                <li class="done" id="personal"></li>
                <li class="done" id="propostas"></li>
                <li class="done" id="finalizado"></li>
                <!--<li class="done" id="user"></li> -->
              </ul>   
          </div> 



        
        <div class="col-12" style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #fff, #fff, #fff); align-items:center;width: 80%;margin-left: 10%">
            <div class="card col-12" style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #fff, #fff, #fff); align-items:center;">
                    <table id="planos" border="0" align="center">
                        <tr>
                            <td valign="top">

                                <div>  
                  
                                    <div id="planos" class="container col-12" align="center">

                                    <br>
                                      <div class="row">

                                      <div style="width: 100%;">  
                                      <center>                                        
                                        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: contents">
                                          
                                            <button class="btn btn-default filter-button" data-tipo="top" data-filter="all"><i class="fa fa-list btn-lg"></i><br>Todos</button>
                                            <div class="btn-group" role="group">
                                              <button id="btnGroupDrop1" type="button" class="btn btn-default filter-button" data-tipo="top-price" data-filter="price" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="fa fa-dollar btn-lg"></i><br>Pre??o
                                              </button>
                                              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" id="orderPriceLow">Menor pre??o</a>
                                                <a class="dropdown-item" id="orderPriceHigh">Maior pre??o</a>
                                              </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                              <button id="btnGroupDrop2" type="button" class="btn btn-default filter-button" data-tipo="top-operadora" data-filter="operadora" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="fa fa-headphones btn-lg"></i><br>Operadora
                                              </button>
                                              <div class="dropdown-menu dropOpe" aria-labelledby="btnGroupDrop2">
                                              </div>
                                            </div>
                                        
                                        </div>
                                        <!-- <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: contents">
                                        
                                            <button class="btn btn-default filter-button" data-tipo="top" data-filter="acomoda156"><i class="fa fa-home btn-lg"></i><br>Apartamento</button>
                                            <button class="btn btn-default filter-button" data-tipo="top" data-filter="acomoda154"><i class="fa fa-wheelchair btn-lg"></i><br>Enfermaria</button>
                                            <button class="btn btn-default filter-button" data-tipo="top" data-filter="copart178"><i class="fa fa-check-square btn-lg"></i><br>Com Coparticipa????o</button>
                                            <button class="btn btn-default filter-button" data-tipo="top" data-filter="copart180"><i class="fa fa-check-square-o btn-lg"></i><br>Sem Coparticipa????o</button>
                                          
                                        </div> -->
                                      </center>
                                      
                                      <br/>
                                      <!-- <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <center>
                                          <button class="btn btn-default filter-button hide" data-tipo="sub" data-parent='["copart178","copart180"]' data-filter="acomoda156">+ Apartamento</button>
                                          <button class="btn btn-default filter-button hide" data-tipo="sub" data-parent='["copart178","copart180"]' data-filter="acomoda154">+ Enfermaria</button>
                                          <button class="btn btn-default filter-button hide" data-tipo="sub" data-parent='["acomoda156","acomoda154"]' data-filter="copart178">+ Com Coparticipa????o</button>
                                          <button class="btn btn-default filter-button hide" data-tipo="sub" data-parent='["acomoda156","acomoda154"]' data-filter="copart180">+ Sem Coparticipa????o</button>
                                        </center>
                                      </div> -->
                                      
                                    </div>

                                      <table align="center" width="100%">
                                      <tr>
                                        <td align="center"><div class="row col-md-12" id="planosToShow" style="/*max-width: 800px;*/"></div></td>
                                      </tr>
                                      </table>
                                    </div>
                                  </div>

                                </div>
<br><br>

                            </td>
                        </tr>
                    </table>

                    <div id="modal_info" style="display:none" class="container ">
                      
                                <form id="msform">       
                                    <fieldset>
                                      <div class="form-card2">
                                        <p class="texto2-plan" >+ INFORMA????ES SOBRE AS ASSIST??NCIAS</p><br>
                                       <p class="texto1-plan" style="text-align: center"><span class="nomePlan"></span> - COD: <span class="ansPlan"></span></p><br>
                                        <p class="texto1-central"></p>

                                        <details id="funeral">
                                          <summary>ASSIST??NCIAS DO FUNERAL?</summary>
                                          <br>
                                          <p><span id="assFuneral" class="assFuneral"></span></p>
                                        </details>
                                        <details id="pet">
                                          <summary>ASSIST??NCIAS DO PLANO PET?</summary>
                                          <br>
                                          <p><span id="assPet" class="assPet"></span></p>
                                        </details>
                                        <details id="residencial">
                                          <summary>ASSIST??NCIAS DO PLANO RESIDENCIAL?</summary>
                                          <br>
                                          <p><span id="assResidencial" class="assResidencial"></span></p>
                                        </details>
                                        <details id="descontos">
                                          <summary>CLUBE DE DESCONTOS?</summary>
                                          <br>
                                          <p><span id="clubeDesconto" class="clubeDesconto"></span></p>
                                        </details>
                                        <details id="farmacias">
                                          <summary>DESCONTO EM FARM??RCIAS?</summary>
                                          <br>
                                          <p><span id="descFarmacia" class="descFarmacia"></span></p>
                                        </details>


                                        <p class="texto1-central">
                                        <p class="texto1-central">
                                          <input type="button" name="previous" class="previous action-button-previous" id="voltaPlano" value="Voltar"/>
                                        </p>      
                                      </div>
                                    </fieldset>
                                  </div>
                                </form>
                      
                    </div>



                      <div id="planos2"  style="display:none" class="container ">
                        <div class=" col-12">
                          <div class="card col-12 mt-12 mb-12" style="background-color:#ffffff; background-image: linear-gradient(#ffffff, #fff, #fff, #fff); align-items:center;">
                            <div>
                              <table height="800">
                              <tr>
                              <td>
                              <div class="container_plan_confirm">  
                                <form id="msform">       
                                  <fieldset>
                                  <div class="form-card">
                                    <p class="texto6-plan" style="text-align: center"><img class="picture-plan" src="assets/img/logo-unimed-natal.png" style="width:100%"></p>
                                  </div>
                                  <div class="form-card2">
                                    <p class="texto2-plan"><strong>R$ <span class="precoPlan"></span></strong></p>
                                    <p class="texto1-plan" style="text-align: center"><span class="nomePlan"></span></p>
                                    <p class="texto1-plan" style="text-align: center">ANS: <span class="ansPlan"></span></p>
                                    <p class="texto1-central"></p>
                                    <p class="texto1-central">
                                    <input type="button" name="previous" class="previous action-button-previous" id="alteraPlano" value="ALTERAR PLANO"/></p>
                                    <input type="button" id="btnE2" name="next" class="next action-button" value="ESCOLHER PLANO" disabled style="width:100%"/>
                                    <input type="button" id="btnCancelaCart" class="previous action-button-previous" value="CANCELAR">
                                  </div>
                                  </fieldset>
                                </div>
                              </form>
                              </div> 
                              </td>
                              </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>


            <div id="particles-1" class="particles"></div>
            
        </div> 
        </div> 
        
    </header>
    
    
    
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
<script src="js/jquery-confirm.min.js"></script>
<script src="assets_new/js/bootstrap.min.js"></script>
<script src="js/select2.min.js"></script>
<script type='text/javascript' src='js/way.js?v=1.21'></script>
</body>

</html>
