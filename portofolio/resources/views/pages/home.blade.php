@extends('layout.index')
@section('title', 'Homepage')
@section('content')
<!-- ======= Header ======= -->
<header id="header">
    <div class="container">
      @include('components.homepage')
      @include('layout.navbar')
      @include('components.social-links')
    </div>
</header><!-- End Header -->
      @include('components.portofolio')
      @include('components.contact-us')
@endsection
