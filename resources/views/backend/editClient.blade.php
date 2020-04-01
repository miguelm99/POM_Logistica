<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>POM_Logística</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="bower_components/admin-lte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('backend.header')

    @include('backend.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Página do Administrador</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><b>Editar do Utilizador</b></h3>

                                <div class="card-body">
                                    <form method="POST" action="{{URL('/editClient/'.Auth()->user()->id ) }}">
                                        @csrf
                                        @method('PUT')
                                        <br>
{{--                                        nome--}}
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"  value="{{Auth()->user()->name }}"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
{{--                                        Email--}}
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" value="{{Auth()->user()->email }}"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
{{--                                        firma--}}
                                        <div class="form-group row">
                                            <label for="firma" class="col-md-4 col-form-label text-md-right">{{ __('Firma') }}</label>

                                            <div class="col-md-6">
                                                <input id="firma" type="text" value="{{Auth()->user()->firma }}" class="form-control @error('firma') is-invalid @enderror" name="firma" value="{{ old('firma') }}" required autocomplete="firma" autofocus>

                                                @error('firma')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>

{{--                                        NIF--}}
                                        <div class="form-group row">
                                            <label for="nif" class="col-md-4 col-form-label text-md-right">{{ __('NIF') }}</label>

                                            <div class="col-md-6">
                                                <input id="nif" type="tel" pattern="[0-9]+$" minlength="9" maxlength="9" value="{{Auth()->user()->nif }}" class="form-control @error('nif') is-invalid @enderror" name="nif" value="{{ old('nif') }}" required autocomplete="nif" autofocus>

                                                @error('nif')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>

{{--                                        Numero de telemovel--}}
                                        <div class="form-group row">
                                            <label for="numTelemovel" class="col-md-4 col-form-label text-md-right">{{ __('Numero de telemovel') }}</label>

                                            <div class="col-md-6">
                                                <input id="numTelemovel" pattern="[0-9]+$" minlength="9" maxlength="9" type="tel" value="{{Auth()->user()->numTelemovel }}" class="form-control @error('numTelemovel') is-invalid @enderror" name="numTelemovel" value="{{ old('numTelemovel') }}" required autocomplete="numTelemovel" autofocus>

                                                @error('numTelemovel')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>






                                        <div class="form-group row mb-0 offset-md-4">
                                            <div class="col-md-7">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Guardar') }}
                                                </button>
                                            </div>

                                            <div class="col-md-4 ">
                                                @if (Route::has('password.request'))
                                                    <a class="genric-btn primary-border circle" href="{{ route('password.request') }}">
                                                        {{ __('Mudar password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>





                            </div>
                        </div>


                    </div>

                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('backend.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="bower_components/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="bower_components/admin-lte/dist/js/adminlte.min.js"></script>
</body>
</html>
