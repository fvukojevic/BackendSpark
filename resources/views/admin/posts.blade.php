@extends('admin.layout.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Proizvodi

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li class="active">Proizvodi</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Pregled svih proizvoda u našoj bazi.</h3>
                        </div>
                        <!-- /.box-header -->


                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naslov</th>
                                    <th>Datum Objave</th>
                                    <th>Status</th>
                                    <th>Autor</th>
                                    <th>Upravljanje</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($articles as $article)
                                      <tr>
                                          <td>{{ $article->id }}</td>
                                          <td>{{ $article->name }}</td>
                                          <td>{{ $article->created_at->diffForHumans() }}</td>
                                          <td><span class="label label-success">OBJAVLJENO</span></td>
                                          <td>{{ $article->user->name }}</td>

                                          <td><a href="{{url('admin/post/edit')}}/{{ $article->id }}"><span
                                                          class="label label-warning">UREDI</span></a>
                                              <a href="{{route('articles.destroy', $article->id )}}"><span
                                                          class="label label-danger">OBRIŠI</span></a></td>
                                      </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
