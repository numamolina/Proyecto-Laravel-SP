@extends('adminlte::page')

@section('title', 'LISTAR OBRAS SOCIALES')

@section('content_header')
    <h1>LISTAR OBRAS SOCIALES</h1>
@stop

@section('content')
<!-- Main content -->
<div class="card" style="width: 18rem;">
    <img src="./p_plan-verde7973.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">PLAN VERDE</h5>
      <p class="card-text">El mejor plan para toda la familia.</p>
      <a href="#" class="btn btn-primary">Adquirir</a>
    </div>
  </div>

@endsection


@section('footer')
<footer class="text-center bg-body-tertiary">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          data-mdb-ripple-init
          class="btn btn-link btn-floating btn-lg text-body m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a
          data-mdb-ripple-init
          class="btn btn-link btn-floating btn-lg text-body m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a
          data-mdb-ripple-init
          class="btn btn-link btn-floating btn-lg text-body m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a
          data-mdb-ripple-init
          class="btn btn-link btn-floating btn-lg text-body m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a
          data-mdb-ripple-init
          class="btn btn-link btn-floating btn-lg text-body m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-linkedin"></i
        ></a>
        <!-- Github -->
        <a
          data-mdb-ripple-init
          class="btn btn-link btn-floating btn-lg text-body m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-body" href="https://127.0.0.1:8000">LS OBRAS SOCIALES</a>
    </div>
    <!-- Copyright -->
  </footer>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/style.css">
@endsection

