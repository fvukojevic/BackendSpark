@extends('layouts.app')

@section('content')
  @guest
      <div class="jumbotron">
        <h1 style="text-align:center;">Prvo se prijavi</h1>
        <a href="{{ route('login') }}" class="btn btn-primary" style="margin-left:50%;">Login</a>
      </div>
    @else
      <h1 style="margin-top:5%">Napravi novi artikl</h1>
        {{ Form::open(['action' => 'ArticlesController@store', 'method' => "POST", 'enctype' => 'multipart/form-data']) }}
      <div class="form-group">
        {{Form::label('title','Naslov')}}
        {{Form::text('name','',['class' => 'form-control', 'placeholder' =>'Naslov'])}}

        {{Form::label('category_id','Category:')}}
        <select class="form-control" name="category_id">
          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>

        {{Form::label('cijena','Cijena')}}
        {{Form::text('cijena','',['class' => 'form-control', 'placeholder' =>'Cijena'])}}

        {{Form::label('kolicina','Kolicina')}}
        {{Form::text('kolicina','',['class' => 'form-control', 'placeholder' =>'Kolicina'])}}

        {{Form::label('opis','Opis')}}
        {{Form::textarea('opis','',['class' => 'form-control', 'placeholder' =>'Opis'])}}
      </div>
      <div class="form-group">
        {{Form::file('slika')}}
      </div>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        {{ Form::close() }}
    @endguest
@endsection
