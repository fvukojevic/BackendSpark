@extends('layouts.app')

@section('content')
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li><a href="/webshop/public/articles" class="navbar-brand">Svi Artikli</a></li>
                  @foreach($categories as $category)
                    <li><a href="/webshop/public/categories/{{$category->id}}" class="navbar-brand">{{$category->name}}</a></li>
                  @endforeach
                </ul>
          </div>
      </div>
  </nav>
  @if(count($articles)>0)
    @foreach($articles as $article)
      <div class="card">
          <div class="card-header">
            @if($article->category_id != null)
             <small>Kategorija: <a href="/webshop/public/categories/{{$article->category->id}}">{{$article->category->name}}</a></small>
            @endif
             <h3><a href="/webshop/public/articles/{{$article->id}}">{{$article->name}}</a></h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <img style="width:250px; height:150px;" src="/webshop/public/storage/slike/{{$article->slika}}" alt="">
              </div>
              <div class="col-md-9 col-sm-9">
                <h4>{{$article->opis}}</h4>
                <br>
                <small>Datum objave: {{$article->created_at}} autor: {{$article->user->name}}</small>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <p style="float:left;"><strong>Iznos:{{$article->cijena}} BAM</strong></p>
            @if($article->kolicina>0)
            <a href="/webshop/public/add-to-card/{{$article->id}}" class="btn btn-success" style="float:right;">Dodaj u Košaricu</a>
            @else
            <h4 style="float:right;">Nestalo Zaliha</h4>
            @endif
          </div>
      </div>
    @endforeach

  @endif

  <div class="text-center">
    {!! $articles->links(); !!}
  </div>

@endsection
