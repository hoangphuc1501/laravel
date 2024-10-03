<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Box News</title>
    <meta name="description" content="Box News" />
    <meta name="keywords" content="Box News, News" />

    <meta name="og:title" content="@yield('meta_og_title')" />
    <meta name="og:description" content="@yield('meta_og_description')" />
    <meta name="og:image" content="{{ asset('frontend/asset/images/logo1.png') }}" />
    <meta name="twitter:title" content="@yield('meta_tw_title')" />
    <meta name="twitter:description" content="@yield('meta_tw_description')" />
    <meta name="twitter:image" content="@yield('meta_tw_image')" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.png" type="image/png">
    <link href="{{ asset('frontend/asset/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>

    <style>
        :root {
            --colorPrimary: #7b7b7b;
        }
    </style>
</head>

<body>
    <!-- Header news -->
    @include('frontend.layouts.header')
    <!-- End Header news -->


    @yield('content')

    <!-- Footer news -->
    @include('frontend.layouts.footer')
    <!-- End Footer news -->

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <script type="text/javascript" src="{{ asset('frontend/asset/js/index.bundle.js') }}"></script>
    {{--@include('sweetalert::alert')--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })


        // Add csrf token in ajax request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>



    @stack('content')
</body>

</html>
