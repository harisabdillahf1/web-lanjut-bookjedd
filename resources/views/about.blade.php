@extends('auth.layouts')

@section('content')

<div class="container">

    <!-- Content Row -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tentang BOOKJEDD</h1>
        <p class="mb-4">Chart.js is a third party plugin that is used to generate the charts in this theme.
            The charts below have been customized - for further customization options, please visit the <a target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js
                documentation</a>.</p>

        <!-- Content Row -->
        <div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
            <div class="carousel-inner shadow">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/us-b.png" alt="First slide">
                </div>
                <div class="carousel-item shadow">
                    <img class="d-block w-100" src="./img/us-w.png" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="card mb-4" style="max-width: 540px;">
            <img src="./img/profile.jpg" class="card-img-top">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

    </div>
</div>

@endsection