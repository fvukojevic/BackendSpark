@extends('admin.layout.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Korisnici

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li class="active">Korisnici</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Pregled svih korisnika registriranih u našoj bazi.</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class=table table-bordered ta"ble-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Korisnik</th>
                                    <th>Datum Registracije</th>
                                    <th>Uloga</th>
                                    <th>Razlog</th>
                                    <th>Upravljanje</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                        @if($user->role == 'admin')
                                            <td><span class="label label-danger">Administrator</span></td>
                                        @elseif($user->role == 'moderator')
                                            <td><span class="label label-warning">Moderator</span></td>
                                        @else
                                            <td><span class="label label-success">Registriran</span></td>
                                        @endif
                                        <td>{{$user->email}}</td>
                                        <td><a href="{{url('/admin/users/edit/')}}/{{ $user->id }}"><span
                                                        class="label label-warning">UREDI</span></a>
                                        {{ Form::open(['route' => ['profile.destroy', $user->id], 'method' => "POST"]) }}
                                        {{Form::hidden('_method','DELETE')}}
                                        <span><button type="submit" class="label label-danger" name="button">Obriši</button></span>
                                        {{ Form::close() }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
