@extends('layouts.app')
@section('content')
  
<div class="cont-p">
    <div class="row">
        <div class="col-12 col-lg-4 spec-col col-p">
            <div class="weekday-blocks">
                <a href="#" class="active">Текущая неделя</a>
                <a href="#">Следующая неделя</a>
            </div>
            <div class="weekdays">
                <a href="#" class="active">Пн</a>
                <a href="#">Вт</a>
                <a href="#">Ср</a>
                <a href="#">Чт</a>
                <a href="#">Пт</a>
            </div>
            <div class="lessons">
                <div class="lesson-block">
                    <div class="number">1</div> 
                    <div class="title-grade">
                        <span class="title">Математика</span>
                        <span class="grade">Асан Алиев</span>
                    </div>
                    <div class="cabinet-timing">
                        <span class="cabinet">109</span>
                        <span class="timing">8:00 - 8:45</span>
                    </div>
                </div>
                <div class="lesson-block">
                    <div class="number">2</div>
                    <div class="title-grade">
                        <span class="title">Казахский язык</span>
                        <span class="grade">Асан Алиев</span>
                    </div>
                    <div class="cabinet-timing">
                        <span class="cabinet">102</span>
                        <span class="timing">9:00 - 9:45</span>
                    </div>
                </div>
                <div class="lesson-block">
                    <div class="number">3</div>
                    <div class="title-grade">
                        <span class="title">География</span>
                        <span class="grade">Асан Алиев</span>
                    </div>
                    <div class="cabinet-timing">
                        <span class="cabinet">125</span>
                        <span class="timing">10:00 - 10:45</span>
                    </div>
                </div>
                <div class="lesson-block">
                    <div class="number">4</div>
                    <div class="title-grade">
                        <span class="title">Физкультура</span>
                        <span class="grade">Асан Алиев</span>
                    </div>
                    <div class="cabinet-timing">
                        <span class="cabinet">119</span>
                        <span class="timing">11:00 - 11:45</span>
                    </div>
                </div>
            </div>
            <student-timetable :urldata="{{ json_encode($url_data) }}"></student-timetable>

        </div>
        <div class="col-12 col-lg-4 col-p">
            
        </div>
        <div class="col-12 col-lg-4 grey-block col-p">
            
        </div>
    </div>        
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush