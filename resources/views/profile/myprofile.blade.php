@extends('layouts.app')

@section('content')
  <div class="card">
      <div class="card-header">
          <h1>Welcome to the profile page of <strong>{{auth()->user()->username}}</strong></h1>
      </div>
      <div class="card-body">
        <br>
        <h3><strong>Name : </strong>{{auth()->user()->name}}</h3>
        <br>
        <h3><strong>Email : </strong>{{auth()->user()->email}}</h3>
        <br>
      </div>
      <div class="card-footer">
        <a href="/webshop/public/profile/{{auth()->user()->id}}/edit" class="btn btn-default">Edit Profile</a>
        <a class="btn btn-warning" href="/webshop/public/profile/reset/{{auth()->user()->id}}/edit">Promjena lozinke</a>
        <a class="btn btn-danger" href="/webshop/public/profile/reset/{{auth()->user()->id}}/edit">Izbriši račun</a>
        <a class="btn btn-success" href="/webshop/public/orders" >Moje narudžbe</a>
      </div>
  </div>
@endsection
