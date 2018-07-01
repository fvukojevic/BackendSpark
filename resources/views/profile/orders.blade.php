@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-sm-8 offset-md-2">
      <h1>Moje narudžbe</h1>
      <hr>
      @foreach($orders as $order)
        <div class="panel panel-default">
          <div class="panel-body">
            <ul class="list-group">
              @foreach($order->cart->items as $item)
              <li class="list-group-item">
                {{$item['item']['name']}} | {{$item['qty']}} Units
                <span class="badge" style="float:right">{{$item['price']}} BAM</span>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="panel-footer">
            <strong>Total Price: {{$order->cart->totalPrice}}</strong>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
