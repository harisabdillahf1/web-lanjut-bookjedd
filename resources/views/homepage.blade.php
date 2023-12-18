@extends('auth.layouts')

@section('content')

<div class="container">

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->

        <div class="col-lg-12 mb-4">
            <!-- <div class="card shadow mb-4"> -->
            <div class="card-header py-1"></div>
            <div class="card-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex align-items-center text-left">
                            <div>

                                <form method="post" action="">
                                    Search: <input type="text" name="s">
                                    <input type="submit">
                                </form>

                                <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                    header("Location: search?s=" . $_POST['s']);
                                }
                                ?>

                                <h1 class="m-0 font-weight-bold text-primary" style="font-size: 50px">
                                    Illustrations
                                </h1>
                                <p syle="font-size: 22px">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Voluptatibus voluptatum fuga corporis nobis
                                    optio voluptatem! Vero deleniti tenetur consectetur
                                    excepturi nobis eos ipsa ullam rerum magnam! Odit at
                                    neque repellendus.
                                </p>
                                <a href="./katalog">Get Start &rarr;</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 30rem" src="img/undraw_posting_photo.svg" alt="..." />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6"></div>
                </div>
            </div>
            <!-- </div> -->

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Development Approach
                    </h6>
                </div>
                <div class="card-body">
                    <p>
                        SB Admin 2 makes extensive use of Bootstrap 4 utility
                        classes in order to reduce CSS bloat and poor page
                        performance. Custom CSS classes are used to create custom
                        components and custom utility classes.
                    </p>
                    <p class="mb-0">
                        Before working with this theme, you should become familiar
                        with the Bootstrap framework, especially the utility
                        classes.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7"></div>

        <!-- Pie Chart -->
    </div>
</div>

@endsection