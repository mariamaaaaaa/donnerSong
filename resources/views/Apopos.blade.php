

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>adpitor</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style1.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   @extends('Master_page')
@section('title','Home')
@section('content')
   <body class="main-layout">
      <!-- loader  -->

         <div id="content">            <!-- about -->
            <div id="about"  class="about">
                <h1 style="text-align: center;font-size:50px;">À PROPOS</h1>
                <br><br><br>

               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <div class="about_img">
                           <figure><img src="images/imag1.jpg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="titlepage">
                           <h2 class="text-danger">Bienvenue</h2>
                           <p style="font-size:22px;S">Bienvenue sur le site web de <span style="color:red;font-size:25px;">Qatra Maroc</span> , une plateforme dédiée au don de sang. Notre mission est de faciliter le processus de don de sang au Maroc et de sauver des vies. Voici quelques informations importantes à propos de notre organisation :</p>                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end about -->
            <!-- classified  section -->
            <div class="classified ">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="titlepage">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                              <div class="classified_box">
                                 <span>0<strong class="text-danger">1</strong>.</span>
                              </div>
                           </div>
                           <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                              <div class="classified_box">
                                 <div class="fornt">
                                    <h3> À propos de Qatra Maroc :</h3>
                                    <p> Qatra Maroc est une organisation à but non lucratif basée au Maroc, fondée avec la volonté de répondre aux besoins croissants en don de sang dans le pays. Nous travaillons en étroite collaboration avec les centres de transfusion sanguine et les hôpitaux pour assurer une distribution efficace du sang aux patients qui en ont besoin.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                 <div class="classified_box">
                                    <span>0<strong class="text-danger">2</strong>.</span>
                                 </div>
                              </div>
                              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                 <div class="classified_box">
                                    <div class="fornt">
                                       <h3>Notre objectif :
                                       </h3>
                                       <p>Notre objectif principal est de sensibiliser le public à l'importance du don de sang régulier et de mobiliser les donneurs potentiels. Nous organisons des campagnes de sensibilisation dans différentes régions du Maroc, mettons en place des points de collecte mobiles et facilitons la prise de rendez-vous pour les dons de sang.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                 <div class="classified_box">
                                    <span>0<strong class="text-danger">3</strong>.</span>
                                 </div>
                              </div>
                              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                 <div class="classified_box">
                                    <div class="fornt">
                                       <h3>Comment fonctionne Qatra Maroc </h3>
                                       <p>Sur notre site web, vous pouvez trouver des informations sur le don de sang, les critères d'éligibilité, les avantages et les étapes du processus de don. Vous pouvez également créer un compte personnel où vous pourrez prendre rendez-vous pour un don de sang, consulter vos statistiques de don et recevoir des notifications sur les campagnes de don à venir.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                  <div class="classified_box">
                                     <span>0<strong class="text-danger">4</strong>.</span>
                                  </div>
                               </div>
                               <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                  <div class="classified_box">
                                     <div class="fornt">
                                        <h3>Confidentialité et sécurité :
                                        </h3>
                                        <p>La confidentialité et la sécurité des donneurs de sang sont nos priorités absolues. Toutes les informations personnelles collectées sont traitées de manière confidentielle et conformément aux lois et réglementations en vigueur.</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                              <div class="classified_box">
                                 <span>0<strong class="text-danger">5</strong>.</span>
                              </div>
                           </div>
                           <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                              <div class="classified_box">
                                 <div class="fornt">
                                    <h3>Contactez-nous :
                                    </h3>
                                    <p>Si vous avez des questions, des suggestions ou si vous souhaitez vous impliquer en tant que bénévole, n'hésitez pas à nous contacter via notre formulaire de contact ou par téléphone. Nous sommes là pour vous aider et pour sauver des vies grâce à votre générosité.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end classified  section -->

                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            <br>
            <br>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });

             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });

             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });

             $(".zoom").hover(function() {

                 $(this).addClass('transition');
             }, function() {

                 $(this).removeClass('transition');
             });
         });
      </script>
   </body>
   @endsection
</html>

