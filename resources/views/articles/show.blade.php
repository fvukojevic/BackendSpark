@extends('layouts.app')

@section('content')
<div class="card bg-light">
<div class="card-header">
  <h2>{{$article->name}}</h2>
  <small><a href="{{route('category.show', ['id' => $article->category->id])}}">{{$article->category->name}}</a></small>
</div>
<div class="card-body">
  <div class="row">
      <div class="col-md-3 col-sm-3">
          <img style="width:250px; height:150px;" src="/webshop/public/storage/slike/{{$article->slika}}" alt="">
      </div>
    <div class="col-md-9 col-sm-9">
        <h5>{{$article->opis}}</h5>
        <small>Written on: {{$article->created_at}} by: {{$article->user->name}}</small>
    </div>
  </div>
</div>
<div class="card-footer">
  @guest
    <a href="{{route('product.addToCard', ['id' => $article->id])}}" class="btn btn-success" style="float:left;">Dodaj u košaricu</a>
  @else
    @if($article->user_id == auth()->user()->id)
    <a href="{{ route('articles.edit', ['id' => $article->id]) }}" class="btn btn-primary" style="float:left;">Uredi Artikl</a>
    @if($article->kolicina>0)
    <a href="{{route('product.addToCard', ['id' => $article->id])}}" class="btn btn-success" style="float:left; margin-left:10px;">Dodaj u košaricu</a>
    @else
    <h4 style="float:left;">Nestalo Zaliha</h4>
    @endif
    {{ Form::open(['route' => ['articles.destroy', $article->id], 'method' => "POST"]) }}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Obriši artikl',['class' => 'btn btn-danger', 'style' => 'float:right;'])}}
    {{ Form::close() }}
    @else
      @if($article->kolicina>0)
      <a href="/webshop/public/add-to-card/{{$article->id}}" class="btn btn-success" style="float:left; margin-left:10px;">Dodaj u košaricu</a>
      @else
      <h4 style="float:left;">Nestalo Zaliha</h4>
      @endif
    @endif
  @endguest
</div>
@endsection
