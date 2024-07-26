<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPemuda - Notulensi</title>
    
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app.css')}}">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
<link rel="stylesheet" href="{{asset('dist/assets/css/shared/iconly.css')}}">
<link rel="stylesheet" href="{{asset('dist/assets/css/bootstrap.css')}}">

</head>

<style>
    .sidebar-item.active > a {
        background-color: #007bff; /* Contoh: latar belakang elemen aktif */
        color: white; /* Contoh: warna teks elemen aktif */
    }
</style>

<body>
    <div id="app" class="container-fluid">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            <img src="{{asset('images/logo.png')}}" alt="Logo" srcset="" style="width: 120px; height: auto;">
                        </div>
                    <div class="sidebar-toggler  x">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>

            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-item">
                        <a href="index.html" class='sidebar-link'>
                            <i class="fas fa-solid fa-house"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->is('notulen.index') ? 'active' : '' }}">
                <a href="{{ route('notulen.index') }}" class='sidebar-link'>
                    <i class="fas fa-solid fa-note-sticky"></i>
                    <span>Notulensi</span>
                </a>
            </li>

            <li
                class="sidebar-item">
                <a href="{{route('data.index')}}" class='sidebar-link {{ request()->is('data.index') ? 'active' : '' }}'>
                    <i class="fa-solid fa-list"></i>
                    <span>Data Anggota</span>
                </a>
            </li>
            
            <li class="sidebar-item">
                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                    @csrf
                <button type="submit" class='btn sidebar-link' >
                    <i class="fas fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </button>
                </form>
            </li>
        </button>
        </ul>
    </div>
</div>
        </div>

<div id="main" class="content">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="container">
        <h3>Dashboard</h3>
    </div>

    <img src="{{asset('images/bagan mendiro.png')}}" alt="">

</div>

<script src="{{asset('dist/assets/js/bootstrap.js')}}"></script>
<script src="{{asset('dist/assets/js/app.js')}}"></script>

<!-- Need: Apexcharts -->
{{-- <script src="{{asset('dist/assets/extensions/apexcharts/apexcharts.min.js')}}"></script> --}}
{{-- <script src="{{asset('dist/assets/js/pages/dashboard.js')}}"></script> --}}

</body>

</html>
