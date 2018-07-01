@extends('layouts.app')

@section('content')
<div class="text-center" style="background:url('/webshop/public/storage/slike/shopping.jpg');background-repeat: no-repeat; height:500px;width:100%;background-size:100% 100%;">
  <h1 class="display-4" style="line-height:500%; color:#fff;">WEBSHOP</h1>
  <h3>Dobrodošli u naš online <strong>Webshop</strong></h3>

  @if (Route::has('login'))
      <div class="top-right links">
          @auth
              <a class="btn btn-warning btn-lg" href="/webshop/public/articles">Kreni u kupovinu!</a>
          @else
          <a class="btn btn-success btn-lg" href="{{ route('login') }}" role="button">Login </a>
          <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Register</a>
          @endauth
      </div>
  @endif
</div>
@endsection
