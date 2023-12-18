<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>List Buku</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
</head>

<body id="page-top">

    @include('header')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container">
                    <!-- Page Heading -->


                    <!-- DataTales Example -->

                    <?php
                    $list = [
                        [
                            "judul" => "Marmut Merah Jambu",
                            "pengarang" => "Raditya DIka",
                            "penerbit" => "Elex Media",
                            "tahun" => "2010",
                            "kategori" => "Komedi",
                            "detail" => "view",
                            "img" => "./img/marmut merah jambu.jpeg",
                        ],
                        [
                            "judul" => "Sistem Operasi",
                            "pengarang" => "Lutpan",
                            "penerbit" => "Lab",
                            "tahun" => "2023",
                            "kategori" => "Pendidikan",
                            "detail" => "view",
                            "img" => "./img/so.jpeg",
                        ],
                        [
                            "judul" => "Tuhan dalam Secangkir Kopi",
                            "pengarang" => "Denny Siregar",
                            "penerbit" => "Noura Books",
                            "tahun" => "1999",
                            "kategori" => "Filosofi",
                            "detail" => "view",
                            "img" => "./img/marmut merah jambu.jpeg",
                        ],
                        [
                            "judul" => " Sherlock Holmes",
                            "pengarang" => "Sir Conanedoil",
                            "penerbit" => "PT Gramedia",
                            "tahun" => "1989",
                            "kategori" => "Detektif",
                            "detail" => "view",
                            "img" => "./img/sherlock holmes.jpeg",
                        ],
                        [
                            "judul" => "Omnicient Reader's Viewpoint",
                            "pengarang" => "SING, Eob",
                            "penerbit" => "Naver Webtoon",
                            "tahun" => "2018",
                            "kategori" => "Fantasy",
                            "detail" => "view",
                            "img" => "./img/omnicient.jpeg",
                        ],
                        [
                            "judul" => "Go Kitchen",
                            "pengarang" => "Restu Utami",
                            "penerbit" => "Kawan Pustaka",
                            "tahun" => " 2018",
                            "kategori" => "Memasak",
                            "detail" => "view",
                            "img" => "./img/go kitchen.jpeg",
                        ],
                        [
                            "judul" => "Siksa Kubur",
                            "pengarang" => " ",
                            "penerbit" => " ",
                            "tahun" => "2000",
                            "kategori" => "Religi",
                            "detail" => "view",
                            "img" => "./img/siksa kubur.jpeg",
                        ],
                        [
                            "judul" => "Sewindu Dekat Bung Karno",
                            "pengarang" => "Bambang Wijarnako",
                            "penerbit" => "PT Gramedia",
                            "tahun" => "1988",
                            "kategori" => "Biografi",
                            "detail" => "view",
                            "img" => "./img/sewindu dekat bung karno.jpeg",
                        ],
                        [
                            "judul" => "Reborn Rich",
                            "pengarang" => "Dojun ",
                            "penerbit" => "Shinigami",
                            "tahun" => "2020",
                            "kategori" => "Fantasi",
                            "detail" => "view",
                            "img" => "./img/reborn rich.jpeg",
                        ],
                        [
                            "judul" => "The Novel Extra ",
                            "pengarang" => "Kim Hajin",
                            "penerbit" => "Shinigami ",
                            "tahun" => "2020",
                            "kategori" => "Fantasi",
                            "detail" => "view",
                            "img" => "./img/the novel extra.jpeg",
                        ],
                        [
                            "judul" => "Negeri 5 Menara",
                            "pengarang" => "Ahmad",
                            "penerbit" => "ISBN ",
                            "tahun" => "2009",
                            "kategori" => "Religi",
                            "detail" => "view",
                            "img" => "./img/negeri 5 menara.jpeg",
                        ],
                        [
                            "judul" => "Sing Song",
                            "pengarang" => "Christina Georgina",
                            "penerbit" => " ",
                            "tahun" => "1872",
                            "kategori" => "Musik",
                            "detail" => "view",
                            "img" => "./img/sing song.jpeg",

                        ],
                        [
                            "judul" => "Naruto",
                            "pengarang" => "Masashi Kishimoto",
                            "penerbit" => "Shonen Jump",
                            "tahun" => "2000",
                            "kategori" => "Fantasi",
                            "detail" => "view",
                            "img" => "./img/naruto shippuden.jpeg",
                        ],
                        [
                            "judul" => "Dracula",
                            "pengarang" => "Bram Stoker",
                            "penerbit" => " ",
                            "tahun" => "1897",
                            "kategori" => "Horor",
                            "detail" => "view",
                            "img" => "./img/dracula.jpeg",
                        ],
                    ] ?>

                    <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                tes
              </h6>
            </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun terbit</th>
                                            <th>Kategori</th>
                                            <th>Detail Buku</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list as $i => $buku) : ?>
                                            <tr>
                                                <td><?php echo $buku['judul'] ?></td>
                                                <td><?php echo $buku['pengarang'] ?></td>
                                                <td><?php echo $buku['penerbit'] ?></td>
                                                <td><?php echo $buku['tahun'] ?></td>
                                                <td><?php echo $buku['kategori'] ?></td>
                                                <td>
                                                    <!-- <a type="button"  data-target="#exampleModalCenter">
                          Launch demo modal
                        </a> -->
                                                    <a data-toggle="modal" data-target="#view<?php echo $i ?>" href="">view</a>
                                                    <div class="modal fade" id="view<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Buku</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <!-- <span aria-hidden="true">&times;</span> -->
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <img class="col-5" src="<?php echo $buku['img'] ?>">
                                                                        <div class="col-7">
                                                                            <h4><b><?php echo $buku['judul'] ?></b></h4>
                                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate voluptatum dicta placeat voluptatem, voluptatibus mollitia reiciendis temporibus, tempore ipsa soluta debitis molestiae officiis laudantium excepturi, culpa quaerat dolores dignissimos ad!</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Perpus Bujed</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
</body>

</html>