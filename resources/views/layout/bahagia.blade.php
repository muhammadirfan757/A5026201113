<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Muhammad Irfan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"  rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <!-- Custom styles for this template-->
    <link href="{{asset('css/stylenew.css')}}" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Menu</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Pegawai -->
            <li class="nav-item active">
                <a class="nav-link" href="/pegawai">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pegawai</span></a>

                <!-- Nav Item - Absen -->
            <li class="nav-item active">
                <a class="nav-link" href="/absen">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Absen</span></a>

                <!-- Nav Item - Pendapatan -->
            <li class="nav-item active">
                <a class="nav-link" href="/pendapatan">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pendapatan</span></a>

                <!-- Nav Item - Minggu depan -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Minggu depan</span></a>

                <!-- Nav Item - Praktikum -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Praktikum</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

        </ul>
        <!-- End of Sidebar -->


        <ul class="navbar">
            <li class="nav text-center">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">5026201113 - Muhammad Irfan</span>
                        <img class="img-profile rounded-circle" width="50px" src="{{asset('fotoprofile.png')}}">
                </nav>
            </li>

           <div class="container">
            @yield('content')
               </div>
            <!-- Footer -->
            <div class="container" >
                <footer class="sticky-footer bg-white" >
                    <div class="copyright">
                        <div class="text-center">
                            <span class="text-center">Hak Cipta oleh © 5026201113 - Muhammad Irfan</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
        </ul>
    </div>


    <!-- Footer -->

    {{-- <div class="container">
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Hak Cipta oleh 5026201113 - Muhammad Irfan</span>
                    </div>
                </div>
            </footer> --}}

    <!-- End of Footer -->
    </div>
    </div>
    <!-- End of Content Wrapper -->

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
