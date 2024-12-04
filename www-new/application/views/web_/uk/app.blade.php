<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <title>@yield('title')</title>

    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('resources/assets/web/images/fav-icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('resources/assets/web/images/fav-icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('resources/assets/web/images/fav-icons/favicon-16x16.png') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('resources/assets/web/css/bootstrap.min.css') }}">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('resources/assets/web/css/font/css/font-awesome.min.css') }}">
    <!-- Swiper css -->
    <link rel="stylesheet" href="{{ asset('resources/assets/web/css/swiper.min.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('resources/assets/web/css/animate.min.css') }}">
    <!-- Venbox css -->
    <link rel="stylesheet" href="{{ asset('resources/assets/web/css/venobox.css') }}">
    <!-- Rateyo css -->
    <link rel="stylesheet" href="{{ asset('resources/assets/web/css/rateyo.min.css') }}">
    <!-- Flaticon css -->
    <link rel="stylesheet" href="{{ asset('resources/assets/web/css/flaticon.css') }}">
    <!-- Circle css -->
    <link rel="stylesheet" href="{{ asset('resources/assets/web/css/circle.css') }}">
    <!-- Main style css -->
    <link rel="stylesheet" href="{{ asset('resources/assets/web/css/style.css') }}">
    <!-- Select2 plugin -->
    <link href="{{ asset('resources/assets/web/css/select2.min.css') }}" rel="stylesheet" />
</head>

<body>

  <!-- Menu Part Start -->
  @include('layouts.web.partials.header')
  <!-- Menu Part End -->

      @yield('content')
  <!-- footer Part Start -->
  @include('layouts.web.partials.footer')
  <!-- footer Part End -->
