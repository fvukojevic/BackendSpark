@extends('layouts.app')

@section('content')
 @if(Session::has('cart'))
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3">
        <ul class="list-group">
          @foreach($products as $product)
             <li class="list-group">
              <span class="badge">{{$product['qty']}}</span>
              <strong>{{$product['item']['name']}}</strong>
              <br>
              <small>{{$product['price']}}</small>
              <br>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" name="button" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('article.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a></li>
                  <li><a href="{{ route('article.removeItem', ['id' => $product['item']['id']]) }}">Reduce All</a></li>
                </ul>
              </div>
             </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3">
        <hr>
        <strong>Total: {{$totalPrice}} BAM</strong>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3">
        <a href="{{route('card.checkout')}}"class="btn btn-success"name="button">Kupi</a>
      </div>
    </div>
 @else
 <div class="row">
   <div class="col-sm-6 col-md-6 col-md-offset-3">
     <h2>Košarica je prazna!</h2>
   </div>
 </div>

 @endif
@endsection
