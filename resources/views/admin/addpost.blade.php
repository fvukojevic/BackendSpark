@extends('admin.layout.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        @if(Session::has('flash_message'))
            <div class="alert alert-success" style="border-radius: 0px">
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
                Uređivač Proizvoda

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Proizvodi</li>
                <li class="active">Uređivač proizvoda</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
              {{ Form::open(['route' => 'articles.store', 'method' => "POST", 'enctype' => 'multipart/form-data']) }}
                    {{ csrf_field() }}
                    <div class="col-md-10">
                        <div class="box box-primary">
                            <div class="box-header">
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <div class="input-group margin">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning">Naslov</button>
                                        </div>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>

                                    <div class="input-group margin">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning">Kategorija</button>
                                        </div>
                                        <select class="form-control" name="category_id">
                                          @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>

                                    <div class="input-group margin">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning">Cijena</button>
                                        </div>
                                        <input type="text" id="name" name="cijena" class="form-control">
                                    </div>
                                    <div class="input-group margin">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning">Količina</button>
                                        </div>
                                        <input type="text" id="name" name="kolicina" class="form-control">
                                    </div>
                                    <div class="input-group margin">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning">Slika</button>
                                        </div>
                                        <span class="btn btn-default btn-file">
                                              <i class="fa fa-plus-circle "></i><span>Dodaj istaknutu sliku</span></a>
                                              <input type="file" name="post_thumbnail" id="post_thumbnail">{{Form::file('slika')}}</input>
                                        </span>
                                    </div>

                                    <textarea id="editor1" name="opis" rows="10" cols="80">
                                            Tekst artikla...
                                    </textarea>
                                    <div class="form-group">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-success">POHRANI I OBJAVI</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col-->
                    </div>
                    <div class="col-md-2">

                    </div>
                    {{ Form::close() }}
                <!-- ./row -->
            </div>
        </section>

        <!-- Main content -->

    </div>

@endsection
