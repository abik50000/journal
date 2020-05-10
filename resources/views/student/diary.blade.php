@extends('layouts.app')
@section('content')


<div id="app">
    <student-diary></student-diary>
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


