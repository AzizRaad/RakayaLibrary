<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/flaticon.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/boxicons.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
    <!-- Jquery Ui CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/uploadbookform.css') }}">


    <title>Rakaya Library</title>
</head>

<body>

    @include('frontend.body.header')
    @include('frontend.body.navbar')

    @yield('main')

    @include('frontend.body.footer')


    <!-- Jquery Min JS -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Nice Select Min JS -->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Wow Min JS -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- Jquery Ui JS -->
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
    <!-- Contact Form JS -->
    <script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

</body>

</html>
