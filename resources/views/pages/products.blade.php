@extends('layouts.main')
@section('content')
    @include('partials.breadcrumbs')
    <!-- Start Product Grids -->
    <section class="product-grids section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <!-- Start offcanvas filter -->
                    <div class="col-12 d-md-none mb-4 mx-2">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#off-canvas-filter" aria-controls="off-canvas-filter">
                            Filter
                        </button>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="off-canvas-filter"
                        aria-labelledby="off-canvas-filterLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="off-canvas-filterLabel">Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#coll-category" aria-expanded="false" aria-controls="coll-category">
                                Kategori
                            </button>
                            <div class="collapse show my-1" id="coll-category">
                                <ul class="list-group">
                                    <li class="list-group-item active">Semua Produk</li>
                                    <li class="list-group-item">Helm Full Face</li>
                                    <li class="list-group-item">Helm Half Face</li>
                                    <li class="list-group-item">Spoiler</li>
                                    <li class="list-group-item">Visor</li>
                                    <li class="list-group-item">Spare Parts</li>
                                    <li class="list-group-item">Lainnya</li>
                                </ul>
                            </div>
                            <div class="offcanvas-body">
                                <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#coll-category" aria-expanded="false" aria-controls="coll-category">
                                    Kategori
                                </button>
                                <div class="collapse my-1" id="coll-category">
                                    <ul class="list-group">
                                        <li class="list-group-item active">Semua Produk</li>
                                        <li class="list-group-item">Helm Full Face</li>
                                        <li class="list-group-item">Helm Half Face</li>
                                        <li class="list-group-item">Spoiler</li>
                                        <li class="list-group-item">Visor</li>
                                        <li class="list-group-item">Spare Parts</li>
                                        <li class="list-group-item">Lainnya</li>
                                    </ul>
                                </div>
                                <div class="my-2"></div>
                                <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#coll-merk-helm" aria-expanded="false" aria-controls="coll-merk-helm">
                                    Merek
                                </button>
                                <div class="collapse my-1" id="coll-merk-helm">
                                    <ul class="list-group">
                                        <li class="list-group-item">KYT</li>
                                        <li class="list-group-item">INK</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End offcanvas filter -->
                    <!-- Start Single Widget -->
                    <div class="single-widget search mb-3 mb-md-0">
                        <h3>Cari Produk</h3>
                        <form action="#">
                            <input type="text" placeholder="Cari...">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Product Sidebar -->
                    <div class="product-sidebar my-md-3 d-none d-md-block">
                        <!-- Start Single Widget -->
                        <div class="single-widget">
                            <h3>Kategori</h3>
                            <ul class="list">
                                <li>
                                    <a href="#" class="text-primary">Semua Produk</a>
                                </li>
                                <li>
                                    <a href="#">Helm Full Face</a>
                                </li>
                                <li>
                                    <a href="#">Helm Half Face</a>
                                </li>
                                <li>
                                    <a href="#">Spoiler</a>
                                </li>
                                <li>
                                    <a href="#">Visor</a>
                                </li>
                                <li>
                                    <a href="#">Spare Parts</a>
                                </li>
                                <li>
                                    <a href="#">Lainnya</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget condition mt-md-3">
                            <h3>Berdasarkan Merek</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                <label class="form-check-label" for="flexCheckDefault11">
                                    KYT
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                <label class="form-check-label" for="flexCheckDefault11">
                                    INK
                                </label>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <!-- End Product Sidebar -->
                </div>
                <div class="col-lg-9 col-12">
                    <div class="product-grids-head">
                        <div class="product-grid-topbar">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="product-sorting">
                                        <label for="sorting">Berdasarkan:</label>
                                        <select class="form-control" id="sorting">
                                            <option>Terlaris</option>
                                            <option>Murah - Mahal</option>
                                            <option>Mahal - Murah</option>
                                        </select>
                                        <h3 class="total-show-product">Showing: <span>1 - 12 items</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-list" role="tabpanel"
                                aria-labelledby="nav-list-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <!-- Start Single Product -->
                                        <div class="single-product">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12 col-4">
                                                    <div class="product-image">
                                                        <img src="/img/kyt-tt-course-plain-mat-black.jpeg" alt="#">
                                                        <div class="button">
                                                            <a href="product-details.html" class="btn">
                                                                <i class="fa-regular fa-cart-shopping"></i></i> Add to Cart
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-8">
                                                    <div class="product-info">
                                                        <span class="category">Helm Full Face</span>
                                                        <h4 class="title">
                                                            <a href="/products/helm/details">KYT TT COURSE PLAIN MATT
                                                                BLACK</a>
                                                        </h4>
                                                        {{-- <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 Review(s)</span></li>
                                                    </ul> --}}
                                                        <div class="price">
                                                            <span>Rp1.700.000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Grids -->
@endsection
