<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="content" width="device-width,initial-scale=1 ">
    <meta http - equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="{{asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    {{-- <script src="https://unpkg.com/vue-star-rating/dist/star-rating.min.js"></script> --}}
    <title> Tumtuna Ghana - Quality services all year round</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('styles')
</head>

<body>

    <div class="content" id="app">
        @include('includes.header')

        <div class="container-fluid">
            @yield('content')
        </div>

        @include('includes.footer')
    </div>
    <script src="/js/app.js" charset="utf-8"></script>

    <script>
        $(document).ready(function () {
            $('.flash_message').slideDown('slow');
            setTimeout(function () {
                $('.flash_message').slideUp('slow');
            }, 4000);

            $('.profile-icon').click(function () {
                $('.popover-profile').toggleClass('is-visible');
            });

            // $(document).on('click', function (event) {
            //     if ($(event.target).is('.cd-popup-close') || $(event.target).is(document)) {
            //         event.preventDefault();
            //         $(this).removeClass('is-visible');
            //     }
            // });


            // $(document).keyup(function (event) {
            //     if (event.which == '27') {
            //         $('.popover-profile').removeClass('is-visible');
            //     }
            // });


        });




        function readURL(input) {
            if (input.files &&
                input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src',
                        e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#profile-img').change(function () {
            readURL(this);
        });

    </script>
</body>

</html>
