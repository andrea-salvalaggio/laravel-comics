@extends('layouts.main')

@section('head-scripts')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@endsection

@section('main-content')
    <div class="products-bg">
        <div class="jumbo-container">
            <img src="../assets/images/jumbotron.jpg" alt="DC Banner Image">
        </div>
        <div class="title-container">
            <h3>Current Series</h3>
        </div>
        <div class="container d-flex justify-content-center flex-wrap">
            <div class="product-card">
                <div class="img-container">
                    <img src="imgUrl" alt="title">
                </div>
                    <h6 class="mb-0">  title  </h6>
                </div>
            <button class="btn-load">Load More</button>
        </div>
    </div>
@endsection