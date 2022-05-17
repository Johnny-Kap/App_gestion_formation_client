@extends('layout.admins')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/admin/img/carousel-1.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Meilleurs cours en ligne</h5>
                            <h1 class="display-3 text-white animated slideInDown">La meilleure plateforme d'apprentissage en ligne</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Nous offrons une gamme d'opportunités d'apprentissage - des projets et cours pratiques aux certificats et programmes menant à un diplôme..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/admin/img/carousel-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Meilleurs cours en ligne</h5>
                            <h1 class="display-3 text-white animated slideInDown">Formez-vous en ligne depuis votre domicile</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Nous envisageons un monde où n'importe qui, n'importe où, a le pouvoir de transformer sa vie grâce à l'apprentissage .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">Instructeurs qualifiés</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">Classes en ligne</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-home text-primary mb-4"></i>
                        <h5 class="mb-3">Projets à domicile</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">Bibliotheque de livres</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="/admin/img/about.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Présentation</h6>
                <h1 class="mb-4">Bienvenue dans la plateforme eLEARNING</h1>
                <p class="mb-4">L'apprentissage est la source du progrès humain. Elle a le pouvoir de transformer notre monde de la maladie à la santé, de la pauvreté à la prospérité, du conflit à la paix..</p>
                <p class="mb-4">Il a le pouvoir de transformer nos vies pour nous-mêmes, pour nos familles, pour nos communautés. Peu importe qui nous sommes ou où nous sommes. L'apprentissage nous permet de changer, de grandir et de redéfinir ce qui est possible.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Formateurs qualifiés</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Classes en ligne</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Certificat international</p>
                    </div>
                </div>
                <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection