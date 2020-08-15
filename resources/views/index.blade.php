@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row my-2">
                <div class="col-6">
                    <h1 class="ml-3 text-dark">List Pertanyaan</h1>
                </div><!-- /.col -->
                <div class="col-6 text-right">
                    <a href="/form" class="btn btn-primary">Ajukan Pertanyaan</a>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">

                    <!-- ini bagian looping list semua pertanyaan -->
                    <div class="card">
                        <div class="card-body">
                            <a href="/detail">
                                <h5 class="text-blue">Can Tableau dynamically render containers based on distinct values?</h5>
                            </a>

                            <p class="card-text text-justify">
                            I want to create a report on some indicators for over 1k cities using the same template. For each indicator, the client wants a small box with explanatory text and nice formatting but not all indicators are applicable to all cities, so I would like to only display the containers that apply to the particular city being displayed.</p>
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-inline">
                                        <!-- ini bagian looping list tag -->
                                        <span class="badge badge-info px-2 py-2 mr-1 mt-1">PHP</span>
                                        <!-- ini bagian end looping list tag -->
                                    </div>

                                    <div class="user-block mt-4">
                                        <img class="img-circle img-bordered-sm"
                                        src="{{ asset('adminlte/images/1.png') }}" alt="user image">

                                        <!-- ini bagian nama user -->
                                        <span class="username">
                                            Jonathan Burke Jr.
                                        </span>

                                        <!-- ini bagian total reputasi user -->
                                        <span class="description">1 reputasi</span>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row justify-content-center mx-2">
                                        <div class="form-group text-center mr-5 mt-3">

                                            <!-- ini bagian total vote -->
                                            <label class="mb-n2">
                                                <h2>0</h2>
                                            </label>
                                            <p>votes</p>


                                        </div>
                                        <div class="form-group text-center mt-3">

                                            <!-- ini bagian total jawaban -->
                                            <label class="mb-n2">
                                                <h2>0</h2>
                                            </label>
                                            <p>answers</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ini bagian end looping list pertanyaan -->



                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-dark">Pertanyaan Saya</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group">


                                <!-- ini bagian looping list pertanyaan milik user yang login -->
                                <li class="list-group-item"><a href="/detail">Maya Python: Button always at the center
                                of the window</a></li>
                                <!-- ini bagian end looping list pertanyaan -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection
