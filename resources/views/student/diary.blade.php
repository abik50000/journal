@extends('layouts.app')
@section('content')


<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent mb-3">
                        <div class="row align-items-center">
                            <div class="col col-xl-12 mb-3">
                                <form action="{{ route('student_diary_month') }}" method="post" style="display: -webkit-flex;
                                display: -moz-flex;
                                display: -ms-flex;
                                display: -o-flex;
                                display: flex;">
                                    @csrf
                                    <select name="month" id="" style="border-radius: 0">
                                        <option value="1" @if($this_month == 1) selected="" @endif>Январь </option>
                                        <option value="2" @if($this_month == 2) selected="" @endif>Февраль</option>
                                        <option value="3" @if($this_month == 3) selected="" @endif>Март</option>
                                    </select>
                                    <button class="btn btn-primary" style="border-radius: 0">
                                        Перейти
                                    </button>
                                </form>
                            </div>
                            <div class="col col-xl-12">
                                <div class="_card-body"> 
                                    <div class="table-container">
                                        <table class="table">
                                            <tr>
                                                <th># / День</th>
                                                @foreach($days as $day)
                                                    <th class="type-{{ $day->type }} day-cell">{{ date('d', strtotime($day->day)) }}</th>
                                                @endforeach
                                            </tr>
                                            @foreach($subject_array as $subject)
                                            <tr>
                                                <td>{{ $subject['subject'] }}</td>
                                                
                                                @foreach($subject['marks'] as $day)
                                                    <td class="type-{{ $day['type'] }} mark-cell">{{ $day['mark'] }}</td>
                                                @endforeach
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
var app = new Vue({
    el: '#app',
    data: {
        days: [
            {
                day: '1.04',
                subjects: [
                    mark: '4',
                    subject: 'Математика'
                ],
            }
        ]
    },
    methods: {
    }
});
</script>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush


