@extends('layouts.app')

@section('content')
  @guest
      <div class="jumbotron">
        <h1 style="text-align:center;">Prvo se prijavi</h1>
        <a href="{{ route('login') }}" class="btn btn-primary" style="margin-left:50%;">Login</a>
      </div>
    @else
      <h1 style="margin-top:5%">Uredi artikl</h1>
          {{ Form::open(['route' => ['articles.update', $article->id], 'method' => "POST", 'enctype' =>'multipart/form-data']) }}
      <div class="form-group">
        {{Form::label('title','Naslov')}}
        {{Form::text('name',$article->name,['class' => 'form-control', 'placeholder' =>'Naslov'])}}

        {{Form::label('cijena','Cijena')}}
        {{Form::text('cijena',$article->cijena,['class' => 'form-control', 'placeholder' =>'Cijena'])}}

        {{Form::label('kolicina','Kolicina')}}
        {{Form::text('kolicina',$article->kolicina,['class' => 'form-control', 'placeholder' =>'Kolicina'])}}

        {{Form::label('opis','Opis')}}
        {{Form::textarea('opis',$article->opis,['class' => 'form-control', 'placeholder' =>'Opis'])}}
      </div>
      <div class="form-group">
        {{Form::file('slika')}}
      </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update',['class' => 'btn btn-success'])}}
        {{ Form::close() }}
    @endguest
@endsection
