<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Qatra Maroc</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->

    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
@extends('Master_page')
@section('title','Home')
@section('content')
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video autoplay loop muted src="video/video_2023-05-15_11-23-54.mp4" >     </video>
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Qatra Maroc</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Votre Don De Sang Pourrait Sauver La Vie De Quelqu'un !</h1>
                                <a href="/donneur" class="btn btn-danger py-md-3 px-md-5 me-3 animated slideInLeft">L'enregistrement de donneur</a>
                                <a href="/patients" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Besoin de sang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-1">
                                <div class="col-md-6">
                                    <select  class="form-select" >
                                        <option value="3" selected="" class="bi bi-geo-alt-fill">Votre Ville</option>

                                        <option id="searcharea_expanded_fisrt_option" value="1005"> Tanger</option>

                                        <option value="1013"> Agadir</option>

                                        <option value="1017"> Al Hocïema</option>

                                        <option value="1014"> Béni Mellal</option>

                                        <option value="1014"> Casablanca</option>

                                        <option value="1007"> El Jadida</option>

                                        <option value="1018"> Errachidia</option>

                                        <option value="1003"> Fès</option>

                                        <option value="1004"> Kénitra</option>

                                        <option value="1019"> Khénifra</option>

                                        <option value="1001"> Khouribga</option>

                                        <option value="1020"> Larache</option>

                                        <option value="1008"> Marrakech</option>

                                        <option value="1009"> Meknès</option>

                                        <option value="1021"> Nador</option>

                                        <option value="1022"> Ouarzazate</option>

                                        <option value="1010"> Oujda</option>

                                        <option value="1012"> Rabat</option>

                                        <option value="1002"> Safi</option>

                                        <option value="1023"> Settat</option>

                                        <option value="1006"> Salé</option>

                                        <option value="1015"> Tanger</option>

                                        <option value="1016"> Taza</option>

                                        <option value="1011"> Tétouan</option>

                                        <option value="other" style="color: red">Choisir une autre ville...</option>

                                        </select>
                                </div>
                                <div class="col-md-6" >
                                    <select class="form-select"  >
                                        <option selected>Groupe sanguin</option>
                                        <option value="0">A+</option>
                                        <option value="1">A-</option>
                                        <option value="2">B+</option>
                                        <option value="3">B-</option>
                                        <option value="4">O+</option>
                                        <option value="5">O-</option>
                                        <option value="6">AB+</option>
                                        <option value="7">AB-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="/index" class="btn btn-danger">Rechercher</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
        <!-- histoire start -->
        <h2 class="text-danger ml-5%" style="text-align: center;font-size:40px;"> Petite Histoire Sur L'opiration:</h2>
        <div></div>
        <p style="text-align: center;font-size:25px;margin:5%;">Le don de sang est une action altruiste et vitale qui permet de sauver des vies. En donnant son sang, on offre une ressource essentielle aux patients qui en ont besoin pour des raisons médicales, chirurgicales ou lors de situations d'urgence. Chaque don de sang peut contribuer à aider plusieurs personnes, car les différents composants du sang (globules rouges, plaquettes, plasma) peuvent être utilisés individuellement pour traiter différentes affections. Les donneurs de sang jouent un rôle crucial dans le maintien des stocks de sang et dans le soutien aux systèmes de santé. En répondant à l'appel aux dons de sang, chaque personne peut apporter une contribution significative à la santé et au bien-être de la société dans son ensemble.
        </p>
        <!-- histoire End -->

        <!-- heros Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-danger text-uppercase">Meilleur Donatteurs</h6>
                    <h1 class="mb-5">Des Héros De <span class="text-danger text-uppercase">Qatra Maroc</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/img6.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Sara Leah</h5>
                                <small>O+</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Mustafa Omar</h5>
                                <small>AB-</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/img1.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-danger  mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-danger  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Alae Layan</h5>
                                <small>A+</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Abdulrahman Hussein</h5>
                                <small>B-</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- heros End -->


        <!-- contact Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Contacter  <span class="text-danger text-uppercase">Quatra Maroc</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Entrer Votre email">
                                <button type="button" class="btn btn-danger py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
@endsection
</html>
