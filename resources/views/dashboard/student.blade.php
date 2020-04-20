@extends('layouts.app')
@section('content')
@include('layouts.headers.cards')
  
<div class="container mt-3">
    <div class="row">
        <div class="col-12 col-lg-4">
            <div>
                <a href="#">Текущая неделя</a>
                <a href="#">Следующая неделя</a>
            </div>
            <div class="weekdays">
                <a href="#">Пн</a>
                <a href="#">Вт</a>
                <a href="#">Ср</a>
                <a href="#">Чт</a>
                <a href="#">Пт</a>
            </div>
            <div class="lessons">
                <div class="lesson-block">
                    <div class="number">1</div>
                    <div>
                        <span class="title">Математика</span>
                        <span class="gradeclass">5 А класс</span>
                    </div>
                    <div>
                        <span class="cabinet">109</span>
                        <span class="timing">8:00 - 8-:45</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-8"></div>
    </div>        
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush