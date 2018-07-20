@extends('layouts.app')

@section('content')
  <div class="card bg-light">
    <div class="card-header">
        <h1>Edit Profile</h1>
    </div>
    <div class="card-body">
      {!! Form::open(['route' => ['profile.update', auth()->user()->id] , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
          {{Form::label('name','Name')}}
          {{Form::text('name',auth()->user()->name,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
          {{Form::label('email','Email')}}
          {{Form::text('email',auth()->user()->email,['class'=>'form-control'])}}
        </div>
    </div>
    <div class="card-footer">
      {{Form::hidden('_method','PUT')}}
      {{Form::submit('Save changes',['class' =>'btn btn-primary'])}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
