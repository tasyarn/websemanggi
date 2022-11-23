@extends('layouts.navbarHome')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">KAMPOENG SEMANGGI</h1>
                                    <p class="fs-4 text-white">Website Resmi Kampung Semanggi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <small class="fs-5 fw-bold">Kampoeng Semanggi</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="img/product-1.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="img/product-3.jpeg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="img/home-1.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Ketahui mengenai sejarah kampung semanggi</h1>
                    <p class="mb-4">Kampung ini dikenal dengan nama kampung semanggi sejak tahun 2016. Branding kampung semanggi dilakukan oleh bapak muslik selaku camat kecamatan benowo. Kampung Semanggi dikenal karena sebagian besar penduduknya terutama ibu-ibu yang berprofesi sebagai penjual semanggi. Sebagian besar penjual semanggi berasal dari Kendung, namun sebelum tahun 2016, banyak orang-orang yang mencari daun semanggi sampai ke daerah Sidoarjo, Mojokerto, Krian, Lamongan, bahkan sampai daerah Kediri hingga Bojonegoro. Kemudian pada tahun 2017, mereka memiliki inisiatif untuk membudidayakan semanggi di lahan kavlingan dan lahan aset kota yang belum dibangun. Mereka juga memanfaatkan lahan-lahan kosong yang ada di belakang rumah sebagai tempat untuk menanam semanggi.
                    </p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="/profile">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Semanggi's Store</p>
                <h1 class="mb-4">Olahan sehat berbahan baku semanggi</h1>
            </div>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="product-item">
                                        <div class="position-relative bg-light overflow-hidden">
                                            <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                        </div>
                                        <div class="text-center p-4">
                                            <a class="d-block h5 mb-2" href="">Cookies</a>
                                            <span class="text-primary me-1">Rp 28.000</span>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="w-50 text-center border-end py-2">
                                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                            </small>
                                            <small class="w-50 text-center py-2">
                                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="product-item">
                                        <div class="position-relative bg-light overflow-hidden">
                                            <img class="img-fluid w-100" src="img/product-2.jpeg" alt="">
                                        </div>
                                        <div class="text-center p-4">
                                            <a class="d-block h5 mb-2" href="">Kue Dahlia</a>
                                            <span class="text-primary me-1">Rp 26.000</span>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="w-50 text-center border-end py-2">
                                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                            </small>
                                            <small class="w-50 text-center py-2">
                                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="product-item">
                                        <div class="position-relative bg-light overflow-hidden">
                                            <img class="img-fluid w-100" src="img/product-3.jpeg" alt="">
                                        </div>
                                        <div class="text-center p-4">
                                            <a class="d-block h5 mb-2" href="">Kastengel Semanggi</a>
                                            <span class="text-primary me-1">Rp 30.000</span>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="w-50 text-center border-end py-2">
                                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                            </small>
                                            <small class="w-50 text-center py-2">
                                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="product-item">
                                        <div class="position-relative bg-light overflow-hidden">
                                            <img class="img-fluid w-100" src="img/product-4.jpeg" alt="">
                                        </div>
                                        <div class="text-center p-4">
                                            <a class="d-block h5 mb-2" href="">Nastar Semanggi</a>
                                            <span class="text-primary me-1">Rp 30.000</span>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="w-50 text-center border-end py-2">
                                                <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                            </small>
                                            <small class="w-50 text-center py-2">
                                                <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <a class="btn btn-primary rounded-pill py-3 px-5" href="/catalog">View Katalog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
