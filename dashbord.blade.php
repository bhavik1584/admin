<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="NHD3Qj6vLbDBobmFoMVll6I5z5LF8h8jtNxfsQeo">

    <title>AdminLTE 3 </title>


    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/icheck-bootstrap/icheck-bootstrap.min.css">




    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>


</head>

<body>
    <div class="wrapper">
        @include('layout.header')
        @include('layout.sidebar')
        <div class="content-wrapper">
            @yield('main')
        </div>
    </div>
    {{-- <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script> --}}
    <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"></script>


    <script>
        var demo1 = function() {
            $('#kt_repeater_1').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                    $('.select2').select2();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        }


        $(document).ready(() => {
            demo1();


            $('.select2').select2({

            });



            // $('#ajaxselect2').select2({

               

            //     ajax: {
            //         url: "{{ route('ajax') }}",
            //         processResults: function(data) {
            //             // Transform the response data into Select2 format
            //             var options = data.map(function(item) {
            //                 return {
            //                     id: item.id,
            //                     text: item.name,
                                
            //                 };
            //             });

            //             return {
            //                 results: options
            //             };
            //         }
            //     }
            // });





        });
    </script>

</body>

</html>
