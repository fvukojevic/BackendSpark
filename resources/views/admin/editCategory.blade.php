@extends('admin.layout.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="content-header">
            <h1>
                Kategorije

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Objave</li>
                <li class="active">Dodaj Kategoriju</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <form method="POST" action="{{url('/ctg/update/')}}/{{ $category->id }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="input-group margin">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-warning">SPREMI</button>
                                    </div>
                                    <input type="text" id="dodaj_kategoriju" name="name" class="form-control"
                                           value="{{ $category->name }}">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>

            <div class="pull-right">
                <button type="submit" class="btn btn-success">SPREMI SVE</button>

            </div>
        </section>
        <!-- /.content -->


    </div>
@endsection