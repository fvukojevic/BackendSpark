@extends('layouts.app')

@section('content')
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li><a href="{{ route('articles.index') }}" class="navbar-brand">Svi Artikli</a></li>
                  @foreach($categories as $category)
                    <li><a href="{{route('category.show', ['id' => $category->id])}}" class="navbar-brand">{{$category->name}}</a></li>
                  @endforeach
                </ul>
          </div>
      </div>
  </nav>
  <?php
  $numOfCols = 2;
  $rowCount = 0;
  ?>
  @if(count($articles)>0)
      <div class="row">
    @foreach($articles as $article)
        <div class="col-sm-6">
            <br>
      <div class="card">
          <div class="card-header">
            @if($article->category_id != null)
             <small>Kategorija: <a href="{{route('category.show', ['id' => $article->category->id])}}">{{$article->category->name}}</a></small>
            @endif
             <h3><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{$article->name}}</a></h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <img class="img-responsive" style="max-width:150px; max-height:150px;" src="{{url('/storage/slike')}}/{{$article->slika}}" alt="">
              </div>
              <div class="col-sm-12">
                <h4>{{$article->opis}}</h4>
                <br>
                <small>Datum objave: {{$article->created_at}} autor: {{$article->user->name}}</small>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <p style="float:left;"><strong>Iznos:{{$article->cijena}} BAM</strong></p>
            @if($article->kolicina>0)
            <a href="{{route('product.addToCard', ['id' => $article->id])}}" class="btn btn-success" style="float:right;">Dodaj u Košaricu</a>
            @else
            <h4 style="float:right;">Nestalo Zaliha</h4>
            @endif
          </div>
      </div>
        </div>
          <?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
?>
    @endforeach
      </div>
  @endif

  <div class="text-center">
    {!! $articles->links(); !!}
  </div>

@endsection
