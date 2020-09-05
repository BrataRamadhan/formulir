<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <style>
        body {

            margin: 0px;
            padding: 0px;
        }

        .navbar {
            float: right
        }

        .navbar a {
            text-decoration: inherit;
            color: white;
        }

        main section {
            height: 100vh;
        }

        #welcome-section {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            background-image: url('img/mugadeta.jpg');
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        #projects {
            padding-bottom: 20px;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #projects h2 {
            margin-bottom: 30px;
        }

        #projects-content {
            margin-top: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 6vw;
            grid-row-gap: 6vh;
            max-width: 900px;
            margin-left: 20vw;
            margin-right: 20vw;
            justify-items: center;
            align-items: center;
        }

        #projects img {
            width: 100%;
            height: 100%;
        }

        #projects-content a {
            display: grid;
            align-items: center;
            justify-items: center;
            text-align: center;
            border-style: solid;
            text-decoration: none;
            color: white;
        }

        #show-all {
            border: solid;
            border-width: 1px;
            border-radius: 15px;
            text-decoration: none;
            padding: 7px;
            padding-left: 15px;
            padding-right: 15px;
            margin-top: 50px;
            text-align: center;
            color: black;
        }

        #contacts {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: black;
            color: white;
        }

        #contacts h2 {
            margin-top: 50px;
            margin-bottom: 0px;
        }

        #contacts-content {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        #text1 {
            background-color: black;
        }

        #search {
            margin-top: 300px;
        }

    </style>
</head>

<body>
    <main>
        <div>
            <section id="welcome-section" class="main-section">
                <nav class="navbar navbar-expand-lg">
                    <a href="#welcome-section" class="nav-link"><strong>About</strong></a>
                    <a href="#projects" class="nav-link"><strong>Berita Terbaru</strong></a>
                    <a href="#contacts" class="nav-link"><strong>Hubungi Kami</strong></a>
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <strong> {{ Auth::user()->name }}</strong> <span class="caret"></span>
                            </a>

                            <div id="text1" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('tampil') }}">Form Survey
                                </a>
                                <a class="dropdown-item" href="{{ route('palindrome') }}">Palindrome
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>
                        @else
                        <a href="{{ route('login') }}"><strong>Login</strong></a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"><strong>Register</strong></a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </nav>
                <nav class="navbar" id="search">
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Search" value="Search"  style="width: 32rem">
                    </form>
                </nav>
        </div>
        <h1>Berita Terbaru</h1>
        <section id="projects" class="main-section">
            <div id="projects-content">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Info Pendaftaran</h5>
                        <p class="card-text">20 agustus 2020 - 21 january 2021</p>
                        <a href="#" class="btn btn-primary">Selanjutnya</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Info Pendaftaran</h5>
                        <p class="card-text">20 agustus 2020 - 21 january 2021</p>
                        <a href="#" class="btn btn-primary">Selanjutnya</a>
                    </div>
                </div>
            </div>
            <a href="#" target="_blank" id="show-all">show all</a>
        </section>

        <section id="contacts" class="main-section">
            <h2>Hubungi Kami</h2>
            <div id="contacts-content">
                <div id="github">
                    <a href="https://github.com/BrataRamadhan/" id="profile-link">
                        <i class="fa fa-github" style="font-size:48px;color:white"></i></a>
                </div>
                <div id="facebook">
                    <a class="btn" href="#">
                        <i class="fa fa-facebook-official" style="font-size:60px;color:blue"></i></a>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</body>

</html>
