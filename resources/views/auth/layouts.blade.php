<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Custom User Registration & Login Tutorial - AllPHPTricks.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">

            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ URL('/') }}">
                        <img src="img/logo-black.svg" alt="Logo" width="115" height="70" />
                    </a>
                </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./katalog-buku">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./list-buku">List Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about-us">About Us</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @yield('content')

            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white sticky-bottom m">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Perpus Bujed</span>
                    </div>
                </div>
            </footer>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>


    <!-- script katalog -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('body').on('click', '.readmore', function(e) {
                e.preventDefault();
                const page = $(this).attr('href');
                const nextpage = parseInt(page) + 1;
                $(this).attr('href', nextpage);
                ajaxLoad(nextpage);
            })

            ajaxLoad();

            function ajaxLoad(page = 1) {
                $.ajax({
                    url: "https://api.itbook.store/1.0/search/sea/" + page,
                    cache: false,
                    method: "GET",
                    success: function(result) {
                        console.log(result);
                        for (var i = 0; i < 9; i++) {
                            $('.katalog').append(`<div class="col-12 col-md-4">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="${result.books[i].image}" class="card-img" alt="..." syle="width:auto height:auto">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title line-clamp">${result.books[i].title}</h5>
                                                <p class="card-text line-clamp">${result.books[i].subtitle}</p>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`)
                        }
                    },
                    error: function() {
                        console.log('error');
                        showToastError('There was a problem submitting your request. Please try again.');
                    }
                });
            }

        })
    </script>
    <!-- end script katalog -->


    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>