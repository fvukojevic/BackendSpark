@extends('admin.layout.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Početna Stranica

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Pocetak</a></li>
                <li class="active">Pocetna</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{ $numofPosts }}</h3>

                            <p>Artikala</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file-o"></i>
                        </div>
                        <a href="{{url('/admin/posts')}}" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ $numofUsers }}</h3>

                            <p>Korisnika Registrirano</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{url('/admin/users')}}" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $numOfCategories }}</h3>

                            <p>Kategorija</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{url('/admin/categories/add')}}" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

        </section>


        <div class="col-md-6" style="margin-top:-30px">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>

                    <h3 class="box-title">Podsjetnik</h3>
                    <form method="POST" action="{{url('/reminder/create')}}">
                        {{ csrf_field() }}
                        <div class="input-group margin">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-warning">Dodaj podsjetnik</button>
                            </div>
                            <input title="podsjetnik" type="text" id="dodaj_podsjetnik" name="name" class="form-control">
                        </div>
                    </form>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="todo-list">
                        @foreach($reminders as $reminder)
                            <li>
                        <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <span class="text">{{ $reminder->name }}</span>
                                <small class="label label-info"><i
                                            class="fa fa-clock-o"></i> {{ $reminder->created_at->diffForHumans() }}
                                </small>
                                <div class="tools">
                                    <a href="{{url('/reminder/edit/')}}/{{ $reminder->id }}"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('/reminder/delete/')}}/{{ $reminder->id }}"> <i class="fa fa-trash-o"></i></a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                    <div class="pull-right inline">
                        {{ $reminders->links() }}
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- ./wrapper -->
@endsection
