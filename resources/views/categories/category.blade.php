@extends('layouts.app')

@section('content')
  @if(count($articles)>0)
    @foreach($articles as $article)
      <div class="card">
          <div class="card-header">
             <small><a href="#">{{$article->category->name}}</a></small>
             <h3><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{$article->name}}</a></h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <img style="width:250px; height:150px;" src="{{url('/storage/slike')}}/{{$article->slika}}" alt="">
              </div>
              <div class="col-md-9 col-sm-9">
                <h4>{{$article->opis}}</h4>
                <br>
                <small>Written on: {{$article->created_at}} by: {{$article->user->name}}</small>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <p style="float:left;"><strong>Price:{{$article->cijena}} BAM</strong></p>
            @if($article->kolicina>0)
            <a href="{{route('product.addToCard', ['id' => $article->id])}}" class="btn btn-success" style="float:right;">Dodaj u Košaricu</a>
            @else
            <h4 style="float:right;">Nestalo Zaliha</h4>
            @endif
          </div>
      </div>
    @endforeach
  @endif
@endsection
