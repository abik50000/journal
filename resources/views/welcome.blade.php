@extends('layouts.app')

@section('content')
    <div class="header">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <img src="/img/welcome.svg" class="welcome-img" alt="">
                        <h1>{!! __('Добро пожаловать в<br>  My Kundelik!') !!}</h1>
                        <a href="/login" class="btn btn-success">ВХОД</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt--10 pb-5">
        <example-component></example-component> 
    </div>
@endsection
