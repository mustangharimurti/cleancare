@php
$currentRouteName = Route::currentRouteName();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageName}}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <header class="header fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between bg-secondary-subtle">
            <div class="col-md-4 gradient-custom text-center text-black" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                {{-- <img style="width: 10px; height: 10px;" class="card-img" src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="img"> --}}
              {{-- <h1>CleanCare</h1> --}}

              <nav class="navbar navbar-light bg-secondary-subtle">
                <a  class="navbar-brand " href="#">

                <div class="row ">
                    <div class="col-sm ">
                        <img src="{{ Vite::asset('resources/images/logo.jpg') }}" width="40" height="40" class="d-inline-block align-top" alt="">
                    </div>
                    <div class="col-sm ">
                        <p class="h3 mt-1 ">CleanCare</p>
                    </div>
                </div>
                </a>
              </nav>
            </div>
            <nav class="navbar navbar-expand-lg navbar-secondary-subtle bg-secondary-subtle">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav justify-content-end me-auto mb-2 mb-lg-0">
                        <li>
                            <a class="nav-item nav-link @if($currentRouteName == 'home') active @endif" href="{{route('home')}}">About</a>
                        </li>
                        <li>
                            <a class="nav-item nav-link @if($currentRouteName == 'service') active @endif" href="{{route('service')}}">Service</a>
                        </li>
                        <li>
                            <a class="nav-item nav-link @if($currentRouteName == 'barang.create') active @endif" href="{{route('barang.create')}}">
                                Book Now
                                <i class="bi bi-cart"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link @if($currentRouteName == 'barang.index') active @endif" href="{{ route('barang.index') }}">{{ __('Admin') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </header>
