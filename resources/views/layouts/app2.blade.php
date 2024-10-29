<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ 'مکطس' }}</title>

    {{-- CSS LINKS   --}}
        <!-- Include Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- Include Bootstrap v4.5.2 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Include Select 2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@600&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Amiri Quran' rel='stylesheet'>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Custom Styling -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- CSS LINKS END --}}

    {{-- JS LINKS   --}}
        <!-- JQUERY JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Select2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <!-- BootStrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/vue-router@4"></script>
    {{-- JS LINKS END   --}}
    <style>
    body {
        background-color: white !important;
    }
    /* Loader CSS */
    .loader {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999; /* Ensure the loader is on top of all content */
    }

    .spinner {
        border: 8px solid rgba(0, 0, 0, 0.1);
        border-left: 8px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .card {
        color:white !important;
    }
    .card-header{
        background-color: black  !important;
    }
    .card-body{
        background-color: #ffc100  !important;
    }
    .logo-img {
        width: 117px;
    }

    .shadow-sm {
        box-shadow: unset !important;
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgb(0 0 0) !important;
    }

    .card-body a {
        padding: 8px 8px 8px 0px;
        font-family: 'Righteous', cursive;
        text-decoration: none;
        font-size: 17px;
        color: black;
        display: block;
        transition: 0.3s;
    }
    .card-body a:hover{
  color: #b80000 !important;
}
.card-body ul {
    list-style-type: none;

}
@keyframes l3 {
  to { transform: rotate(1turn); }
}
    </style>
</head>

<body>
    <div id="app2">
        <!-- Loader HTML -->
        <div id="loader" class="loader" style="display:none;">
            <div class="spinner"></div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/assets/images/logo.png" class="logo-img" alt="logo">
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(auth()->check())
                            <li class="nav-item dropdown">
                                @if(!empty(auth()->user()) && auth()->user()->isMember())
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ auth()->user()->userable->name }}
                                    </a>
                                @else
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ auth()->user()->userable->name }}
                                    </a>
                                @endif

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
@yield('scripts')
</body>

</html>