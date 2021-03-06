@extends('admin.layouts.template')
@section('content')
    <div class="container">
        <div class="card mb-3" style="min-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $image->img_dt_1 }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $products->name }}</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
