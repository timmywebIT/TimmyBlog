<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">

    <meta name="description" content=""/>
    <meta name="keywords" content="bootstrap, bootstrap5"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-multiselect.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-bs4.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('css/flatpickr.min.css')}}">
    @vite(['resources/css/auth.css', 'resources/css/main.css', 'resources/js/main.js'])

    <title>@yield('title')</title>
</head>
<body>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="index.html" class="logo m-0 float-start">TimmyBlog<span class="text-primary">.</span></a>
                    </div>
                    <div class="col-8 text-center">

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="active"><a href="index.html">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-2 text-end">
                        <div>
                            @guest()
                                <a class="text-white" href="{{ route('login') }}">Вход</a>
                                <a class="text-white" href="{{ route('register') }}">Регистрация</a>
                        </div>
                        @endguest()

                        @auth
                            @if ((int) auth()->user()->role === \App\Models\User::ROLE_ADMIN)
                                <a class="text-white" href="{{ route('admin.index') }}">Личный кабинет</a>
                            @else
                                <a class="text-white" style="color: #0d0d0d" href="{{ route('personal.index') }}">Личный
                                    кабинет</a>
                            @endif
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>



<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/tiny-slider.js')}}"></script>
<script src="{{asset('js/flatpickr.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/glightbox.min.js')}}"></script>
<script src="{{asset('js/navbar.js')}}"></script>
<script src="{{asset('js/counter.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#summernote').summernote();
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let multiselect_block = document.querySelectorAll(".multiselect_block");

        multiselect_block.forEach(parent => {
            let label = parent.querySelector(".field_multiselect");
            let select = parent.querySelector(".field_select");
            let text = label.innerHTML;

            select.addEventListener("change", function () {
                let selectedOptions = this.selectedOptions;
                label.innerHTML = "";

                for (let option of selectedOptions) {
                    let button = document.createElement("button");
                    button.type = "button";
                    button.className = "btn_multiselect inline-flex items-center px-3 py-1 m-1 text-sm font-medium bg-blue-100 text-blue-800 rounded-lg hover:bg-blue-200 transition";
                    button.textContent = option.value;

                    button.onclick = () => {
                        option.selected = false;
                        button.remove();
                        if (!select.selectedOptions.length) {
                            label.innerHTML = text;
                        }
                    };

                    label.append(button);
                }
            });
        });
    });
</script>
</body>
</html>
