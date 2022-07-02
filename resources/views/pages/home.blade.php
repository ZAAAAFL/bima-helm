@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-12">

    </div>
</div>

<!-- Start Hero Area -->
<section class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2">
                <!-- Start Banner -->
                <div class="single-banner right">
                    <img src="https://via.placeholder.com/900x200" class="img-fluid w-100" alt="">
                </div>
                <!-- End Banner -->
            </div>
            <div class="col-lg-8 col-12 custom-padding-right">
                <div class="slider-head">
                    <!-- Start Hero Slider -->
                    <div class="hero-slider">
                        <!-- Start Single Slider -->
                        <div class="single-slider"
                            style="background-image: url(https://via.placeholder.com/800x400);">
                            <div class="content">
                                <h2>
                                    KYT
                                </h2>
                                <h3><span>Harga</span> Rp.600.000,00</h3>
                                <div class="button">
                                    <a href="product-grids.html" class="btn">Beli</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Slider -->
                    </div>
                    <!-- End Hero Slider -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                        <!-- Start Small Banner -->
                        <div class="hero-small-banner d-flex align-items-end" style="background-image: url('https://via.placeholder.com/370x250');">
                            <div class="flex-fill">
                                <button class="btn btn-primary w-100" type="button">Aksesoris</button>
                            </div>
                        </div>
                        <!-- End Small Banner -->
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 mt-2 mt-md-0 mt-lg-2">
                        <!-- Start Small Banner -->
                        <div class="hero-small-banner d-flex align-items-end" style="background-image: url('https://via.placeholder.com/370x250');">
                            <div class="flex-fill">
                                <button class="btn btn-primary w-100" type="button">Spare Parts</button>
                            </div>
                        </div>
                        <!-- End Small Banner -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->

<!-- Start Featured Categories Area -->
<section class="featured-categories section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Kategori Helm</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3 col-6">
                <div class="card">
                    <div class="images card-img-top">
                        <img src="https://via.placeholder.com/200x180" alt="#">
                    </div>
                    <div class="card-body">
                        <p class="card-text fs-5 text-center">Full Face</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="card">
                    <div class="images card-img-top">
                        <img src="https://via.placeholder.com/200x180" alt="#">
                    </div>
                    <div class="card-body">
                        <p class="card-text fs-5 text-center">Half Face</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mt-3 mt-md-0">
                <div class="card">
                    <div class="images card-img-top">
                        <img src="https://via.placeholder.com/200x180" alt="#">
                    </div>
                    <div class="card-body">
                        <p class="card-text fs-5 text-center">Helm Anak</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->

<!-- Start Trending Product Area -->
<section class="topsell-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Produk Top Seller</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mb-1 mb-md-0">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="tabs-carousel nav-link active" href="#helm-topsell" data-bs-toggle="tab">Helm</a></li>
                    <li class="nav-item"><a class="tabs-carousel nav-link" href="#aksesoris-topsell" data-bs-toggle="tab">Aksessoris</a></li>
                    <li class="nav-item"><a class="tabs-carousel nav-link" href="#spareparts-topsell" data-bs-toggle="tab">Spare Parts</a></li>
                </ul>
            </div>
            <div class="col-4 text-end">
                <a href="#carousel-helm-topsell" class="btn-carousel btn btn-primary mb-3 ms-1" role="button" data-bs-slide="prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <a href="#carousel-helm-topsell" class="btn-carousel btn btn-primary mb-3" role="button" data-bs-slide="next">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div class="tab-content">
                    <div id="helm-topsell" class="carousel-tab tab-pane fade-in active">
                        <div class="carousel slide" id="carousel-helm-topsell" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">KYT TT Course</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="aksesoris-topsell" class="carousel-tab tab-pane fade-in">
                        <div class="carousel slide" id="carousel-aksesoris-topsell" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item carousel-content active">
                                    <div class="row">
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Spoiler</div>
                                                    <p class="card-text">Rp.700.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="spareparts-topsell" class="carousel-tab tab-pane fade-in">
                        <div class="carousel slide" id="carousel-spareparts-topsell" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item carousel-content active">
                                    <div class="row">
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 mb-2">
                                            <div class="card">
                                                <img src="https://via.placeholder.com/200x200" alt="" class="img-fluid">
                                                <div class="card-body">
                                                    <div class="text-dark card-title">Visor</div>
                                                    <p class="card-text">Rp.100.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Trending Product Area -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Kami Juga Tersedia di</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 d-flex justify-content-end align-items-center">
                <a href="https://shopee.co.id/bimahelm">
                    <img src="/img/icons/shopee.png" class="img-fluid" alt="shopee">
                </a>
            </div>
            <div class="col-3 d-flex justify-content-center align-items-center">
                <a href="https://www.bukalapak.com/bimahelm">
                    <img src="/img/icons/bukalapak.png" class="img-fluid" alt="bukalapak">
                </a>
            </div>
            <div class="col-3 d-flex justify-content-start align-items-center">
                <a href="https://www.tokopedia.com/bimahelm">
                    <img src="/img/icons/tokped.png" class="img-fluid" alt="tokped">
                </a>
            </div>
        </div>
    </div>
</section>

@endsection