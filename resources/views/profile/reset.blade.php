@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h1>Promijenite lozinku</h1>
    </div>
    <div class="card-body">
      {!! Form::open(['route' => ['profile.newPw', auth()->user()->id] , 'method' => 'POST']) !!}
        <div class="form-group">
          {{Form::label('oldpwd','Old Password')}}
          {{Form::password('oldpwd',['class' => 'form-control'])}}
        </div>
        <div class="form-group">
          {{Form::label('newPassword','New Password')}}
          {{Form::password('newpwd',['class'=>'form-control'])}}
        </div>
    </div>
    <div class="card-footer">
      {{Form::hidden('_method','PUT')}}
      {{Form::submit('Save changes',['class' =>'btn btn-warning'])}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
