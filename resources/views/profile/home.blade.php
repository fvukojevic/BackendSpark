@extends('layouts.app')

@section('content')
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Artikli</strong>
                    <a style="float:right"class="btn btn-primary"style="text-decoration:none;"href="/webshop/public/articles/create">Unesi artikl</a>
                    <form style="float:right;"class="form-inline my-2 my-lg-0">
                      <input id="myInput" onkeyup="myFunction()" class="form-control mr-sm-2" type="text" placeholder="Pretraga po nazivu" aria-label="Search">
                    </form>
                </div>
                <div class="card-body">
                    @if(count($articles)>0)
                      <table id="myTable" class="table table-stripped">
                        <tr>
                          <th>Naziv</th>
                          <th>Uređivanje</th>
                          <th>Brisanje</th>
                        </tr>
                      @foreach($articles as $article)
                        <tr>
                          <td>{{$article->name}}</td>
                          <td><a href="/webshop/public/articles/{{$article->id}}/edit" class="btn btn-success" style="float:right;">Uredi Artikl</a></td>
                          <td>    {{ Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => "POST"]) }}
                              {{Form::hidden('_method','DELETE')}}
                              {{Form::submit('Obriši artikl',['class' => 'btn btn-danger', 'style' => 'float:right;','onclick' => "if(!confirm('Are you sure delete this record?')){return false;};"])}}
                              {{ Form::close() }}</td>
                        </tr>
                      @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Korisnici</strong>
                </div>
                <div class="card-body">
                    @if(count($users)>0)
                      <table class="table table-stripped">
                        <tr>
                          <th>Ime</th>
                          <th>E-mail</th>
                          <th>Obriši</th>
                        </tr>
                      @foreach($users as $user)
                        <tr>
                          @if($user->role!=='admin')
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{ Form::open(['action' => ['ProfilesController@destroy', $user->id], 'method' => "POST"]) }}
                              {{Form::hidden('_method','DELETE')}}
                              {{Form::submit('Obriši korisnika',['class' => 'btn btn-danger', 'style' => 'float:right;','onclick' => "if(!confirm('Are you sure delete this record?')){return false;};"])}}
                              {{ Form::close() }}</td>
                          @endif
                        </tr>
                      @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Script -->
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
