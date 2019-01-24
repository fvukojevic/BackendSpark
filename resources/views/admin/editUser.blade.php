@extends('admin.layout.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">


            <h1>
                Uredi Korisnika

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Korisnici</li>
                <li class="active">Uredi Korisnika</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-md-4">

                    <div class="box box-primary">

                        <div class="box-body box-profile">
                            <div style="max-height:200px !important;">
                                @if($user->slika)
                            <img class="profile-user-img img-responsive img-circle"
                                 src="{{url('/storage/slike')}}/{{$user->slika}}" alt="User profile picture" height="150px" width="150px">
                                @else
                                    <img
                                         src="{{url('/resources/assets/img/avatar.jpg')}}"
                                         class="profile-user-img img-responsive img-circle" height="150px" width="150px">
                                    @endif

                            </div>

                            <h3 class="profile-username text-center"> {{ $user->name }}</h3>


                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Ime i Prezime</b> <a class="pull-right">{{ $user->name }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>E-Mail</b> <a class="pull-right">{{ $user->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Lozinka</b> <a class="pull-right">************</a>
                                </li>
                            </ul>


                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 ">
                    <div class="box box-primary">
                        <div class="box-body pad">
                          {!! Form::open(['route' => ['profile.update', $user->id] , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                            <div class="form-group">
                                <label>Ime i Prezime</label>
                                <input type="text" name="name" class="form-control" placeholder="Ime i Prezime " value="{{ $user->name }}">
                            </div>

                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" name="email" class="form-control" placeholder="E-Mail " value="{{ $user->email }}">
                            </div>

                            <div class="form-group">
                                <label>Uloga</label>
                                <select class="form-control" name="role">
                                    <option>Korisnik</option>
                                    <option>Moderator</option>
                                    <option>Administrator</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-default">
                                SPREMI PROMJENE
                            </button>
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Jeste li sigurni?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Ukoliko želite potvrditi radnju kliknite spremi promjene&hellip;</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ZATVORI
                                                </button>
                                                <button type="submit" class="btn btn-success">SPREMI PROMJENE</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                                {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 ">
                    <div class="box box-primary">
                        <div class="box-body pad">
                          {!! Form::open(['route' => ['profile.newPw', $user->id] , 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                            <div class="form-group">
                                  {{Form::label('oldpwd','Old Password')}}
                                  {{Form::password('oldpwd',['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                <label>Nova Lozinka</label>
                                <input type="password" class="form-control" placeholder="Lozinka " name="password">
                            </div>

                            <div class="form-group">
                                <label>Potvrdi Lozinku</label>
                                <input type="password" class="form-control" placeholder="Lozinka " name="password-repeat">
                            </div>
                            <button type="submit" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-default">
                                SPREMI PROMJENE
                            </button>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
@endsection
