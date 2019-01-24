@extends('admin.layout.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Izgled

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Personalizacija</li>
                <li class="active">Izgled</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="col-md-8">

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
                                <button type="button" class="btn btn-success">SPREMI PROMJENE</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Personolizacija Teme</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Ostalo</a></li>

                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <b>Što možete promjeniti?</b>

                            <p>Čitav izgled glavne početne stranice bez ikakvog diranja u sami kod. Počevši od izgleda,
                                boje, veličine fontova,
                                vrste fontova, dodavanje teksta i još puno stvari. </p>
                            <hr>
                            <div class="form-group">
                                <label>Boja Glavne Pozadine</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Glavna Boja Stranice</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label>Boja Navigacije</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Velicina Teksta Navigacije</label>
                                <select class="form-control">
                                    <option>5px</option>
                                    <option>7px</option>
                                    <option>8px</option>
                                    <option>10px</option>
                                    <option>12px</option>
                                    <option>14px</option>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Boja Podnozja</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Velicina Teksta Podnozja</label>
                                <select class="form-control">
                                    <option>5px</option>
                                    <option>7px</option>
                                    <option>8px</option>
                                    <option>10px</option>
                                    <option>12px</option>
                                    <option>14px</option>
                                </select>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label>Velicina Naslova Objava</label>
                                <select class="form-control">
                                    <option>h1</option>
                                    <option>h2</option>
                                    <option>h3</option>
                                    <option>h4</option>
                                    <option>h5</option>
                                    <option>h6</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Velicina Teksta Objava</label>
                                <select class="form-control">
                                    <option>5px</option>
                                    <option>7px</option>
                                    <option>8px</option>
                                    <option>10px</option>
                                    <option>12px</option>
                                    <option>14px</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <p><label>Prikaz Kategorija u Objavama</label></p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_kategorije" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_kategorije">
                                </label>

                            </div>

                            <div class="form-group">
                                <p><label>Prikaz Tagova u Objavama</label></p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_tag" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_tag">
                                </label>

                            </div>

                        </div>
                        <!-- /.tab-pane -->


                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div class="form-group">
                                <p><label>Dopusti Komentare</label></p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_komentar" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_komentar">
                                </label>

                            </div>
                            <div class="form-group">
                                <p><label>Slajder Upaljen</label></p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_slajd_gl" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_slajd_gl">
                                </label>

                            </div>
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                    <button type="button" class="btn btn-success  pull-right" data-toggle="modal"
                            data-target="#modal-default">
                        SPREMI PROMJENE
                    </button>
                    <button class="btn btn-warning pull-right"> RESETIRAJ</button>
                </div>
                <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection