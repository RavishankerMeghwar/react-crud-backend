<!DOCTYPE html>
<html lang="en" id="demo">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <link rel="icon" href="../assets/img/favicon_io/favicon-32x32.png" type="image/x-icon" />

    <!-- Title -->
    <title>Arcadian&nbsp;Coverage</title>

    <!-- Bootstrap css-->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="../assets/plugins/web-fonts/icons.css" rel="stylesheet" />
    <link href="../assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/plugins/web-fonts/plugin.css" rel="stylesheet" />

    <!-- Style css-->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!-- Select2 css-->
    <link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" />

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="../assets/plugins/multipleselect/multiple-select.css" />

</head>


<body class="ltr main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('./assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->


    <!-- Page -->
    <div class="page">

        @include('admin.layout.header')
        <br />
        <!-- Main Content-->
        <div class="main-content side-content pt-0">

            <div class="main-container container-fluid">
                <div class="inner-body">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- End Main Content-->

        @include('admin.layout.footer')


    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ asset('./assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('./assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Internal Chart.Bundle js-->
    <script src="{{ asset('./assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Peity js-->
    <script src="{{ asset('./assets/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('./assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('./assets/js/select2.js') }}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('./assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Sidemenu js -->
    <script src="{{ asset('./assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('./assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Internal Morris js -->
    <script src="{{ asset('./assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/morris.js/morris.min.js') }}"></script>

    <!-- Circle Progress js-->
    <script src="{{ asset('./assets/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('./assets/js/chart-circle.js') }}"></script>

    <!-- Internal Dashboard js-->
    <script src="{{ asset('./assets/js/index.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('./assets/js/themeColors.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('./assets/js/sticky.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('./assets/js/custom.js') }}"></script>

    <!-- Internal Data Table js -->
    
    <script src="{{ asset('./assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('./assets/js/table-data.js') }}"></script>
    <script src="{{ asset('./assets/js/select2.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"  />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script>

    <!-- Internal Flot Chart js-->
    <script src="{{ asset('./assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('./assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('./assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('./assets/js/chart.flot.js') }}"></script>

    <!-- Internal Chartjs charts js-->
    <script src="{{ asset('./assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('./assets/js/chart.chartjs.js') }}"></script>


    @yield('js')

    <script>
        @if (session('success'))
            toastr.options = {
                "closeButton": true,
            }
            toastr.success("{{ session('success') }}");
        @endif
        @if (session('error'))
            toastr.options = {
                "closeButton": true,
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if ($errors->any())
            toastr.options = {
                "closeButton": true,
            }

            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif

        function confirmDelete(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {

                    window.location.href = url;
                }
            });
        }
    </script>

</body>

</html>
