@extends('layouts.app')

@section('content')
  <div class="row">
      <div class="col-sm-6 col-md-4 offset-md-4 offset-sm-3">
        <h1>Narudžba</h1>
        <h4>Vaša ukupna cijena: {{$total}} BAM</h4>
        {{ Form::open(['action' => 'ArticlesController@storeOrder', 'method' => "POST", 'id' => 'checkout-form']) }}
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              {{Form::label('ime','Ime')}}
              {{Form::text('name','',['class' => 'form-control', 'id'=>'name'])}}
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              {{Form::label('adresa','Adresa')}}
              {{Form::text('address','',['class' => 'form-control', 'id'=>'address'])}}
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              {{Form::label('brojKartice','Broj kreditne kartice')}}
              {{Form::text('card_number','',['class' => 'form-control', 'id'=>'card_Number'])}}
            </div>
          </div>
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  {{Form::label('istekMJKartice','Mjesec Isteka Kartice')}}
                  {{Form::text('expiration_month','',['class' => 'form-control', 'id'=>'expiration_month'])}}
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  {{Form::label('istekKartice','Godina Isteka Kartice')}}
                  {{Form::text('expiration_year','',['class' => 'form-control', 'id'=>'expiration_year'])}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              {{Form::label('CVC','CVC')}}
              {{Form::text('CVC','',['class' => 'form-control', 'id'=>'CVC'])}}
            </div>
          </div>
        </div>
        {{Form::submit('Naruči',['class' => 'btn btn-primary'])}}
        {{ Form::close() }}
      </div>
  </div>
@endsection
